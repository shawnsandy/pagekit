@extends('page::page-layouts.default')

@section('page')

<header class="landing" data-aos="fade-up">
    <section class="cover">
        <div class="layout-table">
            <div class="layout-row">
                <div class="logo">
                    <h1>{{ config('pagekit.company_name', 'Laravel.PageKit' ) }}</h1>
                    <p class="lead">
                    @if(config('pagekit.hide_header_title'))
                        {{ config('pagekit.title_slug', 'Quick start pages for Laravel.' )}}
                    @endif
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
<link rel="stylesheet" href="/vendor/aos/aos.css" />
<style type="text/css">
    .logo {
        display: none;
    }
</style>
@endpush
@push('scripts')
<script src="/vendor/aos/aos.js"></script>
<script>
AOS.init();
    $(document).ready(function(){
        $('.logo').fadeToggle( 5000, "linear" );
    })
</script>

@endpush
