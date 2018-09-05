@extends('layouts.app')

@section('content')
<style>
	h1{
		color: #0468AA;
	}
	hr{
		border-width: 2px;
		border-color: #0468AA;
		width: 30%;
}
</style>
<h1>Edit BLOG</h1>
<hr align="left">

{!! Form::open(['action'=>['BlogsController@update',$blog->id],'method'=>'POST']) !!}
    <div class="form-group">
    	{{Form::label('title','Title')}}
    	{{Form::text('title','currecnt title: '.$blog->title,['class'=>'form-control','placeholder'=>'up to 255 character','maxlength'=>'255'])}}
    </div>

    <div class="form-group">
    	{{Form::label('title','Body')}}
    	{{Form::textarea('body','currenct body: '.$blog->body,['class'=>'form-control','placeholder'=>'your description'])}}
    </div>
    {{Form::hidden('_method','PUT')}}
	{{Form::submit('Edit Blog',['class'=>'btn btn-primary'])}}

{!! Form::close() !!}

@endsection