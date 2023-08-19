@extends('note.layout')

@section('content')
<link rel="stylesheet" href="{{ asset('css/style2.css') }}">
<div class="row">
    <div clss="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Add new Notes </h2>
        </div>
        <div class="pull-right">
             <a class="btn back-btn btn-primary" href="{{ route('note.index')}}">Back</a>
        </div>
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

<form action= "{{route('note.store')}}"method="POST">

@csrf

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>NoteName:</strong>
            <input type="text" name="Title" class="form-control" placeholder="Title">

        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>NoteContent</strong>
            <input type="text" name="Content" class="form-control" placeholder="Content">

        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <button type="submit" class="btn submit-btn btn-primary">Submit</button>
    </div>
</div>
</form>
@endsection
