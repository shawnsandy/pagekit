@extends('page::page-layouts.default')

@section('page')
    <div id="wrapper" class="table-layout easein">
        <div class="sidebar ">
            <div class="">
                <nav>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#"><span id="sidebar-toggle" class=""><i class="fa fa-bars" aria-hidden="true"></i></span><span
                                        class="nav-title"></span>
                            </a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-cogs" aria-hidden="true"></i><span
                                        class="nav-title">Settings</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users" aria-hidden="true"></i><span
                                        class="nav-title">Users</span></a>
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
        border-right: #e4e4e4 1px solid;
        background-color: #FFF;
        word-wrap: normal;
        -webkit-transition: all 0.8s ease;
        -moz-transition: all 0.8s ease;
        -o-transition: all 0.8s ease;
        transition: all 0.8s ease;
        overflow: hidden;
        position: absolute;
    }

    .sidebar-closed .sidebar {
        width: 80px;
    }

    .sidebar a {
        padding: 10px 0 10px 15px;
    }

    .sidebar li {
        padding: 20px 0 20px;
        border-bottom: 1px solid #e4e4e4;
        overflow: hidden;
    }

    .sidebar nav {
        /*padding: 20px 5px 10px 5px;*/
    }

    .nav-title {
        -webkit-transition: all 0.85s ease;
        -moz-transition: all 0.8s ease;
        -o-transition: all 0.8s ease;
        transition: all 0.8s ease;
    }

    .sidebar-closed .nav-title {
        display: none;
        visibility: hidden;
    }

    .sidebar:hover {
        /*width: 260px;*/
    }

    i.fa {
        font-size: 21px;
        padding: 0 10px 0 10px;
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
        -webkit-transition: all 0.85s ease;
        -moz-transition: all 0.8s ease;
        -o-transition: all 0.8s ease;
        transition: all 0.8s ease;
    }

    .sidebar-closed .dashboard > .container-fluid {
        margin-left: 110px;
    }

    .footer {
        width: 100%;
        background-color: lightgrey;
    }
</style>
@endpush
@push('scripts')
<script type="text/javascript">
    $('#sidebar-toggle').click(function (e) {
        e.preventDefault();
        $(".nav-title").fadeToggle('fast', 'linear');
        $('#wrapper').toggleClass('sidebar-closed');
    })
</script>
@endpush
