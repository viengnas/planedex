@extends('layout.layout')

@section('content')
    <h2>Visi naudotojai</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Kliento ID</th>
                <th>El. Paštas</th>
                <th>Slaptažodis</th>
                <th>Pavadinimas</th>
                <th>Pozicija</th>
                <th>Sukūrimo data</th>
                <th>Veiksmai</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
                <tr>
                    <td>{{ $client -> client_id }}</td>
                    <td>{{ $client -> email }}</td>
                    <td>{{ $client -> password }}</td>
                    <td>{{ $client -> title }}</td>
                    @if($client -> position == 'director')
                        <td>Direktorius</td>
                    @elseif($client -> position == 'manager')
                        <td>Vadybininkas</td>
                    @elseif($client -> position == 'supplier')
                        <td>Tiekėjas</td>
                    @endif
                    <td>{{ $client -> creation_date }}</td>
                    @if($client -> client_id == session('client_id'))
                        <td>Čia tu :p</td>
                    @else
                        <td><a href="/users/{{ $client -> client_id }}"><i class="fa-solid fa-pencil"></i></a></td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
