@extends('layouts.backend')

@section('css_before')
    <link rel="stylesheet" href="{{ asset('public/assets/js/plugins/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/js/plugins/slick/slick-theme.css') }}">
@endsection

@section('js_after')
    <!-- Page JS Plugins -->
    <script src="{{ asset('public/assets/js/plugins/slick/slick.min.js') }}"></script>

    <!-- Page JS Helpers (Slick Slider Plugin) -->
    <script>jQuery(function(){ Codebase.helpers('slick'); });</script>
@endsection

@section('content')
    <!-- Page Content -->
    <div class="content">
        <div class="my-50 text-center">
            <h2 class="font-w700 text-black mb-10">Slick Slider Example</h2>
            <h3 class="h5 text-muted mb-0">Plugin Integration</h3>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <!-- Info -->
                <div class="block">
                    <div class="block-content">
                        <p class="text-muted">
                            This page showcases how easily you can add a plugin’s JS/CSS assets and init it using a Codebase JS helper.
                        </p>
                    </div>
                </div>
                <!-- END Info -->

                <!-- Slider with dots -->
                <div class="block">
                    <div class="block-header">
                        <h3 class="block-title">Dots</h3>
                    </div>
                    <div class="js-slider" data-dots="true">
                        <div>
                            <img class="img-fluid" src="{{ asset('public/assets/media/photos/photo27@2x.jpg')}}" alt="photo">
                        </div>
                        <div>
                            <img class="img-fluid" src="{{ asset('public/assets/media/photos/photo28@2x.jpg')}}" alt="photo">
                        </div>
                        <div>
                            <img class="img-fluid" src="{{ asset('public/assets/media/photos/photo29@2x.jpg')}}" alt="photo">
                        </div>
                    </div>
                    <!-- END Slider with dots -->
                </div>
                <!-- END Dots -->
            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection
