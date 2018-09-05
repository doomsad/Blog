@extends('layouts.app')

@section('content')
<style>
	td,th{
		padding: 10px;
		text-align: center;
	}
	th{
		background-color: #0468AA;
		color: white;
	}
	h1{
		font-size: 40pt;
		text-align: center;
	}
</style>

<h1>Your Blogs</h1>
<br></br>
<table border="2" calss="well" align="center">

<tr>
	<th>ID</th>
	<th>Title</th>
	<th>Body</th>
	<th>Created_at</th>
	<th>Updated_at</th>
</tr>

@foreach($blog as $b)

<!-- <div class="well">
	<h3><a href="blogs/{{$b->id}}">{{$b->title}}</a></h3>
	<small>Written on {{$b->created_at}}</small>
</div> -->
<tr onclick="location.href='blogs/{{$b->id}}';" style="cursor: pointer;">
	<td>{{$b->id}}</td>
	<td>{{$b->title}}</td>
	<td>{{$b->body}}</td>
	<td>{{$b->created_at}}</td>
	<td>{{$b->updated_at}}</td>
</tr>

@endforeach
</table>
@endsection