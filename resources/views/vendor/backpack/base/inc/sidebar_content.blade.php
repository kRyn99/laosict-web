<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<li class='nav-item'><a class='nav-link' href='{{ backpack_url('registers') }}'><i class='nav-icon la la-question'></i> {{ trans('app.registers') }}</a></li>


<li class='nav-item'><a class='nav-link' href='{{ backpack_url('partner') }}'><i class='nav-icon la la-question'></i> {{ trans('app.partner') }}</a></li>

<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-users"></i> {{ trans('app.cac_hoan_canh_quyen_gop') }}</a>
    <ul class="nav-dropdown-items">
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('program') }}'><i class='nav-icon la la-question'></i> {{ trans('app.program') }}</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('project') }}'><i class='nav-icon la la-question'></i> {{ trans('app.project') }}</a></li>
    </ul>
</li>

<li class='nav-item'><a class='nav-link' href='{{ backpack_url('category') }}'><i class='nav-icon la la-question'></i> {{ trans('app.category') }}</a></li>


<li class='nav-item'><a class='nav-link' href='{{ backpack_url('post') }}'><i class='nav-icon la la-question'></i> {{ trans('app.post') }}</a></li>




{{--<li class='nav-item'><a class='nav-link' href='{{ backpack_url('project-type') }}'><i class='nav-icon la la-question'></i> {{ trans('app.project_type') }}</a></li>--}}

<li class='nav-item'><a class='nav-link' href='{{ backpack_url('feedback') }}'><i class='nav-icon la la-question'></i> {{ trans('app.feedback') }}</a></li>

<li class='nav-item'><a class='nav-link' href='{{ backpack_url('payment') }}'><i class='nav-icon la la-question'></i> {{ trans('app.payment') }}</a></li>

@if (backpack_user()->hasRole('admin'))

    <li class='nav-item'><a class='nav-link' href='{{ backpack_url('custom-setting') }}'><i class='nav-icon la la-quora'></i>{{ trans('app.cac_thiet_lap') }}</a></li>

    <!-- Users, Roles, Permissions -->
    <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-users"></i> Authentication</a>
        <ul class="nav-dropdown-items">
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i> <span>Users</span></a></li>
{{--            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon la la-id-badge"></i> <span>Roles</span></a></li>--}}
{{--            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i class="nav-icon la la-key"></i> <span>Permissions</span></a></li>--}}
        </ul>
    </li>


@endif

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('elfinder') }}"><i class="nav-icon la la-files-o"></i> <span>{{ trans('backpack::crud.file_manager') }}</span></a></li>
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-globe"></i> Translations</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('language-line') }}"><i class="nav-icon la la-flag-checkered"></i> Languages</a></li>
    </ul>
</li>

{{--<li class='nav-item'><a class='nav-link' href='{{ backpack_url('province') }}'><i class='nav-icon la la-question'></i> Provinces</a></li>--}}
{{--<li class='nav-item'><a class='nav-link' href='{{ backpack_url('district') }}'><i class='nav-icon la la-question'></i> Districts</a></li>--}}

<li class='nav-item'><a class='nav-link' href='{{ backpack_url('teacher') }}'><i class='nav-icon la la-question'></i> Teachers</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('course') }}'><i class='nav-icon la la-question'></i> Courses</a></li>