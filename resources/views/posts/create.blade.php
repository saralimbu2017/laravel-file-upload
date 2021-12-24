@extends('layouts.app')

@section('content')
  <h1>Create Post</h1>

  <!-- Opening a form with POST method, form is pointed to posts.store, files option to accept file upload  -->
  
  {!! Form::open(['method'=>'POST','route' => 'posts.store','files'=>true]) !!}

  <!--method to protect application from cross-site request forgeries.-->
    @csrf 

    

    <div class="form-group">
      <!-- generating form label-->
      {!! Form::label('title','Title:') !!}
      <!--Generating text input-->
      {!! Form::text('title',null,['class'=>'form-control']) !!}

    </div>

    <div class="form-group">
      <!--Generating file input -->
      {!! Form::file('file',['class'=>'form-control']) !!}
    </div>
    
    <div class="form-group">
      <!--Generating submit button-->
    {!! Form::submit('Create Post',['class'=>'btn btn-primary'])!!}
    </div>
  {!! Form::close() !!}

@endsection