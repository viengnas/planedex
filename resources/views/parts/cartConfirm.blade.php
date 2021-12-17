@extends('layout.layout')

@section('content')
    <h2>Pasirinkta prekė</h2>
    <section class="h-100" style="background-color: #eee">
        <div class="container w-100 h-100 py-5">
            <div class="row">
                <div class="col">
                    <label>Prekės ID:</label>
                    <p>{{ $part[0] -> part_id }}</p>
                </div>
                <div class="col">
                    <label>Tiekėjas:</label>
                    <p>{{ $part[0] -> clients -> title }}</p>
                </div>
                <div class="col">
                    <label>Gamintojas:</label>
                    <p>{{ $part[0] -> manufacturer }}</p>
                </div>
                <div class="col">
                    <label>Kaina:</label>
                    <p>{{ $part[0] -> price }} €</p>
                </div>
                <div class="col">
                    <label>Pavadinimas:</label>
                    <p>{{ $part[0] -> name }}</p>
                </div>
                <div class="col">
                    <label>Kiekis:</label>
                    <p>{{ $part[0] -> amount }}</p>
                </div>
                <div class="col">
                    <label>Pristatymo data:</label>
                    <p>{{ $part[0] -> delivery_date }}</p>
                </div>
                <div class="col">
                    <label>Norimas kiekis:</label>
                    <form method="POST">
                        @csrf
                        <input class="form-control" name="myAmount" type="text">
                        @error('myAmount')
                        {{ $message }}
                        @enderror
                        <input class="form-control" name="part_id" type="hidden" value="{{ $part[0] -> part_id }}">
                        <br />
                        <button type="submit" class="btn btn-primary">Pridėti į krepšelį</button>
                    </form>
                </div>
            </div>
        </div>

    </section>
@endsection
