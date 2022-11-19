@extends('layouts/app')
@section('content')
    <h1>This is food index</h1>
    @foreach($foods as $food)
        <div>
            <a href="/foods/{{$food->id}}">{{$food['name']}}</a>
            <img src="{{asset('images/'.$food->image_path)}}" alt="">
            <a href="foods/{{$food->id}}/edit" class="btn btn-warning">Edit</a>
            <form action="/foods/{{$food->id}}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <hr/>
        </div>
    @endforeach
    <a class="btn btn-success" href="foods/create">add new</a>
@endsection
