@extends('layouts.app-private')

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left mb-2">
<h2>Add Company</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('notes.index') }}"> Back</a>
</div>
</div>
</div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
<form action="{{ route('notes.store') }}" method="POST" enctype="multipart/form-data">
@csrf

<input type="hidden" name="color" value="#a7ffeb">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 pb-4 ">
<div class="form-group">
<strong>Company Name:</strong>
<input type="text" name="title" class="form-control" placeholder="Titulo">
@error('title')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 pb-4">
<div class="form-group">
<strong>Company Email:</strong>
<input type="text" id="myeditorinstance" name="content" class="" placeholder="Contenido">
 
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
<script src="{{ Vite::asset('node_modules/tinymce/tinymce.js') }}"></script>
 
<!-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> 
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>-->
<script>

document.addEventListener("DOMContentLoaded", () => {
  console.log("Hello World!");
  tinymce.init({ 
    skin: 'oxide-dark', 
    toolbar: false,
  menubar: false,
    selector: 'input#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
    plugins: 'code table lists',
    toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table',
//    content_css: ['{{ Vite::asset("node_modules/tinymce/skins/content/default/content.min.css") }}'] 

});
});

  
</script>





@endsection


