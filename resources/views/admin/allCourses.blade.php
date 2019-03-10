@include('_includes.header-admin')

<div class="container school-stats">
	<?php $sn = 1 ?>
	<table class="table table-bordered table-striped" style="overflow:auto;">
		<thead>
			<tr class="thead-dark">
				<th>SN</th>
				<th>course</th>
				<th>school</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach($courses as $course)
			<tr>
				<td>{{$sn++}}</td>
				<td>{{$course->course_name}}</td>
				<td>{{$course->school_name}}</td>
				<td>

					<div class="d-flex flex-wrap justify-content-left ">
						@if($course->status == 1)
						<a href="{{url('admin/school/deactivate/'.$course->courseId)}}" class="btn btn-success btn-sm" style="border-radius: 0px;">De-Activate</a>
						@elseif($course->status == 2)
						<a href="{{url('admin/school/activate/'.$course->courseId)}}" class="btn btn-success btn-sm" style="border-radius: 0px;">Activate</a>
						@endif

						@if($course->promote == 1)
						<a href="{{url('admin/unpromote/courses/'.$course->courseId)}}" class="btn btn-success btn-sm" style="margin-left: 5px;border-radius: 0px;">Unpromote</a href="">
						@elseif($course->promote == 2)
						<a href="{{url('admin/promote/courses/'.$course->courseId)}}" class="btn btn-success btn-sm" style="margin-left: 5px;border-radius: 0px;">Promote</a href="">
						@endif

						<a href="{{url('admin/course/edit/'.$course->courseId)}}" class="btn btn-info btn-sm" style="margin-left: 5px;border-radius: 0px;">Edit</a>
						<a href="{{url('course/'.$course->courseId)}}" class="btn btn-info btn-sm" style="margin-left: 5px;border-radius: 0px;">view</a>
						<a href="{{url('admin/applicants/'.$course->courseId)}}" class="btn btn-info btn-sm" style="margin-left: 5px;border-radius: 0px;">Applicants</a>

				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

@include('_includes.footer')
