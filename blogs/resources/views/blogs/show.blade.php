@extends('layouts.app')

@section('content')
<br></br>
<style>
td,th{
		padding: 10px;
		text-align: center;
	}
	th{
		background-color: #0468AA;
		color: white;
	}
	hr{
		border-width: 2px;
	}
</style>

<h1 align="center">Blog Information</h1>
<table border="2" align="center">
	<tr>
	<th>ID</th>
	<th>Title</th>
	<th>Body</th>
	<th>Created_at</th>
	<th>Updated_at</th>
</tr>

<td>{{$blog->id}}</td>
	<td>{{$blog->title}}</td>
	<td>{{$blog->body}}</td>
	<td>{{$blog->created_at}}</td>
	<td>{{$blog->updated_at}}</td>
</table>
<hr>
<a href="/blogs/{{$blog->id}}/edit" class="btn btn-default">Edit Blog</a>
<br></br>
{!!Form::open(['action'=>['BlogsController@destroy',$blog->id],'method'=>'POST'])!!}

{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete Blog',['class'=>'btn btn-danger'])}}
{!!Form::close()!!}
@endsection