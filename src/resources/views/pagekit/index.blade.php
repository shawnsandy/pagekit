@extends('page::page-layouts.default')

@section('page')

<header class="landing">
    <section class="cover">
        <div class="layout-table">
            <div class="layout-row">
                <div class="logo">
                    <h1>{{ config('pagekit.page_title', 'Laravel.PageKit' ) }}</h1>
                    <p class="lead">
                        {{ config('pagekit.title_slug', 'Quick start pages for Laravel.' )}}
                    </p>
                </div>
            </div>
        </div>
    </section>
</header>

@include('page::shared.nav')

<section class="sub-header text-center">
    <div class="container">
        <h1>
            Just add content.
        </h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est error quae nostrum beatae, iusto accusantium repudiandae accusamus veritatis, voluptatum nesciunt dolorem aspernatur saepe a asperiores.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea doloribus similique officiis laudantium ratione praesentium. Voluptatibus, commodi saepe molestias ea iure optio dignissimos. Non, iusto.
        </p>

    </div>

</section>

@include('page::shared.footer')

@endsection

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
        $('.logo').fadeToggle( 5000, "linear" );
    })
</script>
@endpush
