@extends('layout.layout')

@section('content')
    <section class="h-100" style="background-color: #eee">
        <div class="container w-25 py-5">
            <form method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">El. paštas</label>
                    <input class="form-control" name="email" type="email">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Slaptažodis</label>
                    <input class="form-control" name="password" type="password">
                    @error('password')
                    {{ $message }}
                    @enderror
                    <p>{{ session('authError') }}</p>
                </div>
                <button type="submit" class="btn btn-primary">Prisijungti</button>

            </form>
            <p>Esate naujas naudotojas?<a style="color:olivedrab" href="/register"> Užsiregistruokite!</a></p>
        </div>
    </section>
@endsection
