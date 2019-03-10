@include('_includes.header-admin')

<div class="container school-stats">
	<?php $sn = 1 ?>
	<table class="table table-bordered table-striped" style="overflow:auto;">
		<thead>
			<tr class="thead-dark">
				<th>SN</th>
				<th>School</th>
				<th>Explanation</th>
				<th>Images</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach($schools as $school)
			<tr>
				<td>{{$sn++}}</td>
				<td>{{$school->school_name}}</td>
				<td>
					<p class="">
						{{json_decode($school->page_content)->title}}
					</p>
				</td>
				<td>
					<img src="{{url('storage/'.json_decode($school->page_content)->schoolBanner)}}" style="width: 50px;">
				</td>
				<td>
					<div class="d-flex flex-wrap justify-content-left ">
						@if($school->status == 1)
						<a href="{{url('admin/school/deactivate/'.$school->id)}}" class="btn btn-success btn-sm" style="border-radius: 0px;">De-Activate</a href="">
						@elseif($school->status == 2)
						<a href="{{url('admin/school/activate/'.$school->id)}}" class="btn btn-success btn-sm" style="border-radius: 0px;">Activate</a href="">
						@endif

						@if($school->promote == 1)
						<a href="{{url('admin/unpromote/schools/'.$school->id)}}" class="btn btn-success btn-sm" style="margin-left: 5px;border-radius: 0px;">Unpromote</a href="">
						@elseif($school->promote == 2)
						<a href="{{url('admin/promote/schools/'.$school->id)}}" class="btn btn-success btn-sm" style="margin-left: 5px;border-radius: 0px;">Promote</a href="">
						@endif
						<a href="{{url('admin/school/edit/'.$school->id)}}" class="btn btn-info btn-sm" style="margin-left: 5px;border-radius: 0px;">Edit</a href="">
						<a href="{{url('admin/school/courses/'.$school->id)}}" class="btn btn-dark btn-sm" style="margin-left: 5px;border-radius: 0px;">View Courses</a href="">
						<a href="{{url('admin/course/create')}}" class="btn btn-dark btn-sm" style="margin-left: 5px;border-radius: 0px;">Add Course</a href="">
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

@include('_includes.footer')