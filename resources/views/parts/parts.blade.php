@extends('layout.layout')

@section('content')
    <h2>Prekių filtrai</h2>
    <section class="h-100" style="background-color: #eee">
        <div class="container w-50 py-5">
            <form method="POST">
                @csrf
                <label for="name" class="form-label">Pavadinimas</label>
                <input class="form-control" name="name" type="text">
                @error('name')
                    {{ $message }}
                @enderror
                <button type="submit" class="btn btn-primary">Filtruoti</button>
            </form>
            <p>{{ session('success') }}</p>
            @if(session('comparisons'))
                <h3 style="color: black">Turite prekių, pridėtų prie palyginimo sąrašo. <a href="comparison">Eiti į palyginimo puslapį</a></h3>
            @endif
        </div>
    </section>

    <h2>Visos tiekėjų prekės</h2>
    @foreach($supplierData as $supplier)
        <h3>{{ $supplier -> title }} siūlomos dalys</h3>
            @if(count($supplier -> parts))
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
                    <th>Tiekėjas</th>
                    <th>Veiksmai</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($supplier -> parts as $part)
                        <tr>
                            <td>{{ $part -> part_id }}</td>
                            <td>{{ $part -> manufacturer }}</td>
                            <td>{{ $part -> model }}</td>
                            <td>{{ $part -> name }}</td>
                            <td>{{ $part -> price }} €</td>
                            <td>{{ $part -> amount }}</td>
                            <td>{{ $part -> delivery_date }}</td>
                            <td>{{ $supplier -> title }}</td>
                            <td><a href="/parts/addPartToCart/{{ $part -> part_id }}"><i class="fa-solid fa-cart-shopping"></i></a>
                                <a href="/parts/addPartToComparison/{{ $part -> part_id }}"><i class="fa-solid fa-code-compare"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @else
                <section class="h-100" style="background-color: rgb(58, 105, 107)">
                    <h3>Tiekėjas neturi dalių. Užsukite į katalogą vėliau.</h3>
                </section>
            @endif
    @endforeach
@endsection
