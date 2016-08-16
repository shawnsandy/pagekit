@extends('page::page-layouts.main-page')
@section('content')

    <div class="container">
        <div class="row" data-aos="zomm-in">
            <h1 class="text-center headline"><i class="fa fa-envelope" aria-hidden="true"></i></h1>
            <section>
                <h1 class="text-capitalize text-center">We would love to hear from you.</h1>
                <p class="text-center lead">
                    Conveniently transform one-to-one markets without cross-media leadership. Continually optimize
                    visionary outsourcing with end-to-end vortals. Phosfluorescently matrix efficient materials.
                </p>
            </section>
            <section id="social">
                <div class="container">
                    <p class="lead text-center">
                        VIA SOCIAL MEDIA
                    </p>
                </div>
            </section>
            <section>

                <div class="row">
                   <h1 class="text-center headline"><i class="fa fa-envelope" aria-hidden="true"></i></h1>
                    <div class="col-md-6">
                        @include('page::shared.contact-form')
                    </div>

                    <div class="col-md-6">
                        @include('page::shared.location-map')

                    </div>
                </div>

            </section>

        </div>
    </div>

@endsection
