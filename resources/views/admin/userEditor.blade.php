@extends('layout.layout')

@section('content')
    <h2>Redaguoti naudotoją</h2>
    <section class="h-100" style="background-color: #eee">
        <div class="container w-50 py-5">
            <form method="POST">
                @csrf
                <div class="mb-3">
                    <label for="client_id">Kliento ID</label>
                    <input type="text" name="client_id" class="form-control" value="{{ $client[0] -> client_id }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="email">Statusas</label>
                    <input type="text" name="email" class="form-control" value="{{ $client[0] -> email }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="password">Slaptažodis</label>
                    <input type="password" name="password" class="form-control" value="{{ $client[0] -> password }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="title">Pavadinimas</label>
                    <input type="text" name="title" class="form-control" value="{{ $client[0] -> title }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="position">Pozicija</label>
                    <select name="position" class="form-control">
                        <option value="supplier">Tiekėjas</option>
                        <option value="manager">Vadybininkas</option>
                        <option value="director">Direktorius</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="status">Užsakytojas</label>
                    <input type="text" name="title" class="form-control" value="{{ session('title') }}" readonly>
                </div>
                <button type="submit" class="btn btn-primary">Redaguoti</button>
            </form>
        </div>
    </section>
@endsection
