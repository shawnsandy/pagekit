@extends('page::layouts.default')
@section('page')
<section class="cover">
    <div class="layout-table">
        <div class="layout-row">
            <div class="logo">
                <img src="/img/site-cover.png" alt="logo">
            </div>
        </div>
    </div>
</section>
<footer class="big-nav">
    <div class="layout-table">
        <div class="layout-row">
            &copy; Shawn Sandy
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
