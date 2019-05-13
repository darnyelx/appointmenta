@include('_includes.header-admin')

<div class="container school-stats">
	<?php $sn = 1 ?>
	<form class="form-inline sort-bar" action="/client/appointments">
	  <div class="form-group">
	    <label for="email">Appointments From:</label>
	    <input type="date"  name="appFrom" class="form-control" id="email">
	  </div>
	  <div class="form-group">
	    <label for="email">Appointments On:</label>
	    <input type="date" name="appOn" class="form-control" id="email">
	  </div>
	  <div class="form-group">
	    <label for="email">Appointment Title</label>
	    <input type="text" name="appTitle" class="form-control" id="email">
	  </div>
	 
	  <button type="submit" class="btn btn-info">Submit</button>
	</form>

	@if(sizeof($appointments) < 1 )
			No appointments 
	@else
	<table class="table table-bordered table-striped" style="overflow:auto;">
		<thead>
			<tr class="thead-dark">
				<th>SN</th>
				<th>Title</th>
				<th>Venue</th>
				<th>Due Date</th>
				<th>Detais</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>

			@foreach($appointments as $appointment)
			<tr>
				<td>{{$sn++}}</td>
				<td>{{$appointment->title}}</td>
				<td>{{$appointment->venue}}</td>

				<td>{{date ('jS F Y',strtotime($appointment->date))}}</td>
				<td><?php echo json_decode($appointment->description); ?></td>
				<td>

					<div class="d-flex flex-wrap justify-content-left ">
						<a href="{{url('client/appointment/delete/'.$appointment->id)}}" class="btn btn-danger" style="margin-right: 2px;">Delete</a>
						<a href="{{url('client/appointment/edit/'.$appointment->id)}}" class="btn btn-primary">Edit</a>
					</div>

				</td>
			</tr>
			@endforeach

		</tbody>
	</table>
  @endif
<!-- 	pagination stuffs
 -->			
 {{$appointments->links()}}
</div>

@include('_includes.footer')
