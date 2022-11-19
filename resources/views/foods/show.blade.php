
@extends('layouts.app')

@section('content')
        <h1>Name: {{$food->name}}</h1>
        <h1>{{$food->description}}</h1>
        <h1>{{$food->count}}</h1>
        <h1>category:{{$food->category->name}}</h1>
@endsection
