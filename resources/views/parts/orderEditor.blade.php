@extends('layout.layout')

@section('content')
    <section class="h-100" style="background-color: #eee">
        <div class="container w-50 py-5">
            <form method="POST">
                @csrf
                <div class="mb-3">
                    <label for="order_id">Užsakymo ID</label>
                    <input type="text" name="order_id" class="form-control" value="{{ $order -> order_id }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="status">Statusas</label>
                    <input type="text" name="status" class="form-control" value="{{ $order -> status }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="status">Adresas</label>
                    <input type="text" name="address" class="form-control" value="{{ $order -> address }}">
                    @error('address')
                        {{ $message }}
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="status">Užsakytojas</label>
                    <input type="text" name="title" class="form-control" value="{{ session('title') }}" readonly>
                </div>
                @foreach($order -> parts as $part)
                    <div class="row">
                        <div class="col">
                            <label for="name">Pavadinimas</label>
                            <input type="text" name="name" class="form-control" value="{{ $part -> name }}" readonly>
                        </div>
                        <div class="col">
                            <label for="amount">Kiekis</label>
                            <input type="text" name="amount" class="form-control" value="{{ $part -> pivot -> amount }}">
                            @error('amount')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="col">
                            <label for="price">Kaina</label>
                            <input type="text" name="price" class="form-control" value="{{ $part -> pivot -> price }}" readonly>
                        </div>
                        <div class="col">
                            <label for="delivery_date">Pristatymo data</label>
                            <input type="text" name="delivery_date" class="form-control" value="{{ $part -> delivery_date }}" readonly>
                        </div>
                    </div>
                @endforeach
                <br />
                <button type="submit" class="btn btn-primary">Redaguoti</button>
            </form>
        </div>
    </section>
@endsection
