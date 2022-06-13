@extends('layout')
@section('content')
<html>
    <head>
        <div class="text-center">
       <h3>Title</h3>
       </div>
    </head>
    <body>                                 
<form action="{{ route('lessons.store') }}"method="post">
    @csrf
            <div class="container">
            <label for="name">Name</label>
            <input type="text" class="form-control"name="name"placeholder="input name">
            <button type="submit"class="btn btn-primary">Submit</button>
        </div>
        </form>
    </body>
</html>
@endsection