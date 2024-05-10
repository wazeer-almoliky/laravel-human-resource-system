@extends('layouts.master2')
@section('css')
<!-- Sidemenu-respoansive-tabs css -->
<link href="{{URL::asset('assets/plugins/sidemenu-responsive-tabs/css/sidemenu-responsive-tabs.css')}}" rel="stylesheet">
@endsection
@section('title')
 انشاء حساب مستخدم
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
											
											<form action="{{route('user.store')}}" method="POST">
												@csrf
												<div class="form-group">
													<label>اسـم المستخدم</label> <input class="form-control" placeholder="" type="text" name="name">
												</div>
												<div class="form-group">
													<label>البريـد الالكترونـي</label> <input class="form-control" placeholder="" type="text" name="email">
												</div>
												<div class="form-group">
													<label>كلمـة المرور</label> <input class="form-control" placeholder="" type="password" name="password">
												</div><button class="btn btn-main-primary btn-block">حفـظ البيانات</button>
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