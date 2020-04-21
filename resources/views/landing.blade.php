@extends('layouts.simple')

@section('content')
    <!-- Hero -->
    <div class="bg-white bg-pattern hero-bubbles" style="background-image: url('{{ asset('/media/various/bg-pattern-inverse.png') }}');">
        <span class="hero-bubble wh-40 pos-t-5 pos-l-20 bg-primary"></span>
        <span class="hero-bubble wh-30 pos-t-5 pos-l-90 bg-success"></span>
        <span class="hero-bubble wh-20 pos-t-10 pos-l-40 bg-corporate"></span>
        <span class="hero-bubble wh-40 pos-t-20 pos-l-75 bg-pulse"></span>
        <span class="hero-bubble wh-30 pos-t-30 pos-l-10 bg-danger"></span>
        <span class="hero-bubble wh-30 pos-t-60 pos-l-25 bg-warning"></span>
        <span class="hero-bubble wh-30 pos-t-60 pos-l-75 bg-info"></span>
        <span class="hero-bubble wh-40 pos-t-80 pos-l-50 bg-flat"></span>
        <span class="hero-bubble wh-40 pos-t-75 pos-l-10 bg-earth"></span>
        <span class="hero-bubble wh-30 pos-t-90 pos-l-90 bg-elegance"></span>
        <div class="hero bg-white-op-90 overflow-hidden">
            <div class="hero-inner">
                <div class="content content-full text-center">
                    <div class="pt-100 pb-150">
                        <h1 class="font-w700 display-4 mt-20 invisible" data-toggle="appear" data-timeout="50">
                            Codebase <span class="text-primary font-w300">3.2</span> <span class="font-w300">+ Laravel</span>
                        </h1>
                        <h2 class="h3 font-w400 text-muted mb-50 invisible" data-toggle="appear" data-class="animated fadeInDown" data-timeout="300">
                            Welcome to the starter kit! Build something amazing!
                        </h2>
                        <div class="invisible" data-toggle="appear" data-class="animated fadeInDown" data-timeout="300">
                            <a class="btn btn-hero btn-noborder btn-success min-width-175 mb-10 mx-5" href="{{url('dashboard')}}">
                                <i class="fa fa-fw fa-arrow-right mr-1"></i> Enter Dashboard
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Hero -->
@endsection
