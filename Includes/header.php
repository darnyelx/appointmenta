<!--	Header	-->

		<nav class="navbar navbar-dark navbar-expand-md oghas-nav">
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

		<!--	Header Styles	-->
		<style>
			/*Header Start*/
		/*
		#oghas-logo {
			background-image: url("../../assets/img/Oagric_Transparent.png");
			background-size: contain;
			background-repeat: no-repeat;
			background-position: center;
			padding: 35px;
		}
		*/

		.oghas-nav {
			top: 0;
			position: static;
			z-index: 999;
			box-shadow: 0px 0px 20px 8px rgba(80, 96, 80, 0.31);
			padding: 0px;
			/*	width: 100%;*/
			margin: 0 auto !important;
			/*	margin-top: 7px;*/
		}

		.oghas-nav .nav-link {
			color: white !important;
		}

		#inner-nav .nav-link.active {
			color: green !important;
			border-bottom: solid 3px rgba(0, 128, 0, 0.54);
		}

		button.navbar-toggler {
			color: white;
			border: white solid 1px !important;
			background-image:
		}

		#header-subscribe .btn {
			border: solid 1px white;
			border-radius: 5px;
			border-top-left-radius: 0px;
			border-bottom-left-radius: 0px;
			color: grey !important;
			border-left: 1px green solid;
		}

		#header-subscribe .btn:hover {
			background: white !important;
		}

		.header-social i {
			font-size: 30px;
			color: #fff !important;
			margin-right: 10px !important;
		}

		.header-social a:hover {
			text-decoration: none !important;
		}

		input#header-search {
			width: 70px;
			/*	-webkit-transition: width 0.4s ease-in-out;*/
		/*	transition: width 0.4s ease-in;*/
		}

		@media (max-width: 768px) {

			input#header-search {
				width: 65px;
				-webkit-transition: width 0s ease-in-out;
				transition: width 0s ease-in-out;
			}
		}

		@media (max-width: 575px) {

			input#header-search {
				width: 50%;
				-webkit-transition: width 0.4s ease-in-out;
				transition: width 0.4s ease-in-out;
			}
		}

		@media (max-width: 768px) {
			.menu-mobile {
				display: none;
			}
		}

		@media (min-width: 768px) {
			.menu-mobile-more {
				display: none;
			}
		}

		@media (max-width: 575.98px) {
			.navbar-expand-sm > .container {
				padding: 0 15px;
			}
		}

		nav#inner-nav {
			width: 100%;
		}
		/*Header End*/

		</style>
		<!--	Header Styles	-->

<!--	Header	-->
