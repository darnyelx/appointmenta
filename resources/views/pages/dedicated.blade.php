
	@include('_includes.header');
	
	<!--	Main Content 	-->
	<div class="main-content">
		<!--	Banner	-->
		<div class="dedicated-section section-1" id="" >
			<div class="section-overlay section-1-overlay"></div>
			<div class="container-fluid dedicated-section-content section-content section-1-content text-center" style="background-image: url({{asset('storage/'.json_decode($course->school_page_content)->schoolBanner)}});">
				<h4 class="section-content-header dedicated-section-1-header">												{{json_decode($course->page_content)->title}}
</h4>
				<div class="row">
					<div class="col">
						<p class="banner-content bounceIn"><span class="">Think</span> > Design > Create</p>
					</div>
				</div>
			</div>
		</div>

		<!--	Apply	-->
		<div class="container" id="apply-section">
			<div class="row">
				<div class="col">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6">
							<div class="course-detail oghas-material">
								<h4 style="color: rgba(103, 167, 255);">What You'll learn</h4>
									<?php echo	html_entity_decode( json_decode($course->page_content)->wywl)?>
								<span class="price">#{{json_decode($course->page_content)->price}}</span>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6">
							<div class="apply oghas-material">
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
				</div>
			</div>
		</div>
	</div>
		@include('_includes.footer');

	<!--	Main Content Ends	-->

