@extends("back.inc.default")

@section('title', $title)
@section('content')

	<div class="col-sm-12">
		<h4 class="m-t-0 header-title">Users</h4>

		<div class="table-responsive m-b-20">
		    <h5><b>Tous les utilisateurs</b></h5>
		   
			<table id="datatable" class="table table-striped table-bordered">
				<thead>
				<tr>
				    <th>Name</th>
				    <th>Email</th>
				    <th>Image</th>
				    <th>Device_id date</th>
				    <th>Gouvernorat</th>
				    <th>Délégation</th>
				    <th>Localite date</th>
				    <th>Rôle</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					@foreach($users as $user)
					    <td>{{$user->name}}</td>
					    <td>{{$user->email}}</td>
					    <td>{{$user->image}}</td>
					    <td>{{$user->device_id}}</td>
					    <td>{{$user->gouvernorat}}</td>
					    <td>{{$user->delegation}}</td>
					    <td>{{$user->localite}}</td>
					    <td>{{$user->role}}</td>
				    @endforeach
				</tr>
				</tbody>
			</table>
		</div>
	</div>

@stop

@section('js')
<script type="text/javascript">
	
$('#datatable').dataTable();

	
</script>

@stop