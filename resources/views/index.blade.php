@extends('layout')
@section('content')


<table class="table table-hoverable">
    <thead>
    <th>Id</th>
    <th>Name</th>
    <th>Actions</th>
    </thead>
    <tbody>
        @foreach($lessons as $lesson)
    <tr>
        <td>{{ $lesson->id }}</td>
        <td>{{ $lesson->name }}</td>
        <td>
    <form action="{{ route('lessons.destroy',$lesson->id) }}" method="POST">
   
        <a class="btn btn-info" href="{{ route('lessons.show',$lesson->id) }}">Show</a>

        <a class="btn btn-primary" href="{{ route('lessons.edit',$lesson->id) }}">Edit</a>

        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection