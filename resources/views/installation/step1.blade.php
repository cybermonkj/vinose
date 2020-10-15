@extends('layouts.blank')
@section('content')
    <div class="mar-ver pad-btm text-center">
        <h1 class="h3">Checking file permissions</h1>
        <p>We ran diagnosis on your server. Review the items that have a red mark on it. <br> If everything is green, you are good to go to the next step.</p>
    </div>

    <ul class="list-group">
        <li class="list-group-item text-semibold">
            Php version 7.2 +

            @php
                $phpVersion = number_format((float)phpversion(), 2, '.', '');
            @endphp
            @if ($phpVersion >= 7.20)
                <i class="fa fa-check text-success pull-right"></i>
            @else
                <i class="fa fa-close text-danger pull-right"></i>
            @endif
        </li>
        <li class="list-group-item text-semibold">
            Curl Enabled

            @if ($permission['curl_enabled'])
                <i class="fa fa-check text-success pull-right"></i>
            @else
                <i class="fa fa-close text-danger pull-right"></i>
            @endif
        </li>
        <li class="list-group-item text-semibold">
            <b>.env</b> File Permission

            @if ($permission['db_file_write_perm'])
                <i class="fa fa-check text-success pull-right"></i>
            @else
                <i class="fa fa-close text-danger pull-right"></i>
            @endif
        </li>
        <li class="list-group-item text-semibold">
            <b>RouteServiceProvider.php</b> File Permission

            @if ($permission['routes_file_write_perm'])
                <i class="fa fa-check text-success pull-right"></i>
            @else
                <i class="fa fa-close text-danger pull-right"></i>
            @endif
        </li>
    </ul>

    <p class="text-center">
        @if ($permission['curl_enabled'] == 1 && $permission['db_file_write_perm'] == 1 && $permission['routes_file_write_perm'] == 1 && $phpVersion >= 7.20)
            @if ($_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_NAME'] == '127.0.0.1')
                <a href = "{{ route('step3') }}" class="btn btn-info">Go To Next Step</a>
            @else
                <a href = "{{ route('step2') }}" class="btn btn-info">Go To Next Step</a>
            @endif
        @endif
    </p>
@endsection
