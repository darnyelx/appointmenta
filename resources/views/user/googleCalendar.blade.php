@include('_includes.header-admin')

<div class="container school-stats">
	<?php $sn = 1 ?>
	<form action="{{url('client/google-calendar/adopt')}}" method="POST">
			@csrf
	<table class="table table-bordered table-striped" style="overflow:auto;">
		<thead>
			<tr class="thead-dark">
				<th>SN</th>
				<th>Title</th>
				<th>Due Date</th>
				<th>Detais</th>
				<th>Actions</th>
			</tr>
		</thead>
		
		<tbody>
			@foreach($events as $event)
			<tr>
				<td>{{$sn++}}</td>
				<td>{{$event['summary']}}</td>
				<td>{{date ('jS F Y',strtotime($event['start']['date']))}}</td>
				<td>{{$event['description']}}</td>
				<td>

					<input type="checkbox" name="event[{{$event['id']}}]" value="{{$event['id']}}">
					<!-- <input hidden="hidden" type="text" name="event[{{$event['id']}}]['eventId']" value="{{$event['id']}}"> -->

				</td>
			</tr>
			@endforeach

		</tbody>
		</form>


	</table>
	<button class="btn btn-danger">Import</button>
		
</div>

@include('_includes.footer')
