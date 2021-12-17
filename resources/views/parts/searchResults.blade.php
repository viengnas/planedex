@extends('layout.layout')

@section('content')
    <h2>Tiekėjai, turintys: <b>{{ $searchTerm }}</b></h2>
    @if(count($searchResults))
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
                    <th>Pirkti</th>
                </tr>
            </thead>
            <tbody>
                @foreach($searchResults as $part)
                    <tr>
                        <td>{{ $part -> part_id }}</td>
                        <td><b>{{ $part -> clients -> title }}</b></td>
                        <td>{{ $part -> manufacturer }}</td>
                        <td>{{ $part -> model }}</td>
                        <td>{{ $part -> name }}</td>
                        <td>{{ $part -> price }} €</td>
                        <td>{{ $part -> amount }}</td>
                        <td>{{ $part -> delivery_date }}</td>
                        <td><a href="/parts/addPartToCart/{{ $part -> part_id }}"><i class="fa-solid fa-cart-shopping"></i></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <h2>Ar norite daugiau? <a href="/parts">Atgal į katalogą</a>.</h2>
    @else
        <h2>Nėra tiekėjų, pardavinėjančių šią dalį. <a href="/parts">Grįžti į katalogą</a>?</h2>
    @endif
@endsection
