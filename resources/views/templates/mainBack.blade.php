<div class="col-2 border-right d-flex flex-column">
    <a href="{{ url('/home') }}" class="text-white p-2  ">Home</a>
    <a class="text-white p-2" href="/user">Profil</a>
    <a class="text-white p-2" href="/image">Galerie</a>
    <a class="text-white p-2" href="/image/create">Ajout d'image</a>
    @if (Auth::user()->name == "admin")
        <a class="text-white p-2" href="/avatar">Avatar</a>
    @endif
</div>