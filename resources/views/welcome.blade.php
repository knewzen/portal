@extends('layouts.default')

@section('page_title', 'Home')

@push('header_scripts')
    <script src="https://js.stripe.com/v3/"></script>
@endpush

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css"
          integrity="sha512-M2wvCLH6DSRazYeZRIm1JnYyh22purTM+FDB5CsyxtQJYeKq83arPe5wgbNmcFXGqiSH2XR8dT/fJISVA1r/zQ=="
          crossorigin=""/>
@endpush

@section('content')
    <php-map></php-map>

    <div class="container">
        <nav class="level is-mobile">
            <div class="level-item has-text-centered">
                <div>
                    <p class="heading">Users</p>
                    <p class="title">{{ \App\Models\User::count() }}</p>
                </div>
            </div>

            <div class="level-item has-text-centered">
                <div>
                    <p class="heading">Threads</p>
                    <p class="title">{{ \App\Models\Thread::count() }}</p>
                </div>
            </div>

            <div class="level-item has-text-centered">
                <div>
                    <p class="heading">Links</p>
                    <p class="title">{{ \App\Models\Link::count() }}</p>
                </div>
            </div>

            <div class="level-item has-text-centered">
                <div>
                    <p class="heading">Meetups</p>
                    <p class="title">{{ \App\Models\Meetup::count() }}</p>
                </div>
            </div>
        </nav>


        <div class="container">
            <form action="/sponsors/donate" method="POST">
                {!! csrf_field() !!}
                <script
                        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                        data-key="{{ env('STRIPE_KEY') }}"
                        data-amount="999"
                        data-name="docken.io"
                        data-description="widget"
                        data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                        data-locale="auto"
                        data-zip-code="true"
                        data-currency="eur">
                </script>
            </form>
        </div>

    </div>
@endsection

@push('scripts')

@endpush