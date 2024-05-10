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
تعديل - موظف
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
	<div class="my-auto">
		<div class="d-flex">
			<h4 class="content-title mb-0 my-auto">موظف</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ تعديل</span>
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
				<form action="{{route('employee.update',$employee->id)}}" method="post">
					@method('PUT')
					@csrf
					{{-- 1 --}}
					<div class="row">
						<div class="col">
							<label for="inputName" class="control-label">اسـم الموظـف</label>
							<input type="text" class="form-control" id="inputName" name="name"
								title="يرجي ادخال اسـم الموظـف" required value="{{$employee->name}}">
						</div>

						<div class="col">
							<label for="inputName" class="control-label">عنوان الموظـف</label>
							<input type="text" class="form-control" id="inputName" name="address"
								title="يرجي ادخال عنوان الموظـف" required value="{{$employee->address}}">
						</div>

						<div class="col">
							<label for="inputName" class="control-label">رقم الهاتـف</label>
							<input type="number" class="form-control" id="inputName" name="phone"
								title="يرجي ادخال رقم الهاتـف" required value="{{$employee->phone}}">
						</div>

					</div>

					{{-- 2 --}}
					<div class="row">
						<div class="col">
							<label class="my-1 mr-2" for="inlineFormCustomSelectPref">القسم</label>
                            <select name="department" id="section_id" class="form-control" required>
                                <option value="" selected disabled> --حدد القسم--</option>
                                @foreach ($departments as $department)
                                    <option value="{{ $department->id }}">{{ $department->name }}</option>
                                @endforeach
                            </select>
						</div>

						<div class="col">
							<label for="inputName" class="control-label">الـراتب</label>
							<input type="number" class="form-control" id="inputName" name="salary"
								title="الـراتب" required value="{{$employee->salary}}">
						</div>

						<div class="col">
							<label class="my-1 mr-2" for="inlineFormCustomSelectPref">الحالـة</label>
                            <select name="state" id="section_id" class="form-control" required>
                                <option value="0" selected>غير فعـال</option>
                                <option value="1" selected>فعـال</option>
                            </select>
						</div>

					</div>

					<div class="d-flex justify-content-center">
						<button type="submit" class="btn btn-primary">تعديل البيانات</button>
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