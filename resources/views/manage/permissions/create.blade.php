@extends('layouts.manage')
@section('content')
	<div class="flex-container">
		<div class="row">
			<div class="col-sm-10">
				<h1>Create Permission</h1>
			</div>
			<div class="col-sm-2">
				<a href="{{route('permissions.index')}}" class="btn btn-primary">Back</a>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<form action="{{route('permissions.store')}}" method="POST">
							<div class="form-group">
								<input type="radio" name="permission_type" native-value="basic" v-model="permissionType"> Basic Permission
								<input type="radio" name="permission_type" native-value="crud" v-model="permissionType"> CRUD Permission
							</div>
							<div class="form-group" v-if="permissionType == 'basic'">
								<label for="display_name">Name (Display Name)</label>
								<input type="text" name="display_name" id="display_name" class="form-control">
							</div>
							<div class="form-group" v-if="permissionType == 'basic'">
								<label for="name">Slug</label>
								<input type="text" name="name" id="name" class="form-control">
							</div>
							<div class="form-group" v-if="permissionType == 'basic'">
								<label for="description">Description</label>
								<input type="text" name="description" id="description" class="form-control">
							</div>
							<div class="form-group" v-if="permissionType == 'c">
								
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection