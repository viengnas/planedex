<a href="/"><h1>Planedex</h1></a>
<h2>Lėktuvo dalių užsakymas</h2>
<div class="toolbar">
    @if(session('position') == 'manager')
        <a href="/orders"><i class="fas fa-home fa-2x"></i> {{ session('title') }} užsakymai</a>
        <a href="/logout"><i class="fas fa-book fa-2x"></i> Atsijungti</a>
        <a href="/parts"><i class="fas fa-question fa-2x"></i> Prekės</a>
        <a href="/about"><i class="fas fa-address-card fa-2x"></i> Apie Planedex</a>
        <a href="/contact"><i class="fas fa-question fa-2x"></i> Susisiekite</a>

    @elseif(session('position') == 'supplier')
        <a href="/"><i class="fas fa-home fa-2x"></i> Sveiki, {{ session('title') }}!</a>
        <a href="/logout"><i class="fas fa-book fa-2x"></i> Atsijungti</a>
        <a href="/sell"><i class="fas fa-question fa-2x"></i> Pardavinėti</a>
        <a href="/about"><i class="fas fa-address-card fa-2x"></i> Apie Planedex</a>
        <a href="/contact"><i class="fas fa-question fa-2x"></i> Susisiekite</a>

    @elseif(session('position') == 'director')
        <a href="/stats"><i class="fas fa-home fa-2x"></i> Užsakymų statistika</a>
        <a href="/logout"><i class="fas fa-book fa-2x"></i> Atsijungti</a>
        <a href="/users"><i class="fas fa-question fa-2x"></i> Naudotojai</a>
        <a href="/about"><i class="fas fa-address-card fa-2x"></i> Apie Planedex</a>
        <a href="/contact"><i class="fas fa-question fa-2x"></i> Susisiekite</a>

    @else
        <a href="/"><i class="fas fa-home fa-2x"></i> Pradžia</a>
        <a href="/login"><i class="fas fa-book fa-2x"></i> Prisijungti</a>
        <a href="/register"><i class="fas fa-book fa-2x"></i> Registruotis</a>
        <a href="/about"><i class="fas fa-address-card fa-2x"></i> Apie Planedex</a>
        <a href="/contact"><i class="fas fa-question fa-2x"></i> Susisiekite</a>
    @endif
</div>
