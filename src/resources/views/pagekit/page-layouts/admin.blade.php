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
                            <a href=""><i class="material-icons" aria-hidden="true">dashboard</i>
                                <span class="nav-title">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"><i class="fa material-icons" aria-hidden="true">group</i><span
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
<link rel='stylesheet' href='/css/pagekit/admin.css'/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
