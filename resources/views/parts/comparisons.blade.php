@extends('layout.layout')

@section('content')
    <h2>Pasirinktų prekių palyginimas</h2>
    @if($comparisons)
        <table class="table">
            <thead>
            <tr>
                <th>Prekės ID</th>
                <th>Tiekėjas</th>
                <th>Gamintojas</th>
                <th>Modelis</th>
                <th>Pavadinimas</th>
                <th>Kaina</th>
                <th>Pristatymas iki</th>
            </tr>
            </thead>
            <tbody>
            @foreach($comparisons as $part)
                <tr>
                    <td>{{ $part[0] -> part_id }}</td>
                    <td><b>{{ $part[0] -> clients -> title }}</b></td>
                    <td>{{ $part[0] -> manufacturer }}</td>
                    <td>{{ $part[0] -> model }}</td>
                    <td>{{ $part[0]-> name }}</td>
                    <td>{{ $part[0] -> price }} €</td>
                    <td>{{ $part[0] -> delivery_date }}</td>
                </tr>
{{--                This is also incredibly retarded--}}
            @endforeach
            </tbody>
        </table>
        <h2>Norite palyginti kitas prekes? <a href="/parts">Atgal į katalogą</a>.</h2>
    @else
        <h2>Nepasirinkote jokių prekių palyginimui. <a href="/parts">Grįžti į katalogą</a>?</h2>
    @endif
@endsection
