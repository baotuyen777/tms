@extends('layouts/app')

@section('content')
    <h1>this is create/update page</h1>
    <form action="/foods" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" class="form-control" name="image">
        <input type="text" name="name" placeholder="name">
        <input type="text" name="description" placeholder="description">
        <input type="text" name="count" placeholder="count">
        <div>
            <select type="text" name="category_id" placeholder="category_id">
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-primary">Submit</button>
    </form>
    @if($errors->any())
        <div>
            @foreach($errors->all() as $error)
                <p class="text-danger">
                    {{$error}}
                </p>
            @endforeach
        </div>
    @endif
@endsection
