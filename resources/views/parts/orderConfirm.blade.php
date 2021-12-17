@extends('layout.layout')

@section('content')
    <h2>Jūs jau beveik čia!</h2>
    <h3>Prašome įvesti adresą, į kurį jūsų užsakymas bus pristatytas</h3>

    <section class="h-100" style="background-color: #eee">
        <div class="container w-50 py-5">
            <form method="POST">
                @csrf
                <label for="address" class="form-label">Adresas</label>
                <input class="form-control" name="address" type="text">
                @error('address')
                {{ $message }}
                @enderror
                <button type="submit" class="btn btn-primary">Užsakyti</button>
            </form>
        </div>
    </section>
@endsection
