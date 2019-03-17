@include('_includes.header-admin')

<div class="container school-stats">
	<?php $sn = 1 ?>
	<table class="table table-bordered table-striped" style="overflow:auto;">
		<thead>
			<tr class="thead-dark">
				<th>SN</th>
				<th>Course Name</th>
				<th>Course Title</th>
				<th>Applicants</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach($courses as $course)
			<tr>
				<td>{{$sn++}}</td>
				<td>{{$course->course_name}}</td>
				<td>
					<p class="">
						{{json_decode($course->page_content)->title}}
					</p>
				</td>
				<td>
					{{$course->registered}}
				</td>
				<td>
					<div class="d-flex flex-wrap justify-content-left ">
						@if($course->status == 1)
						<a href="{{url('admin/school/deactivate/'.$course->courseId)}}" class="btn btn-success btn-sm" style="border-radius: 0px;">De-Activate</a>
						@elseif($course->status == 2)
						<a href="{{url('admin/school/activate/'.$course->courseId)}}" class="btn btn-success btn-sm" style="border-radius: 0px;">Activate</a>
						@endif
						<a href="{{url('admin/school/edit/'.$course->courseId)}}" class="btn btn-info btn-sm" style="margin-left: 5px;border-radius: 0px;">Edit</a>
						<a href="{{url('course/'.$course->courseId)}}" class="btn btn-info btn-sm" style="margin-left: 5px;border-radius: 0px;">view</a>
						<a href="{{url('admin/applicants/'.$course->courseId)}}" class="btn btn-info btn-sm" style="margin-left: 5px;border-radius: 0px;">Applicants</a>

					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

@include('_includes.footer')