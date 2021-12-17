@extends('layout.layout')

@section('content')
    <section class="h-100" style="background-color: #eee">
        <div class="container w-25 py-5">
            <div class="row g-3 mb-3">
                <div class="col-md-12">
                    <label for="manufacturer" class="form-label">Gamintojas</label>
                    <input class="form-control" name="manufacturer" type="manufacturer">
                </div>
                <div class="col-md-12">
                    <label for="model" class="form-label">Modelis</label>
                    <input class="form-control" name="model" type="model">
                </div>
                <div class="col-md-12">
                    <label for="name" class="form-label">Pavadinimas (neprivaloma)</label>
                    <input class="form-control" name="name" type="name">
                </div>
                <div class="col-md-12">
                    <label for="price" class="form-label">Kaina</label>
                    <input class="form-control" name="price" type="price">
                </div>
            </div>
            <button onclick="location.href='/sell'" type="submit" class="btn btn-primary">Pridėti</button>
        </div>
    </section>

@endsection
