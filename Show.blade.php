@extends('note.layout')

@section('content')
<link rel="stylesheet" href="{{ asset('css/show.css') }}">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left title">
            <h2>Content of Note</h2>
</div>

</div>

@if($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong>something problem.<br><br>
    <ul>

        @foreach($errors->all() as $error)

        <li>{{$error}}</li>
        @endforeach

    </ul>
</div>
@endif

<form action= "{{route('note.update',$note->id)}}"method="POST">

@csrf

@method('PUT')

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <h2>NoteName:</h2>
            <h2>{{$note->Title}}</h2>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>NoteContent</strong>
            <p>{{$note->Content}}</p>

        </div>
    </div>
    <div class="pull-right">
    <a class="btn back-btn btn-primary" href="{{ route('note.index')}}">Back</a>
</div>
    
</div>
</form>
<@endsection