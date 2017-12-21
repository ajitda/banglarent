@extends('layouts.manage')
@section('content')
	<div class="flex-container">
		<div class="row">
			<div class="col-sm-10">
				Manage Permissions
			</div>
			<div class="col-sm-2">
				<a href="{{route('permissions.create')}}" class="btn btn-primary">Create Permission</a>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-body">
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Sl</th>
							<th>Name</th>
							<th>Slug</th>
							<th>Description</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach($permissions as $permission)
						<tr>
							<td>{{$permission->id}}</td>
							<td>{{$permission->name}}</td>
							<td>{{$permission->slug}}</td>
							<td>{{$permission->description}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>

@endsection