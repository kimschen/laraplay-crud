@extends('master')
@section('content')

	<div class="container">
		<form method="post" action="{{ url('list') }}">
			<div class="form-group row">
				{{ csrf_field() }}
				<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">
					Title
				</label>
				<div>
					<input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="title" name="title">
				</div>
			</div>
			<div>
				<label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">
					Post
				</label>
				<div>
					<textarea name="post" rows="8" cols="80"></textarea>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-md-2"></div>
				<input type="submit" class="btn btn-primary">
			</div>
		</form>
	</div>

@endsection