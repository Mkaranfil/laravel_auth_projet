@extends('layouts.app')
@section('content')
    <div class="container mt-5 p-3 bg-dark text-white">
        <div class="row">
            @include('templates/mainBack')
            <div class="col-10">
                <div class="mt-5">
                    <form action="/user/{{ Auth::user()->id }}" method="POST">
                        @csrf
                        @method('PATCH')
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $item)
                                        <li>{{$item}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="">Nom</label>
                            <input class="form-control" name="name" value="{{ old('name') ? old('name') : Auth::user()->name }}" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Age</label>
                            <input class="form-control" name="age" value="{{ old('age') ? old('age') : Auth::user()->age }}" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input class="form-control" name="email" value="{{ old('email') ? old('email') : Auth::user()->email }}" type="text">
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 d-flex align-items-center">
                                @foreach ($avatar as $item)
                                    <input type="radio" value="{{ $item->id }}" name="avatar_id" id="age">
                                    <img width="100px" height="100px" src="{{ asset('storage/' . $item->url) }}" alt="">
                                @endforeach
                            </div>
                        </div>
                        <button class="btn btn-success mt-2" type="submit">Update</button>
                        {{-- <div class="form-group">
                            <label for="">Ancien mot de passe</label>
                            <input class="form-control" name="name" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Nouveau mot de passe</label>
                            <input class="form-control" name="name" value="{{ old('name') ? old('name') : Auth::user()->name }}" type="text">
                        </div> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection