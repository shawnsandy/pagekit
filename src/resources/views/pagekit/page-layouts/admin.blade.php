@extends('page::page-layouts.default')

@section('page')
    <div id="wrapper" class="table-layout easein sidebar-closed">
        <div class="sidebar ">
            <div class="">
                <nav>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">
                                <span id="sidebar-toggle" class="">
                                <i class="fa fa-plus-circle sidebar-toogle" aria-hidden="true"></i>
                                <i class="fa fa-times-circle sidebar-toogle" aria-hidden="true"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-home" aria-hidden="true"></i>
                                <span class="nav-title">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users" aria-hidden="true"></i><span
                                        class="nav-title">Users</span></a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-cogs" aria-hidden="true"></i><span
                                        class="nav-title">Settings</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="dashboard">
            @yield('content')
        </div>
    </div>

@endsection

@push('styles')

{{--<link rel='stylesheet' href='/vendor/typicons/typicons.min.css' />--}}
<link rel='stylesheet' href='/vendor/font-awesome/css/font-awesome.min.css'/>
<link rel='stylesheet' href='/vendor/animate.css'/>
<style>

    #wrapper {

    }

    .table-layout {
        width: 100%;
        height: 100%;
        display: table;
    }

    .sidebar {
        padding: 0;
        display: table;
        height: 100% !important;
        max-width: 350px;
        width: 200px;
        overflow: hidden;
        float: left;
        border-right: #f2f2f2 1px solid;
        background-color: #FFF;
        word-wrap: normal;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
        overflow: hidden;
        position: absolute;
    }
    .sidebar-closed .sidebar {
        width: 80px;

    }

    .sidebar a {
        padding: 10px 0 10px 0;
    }

    .sidebar a:hover, .sidebar a:focus {
        text-decoration: none;
    }

    .sidebar li {
        text-align: center;
        padding: 20px 0 20px;
        border-bottom: 1px solid #f6f6f6;
        overflow: hidden;
        height: 80px;
    }

    .sidebar ul:first-child {
        text-align: left;
    }

    .sidebar nav {
        /*padding: 20px 5px 10px 5px;*/
    }

    li:first-child {
        height: 60px;
    }

    i.fa {
        font-size: 21px;
        padding: 0 10px 0 10px;
        display: block;
    }

    i.fa-times-circle {
        display: none;
    }

    .nav-title {
        /*font-size: 14px;*/
        display: block;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .sidebar-closed .nav-title {
        /* display: none; */
        font-size: 10px;
    }

    .sidebar:hover {
        /*width: 260px;*/
    }

    .dashboard {
        /*/float: right;*/
        width: 100%;
        height: 100%;
        background-color: #ffffff;
        box-sizing: border-box;
        /*padding: 0 20px 0 20px;*/
        /*position: relative;*/
        padding-left: 0;
    }

    .dashboard > .container-fluid {
        margin-left: 210px;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .sidebar-closed .dashboard > .container-fluid {
        margin-left: 90px;
    }

    .footer {
        width: 100%;
        background-color: lightgrey;
    }


    .dash-panel {
       min-height: 180px;
        border-top: 3px solid #e6e6e6;
    }

</style>
@endpush
@push('scripts')
<script type="text/javascript">
    $('#sidebar-toggle').click(function (e) {
        e.preventDefault();
        $(".sidebar-toogle").slideToggle('fast', 'linear');
        $('#wrapper').toggleClass('sidebar-closed');
    })
</script>
@endpush
