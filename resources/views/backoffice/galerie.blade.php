@extends('layouts.app')
@section('content')
    <div class="container mt-5 p-3 bg-dark text-white">
        <div class="row">
            @include('templates/mainBack')
            <div class="col-10">
                <h2 class="text-center border-bottom p-3 mb-5">Galerie</h2>
                @foreach ($categorie as $item)
                    <h4 class="mb-5">{{ $item->name }}</h4>
                    @foreach ($photo as $img)
                        @if ($img->categorie_id == $item->id)
                            <img height="100px" width="100px" class="mb-5" src="{{ asset('storage/' . $img->url) }}" alt="">
                        @endif
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
@endsection
