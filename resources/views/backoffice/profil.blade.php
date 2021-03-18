@extends('layouts.app')
@section('content')
    <div class="container mt-5 p-3 bg-dark text-white">
        <div class="row">
            @include('templates/mainBack')
            <div class="col-10">
                <h2 class="text-center">Informations Personnels</h2>
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-3 border bg-secondary ml-2">
                            @if (Auth::user()->avatar_id == null)
                                <p class="alert alert-danger">Votre avater à été supprimer veuillez changer</p>
                            @else
                                <img height="200px" width="200px" src="{{ asset('storage/' . Auth::user()->avatars->url) }}" alt="">
                            @endif
                        </div>
                        <div class="col-8">
                            <p>Nom : {{ Auth::user()->name }}</p>
                            <p>Age : {{ Auth::user()->age }} Ans</p>
                            <p>Email : {{ Auth::user()->email }}</p>
                            <a class="btn btn-success" href="/user/{{ Auth::id() }}/edit">Edit Profil</a>
                        </div>
                        <div>
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
