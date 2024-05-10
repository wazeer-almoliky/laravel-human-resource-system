@extends('layouts.master')
@section('css')
@endsection
@section('title')
تقارير المستخدمين
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">المستخدمين</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ التقارير</span>
						</div>
					</div>
                    <div class="d-flex my-xl-auto right-content">
                        <div class="pr-1 mb-3 mb-xl-0">
                            <button type="button" class="btn btn-primary  btn-icon ml-2"><a class="btn btn-sm" href="{{route('user.create')}}"><i class="mdi mdi-plus"></i></a></button>
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
                                                <th class="border-bottom-0">اسم المستخدم</th>
                                                <th class="border-bottom-0">البريـد الالكترونـي</th>
                                                <th class="border-bottom-0">الحالـة</th>
                                                <th class="border-bottom-0">العمليات</th>
                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 0; ?>
                                            @foreach ($users as $user)
                                                <?php $i++; ?>
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->status ==0?"غير فعال":"فعال" }}</td>
                                                    <td>
                                                        <a class=" btn btn-sm btn-info"  href="{{route('user.edit',$user->id)}}" title="تعديل"><i class="las la-pen"></i></a>
                                                    {{-- <!-- @endcan --> --}}
                
                                                    {{-- <!-- @can('حذف قسم') --> --}}
                                                    <a class=" btn btn-sm btn-danger"  href="{{route('user.destroy',$user->id)}}" title="حذف"><i class="las la-trash"></i></a>
                
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
@endsection