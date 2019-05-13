	@include('_includes.header-admin')
	
	<div class="container inputs">
		<div class="row">
			<div class="col">
				<form action="@if(isset($appointmentDet))
					{{url('client/appointment/edit/save/'.$appointmentDet->id)}}
				@else
					{{url('client/appointment/create/save')}}
				@endif" method="post" enctype="multipart/form-data">
					@csrf
					<label>Appointment Title</label>
					<input class="form-control" name="title" value="@if(isset($appointmentDet)){{$appointmentDet->title}}@endif" type="text" placeholder="Appointment Title">
					<br><br>
					
				
					<label>Appointment Venue</label>
					<input class="form-control" name="venue" type="text" value="@if(isset($appointmentDet)){{$appointmentDet->venue}}@endif" placeholder="write here">
					<br><br>
					<label>Appointment Date</label>
					<input class="form-control" name="date" type="date" value="@if(isset($appointmentDet)){{$appointmentDet->date}}@endif" placeholder="write here">
					<br><br>
					<label>Appointment Details</label>
					<textarea class="form-control textarea" name="description">@if(isset($appointmentDet)){{json_decode($appointmentDet->description)}}@endif</textarea>
					
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
		<p style="text-align: center; color: black; font-size: 15px;color: white;">Appointment Maker &#169;</p>
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
