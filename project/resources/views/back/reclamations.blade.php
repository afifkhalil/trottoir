@extends("back.inc.default")

@section('title', $title)
@section('content')

	<div class="col-sm-12">
		<h4 class="m-t-0 header-title">Data Tables</h4>

		<div class="table-responsive m-b-20">
		    <h5><b>Default Example</b></h5>
		    <p class="text-muted font-13 m-b-30">
		        DataTables has most features enabled by default, so all you need to do to use it with
		        your own tables is to call the construction function: <code>$().DataTable();</code>.
		    </p>
			<table id="datatable" class="table table-striped table-bordered">
				<thead>
				<tr>
				    <th>gouvernorat</th>
				    <th>delegation</th>
				    <th>localite</th>
				    <th>geolocalisation</th>
				    <th>categorie date</th>
				    <th>image</th>
				    <th>commentaire</th>
				    <th>etat date</th>
				    <th>user_id</th>
				</tr>
				</thead>


				<tbody>
				<tr>
					@foreach($reclamations as $reclamation)
					    <td>{{$reclamation->gouvernorat}}</td>
					    <td>{{$reclamation->delegation}}</td>
					    <td>{{$reclamation->localite}}</td>
					    <td>{{$reclamation->geolocalisation}}</td>
					    <td>{{$reclamation->categorie}}</td>
					    <td>{{$reclamation->image}}</td>
					    <td>{{$reclamation->commentaire}}</td>
					    <td>{{$reclamation->etat}}</td>
					    <td>{{$reclamation->user_id}}</td>
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
	TableManageButtons = function () {
        "use strict";
        return {
            init: function () {
                handleDataTableButtons()
            }
        }
    }();
TableManageButtons.init();
</script>

@stop