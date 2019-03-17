	@include('_includes.header-admin')
	
	<div class="container inputs">
		<div class="row">
			<div class="col">
				<form action="@if(isset($courseDet))
					{{url('admin/course/edit/save/'.$courseDet->id)}}
				@else
					{{url('admin/course/create/save')}}
				@endif" method="post" enctype="multipart/form-data">
					@csrf
					<label>Course Name</label>
					<input class="form-control" name="courseName" value="@if(isset($courseDet)){{$courseDet->course_name}}@endif" type="text" placeholder="write here">
					<br><br>
					<label>Course Title</label>
					<input class="form-control" name="courseTitle" value="@if(isset($pageContent)){{$pageContent->title}}@endif" type="text" placeholder="write here">
					<br><br>
					<label>Select School</label>
					<select class="form-control" name="school">
						@foreach ($schools as $school)
						<option value="{{$school->id}}" 
						@if( isset( $courseDet) && $school->id == $courseDet->school)
						{{'selected = selected'}}
						@endif
						>{{$school->school_name}}</option>
						@endforeach
					</select>
					<br><br>
					<label>Price</label>
					<input class="form-control" name="price" type="number" value="@if(isset($pageContent)){{$pageContent->price}}@endif" placeholder="write here">
					<br><br>
					<label>What You Would Learn</label>
					<textarea class="form-control textarea" name="wywl">@if(isset($pageContent)){{$pageContent->wywl}}@endif</textarea>
					
					<!-- <div class="input-group mb-3">
						<div class="custom-file">
							<input type="file" class="custom-file-input" name="schoolBanner" id="inputGroupFile02">
							<label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file(Banner)</label>
						</div>
						
					</div> -->
					<br>
					<button role="" class="btn">Submit</button>
				</form>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<footer class="">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 footer-navigation text-center"><a href="#"><img src="assets/img/Oagric_Transparent.png"></a>
					<h3>...just technology</h3>
					<p class="links">
						<a href="/OghasTech/">Home</a>
						<strong> · </strong>
						<a href="/OghasTech/about-us.html#our-team">Our Team</a>
						<strong> · </strong>
						<a href="#">Faq</a>
						<strong> · </strong>
						<a href="/OghasTech/about-us.html">About US</a>
					</p>
					<p class="company-name">Oghas Technology © 2015 </p>
				</div>
				<div class="col-sm-6 col-md-4 offset-0 d-flex flex-column justify-content-around align-self-center footer-contacts text-center">
					<h4>Reach Us</h4>
					<div><span class="fa fa-map-marker footer-contacts-icon"> </span>
						<p><span class="new-line-span">11, Gbadamosi Street,</span> Lagos, Nigeria</p>
					</div>
					<div><i class="fa fa-phone footer-contacts-icon"></i>
						<p class="footer-center-info email text-left">+234 800 123 1234</p>
					</div>
					<div><i class="fa fa-envelope-o footer-contacts-icon"></i>
						<p class="footer-center-info email text-left"> support<span class="new-line-span">@oghas.com</span></p>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="col-md-4 d-flex flex-column justify-content-around footer-about text-center">
					<a href="#">
						<h4>Who Are we?</h4>
					</a>
					<p> Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet. </p>
					<div class="footer-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-youtube"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer Ends -->

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/js/bs-animation.js"></script>
	<script src="../Assets/js/Paralax-Hero-Banner.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>
 
  <!-- Include Editor JS files. -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@2.9.2/js/froala_editor.pkgd.min.js"></script>
 
  <!-- Initialize the editor. -->
  <script> $(function() { $('.textarea').froalaEditor() }); </script>
</body>

</html>
