@extends('layouts.master')
@section('css')
	<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
	<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
	<link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
	<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
	<link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
	<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('title')
تقـاريــر - هيكل بيئة النظام
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
	<div class="my-auto">
		<div class="d-flex">
			<h4 class="content-title mb-0 my-auto">هيكل بيئة النظام</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ التقارير</span>
		</div>
	</div>
	
	<div class="d-flex my-xl-auto right-content">
		@if (!$setting)
		<div class="pr-1 mb-3 mb-xl-0">
			<button type="button" class="btn btn-primary  btn-icon ml-2"><a class="btn btn-sm" href="{{route('setting.create')}}"><i class="mdi mdi-plus"></i></a></button>
		</div>
		@endif
		<div class="pr-1 mb-3 mb-xl-0">
			<button type="button" class="btn btn-primary  btn-icon ml-2">تعديل</button>
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

@if (session()->has('add'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
	<strong>{{ session()->get('add') }}</strong>
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
@endif

@if (session()->has('delete'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
	<strong>{{ session()->get('delete') }}</strong>
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
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
<div class="row row-sm">
	<div class="col-xl-12">
		<div class="card">
			<div class="card-header pb-0">
				<div class="d-flex justify-content-between">
					{{-- <h4 class="card-title mg-b-0">تعديل</h4> --}}
					<i class="mdi mdi-dots-horizontal text-gray"></i>
				</div>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table text-md-nowrap" id="example1">
						<thead>
							<tr>
								<th class="wd-15p border-bottom-0">الحقـل</th>
								<th class="wd-15p border-bottom-0">التفاصيــل</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($setting as $s)
							<tr>
								<td >اسـم المنشـأة</td>
								<td>{{$s->name}}</td>
							</tr>
							<tr>
								<td>عنوان المنشـأة</td>
								<td>{{$s->address}}</td>
							</tr>
							<tr>
								<td>رقم الهاتـف</td>
								<td>{{$s->phone}}</td>
							</tr>
							<tr>
								<td>عدد ساعات العمل</td>
								<td>{{$s->hour}}</td>
							</tr>
							<tr>
								<td>بداية ساعات العمل</td>
								<td>{{$s->start}}</td>
							</tr>
							<tr>
								<td>نهايـة ساعات العمل</td>
								<td>{{$s->end}}</td>
							</tr>
							<tr>
								<td>يتم تسجيل وفت الحظور من بعد</td>
								<td>{{$s->after_count_time}}</td>
							</tr>
							@endforeach
							
						</tbody>
					</table>
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
	<!-- Internal Data tables -->
	<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
	<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
	<script src="{{URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
	<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
	<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
	<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
	<script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
	<script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
	<script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
	<script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
	<script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
	<script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
	<script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
	<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
	<script src="{{URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
	<!--Internal  Datatable js -->
	<script src="{{URL::asset('assets/js/table-data.js')}}"></script>
@endsection