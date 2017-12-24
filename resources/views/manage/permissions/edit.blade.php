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
								
								<input type="radio" id="basic" native-value="basic" v-model="permissionType"> Basic Permission
								
								<input type="radio" id="crud" native-value="crud" v-model="permissionType"> CRUD Permission
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
							
							<div class="form-group" v-if="permissionType == 'crud'">
								<label for="resource"> Resource</label>
								<input type="text" v-model="resource" name="resource" id="resource" class="form-control">
							</div>
							<div class="row" v-if="permissionType == 'crud'">
								<div class="col-sm-4">
									<div class="form-group" >
										<input type="checkbox" v-model="crudSelected" native-value="create"> Create
										<input type="checkbox" v-model="crudSelected" native-value="read"> Read
										<input type="checkbox" v-model="crudSelected" native-value="update"> Update
										<input type="checkbox" v-model="crudSelected" native-value="delete"> Delete
									</div>
								</div>
								<input type="hidden" name="crud_selected" :value="crudSelected">
								<div class="col-sm-8">
									<table class="table table-bordered" v-if="resource.length >= 3 && crudSelected.length > 0 ">
										<thead>
											<tr>
												<th>Name</th>
												<th>Slug</th>
												<th>Description</th>
											</tr>
										</thead>
										<tbody>
											<tr v-for="item in crudSelected">
												<td v-text="crudName(item)"></td>
												<td v-text="crudSlug(item)"></td>
												<td v-text="crudDescription(item)"></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<button class="btn btn-success">Create Permissions</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
	<script>
	var app = new Vue({
		el: '#app',
		data: {
			permissionType: 'basic',
			resource: '',
			crudSelected: ['create', 'read', 'update', 'delete']
		},
		methods:{ 
			crudName: function(item){
			return  item.substr(0,1).toUpperCase() + item.substr(1) + " " + app.resource.substr(0,1).toUpperCase() + app.resource.substr(1);
			},
			crudSlug: function(item){
				return item.toLowerCase() + "-" + app.resource.toLowerCase();
			},
			crudDescription: function(item){
				return "Allow a User to " + item.toUpperCase() + " a " + app.resource.substr(0,1).toUpperCase() + app.resource.substr(1);
			}
		}
	});
</script>
@endsection