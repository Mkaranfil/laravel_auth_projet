@extends('layouts.app')

@section('content')
    <div class="container mt-5 p-3 bg-dark text-white">
        <div class="row">
            @include('templates/mainBack')
            <div class="col-10">
                <h2 class="text-center p-3 mb-5">Avatar</h2>
                <div class="container mt-5">
                    <table class="table text-white">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($avatar as $item)
                                <tr>
                                    <th scope="row">{{$item->id}}</th>
                                    <th><img height="100px" width="100px" src="{{asset('storage/'.$item->url)}}" alt=""></th>
                                    <th>
                                        <form action="/avatar/{{$item->id}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                    </th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <form action="/avatar" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="file" name="url" class="form-control-files" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="">Nom</label>
                        <input type="text" name="name" class="form-control-files" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-primary mt-5">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
