@extends('layout.layout')

@section('content')
    <section class="h-100" style="background-color: #eee">
        <div class="container w-50 h-100 py-5">
            <form method="POST" class="row g-3">
                @csrf
                <div class="col-md-12">
                    <label for="title" class="form-label">Vardas/Įmonės pavadinimas</label>
                    <input class="form-control" name="title" type="title">
                    @error('title')
                    {{ $message }}
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">El. pašto adresas</label>
                    <input type="email" class="form-control" name="email" type="email">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="password" class="form-label">Slaptažodis</label>
                    <input type="password" class="form-control" name="password" type="password">
                    @error('password')
                    {{ $message }}
                    @enderror
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Registruotis</button>
                </div>
            </form>
        </div>
    </section>
@endsection
