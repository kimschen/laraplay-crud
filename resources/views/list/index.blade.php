@extends('master')
@section('content')

	<div class="container">
		<table class="table table-striped">
			<thead>
			<tr>
				<th>ID</th>
				<th>Title</th>
				<th>Post</th>
			</tr>
			</thead>
			<tbody>
				@foreach($lists as $post)
				<tr>
					<td>{{$post['id']}}</td>
					<td>{{$post['title']}}</td>
					<td>{{$post['post']}}</td>
					<td>
						<a href="{{ action('ListController@edit', $post['id']) }}">Edit</a>
					</td>
					<td>
						<a href="{{ action('ListController@destroy', $post['id']) }}">Delete</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

@endsection