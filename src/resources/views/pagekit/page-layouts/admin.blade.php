@extends('page::page-layouts.default')

@section('page')
    <div class="table-layout">
        <div class="sidebar">
            <div class="">
                <nav>
                    <p>
                        <a href="#"><i class="fa fa-bars" aria-hidden="true"></i>
                            <small>Dashboard</small>
                        </a>
                    </p>
                    <p>
                        <a href=""><i class="fa fa-cogs" aria-hidden="true"></i>
                        <small>Settings</small>
                        </a>
                    </p>
                    <p>
                        <a href="#"><i class="fa fa-users" aria-hidden="true"></i>
                        <small>Users</small></a>
                    </p>
                </nav>
            </div>
        </div>
        <div class="dashboard">

            <div class="container-fluid">

                <div class="row">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

@endsection

@push('styles')

{{--<link rel='stylesheet' href='/vendor/typicons/typicons.min.css' />--}}
<link rel='stylesheet' href='/vendor/font-awesome/css/font-awesome.min.css'/>
<style>

    .sidebar {
        padding: 10px;
        display: table;
        height: 100% !important;
        max-width: 350px
        width: 80px;
        overflow: hidden;
        float: left;
        border-right: #EBEBEB 1px solid;
        background-color: #fafafa;
        word-wrap: normal;
    }

    .sidebar a {
        padding: 10px 0 10px 0;
    }

    /*.sidebar a:link {*/
        /*color: #a2a2a2;*/
    /*}*/

    /*.sidebar a:visited {*/
        /*color: #c4c4c4;*/
    /*}*/

    /*.sidebar a:hover {*/
        /*color: #010101;*/
    /*}*/

    .table-layout {
        width: 100%;
        height: 100%;
        display: table;
    }

    .sidebar p{
        padding: 10px 0 10px;
        text-align: center;
        border-bottom: 1px solid #EBEBEB;
    }

    .sidebar nav {
        /*padding: 20px 5px 10px 5px;*/
    }

    .sidebar nav small {
        font-size: 12px;
        display: block;
        font-weight: 200;
        /*text-transform: uppercase;*/
    }

    .sidebar:hover {
        /*width: 260px;*/
    }

    i.fa {
        font-size: 21px;
        padd
    }

    .dashboard {
        /*/float: right;*/
        width: 100%;
        height: 100%;
        background-color: #ffffff;
        box-sizing: border-box;
        /*padding: 0 20px 0 20px;*/
        /*position: relative;*/

    }

    .dashboard > .container-fluid {
        margin-left: 110px;

    }

    .footer {
        width: 100%;
        background-color: lightgrey;
    }
</style>
@endpush
@push('scripts')

@endpush
