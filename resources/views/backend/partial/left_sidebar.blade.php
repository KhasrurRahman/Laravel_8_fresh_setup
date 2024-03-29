<header class="main-nav">
    <div class="sidebar-user text-center"><a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img
            class="img-90 rounded-circle" src="{{asset('assets/backend/images/dashboard/1.png')}}" alt="">
        <div class="badge-bottom"><span class="badge badge-primary">New</span></div>
        <a href="">
            <h6 class="mt-3 f-14 f-w-600">Emay Walter</h6></a>
        <p class="mb-0 font-roboto">Human Resources Department</p>
    </div>
    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Dashboard</h6>
                        </div>
                    </li>


                    <li class="dropdown"><a class="nav-link menu-title link-nav" href="{{route('admin.adminDashboard')}}"><i data-feather="home"></i><span>Dashboard</span></a>
                    </li>
                    <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="list"></i><span>Dashboard</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="">Default</a></li>
                            <li><a href="">Ecommerce</a></li>
                        </ul>
                    </li>


                    <li class="sidebar-main-title">
                        <div>
                            <h6>Role Permission</h6>
                        </div>
                    </li>

                    @if(count(menu_check('Menu')) !== 0)
                        <li class="dropdown"><a class="nav-link menu-title active" href="javascript:void(0)"><i
                                    data-feather="list"></i><span>Menu</span></a>
                            <ul class="nav-submenu menu-content">
                                <li><a href="{{route('admin.menu/menu_create')}}" class="active">Create Menu</a></li>
                                <li><a href="{{route('admin.menu/all_menu')}}" class="{{Request::is('*/*/all_menu')?'active': ''}}">All Menu</a></li>
                            </ul>
                        </li>
                    @endif

                    @if(count(menu_check('Route')) !== 0)
                        <li class="dropdown"><a class="nav-link menu-title link-nav {{Request::is('*/dynamic_route')?'active': ''}}" href="{{route('admin.dynamic_route')}}"><i data-feather="home"></i><span>Module/Route</span></a>
                        </li>
                    @endif

                    @if(count(menu_check('Role')) !== 0)
                        <li class="dropdown"><a class="nav-link menu-title {{Request::is('*/role/*')?'active': ''}}" href="javascript:void(0)"><i
                                    data-feather="list"></i><span>Roles</span></a>
                            <ul class="nav-submenu menu-content">
                                <li><a href="{{route('admin.role/all_role')}}" class="{{Request::is('*/*/all_role')?'active': ''}}">All role</a></li>
                                <li><a href="{{route('admin.role/add_role')}}" class="{{Request::is('*/*/add_role')?'active': ''}}">Add role</a></li>
                            </ul>
                        </li>
                    @endif

                    @if(count(menu_check('User')) !== 0)
                        <li class="dropdown"><a class="nav-link menu-title link-nav {{Request::is('*/all_user')?'active': ''}}" href="{{route('admin.all_user')}}"><i data-feather="home"></i><span>Users</span></a>
                        </li>
                    @endif


                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
