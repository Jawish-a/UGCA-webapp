{{-- ========== Left Sidebar Start ========== --}}
<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">

        {{-- Sidemenu --}}
        <div id="sidebar-menu">
            {{-- Left Menu Start --}}
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Main</li>
                <li>
                    <a href="{{route('dashboard')}}" class="waves-effect">
                        <i class="mdi mdi-view-dashboard"></i><span> Dashboard </span>
                    </a>
                </li>

                <li class="menu-title">Components</li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-buffer"></i> <span> Groups
                            <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('group.create')}}">Create</a></li>
                        <li><a href="{{route('group.index')}}">All Groups</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-multiple"></i> <span>
                            Students
                            <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('student.index')}}">List of Students</a></li>
                        <li><a href="ui-buttons">Add a new Student</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-clipboard-outline"></i><span>
                            Tutors </span></a>
                    <ul class="submenu">
                        <li><a href="{{route('tutor.index')}}">List of Tutors</a></li>
                        <li><a href="{{route('tutor.create')}}">Add a new Tutor</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-chart-line"></i><span> Admins
                            <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span>
                        </span></a>
                    <ul class="submenu">
                        <li><a href="{{route('admin.index')}}">List of Admins</a></li>
                        <li><a href="{{route('admin.create')}}">Add new Admin</a></li>
                    </ul>
                </li>

            </ul>

        </div>
        {{-- Sidebar --}}
        <div class="clearfix"></div>

    </div>
    {{-- Sidebar -left --}}

</div>
{{-- Left Sidebar End --}}
