<?php

namespace App\Http\Controllers;

use App\Models\part;
use App\Models\order;
use App\Models\client;
use Illuminate\Support\Facades\DB;

class PartsController extends Controller
{
    public function parts() {
        //session()->forget('cart');
        $supplierData = client::where('position', '=', 'supplier') -> get();
        return view('parts.parts', ['supplierData' => $supplierData]);
    }

    public function searchParts() {
        if(request('name') != null) {
            $searchResults = part::where('name', '=', request('name')) -> get();
            return view('parts.searchResults', ['searchResults' => $searchResults, 'searchTerm' => request('name')]); // null is handled in blade
        }

        return redirect()->action([PartsController::class, 'parts']); // failsafe
    }

    public function addPartToComparison($id) {
        $part = part::where('part_id', '=', $id)->get();

        $comparisons = session()->get('comparisons');
        if(!$comparisons) {
            session()->put('comparisons', []); // this is retarded but i need to finish this today
        }

        session()->push('comparisons', $part);

        return redirect()->back()->with('success', 'Pridėta prie palyginimo.');
    }

    public function addPartToCartConfirmation($id) {
        $part = part::where('part_id', '=', $id)->get();
        return view('parts.cartConfirm', ['part' => $part]);
    }

    public function addPartToCart() {
        $part = part::where('part_id', '=', request('part_id'))->get();

        $maxAmount = $part[0] -> amount;

        request()->validate([
            'myAmount' => "required|numeric|lte:$maxAmount"
        ]);

        $cart = session()->get('cart');
        if(!$cart) {
            session()->put('cart', []); // this is retarded but i need to finish this today
        }

        $part[0] -> amount = request('myAmount');
        $part[0] -> price = request('myAmount') * ($part[0] -> price); // price multiplied by my amount

        session()->push('cart', $part[0]);

        return redirect()->action([PartsController::class, 'parts'])->with('success', 'Prekė pridėta į krepšelį!');
    }

    public function wipeCart() {
        session()->forget('cart');
        return redirect('/orders')->with('success', 'Krepšelis pašalintas.');
    }

    public function showComparison() {
        $comparisons = session()->get('comparisons');
        session()->forget('comparisons');
        return view('parts.comparisons', ['comparisons' => $comparisons]);
    }

    public function orders() {
        $cart = session()->get('cart');
        $orderData = order::where('fk_clientid', '=', session('client_id'))->get();
        return view('parts.orders', ['cart' => $cart, 'orderData' => $orderData]);
    }

    public function confirmOrder() {
        return view('parts.orderConfirm');
    }

    public function addOrder() {
        request()->validate([
            'address' => 'required|max:254'
        ]);

        $parts = session()->get('cart');

        $order = new order();
        $order -> status = 'submitted';
        $order -> address = request('address');
        $order -> fk_clientid = session('client_id');
        $order -> save();

        $order = order::latest('order_id')->first();

        foreach($parts as $part) {
            $order->parts()->attach($part->part_id, ['amount' => $part->amount, 'price' => $part->price]);
        }

        session()->forget('cart');

        return redirect('/orders');
    }

    public function showOrderEditor($id) {
        //$order = order::where('order_id', '=', $id)->get();
        $order = order::find($id);
        return view('parts.orderEditor', ['order' => $order]);
    }

    public function editOrder() {
    }

    public function deleteOrder($id) {
        $order = order::find($id);
        $order -> parts() -> detach();
        $order -> delete();
        return redirect('/orders');
    }

    public function sell() {
        $parts = part::where('fk_client_id', '=', session('client_id'))->get();
        return view('parts.sell', ['parts' => $parts]);
    }

    public function addPart() {
        request()->validate([
            'manufacturer' => 'required|max:254',
            'model' => 'required|max:254',
            'price' => 'required|numeric|max:254',
            'name' => 'nullable|max:254',
            'amount' => 'nullable|numeric|max:254|gte:0',
            'delivery_date' => 'required|date|after_or_equal:now'
        ]);

        $part = new part();
        $part -> manufacturer = request('manufacturer');
        $part -> model = request('model');
        $part -> price = request('price');
        $part -> name = request('name');
        $part -> amount = request('amount');
        $part -> delivery_date = request('delivery_date');
        $part -> fk_client_id = session('client_id');
        $part -> save();

        return redirect('/sell');
    }

    public function deletePart($id) {
        part::where('part_id', '=', $id)->delete();
        return redirect('/sell');
    }

    public function users() {
        $clients = client::all();
        return view('admin.users', ['clients' => $clients]);
    }

    public function showUserEditor($id) {
        $client = client::where('client_id', '=', $id)->get();
        return view('admin.userEditor', ['client' => $client]);
    }

    public function editUser() {
        $client = client::where('client_id', '=', request('client_id'));
        $client -> update([
            'position' => request('position')
        ]);

        return redirect('/users');
    }

    public function stats() {
        $orders = order::all();
        $uniqueOrderCount = 0;
        $orderCount = 0;
        $totalProfit = 0;
        foreach($orders as $order) {
            foreach($order -> parts as $part) {
                $orderCount += $part -> pivot -> amount;
                $uniqueOrderCount++;
                $totalProfit += $part -> pivot -> price;
            }
        }

        return view('admin.stats', ['orders' => $orders, 'uniqueOrderCount' => $uniqueOrderCount, 'orderCount' => $orderCount, 'totalProfit' => $totalProfit]);
    }
}
