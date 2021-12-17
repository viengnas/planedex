@extends('layout.layout')

@section('content')
    <h2>Kontaktų forma</h2>
    <p class="info">Ar turite klausimų? Susisiekite su mūsų komanda žemiau pateikta forma.</p>

    <section class="h-100" style="background-color: #eee">
        <div class="container w-50 py-5">
            <form>
                <div class="mb-3">
                    <label for="fname">Vardas</label>
                    <input type="text" id="fname" class="form-control" placeholder="Vardas...">
                </div>
                <div class="mb-3">
                    <label for="lname">Pavardė</label>
                    <input type="text" id="lname" class="form-control" placeholder="Pavardė...">
                </div>
                <div class="mb-3">
                    <label for="email">El. Paštas</label>
                    <input type="text" id="email" class="form-control" placeholder="El. paštas...">
                </div>
                <div class="mb-3">
                    <label for="reason">Susisiekimo priežastis</label>
                    <select id="reason" name="reason">
                        <option value="features">Naujų funkcijų pasiūlymas paslaugai</option>
                        <option value="errors">Problemos, matomos paslaugoje</option>
                        <option value="copyright">Autorinių teisių pažeidimas</option>
                        <option value="other">Kita priežastis</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="contactText">Jūsų žinutė</label>
                    <textarea id="contactText" name="userinput" cols="97" rows="15"></textarea>
                </div>
                <input type="submit" class="btn btn-primary" onclick="alert('Jūsų žinutė gauta.\nĮ pastebėjimus atsakysime netrukus.')" value="Pateikti">
            </form>
        </div>
    </section>
@endsection
