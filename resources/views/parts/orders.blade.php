@extends('layout.layout')

@section('content')
    <h2>Krepšelis</h2>
    @if($cart)
        <table class="table">
            <thead>
            <tr>
                <th>Prekės ID</th>
                <th>Tiekėjas</th>
                <th>Gamintojas</th>
                <th>Modelis</th>
                <th>Pavadinimas</th>
                <th>Kaina</th>
                <th>Kiekis</th>
                <th>Pristatymas iki</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cart as $part)
                <tr>
                    <td>{{ $part -> part_id }}</td>
                    <td><b>{{ $part -> clients -> title }}</b></td>
                    <td>{{ $part -> manufacturer }}</td>
                    <td>{{ $part -> model }}</td>
                    <td>{{ $part-> name }}</td>
                    <td>{{ $part -> price }} €</td>
                    <td>{{ $part -> amount }}</td>
                    <td>{{ $part -> delivery_date }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <h2>Veiksmai</h2>
        <section class="h-100" style="background-color: #2e7f3b">
            <div class="container w-25 h-50 py-1">
                <div class="row">
                    <div class="col">
                        <a href="/orders/orderConfirm"><label>Pradėti užsakymą</label>
                        <i class="fa-solid fa-cart-shopping"></i></a>
                    </div>
                    <div class="col">
                        <a href="/orders/wipeCart"><label>Išmesti prekes</label>
                        <i class="fa-solid fa-x"></i></a>
                    </div>
                </div>
            </div>
        </section>
    @else
        <section class="h-100" style="background-color: rgb(58, 105, 107)">
            <h3>Jūsų krepšelis tuščias.</h3>
        </section>
    @endif

    <h2>Aktyvūs užsakymai</h2>
    @if(count($orderData))
        <table class="table">
            <thead>
            <tr>
                <th>Užsakymo ID</th>
                <th>Statusas</th>
                <th>Adresas</th>
                <th>Užsakytojas</th>
                <th>Prekės</th>
                <th>Veiksmai</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orderData as $order)
                <tr>
                    <td>{{ $order -> order_id }}</td>
                    @if($order -> status == 'submitted')
                        <td>Pateiktas</td>
                    @elseif($order -> status == 'accepted')
                        <td>Priimtas</td>
                    @elseif($order -> status == 'complete')
                        <td>Įvykdytas</td>
                    @endif
                    <td>{{ $order -> address }}</td>
                    <td>{{ session('title') }}</td>
                    <td>
                        @foreach($order -> parts as $part)
                            <b>{{ $part -> name }}</b>, <b>Kiekis:</b> {{ $part -> pivot -> amount }}, <b>Kaina:</b> {{ $part -> pivot -> price }} €, Pristatymo data: {{ $part -> delivery_date }}<br />
                        @endforeach
                    </td>
                    <td>
                        @if($order -> status == 'submitted')
                            <a href="/orders/edit/{{ $order -> order_id }}"><i class="fa-solid fa-pencil"></i></a>
                        @endif
                        <a href="/orders/delete/{{ $order -> order_id }}"><i class="fa-solid fa-x"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <section class="h-100" style="background-color: rgb(58, 105, 107)">
            <h3>Neturite jokių užsakymų.</h3>
        </section>
    @endif
@endsection
