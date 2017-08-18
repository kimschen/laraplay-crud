@extends('master')
@section('content')

	<div class="container">
		<table class="table table-striped">
			<thead>
			<tr>
				<th>ID</th>
				<th>Title</th>
				<th>Post</th>
				<th colspan="2">Action</th>
			</tr>
			</thead>
			<tbody>
				@foreach($lists as $post)
				<tr>
					<td>{{ $post['id'] }}</td>
					<td>{{ $post['title'] }}</td>
					<td>{{ $post['post'] }}</td>
					<td>
						<a class="btn btn-warning" href="{{ action('ListController@edit', $post['id']) }}">
							Edit
						</a>
					</td>
					<td>
						<form action="{{ action('ListController@destroy', $post['id']) }}" method="post">
							{{ csrf_field() }}
							<input name="_method" type="hidden" value="DELETE">
							<button class="btn btn-danger" type="submit">
								Delete
							</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<a class="btn btn-primary" href="{{ action('ListController@create') }}">
			Create
		</a>
	</div>

@endsection