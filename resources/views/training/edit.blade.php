@extends('layouts.master')
@section('css')
 <!--- Internal Select2 css-->
 <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
 <!---Internal Fileupload css-->
 <link href="{{ URL::asset('assets/plugins/fileuploads/css/fileupload.css') }}" rel="stylesheet" type="text/css" />
 <!---Internal Fancy uploader css-->
 <link href="{{ URL::asset('assets/plugins/fancyuploder/fancy_fileupload.css') }}" rel="stylesheet" />
 <!--Internal Sumoselect css-->
 <link rel="stylesheet" href="{{ URL::asset('assets/plugins/sumoselect/sumoselect-rtl.css') }}">
 <!--Internal  TelephoneInput css-->
 <link rel="stylesheet" href="{{ URL::asset('assets/plugins/telephoneinput/telephoneinput-rtl.css') }}">
@endsection
@section('title')
تعديل - تدريـب
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
	<div class="my-auto">
		<div class="d-flex">
			<h4 class="content-title mb-0 my-auto">تدريـب</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ تعديل</span>
		</div>
	</div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')

	@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	
	@if (session()->has('update'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('update') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
<!-- row -->
<div class="row">
	<div class="col-lg-12 col-md-12">>
		<div class="card">
			<div class="card-body">
				<form action="{{route('training.update',$training->id)}}" method="post">

					@method('PUT')
					@csrf

					{{-- 2 --}}
					<div class="row">
						   <div class="col">
								<label class="my-1 mr-2" for="inlineFormCustomSelectPref">الموظـف</label>
								<select name="employee" id="section_id" class="form-control" required>
									<option value="" selected disabled> --حدد الموظـف--</option>
									@foreach ($employees as $employee)
										<option value="{{ $employee->id }}">{{ $employee->name }}</option>
									@endforeach
								</select>
						   </div>
						   <div class="col">
								<label class="my-1 mr-2" for="inlineFormCustomSelectPref">الدورة</label>
								<select name="course" id="section_id" class="form-control" required>
									<option value="" selected disabled> --حدد الدورة--</option>
									@foreach ($courses as $course)
										<option value="{{ $course->id }}">{{ $course->name }}</option>
									@endforeach
								</select>
						   </div>

							<div class="col">
								<label for="inputName" class="control-label"> تـأريخ الطلب</label>
								<input type="text" class="form-control fc-datepicker" id="inputName" name="date"
								placeholder="YYYY-MM-DD" value="{{ $training->id }}">
							</div>
						</div>

					</div>

					<div class="d-flex justify-content-center">
						<button type="submit" class="btn btn-primary">حفظ البيانات</button>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>
<!-- row closed -->
</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection
@section('js')
    <!-- Internal Select2 js-->
    <script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <!--Internal Fileuploads js-->
    <script src="{{ URL::asset('assets/plugins/fileuploads/js/fileupload.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fileuploads/js/file-upload.js') }}"></script>
    <!--Internal Fancy uploader js-->
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.ui.widget.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.fileupload.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.iframe-transport.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/fancy-uploader.js') }}"></script>
    <!--Internal  Form-elements js-->
    <script src="{{ URL::asset('assets/js/advanced-form-elements.js') }}"></script>
    <script src="{{ URL::asset('assets/js/select2.js') }}"></script>
    <!--Internal Sumoselect js-->
    <script src="{{ URL::asset('assets/plugins/sumoselect/jquery.sumoselect.js') }}"></script>
    <!--Internal  Datepicker js -->
    <script src="{{ URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>
    <!--Internal  jquery.maskedinput js -->
    <script src="{{ URL::asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js') }}"></script>
    <!--Internal  spectrum-colorpicker js -->
    <script src="{{ URL::asset('assets/plugins/spectrum-colorpicker/spectrum.js') }}"></script>
    <!-- Internal form-elements js -->
    <script src="{{ URL::asset('assets/js/form-elements.js') }}"></script>

	{{-- <script>
        var date = $('.fc-datepicker').datepicker({
            dateFormat: 'yy-mm-dd'
        }).val();

    </script> --}}

@endsection