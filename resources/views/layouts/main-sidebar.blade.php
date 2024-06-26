<!-- main-sidebar -->
		<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
		<aside class="app-sidebar sidebar-scroll">
			<div class="main-sidebar-header active">
				{{-- <a class="desktop-logo logo-light active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/img/brand/logo.png')}}" class="main-logo" alt="logo"></a> --}}
				{{-- <a class="desktop-logo logo-dark active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/img/brand/logo-white.png')}}" class="main-logo dark-theme" alt="logo"></a>
				<a class="logo-icon mobile-logo icon-light active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/img/brand/favicon.png')}}" class="logo-icon" alt="logo"></a>
				<a class="logo-icon mobile-logo icon-dark active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/img/brand/favicon-white.png')}}" class="logo-icon dark-theme" alt="logo"></a> --}}
			</div>
			<div class="main-sidemenu">
				<div class="app-sidebar__user clearfix">
					<div class="dropdown user-pro-body">
						<div class="">
							<img alt="user-img" class="avatar avatar-xl brround" src="{{URL::asset('assets/img/faces/6.jpg')}}"><span class="avatar-status profile-status bg-green"></span>
						</div>
						<div class="user-info">
							<h4 class="font-weight-semibold mt-3 mb-0">{{Auth::user()->name}}</h4>
							{{-- <span class="mb-0 text-muted">Premium Member</span> --}}
						</div>
					</div>
				</div>
				<ul class="side-menu">
					<li class="slide">
						<a class="side-menu__item" href="{{ url('/') }}" ><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/><path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/></svg><span class="side-menu__label" style="font-weight: bold">الرئيسيـة</span></a>
					</li>
					@role('اعدادات بيئة المنشأة')					
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='setting') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3"/><path d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/></svg><span class="side-menu__label"style="font-weight: bold">اعدادات بيئة المنشأة</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							@role('الاعـدادات العـامة')
							<li><a class="slide-item" href="{{ route('setting.create') }}" style="font-size:1em">الاعـدادات العـامة</a></li>
							@endrole
							@role('عرض الاعـدادات')
							<li><a class="slide-item" href="{{ url('/' . $page='setting') }}" style="font-size:1em">عرض الاعـدادات</a></li>
							@endrole
							@role('اعدادات جهاز البصمة')
							<li><a class="slide-item" href="{{ url('/' . $page='setting') }}" style="font-size:1em">اعدادات جهاز البصمة</a></li>
							@endrole
						</ul>
					</li>
					@endrole
					@role('الاقسام')
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='department') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3"/><path d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/></svg><span class="side-menu__label"style="font-weight: bold">الاقسام</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							@role('اضافة قســم')
							<li><a class="slide-item" href="{{ route('department.create') }}"style="font-size:1em">اضافة قســم</a></li>
							@endrole
							@role('عرض الاقسام')
							<li><a class="slide-item" href="{{ url('/' . $page='department') }}"style="font-size:1em">عرض الاقسام</a></li>
							@endrole
						</ul>
					</li>
					@endrole
					@role('الدورات التدريبية')
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3"/><path d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/></svg><span class="side-menu__label"style="font-weight: bold">الدورات التدريبية</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							@role('اضافة دورة')
							<li><a class="slide-item" href="{{ route('course.create') }}" style="font-size:1em">اضافة دورة</a></li>
							@endrole
							@role('عرض الدورات')
							<li><a class="slide-item" href="{{ url('/' . $page='course') }}" style="font-size:1em">عرض الدورات</a></li>
							@endrole
						</ul>
					</li>
					@endrole
					@role('الاجازات')
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3"/><path d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/></svg><span class="side-menu__label"style="font-weight: bold">الاجازات</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							@role('اضافة اجازة')
							<li><a class="slide-item" href="{{ route('occasion.create') }}" style="font-size:1em">اضافة اجازة</a></li>
							@endrole
							@role('عرض الاجازات')
							<li><a class="slide-item" href="{{ url('/' . $page='occasion') }}" style="font-size:1em">عرض الاجازات</a></li>
							@endrole
						</ul>
					</li>
					@endrole
					@role('الموظفين')
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3"/><path d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/></svg><span class="side-menu__label" style="font-weight: bold">الموظفين</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							@role('اضافة موظف')
							<li><a class="slide-item" href="{{ route('employee.create') }}"style="font-weight: bold">اضافة موظف</a></li>
							@endrole
							@role('تقارير الموظفين')
							<li><a class="slide-item" href="{{ url('/' . $page='employee') }}"style="font-weight: bold">تقارير الموظفين</a></li>
							@endrole
							
						</ul>
					</li>
					@endrole
					@role('الحضور والانصراف')
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3"/><path d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/></svg><span class="side-menu__label" style="font-weight: bold">الحضور والانصراف</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							@role('تسجيـل')
							<li><a class="slide-item" href="{{ url('/' . $page='#') }}"style="font-weight: bold"> تسجيـل</a></li>
							@endrole
							@role('تقارير التحضير')
							<li><a class="slide-item" href="{{ url('/' . $page='attendance') }}"style="font-weight: bold"> تقارير التحضير</a></li>
							@endrole
							
						</ul>
					</li>
					@endrole
					@role('تدريب الموظفين')
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3"/><path d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/></svg><span class="side-menu__label" style="font-weight: bold">تدريب الموظفين</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							@role('طلب تدريب')
							<li><a class="slide-item" href="{{ route('training.create') }}"style="font-weight: bold"> طلب تدريب</a></li>
							@endrole
							@role('تقارير التدريب')
							<li><a class="slide-item" href="{{ url('/' . $page='training') }}"style="font-weight: bold"> تقارير التدريب</a></li>
							@endrole
							
						</ul>
					</li>
					@endrole
					@role('الرواتب')
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3"/><path d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/></svg><span class="side-menu__label"style="font-weight: bold">الرواتب</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							@role('صرف راتب')
							<li><a class="slide-item" href="{{ route('balance.create') }}" style="font-size:1em">صرف راتب</a></li>
							@endrole
							@role('عرض التقارير')
							<li><a class="slide-item" href="{{ url('/' . $page='balance') }}" style="font-size:1em">عرض التقارير</a></li>
							@endrole
						</ul>
					</li>
					@endrole
					@role('المستخدمين')
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3"/><path d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/></svg><span class="side-menu__label"style="font-weight: bold">المستخدمين</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							@role('المستخدمين')
							<li><a class="slide-item" href="{{ url('/' . $page='user') }}" style="font-size:1em">المستخدمين</a></li>
							@endrole
							@role('الصلاحيـات')
							<li><a class="slide-item" href="{{ route('user.createPermission') }}" style="font-size:1em">الصلاحيـات</a></li>
							@endrole
							{{-- <li><a class="slide-item" href="{{ url('/' . $page='role') }}" style="font-size:1em">الادوار</a></li> --}}
						</ul>
					</li>
					@endrole
				</ul>
			</div>
		</aside>
<!-- main-sidebar -->
