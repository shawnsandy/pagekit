@extends('page::page-layouts.default')

@section('page')
    <div id="wrapper" class="table sidebar-closed">
        <div class="table-row">
            <div class="table-cell">
                <div class="sidebar ">
                    <div class="">
                        <nav class="top-nav">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">
                                <span id="sidebar-toggle" class="">
                                <i class="fa material material_fullscreen sidebar-toogle" aria-hidden="true"></i>
                                <i class="fa material material_fullscreen_exit sidebar-toogle nav-toggle"
                                   aria-hidden="true"></i>
                                </span>
                                    </a>
                                </li>
                                <li>
                                    <a href=""><i class="fa material material_dashboard" aria-hidden="true"></i>
                                        <span class="nav-title">Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=""><i class="fa material material_assignment" aria-hidden="true"></i>
                                        <span class="nav-title">Post</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa material material_people" aria-hidden="true"></i><span
                                                class="nav-title">Users</span></a>
                                </li>
                                <li>
                                    <a href=""><i class="fa material material_settings" aria-hidden="true"></i><span
                                                class="nav-title">Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=""><i class="fa material material_arrow_upward" aria-hidden="true"></i><span
                                                class="nav-title">Top</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="table-cell main-dashboard">
                <nav class="">
                    <div class="menu-table">
                        <div class="menu-table-row">
                            <div class="logo menu-table-cell">
                                <div class="container-fluid">
                                    <i class="material material_explore"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="dash">
                    <div class="container-fluid">
                        <div class="main-content">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
            @section('sidebar-right')
                <div class="table-cell sidebar-right">
                    <nav>
                        <div class="menu-table">
                            <div class="menu-table-row">
                                <div class="logo menu-table-cell">
                                    <span class="material material_view_stream"></span>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <div class="container-fluid">

                        <div class="">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda autem consequatur
                                corporis dolorem doloribus error esse explicabo iure minus nam, non obcaecati odit
                                perferendis quibusdam quisquam reprehenderit sapiente sit, vel voluptatibus, voluptatum?
                                Aliquam architecto ducimus, est facere fugit harum iure, maiores optio reiciendis
                                repudiandae veniam.</p>
                        </div>
                    </div>
                </div>
            @show
        </div>
    </div>
@endsection

@push('styles')

{{--<link rel='stylesheet' href='/vendor/typicons/typicons.min.css' />--}}
<link rel='stylesheet' href='/vendor/animate.css'/>
<link rel='stylesheet' href='/css/pagekit/admin.css'/>
<link href="/css/pagekit/fonts/material-icons/style.css" rel="stylesheet">
<link href="/css/pagekit/fonts/social/style.css" rel="stylesheet">
<style>

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
