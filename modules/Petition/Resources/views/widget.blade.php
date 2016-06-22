<div class="col-md-6">
	<div class="panel panel-default">
	  <div class="panel-heading">Panel heading petition</div>
	  <div class="panel-body">
	    <table id="users-table" class="display table" cellspacing="0" width="100%">
	        <thead>
	            <tr>
	                <th> </th>
	                <th> </th>
	                <th> </th>
	                <th> </th>
	                <th> </th>
	            </tr>
	        </thead>
	    </table>
	  </div>
	</div>
</div>

@section('css')
	<link type="text/css" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
@endsection

@section('js')
	<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
@endsection

@section('script')
	$(document).ready(function() {
	 	$('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ asset('petition/grid') }}',
             columns: [
	            {data: 0, name: 'petition_petition.id'},
	            {data: 1, name: 'users.name'},
	            {data: 2, name: 'petition_petition.title'},
	            {data: 3, name: 'petition_petition.declaration'},
	            {data: 4, searchable:false }
	        ]
        });
	} );
@endsection