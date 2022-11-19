@extends('layouts.app')

@section('content')
    <h1>This is about page</h1>
    {{
    $x= 10
}}
    @if($x<2)
        <h3>hello world</h3>
    @endif

    @unless(empty($name))
        <h3> nam is {{$name}}</h3>
    @endunless

    @empty(!$name)
        <h3>using empty</h3>
    @endempty
    @for($i=1; $i<5; $i++)
        <h2>{{$i}}</h2>
    @endfor

    @if($names)
        @foreach($names as $name)
            <h4>{{$name}}</h4>
        @endforeach
    @endif
@endsection
