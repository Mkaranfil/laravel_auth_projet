@extends('layouts.app')

@section('content')
    <div class="container mt-5 p-3 bg-dark text-white">
        <div class="row">
            @include('templates/mainBack')
            <div class="col-10">
                <h2 class="text-center border-bottom p-3 mb-5">Upload Image</h2>
                <div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $item)
                                        <li>{{$item}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                </div>
                <form action="/image" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="file" name="url" class="form-control-files" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <label for="">Catégorie</label>
                    <select name="categorie_id" id="">
                        @foreach ($categorie as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                    <br>
                    <button type="submit" class="btn btn-primary mt-5">Submit</button>
                </form>
                <h2 class="text-center border-bottom p-3 mb-5">Ajouts Catégorie</h2>
                <form action="/categorie" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Catégorie</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
