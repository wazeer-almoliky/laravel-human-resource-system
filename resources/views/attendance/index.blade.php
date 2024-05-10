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
تقـاريــر - الموظفين
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
	<div class="my-auto">
		<div class="d-flex">
			<h4 class="content-title mb-0 my-auto">الموظفين</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ التقارير</span>
		</div>
	</div>
	<div class="d-flex my-xl-auto right-content">
		<div class="pr-1 mb-3 mb-xl-0">
			<button type="button" class="btn btn-primary  btn-icon ml-2"><i class="mdi mdi-plus"></i></button>
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
<div class="row">
	<div class="col-xl-12">
		<div class="card mg-b-20">
			<div class="card-header pb-0">
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table id="example1" class="table key-buttons text-md-nowrap" data-page-length='50'>
						<thead>
							<tr>
								<th class="border-bottom-0">#</th>
								<th class="border-bottom-0">اسم الموظـف</th>
								<th class="border-bottom-0">عنوان الموظـف</th>
								<th class="border-bottom-0">رقم الموظـف</th>
								<th class="border-bottom-0">القسم</th>
								<th class="border-bottom-0">الـراتب</th>
								<th class="border-bottom-0">الحالـة</th>
								<th class="border-bottom-0">العمليات</th>

							</tr>
						</thead>
						<tbody>
							<?php $i = 0; ?>
							@foreach ($employees as $employee)
								<?php $i++; ?>
								<tr>
									<td>{{ $i }}</td>
									<td>{{ $employee->name }}</td>
									<td>{{ $employee->address }}</td>
									<td>{{ $employee->phone }}</td>
									<td>{{ $employee->department->name }}</td>
									<td>{{ $employee->salary }}</td>
									<td>{{ $employee->state }}</td>
									<td>
										<a class=" btn btn-sm btn-info"  href="{{route('attendance.edit',$employee->id)}}" title="تعديل"><i class="las la-pen"></i></a>
									{{-- <!-- @endcan --> --}}

									{{-- <!-- @can('حذف قسم') --> --}}
									<a class=" btn btn-sm btn-danger"  href="{{route('attendance.destroy',$employee->id)}}" title="حذف"><i class="las la-trash"></i></a>
										{{-- @endcan --}}

									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
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