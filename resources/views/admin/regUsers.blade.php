@include('_includes.header-admin')

<div class="container school-stats">
	<?php $sn = 1 ?>
	<table class="table table-bordered table-striped" style="overflow:auto;">
		<thead>
			<tr class="thead-dark">
				<th>SN</th>
				<th> Name</th>
				<th>Email </th>
				<th>Phonenumber</th>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $user)
			<tr>
				<td>{{$sn++}}</td>
				<td>{{$user->name}}</td>
				<td>
					{{$user->email}}
				</td>
				<td>
					{{$user->phonenumber}}
				</td>

			</tr>
			@endforeach
		</tbody>
	</table>
</div>

@include('_includes.footer')