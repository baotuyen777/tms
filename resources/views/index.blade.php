@extends('layouts/app')

@section('content')
    <h1>this is index</h1>
    <img src="{{URL('images/xaxiu.webp')}}" alt="" height="100">
    {{
        $x= 10
    }}
    @if($x<2)
        <h3>hello world</h3>
    @endif
@endsection
