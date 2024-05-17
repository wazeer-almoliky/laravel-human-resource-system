@extends('layouts.master2')
@section('css')
<!-- Sidemenu-respoansive-tabs css -->
<link href="{{URL::asset('assets/plugins/sidemenu-responsive-tabs/css/sidemenu-responsive-tabs.css')}}" rel="stylesheet">
@endsection
@section('title')
صلاحيـات المستخدمين
@endsection
@section('content')
		<div class="container-fluid">
			<div class="row no-gutter" style="display: flex; justify-content: center;">

				<!-- The content half -->
				<div class="col-md-6 col-lg-6 col-xl-5 bg-white">
					<div class="login d-flex align-items-center py-2">
						<!-- Demo content-->
						<div class="container p-0">
							<div class="row">
								<div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
									<div class="card-sigin">
										
										<div class="main-signup-header">
											<h3 style="text-align: center">صلاحيــات المستخدمين</h3>
											<form action="{{route('user.storePermission')}}" method="POST">
												@csrf
												<div class="row">
                                                    <div class="col">
                                                        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">المستخدم</label>
                                                        <select name="user" id="section_id" class="form-control" required>
                                                            <option value="" selected disabled> --حدد المستخدم--</option>
                                                            @foreach ($users as $user)
                                                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                            @endforeach
                                                        </select>
                                                   </div>
                                                    <div class="col">
                                                        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">الدور</label>
                                                        <select name="role" id="section_id" class="form-control" required>
                                                            <option value="" selected disabled> --حدد الدور--</option>
                                                            @foreach ($roles as $role)
                                                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                            @endforeach
                                                        </select>
                                                   </div>                                                   
                                                </div>
                                                <div class="row" style="display: flex;flex-wrap:wrap; justify-content:space-evenly;">
                                                    <div style="display: inline-block;">
                                                        @foreach ($permissions as $permission)
                                                        <div style="display: inline-block; margin:5px 20px">
                                                            <input type="checkbox" name="permissions[]" id="{{$permission->id}}" value="{{$permission->id}}">
                                                        <label for="{{$permission->id}}">{{$permission->name}}</label>
                                                        </div>
                                                    @endforeach
                                                    </div>
                                                </div>
                                                <button class="btn btn-main-primary btn-block">حفـظ البيانات</button>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div><!-- End -->
					</div>
				</div><!-- End -->
			</div>
		</div>
@endsection
@section('js')
@endsection