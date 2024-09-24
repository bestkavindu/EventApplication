@extends('layouts.master')

@section('head')
    <title>Tango Del Dia</title>
@endsection

@section('custom-css')
    <style>
        .service-item i {
            font-size: 70px;
            padding: 20px 0;
            color: #ff6f0f;
        }

        .event-title {
            font-size: 1.2rem;
            text-align: left;
        }

        .event-desc-title {
            font-weight: 300;
            text-align: left;
        }

        .event-desc {
            text-align: left;
        }

        .event-sub {
            text-align: left;
        }

        .event-label{
            font-weight: 700;
        }
        .succes-text{
            background-color: #5cb85c !important;
            color: white;
        }

    </style>
@endsection
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">404 Error</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">404 Error</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- 404 Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                <h1 class="display-1">404</h1>
                <h1 class="mb-4">Page Not Found</h1>
                <p class="mb-4">We’re sorry, the page you have looked for does not exist in our website! Maybe go to
                    our home page or try to use a search?</p>
                <a href="/" class="btn btn-outline-primary py-2 px-3" href="">
                    Go Back To Home
                    <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                        <i class="fa fa-arrow-right"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- 404 End --


@section('content')

 










    






@endsection


