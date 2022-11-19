@extends('layouts/app')

@section('content')
    <h1>this is create/update page</h1>
    <form action="/foods/{{$food->id}}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="name" placeholder="name" value="{{$food->name}}">
        <input type="text" name="description" placeholder="description" value="{{$food->description}}">
        <input type="text" name="count" placeholder="count" value="{{$food->count}}">
        <button class="btn btn-primary">Submit</button>
    </form>
@endsection
