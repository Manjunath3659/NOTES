@extends('note.layout')

@section('content')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<div class="title">
    <h2>NOTES</h2>
</div>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <button class="btn create-btn btn-success" 
            onclick="window.location='{{ route('note.create') }}'">
                Create new note

            </button>
</div>
</div>
</div>

@if($message = Session::get('success'))

<div class="alert alert-success">
    <p>{{$message}}</p>
</div>

@endif

<table class="table table-bordered">
<tr>
    <th>No</th>
    <th>title</th>
    <th>content</th>
    <th width="280px">Action</th>
</tr>

@foreach($note as $n)
<tr>
    <td>{{++$i}}</td>
    <td>{{$n->Title}}</td>
    <td>{{$n->Content}}</td>

    <td>
        <form action="{{route('note.destroy',$n->id) }}" method="POST">

        <a class="btn btn-primary" href="{{route('note.show',$n->id)}}">Show</a>

        <a class="btn btn-primary" href="{{route('note.edit',$n->id)}}">Edit</a>


        @csrf

        @method('DELETE')

        <button type="submit" class="btn btn-danger">Delete</button>

</form>
</td>
@endforeach
</table>