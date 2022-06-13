@extends('layout')
@section('content')
<html>
    <head>
        <div class="text-center">
       <h3>Title</h3>
       </div>
    </head>
    <body>                                 
<form action="{{ route('lessons.update',$lesson->id) }}"method="POST">
    @csrf
    @method('PUT')

            <div class="container">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" value="{{$lesson->name}}" placeholder="input name">
            <a class="btn btn-primary" href="{{ route('lessons.update',$lesson->id) }}">Edit</a>
        </div>
        </form>
    </body>
</html>
@endsection