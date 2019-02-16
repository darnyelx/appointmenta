	@include('_includes.header');
	<!--	Main Content 	-->
	<div class="main-content">
		<!--	Shool of?	-->
		<div class="section section-1" id="">
			<div class="section-overlay section-1-overlay"></div>
			<div class="container-fluid section-content section-1-content" style="background-image: url({{url('storage/'.json_decode($school->page_content)->schoolBanner)}});">
				<div class="col-sm">
					<h1 class="section-content-header">
						<em>
						</em>{{$school->school_name}}
					</h1>
					<p>
						{{json_decode($school->page_content)->title}}
					</p>
					<div class="row">
						<div class="col">
							<a href="#">
								<button class="btn oghastech-btn-1 oghastech-btn-1-secton-1">Get Started</button>
							</a>
						</div>
					</div>
					</div>
			</div>
		</div>

		<!--	More About Sectors	-->
		<div class="container" id="discover">
			<div class="row">
				<div class="col">
					<h3 class="discover-header">Discover the path to Your future</h3>
					<h4 style="display: inline-block; border-bottom: rgba(103, 167, 255) solid;">Courses</h4>
					<div class="row">
						<div class="col-md-3">
							<?php $iteratedQ = 0;?>
							<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
								@foreach($courses as $course)
									<a class="nav-link" id="v-pills-home-{{$course->id}}" data-toggle="pill" href="#course_{{$course->id}}" role="tab" aria-controls="course_{{$course->id}}" aria-selected="@if($iteratedQ == 0){{'true'}}@else{{'false'}}@endif">{{$course->course_name}}</a>
								<?php $iteratedQ++ ?>
								@endforeach
								
							</div>
						</div>
						<div class="col-md-9">
							<div class="tab-content oghas-material" id="v-pills-tabContent">
								<?php $iterated = 0;?>
								@foreach($courses as $course)
									<div class="tab-pane fade show @if($iterated == 0){{'active'}}@else{{''}}@endif" id="course_{{$course->id}}" role="tabpanel" aria-labelledby="v-pills-home-{{$course->id}}">
										<div class="course-detail text-muted">
											<h4 style="color: rgba(103, 167, 255);">{{$course->course_name}}</h4>
											<p>
												
												{{json_decode($course->page_content)->title}}
											</p>

											<h4 style="color: rgba(103, 167, 255);">What You'll learn</h4>

												<?php echo	html_entity_decode( json_decode($course->page_content)->wywl)?>
																								<span class="price">#{{json_decode($course->page_content)->price}}</span>

												<div class="apply">
													<h5 style="color: rgba(103, 167, 255);">Become A Student Today... Help Design The Future</h5>
													<form action="{{url('course/register/'.$course->id)}}" method="POST">
														@csrf
														<input type="text" name="fullname" class="form-control oghas-input oghas-material" placeholder="Fullname">
														<input type="email" name="email" class="form-control oghas-input oghas-material" placeholder="Email Address">
														<input type="number" name="number" class="form-control oghas-input oghas-material" placeholder="Phone number">
														<div class="apply-submit">
															<button class="btn btn-block">submit</button>
														</div>
													</form>
												</div>
											
										</div>
									</div>
									<?php $iterated++ ?>
								@endforeach
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--	Need Help?	-->
		<div class="section section-3" id="">
			<div class="section-overlay section-3-overlay"></div>
			<div class="container-fluid section-content section-3-content">
					<div class="row">
						<div class="col-md-8 text-center">
							<h2 class="section-3-content-header">Need help selecting a Oacademy program?</h2>
							<p class="section-3-content-text">
								Get in touch to receive more information on our available Oacademy programs and updates on new Oacademy programs to come.
							</p>
							<form action="">
								<div class="row">
									<div class="col-sm">
										<input type="text" name="fullname" class="form-control oghas-input oghas-material" placeholder="Fullname">
									</div>
									<div class="col-sm">
										<input type="text" name="email" class="form-control oghas-input oghas-material" placeholder="Email Address">
									</div>
								</div>
								<div class="row">
									<div class="col-sm text-center">
										<button class="btn section-3-btn" type="submit">Submit</button>
									</div>
								</div>
							</form>
						</div>
					</div>
			</div>
		</div>
	</div>
	<!--	Main Content Ends	-->
		@include('_includes.footer');

