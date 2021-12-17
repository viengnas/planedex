@extends('layout.layout')

@section('content')
    <h2>Jūsų parduodamos lėktuvų dalys</h2>
    @if(count($parts))
        <table class="table">
            <thead>
            <tr>
                <th>Prekės ID</th>
                <th>Gamintojas</th>
                <th>Modelis</th>
                <th>Pavadinimas</th>
                <th>Kaina</th>
                <th>Kiekis</th>
                <th>Pristatymas iki</th>
                <th>Veiksmai</th>
            </tr>
            </thead>
            <tbody>
            @foreach($parts as $part)
                <tr>
                    <td>{{ $part -> part_id }}</td>
                    <td>{{ $part -> manufacturer }}</td>
                    <td>{{ $part -> model }}</td>
                    <td>{{ $part -> name }}</td>
                    <td>{{ $part -> price }} €</td>
                    <td>{{ $part -> amount }}</td>
                    <td>{{ $part -> delivery_date }}</td>
                    <td><a href="/sell/delete/{{ $part -> part_id }}"><i class="fa-solid fa-x"></i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <section class="h-100" style="background-color: rgb(58, 105, 107)">
            <h3>Jūs dar nepardavinėjate jokių prekių. Norėdami pridėti naują prekę, užpildykite formą žemiau.</h3>
        </section>
    @endif
    <h2>Pridėti naują dalį</h2>
    <section class="h-100" style="background-color: #eee">
        <div class="container w-25 py-5">
            <form method="POST">
                @csrf
                <div class="col-md-12">
                    <label for="manufacturer" class="form-label">Gamintojas</label>
                    <input class="form-control" name="manufacturer" type="text">
                </div>
                @error('manufacturer')
                {{ $message }}
                @enderror
                <div class="col-md-12">
                    <label for="model" class="form-label">Modelis</label>
                    <input class="form-control" name="model" type="text">
                </div>
                @error('model')
                {{ $message }}
                @enderror
                <div class="col-md-12">
                    <label for="name" class="form-label">Pavadinimas (neprivaloma)</label>
                    <input class="form-control" name="name" type="text">
                </div>
                @error('name')
                {{ $message }}
                @enderror
                <div class="col-md-12">
                    <label for="amount" class="form-label">Kiekis (neprivaloma)</label>
                    <input class="form-control" name="amount" type="text">
                </div>
                @error('amount')
                {{ $message }}
                @enderror
                <div class="col-md-12">
                    <label for="price" class="form-label">Kaina</label>
                    <input class="form-control" name="price" type="text">
                </div>
                @error('price')
                {{ $message }}
                @enderror
                <div class="col-md-12">
                    <label for="delivery_date" class="form-label">Spėjama pristatymo data</label>
                    <input class="form-control" name="delivery_date" type="date">
                </div>
                <br />
                <button type="submit" class="btn btn-primary">Pridėti</button>
            </form>
        </div>
    </section>
@endsection
