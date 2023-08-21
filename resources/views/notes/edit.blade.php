@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

        <div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Edit Company</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('notes.index') }}" enctype="multipart/form-data"> Back</a>
</div>
</div>
</div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
<form action="{{ route('notes.update',$note->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
<input type="hidden" name="color" value="{{ $note->color }}">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Company Name:</strong>
<input type="text" name="title" value="{{ $note->title }}" class="form-control" placeholder="Company name">
@error('title')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Company Email:</strong>
<input type="text" name="content" class="form-control" placeholder="Company Email" value="{{ $note->content }}">
@error('content')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
 
<button type="submit" class="btn btn-primary ml-3">Submit</button>
</div>
</form>
</div>
       
    </div>
</div>
@endsection
