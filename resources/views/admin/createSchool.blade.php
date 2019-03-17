@include('_includes.header-admin')

<div class="container inputs">
	<div class="row">
		<div class="col">
			<form action="
			@if($schoolDet != NULL)
				{{url('admin/school/edit/save/'.$schoolDet->id)}}
			@else
				{{url('admin/school/create/save')}}
			@endif
			" method="post" enctype="multipart/form-data">
				@csrf
				<label>Shool Name</label>
				<input class="form-control" name="schoolName" value="@if($schoolDet != NULL){{$schoolDet->school_name}}@endif" type="text" placeholder="write here">
				<br><br>
				<label>Header Title</label>
				<input  class="form-control"  name="schoolTitle" value="@if($schoolDet != NULL){{json_decode($schoolDet->page_content)->title}}@endif" type="text" placeholder="write here">
				<br><br>
				@if($schoolDet != Null)
				<label>Banner Image	Url</label>
				<input  class="form-control" type="text" name="editImage" value="{{json_decode($schoolDet->page_content)->schoolBanner}}" >
				<br><br>
				@endif
						@if($schoolDet != Null)
							<label>Change Banner Image	Url</label>
						@endif
				<div class="input-group mb-3">
					<div class="custom-file">

						<input type="file" class="custom-file-input" name="schoolBanner" id="inputGroupFile02">
						<label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file(Banner)</label>
					</div>

				</div>
				<br>
				<button role="" class="btn">Submit</button>
			</form>
		</div>
	</div>
</div>
	
@include('_includes.footer')