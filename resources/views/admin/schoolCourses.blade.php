	@include('_includes.header-admin');


	<!--	Header	-->
	<nav class="navbar navbar-dark navbar-expand-md oghas-nav fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#" id="oghas-logo"></a>
			<button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
				<span class="sr-only">
					Toggle navigation
				</span>
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-around navcol1-mobile" id="navcol-1" style="margin-bottom: 5px;">
				<ul class="nav navbar-nav">
					<li class="nav-item" role="presentation">
						<a class="nav-link" href="#">OAGRIC</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" href="#" target="_blank">OFASHION</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" href="#" target="_blank">OACADEMY</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" href="#" target="_blank">ABOUT US</a>
					</li>

				</ul>
				<form class="form-inline" method="post" id="header-subscribe">
					<div class="input-group">
						<input type="email" name="email" class="form-control form-control-sm oghas-input" placeholder="Subscribe for newsletter" aria-describedby="basic-addon">
						<div class="input-group-append">
							<button class="btn btn-primary btn-sm oghas-input" type="submit" style="">
								<i class="fa fa-envelope-o"></i>
							</button>
						</div>
					</div>
				</form>
				<span class="navbar-text header-social">
					<a class="text-monospace text-dark" href="#facebook.com/oghastech" target="_blank">
						<i class="fa fa-facebook-square"></i>
					</a>
					<a class="text-monospace text-dark" href="#twitter.com/oghastech" target="_blank">
						<i class="fa fa-twitter"></i>
					</a>
					<a class="text-monospace text-dark" href="#youtube.com/oghastech" target="_blank">
						<i class="fa fa-youtube"></i>
					</a>
				</span>
				<form class="form-inline">
					<input class="form-control form-control-sm oghas-input" type="text" name="search" placeholder="Search" id="header-search">
				</form>
			</div>
		</div>
	</nav>
	<!--	Header	-->

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
								<a href="{{url('admin/school/activate/'.$course->courseId)}}" class="btn btn-success btn-sm" style="border-radius: 0px;">Activate</a >
							@endif
							<a href="{{url('admin/school/edit/'.$course->courseId)}}" class="btn btn-info btn-sm" style="margin-left: 5px;border-radius: 0px;">Edit</a >
							<a href="{{url('course/'.$course->courseId)}}" class="btn btn-info btn-sm" style="margin-left: 5px;border-radius: 0px;">view</a >
							<a href="{{url('admin/applicants/'.$course->courseId)}}" class="btn btn-info btn-sm" style="margin-left: 5px;border-radius: 0px;">Applicants</a>
							
						</div>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@include('_includes.footer');
