@extends('layout.layout')

@section('content')
    <h2>Užsakymų statistika</h2>
    <section class="h-100" style="background-color: #eee">
        <p class="description">Unikalių užsakytų detalių kiekis: <b>{{ $uniqueOrderCount }}</b>.</p>
        <p class="description">Bendras užsakytų detalių kiekis: <b>{{ $orderCount }}</b>.</p>
        <p class="description">Visi svetainės vykdomi/įvykdyti užsakymai:</p>
        {{-- insert all orders lol idfk --}}
        <table class="table">
            <thead>
            <tr>
                <th>Užsakymo ID</th>
                <th>Statusas</th>
                <th>Adresas</th>
                <th>Užsakytojas</th>
                <th>Prekės</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
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
                    <td>{{ $order -> clients -> title }}</td>
                    <td>
                        @foreach($order -> parts as $part)
                            <b>{{ $part -> name }}</b>, <b>Kiekis:</b> {{ $part -> pivot -> amount }}, <b>Kaina:</b> {{ $part -> pivot -> price }} €, Pristatymo data: {{ $part -> delivery_date }}<br />
                        @endforeach
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <p class="description">Bendras pelnas iš visų užsakymų: <b>{{ $totalProfit }} €</b>.</p>
    </section>
@endsection
