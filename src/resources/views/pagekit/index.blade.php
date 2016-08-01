@extends('page::page-layouts.default')
@section('page')
<section class="cover">
    <div class="layout-table">
        <div class="layout-row">
            <div class="logo">
                <h1>PAGE.KIT</h1>
                <p class="lead">
                    Static pages for Laravel.
                </p>
                <p class="">
                    <a href="/page/about" class="btn btn-link">About</a>
                    <a href="/page/contact" class="btn btn-link">Contact</a>
                </p>
            </div>
        </div>
    </div>
</section>
<footer class="big-nav">
    <div class="layout-table">
        <div class="layout-row">
            &copy; All right reserved
        </div>
    </div>
</footer>
@push('styles')
<style type="text/css">
    .logo {
        display: none;
    }
</style>
@endpush
@push('scripts')
<script>
    $(document).ready(function(){
        $('.logo').fadeToggle( 4000, "linear" );
    })
</script>
@endpush
@endsection
