
	@include('_includes.header');
	
	<!--	Main Content 	-->
	<div class="main-content">
		<!--	Banner	-->
		<div class="dedicated-section section-1" id="">
			<div class="section-overlay section-1-overlay"></div>
			<div class="container-fluid dedicated-section-content section-content section-1-content text-center">
				<h4 class="section-content-header dedicated-section-1-header">Become a Front-End Developer</h4>
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
								<ul>
									<li>HTML5, CSS</li>
									<li>Javascript, JQuery, Bootstrap</li>
									<li>Introduction to UI/UX Designs</li>
									<li>Web App Optimizations</li>
								</ul>

								<span class="price">#100,000</span>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6">
							<div class="apply oghas-material">
								<h5 style="color: rgba(103, 167, 255);">Become A Student Today... Help Design The Future</h5>
								<form action="{{url('course/register/2')}}" method="POST">
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

