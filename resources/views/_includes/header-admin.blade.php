<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>OAcademy</title>
	<link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{url('assets/fonts/font-awesome.min.css')}}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Exo:300,400,500,600,700,800,900">
	<link rel="stylesheet" href="{{url('assets/css/styles.css')}}">
	<link rel="stylesheet" href="{{url('overlaystyles.css')}}">

    <!-- Include external CSS. -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">
 
    <!-- Include Editor style. -->
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.2/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.2/css/froala_style.min.css" rel="stylesheet" type="text/css" />


</head>

<body class="oghas-font" style="background: rgba(211, 211, 211, 0.11)">

	<!--	Full Nav	-->
	<div>
		<!--	Nav	-->
		<nav class="navbar navbar-dark navbar-expand-md oghas-nav">
			<div class="container">
				<a class="navbar-brand" href="www.dev-oghas.com/public" id="oghas-logo"></a>
				<button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
					<span class="sr-only">
						Toggle navigation
					</span>
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-around navcol1-mobile" id="navcol-1" style="margin-bottom: 5px;">
					<ul class="nav navbar-nav">
						<li class="nav-item" role="presentation">
							<a class="nav-link" href="http://oghas.com/agric">OAGRIC</a>
						</li>
<!--
						<li class="nav-item" role="presentation">
							<a class="nav-link" href="#" target="_blank">OFASHION</a>
						</li>
-->
						<li class="nav-item" role="presentation">
							<a class="nav-link" href="http://oghas.com/academy" target="_blank">OACADEMY</a>
						</li>
						<li class="nav-item" role="presentation">
							<a class="nav-link" href="http://oghas.com/about-us" target="_blank">ABOUT US</a>
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
		<!--	Nav	-->
		<!--	Inner Nav	-->
		<nav class="navbar navbar-light navbar-expand bg-light d-flex" id="inner-nav">
			<div class="container">
				<button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
					<span class="sr-only">
						Toggle navigation
					</span>
					<span class="navbar-toggler-icon">
					</span>
				</button>
				<div class="collapse navbar-collapse" id="navcol-1">
					<ul class="nav navbar-nav m-auto">
						<li class="nav-item" role="presentation">
							<a class="nav-link" href="{{url('admin/courses')}}">Course Stats</a>
						</li>
						<li class="nav-item" role="presentation">
							<a class="nav-link" href="{{url('admin/schools')}}" target="schools">School Stats</a>
						</li>
						<li class="nav-item" role="presentation">
							<a class="nav-link" href="{{url('admin/school/create')}}" target="">Create School</a>
						</li>
						<li class="dropdown menu-mobile-more">
							<a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">More</a>
							<div class="dropdown-menu" role="menu">
								<a class="dropdown-item" role="presentation" href="{{url('admin/course/create')}}" target="">Create Course</a>
								<a class="dropdown-item" role="presentation" href="applicants" target="">Reg Users</a>
							</div>
						</li>
						<li class="nav-item menu-mobile" role="presentation">
							<a class="nav-link" href="{{url('admin/course/create')}}" target="">Create Course</a>
						</li>
						<li class="nav-item menu-mobile" role="presentation">
							<a class="nav-link" href="{{url('admin/course/applicants/')}}" target="">Applicants</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!--	Inner Nav	-->
	</div>
	<!--	Full Nav	-->
