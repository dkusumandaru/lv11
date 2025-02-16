<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2 my-2 bg-black"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand px-4 py-3 m-0" href="#">
            <img src="{{ asset(config('app_details.logo')) }}" class="navbar-brand-img" alt="main_logo" width="132">
            {{-- width="26" height="26" --}}
            {{-- <span class="ms-1 text-sm text-white"></span> --}}
        </a>
    </div>
    <hr class="horizontal dark mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-5">Menu</h6>
            </li>
            <x-sidebar-link href="/dashboard" :active="request()->is('dashboard')">
                <i class="material-symbols-rounded opacity-5">dashboard</i>
                <span class="nav-link-text ms-1">Dashboard</span>
            </x-sidebar-link>
            <li class="nav-item">
                <a class="nav-link text-white @if (empty($subMenu) && $subMenu != 'Users Management') collapsed @endif"
                    data-bs-toggle="collapse" data-bs-target="#user_management" href="#">
                    <span class="material-symbols-rounded opacity-5">manage_accounts</span>
                    <span class="nav-link-text ms-1" id="sidebar_text_user-management"> Users Management</span>
                </a>
            </li>
            <ul id="user_management" class="submenu collapse  @if (!empty($subMenu) && $subMenu == 'Users Management') show @endif"
                data-bs-parent="#nav_accordion">
                <li class="nav-item">
                    <x-sidebar-link href="/master/role" :active="request()->is('dashboard')">
                        <span class="material-symbols-rounded opacity-5">manage_accounts</span>
                        <span class="nav-link-text ms-1">Master Role</span>
                    </x-sidebar-link>
                    <!-- <a class="nav-link text-white" href="./um_roles.html"> Master Role </a> -->
                </li>
                <li class="nav-item">
                    <x-sidebar-link href="/master/user" :active="request()->is('user')">
                        <span class="material-symbols-rounded opacity-5">person</span>
                        <span class="nav-link-text ms-1">User</span>
                    </x-sidebar-link>
                </li>
                <li class="nav-item">
                    <x-sidebar-link href="/master/student" :active="request()->is('student')">
                        <span class="material-symbols-rounded opacity-5">school</span>
                        <span class="nav-link-text ms-1">Student</span>
                    </x-sidebar-link>
                    <!-- <a class="nav-link text-white" href="./um_students.html"> Student</a> -->
                </li>
                <li class="nav-item">
                    <x-sidebar-link href="/master/company" :active="request()->is('company')">
                        <span class="material-symbols-rounded opacity-5">apartment</span>
                        <span class="nav-link-text ms-1">Company</span>
                    </x-sidebar-link>
                </li>
            </ul>

            <li class="nav-item">
                <a class="nav-link text-white @if (empty($subMenu) && $subMenu != 'Course Management') collapsed @endif"
                    data-bs-toggle="collapse" data-bs-target="#course_management" href="#">
                    <span class="material-symbols-rounded opacity-5">local_library</span>
                    <span class="nav-link-text ms-1" id="sidebar_text_course-management"> Course Management</span>
                </a>
            </li>
            <ul id="course_management" class="submenu collapse @if (!empty($subMenu) && $subMenu == 'Course Management') show @endif"
                data-bs-parent="#nav_accordion">
                <li class="nav-item">
                    <x-sidebar-link href="/master/program" :active="request()->is('master/program')">
                        <span class="material-symbols-rounded opacity-5">developer_guide</span>
                        <span class="nav-link-text ms-1" id="sidebar_text_master-program"> Master Program</span>
                    </x-sidebar-link>
                </li>
                <li class="nav-item">
                    <x-sidebar-link href="/master/course" :active="request()->is('master/course')">
                        <span class="material-symbols-rounded opacity-5">local_library</span>
                        <span class="nav-link-text ms-1" id="sidebar_text_master-course"> Master Course</span>
                    </x-sidebar-link>
                </li>
                <li class="nav-item">
                    <x-sidebar-link href="/master/course/hours" :active="request()->is('master/course/hours')">
                        <span class="material-symbols-rounded opacity-5">manage_history</span>
                        <span class="nav-link-text ms-1" id="sidebar_text_master-hours"> Master Course Hours</span>
                    </x-sidebar-link>
                </li>
                <li class="nav-item">
                    <x-sidebar-link href="/schedule" :active="request()->is('schedule')">
                        <span class="material-symbols-rounded opacity-5">edit_calendar</span>
                        <span class="nav-link-text ms-1" id="sidebar_text_schedule"> Schedule</span>
                    </x-sidebar-link>
                </li>
                <li class="nav-item">
                    <x-sidebar-link href="/attendance" :active="request()->is('attendance')">
                        <span class="material-symbols-rounded opacity-5">rule</span>
                        <span class="nav-link-text ms-1" id="sidebar_text_attendance"> Attendance (Report)</span>
                    </x-sidebar-link>
                    <!-- <a class="nav-link text-white" href="./attendance_report.html"> Attendance (Report)</a> -->
                </li>
            </ul>

            <x-sidebar-link href="/payment/management" :active="request()->is('payment/management')">
                <i class="material-symbols-rounded opacity-5">receipt_long</i>
                <span class="nav-link-text ms-1">Payment Management</span>
            </x-sidebar-link>
            <!-- <li class="nav-item">
          <a class="nav-link {{ request()->is('payment/management') ? 'active bg-red text-white' : 'text-white' }}" href="/payment/management">
            
          </a>
        </li> -->
            <li class="nav-item">
                <a class="nav-link text-white" href="../pages/rtl.html">
                    <span class="material-symbols-rounded opacity-5">edit_location_alt</span>
                    <span class="nav-link-text ms-1">Master Branch</span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link text-white" href="../pages/tables.html">
                    <span class="material-symbols-rounded opacity-5">passkey</span>
                    <span class="nav-link-text ms-1">Access</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-5">Account</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="../pages/profile.html">
                    <i class="material-symbols-rounded fixed-plugin-button-nav opacity-5">settings</i>
                    <span class="nav-link-text ms-1">Setting</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="../pages/profile.html">
                    <span class="material-symbols-rounded fixed-plugin-button-nav opacity-5">account_circle</span>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>
            <!-- <li class="nav-item">
          <a class="nav-link text-white" href="../pages/sign-in.html">
            <span class="material-symbols-rounded opacity-5"> Logout </span>
            <span class="nav-link-text ms-1">Sign In</span>
          </a>
        </li> -->
        </ul>
    </div>

    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
        <div class="mx-3">
            <a class="btn nav-link active bg-red text-white w-100" href="/logout" type="button">
                <span class="material-symbols-rounded opacity-5"> Logout </span>
                <span class="nav-link-text ms-1">Sign Out</span>
            </a>
        </div>
    </div>
</aside>
