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
							<td>{{$permission->display_name}}</td>
							<td>{{$permission->name}}</td>
							<td>{{$permission->description}}</td>
							<td><a href="{{route('permissions.show', $permission->id)}}" class="btn btn-warning btn-sm m-r-10" >View</a><a href="{{route('permissions.edit', $permission->id)}}" class="btn btn-danger btn-sm">Edit</a></td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>

@endsection