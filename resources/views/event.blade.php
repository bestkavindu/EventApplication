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



@section('content')

    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar text-white-50 row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
               
            </div>
            <div class="col-lg-6 px-5 text-end">
              
               
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="/" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="fw-bold text-primary m-0">Tango<span class="text-white">Del Dia</span></h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="/" class="nav-item nav-link ">Home</a>
                    <a href="/event" class="nav-item nav-link active">Event</a>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <div class="d-none d-lg-flex ms-2">
                    <a class="btn btn-outline-primary py-2 px-3" href="#event_add_box">
                        Add a Event
                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </nav>
    </div>


        <!-- Page Header Start -->
        <div class="container-fluid item-center page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container text-center">
            </div>
        </div>
        <!-- Page Header End -->








    <!-- Event form -->

    <div class="container-fluid donate my-5 py-5" data-parallax="scroll" id="event_add_box">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-10 align-items-center wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="display-6 text-white mb-5">Do you want to insert a new event?</h1>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                
                        @if (session('success'))
                        <div class="succes-text d-inline-block rounded-pill py-3 px-4 mb-3">{{ session('success') }}</div>
    
                    @endif
                    </div>

                </div>
                <div class="col-lg-12 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100 bg-white p-5">

                        <form action="{{ route('events.store') }}" method="POST">
                            @csrf
                            <div class="">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="event-label p-2" for="title">Event Title</label>
                                        <div class="form-floating">
                                            <input type="text" class="form-control bg-light border-0" id="title"
                                                name="title" placeholder="Event Title" required>
                                            <label for="title">Event Title</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="event-label p-2" for="where">Where</label>
                                        <div class="form-floating">
                                            <input type="where" class="form-control bg-light border-0" id="where"
                                                name="where" placeholder="Where the event happen" required>
                                            <label for="name">Where</label>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="event-label p-2" for="when">When (Day, Start Time, End Time)</label>
                                        <div class="form-floating">
    
                                            <input type="text" class="form-control bg-light border-0" id="when"
                                                name="when" placeholder="18 September, 20:30 - 20:31" required>
                                            <label for="when">Ex: 18 September, 20:30 - 20:31</label>
                                        </div>
                                    </div>
    
    
                                    <div class="col-md-6">
                                        <label class="event-label p-2" for="when">Please Select Date</label>
                                        <div class="form-floating">
                                            <input class="form-control bg-light mb-3" type="date" id="date"
                                                name="date" value="" min="" required/>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <label class="event-label p-2" for="type">Select Music Type</label>
                                        <select class="bg-light form-select" aria-label="Default select example" name="music_type" required>
                                            @foreach ($musictypes as $type)
                                                <option value="{{$type->name}}">{{$type->name}}</option>
                                            @endforeach
                                            
                                        </select>
                                    </div>
    
                                    <div class="col-lg-6">
                                        <label class="event-label p-2" for="type">Select Event Type</label>
                                        <div>
                                            <div class="form-check form-check-inline">
                                                {{-- <input class="form-check-input" type="radio" name="event_type" id="inlineRadio1" value="Lesson" required> --}}
                                                <input class="form-check-input" type="checkbox" name="event_type[]" value="Lesson">
                                                <label class="form-check-label" for="inlineRadio1">Lesson</label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="event_type[]" value="Traning">
                                                <label class="form-check-label" for="inlineRadio2">Traning</label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="event_type[]"  value="Dancing">
                                                <label class="form-check-label" for="inlineRadio3">Dancing</label>
                                              </div>
                                        </div>
    
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="event-label p-2" for="zone">Enter Zone</label>
                                        <div class="form-floating">
                                            <input type="text" class="form-control bg-light border-0" id="zone"
                                                name="zone" placeholder="Enter Zone" required>
                                            <label for="zone">Enter Zone</label>
                                        </div>
                                    </div>
    
                                    <div class="col-md-6">
                                        <label class="event-label p-2" for="price">Price</label>
                                        <div class="form-floating">
    
                                            <input type="text" class="form-control bg-light border-0" id="price"
                                                name="price" placeholder="Price" required>
                                            <label for="price">Price</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="event-label p-2" for="managerName">Manager Name (First name, Surname)</label>
                                        <div class="form-floating">
                                            <input type="text" class="form-control bg-light border-0" id="managerName"
                                                name="managerName" placeholder="Manager Name(First name, Sir name)" required>
                                            <label for="managerName">Manager Name</label>
                                        </div>
                                    </div>
    
                                    <div class="col-md-6">
                                        <label class="event-label p-2" for="zone">Email</label>
                                        <div class="form-floating">
                                            <input type="email" class="form-control bg-light border-0" id="email"
                                                name="email" placeholder="Email" required>
                                            <label for="zone">Email</label>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="event-label p-2" for="phone">Phone number</label>
                                        <div class="form-floating">
                                            <input type="text" class="form-control bg-light border-0" id="phone"
                                                name="phone" placeholder="Phone number" required>
                                            <label for="phone">Phone number</label>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-12 mb-3">
                                    <label class="event-label p-2" for="desc">Event Description</label>
                                    <div class="">
                                        <textarea class="form-control bg-light" placeholder="Event description" id="dedc" name="desc"
                                            style="height: 100px" required></textarea>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary px-5" style="height: 60px;">
                                        Submit
                                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </form>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>

    



    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">Tango Del Diae</a>, All Right Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->





    {{-- end model --}}



@endsection

@section('custom-js')
    <script src="https://cdn.tiny.cloud/1/qwkitz9r92dxve353wnbknvrkx8kdx8s6asyfjgxp9tybec4/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <script>
        // Function to format date as YYYY-MM-DDTHH:MM
        function formatDate(date) {
            const year = date.getFullYear();
            const month = String(date.getMonth() + 1).padStart(2, '0');
            const day = String(date.getDate()).padStart(2, '0');
            return `${year}-${month}-${day}`;
        }

        // Get today's date
        const today = new Date();

        // Set min value to today's date formatted
        document.getElementById('date').setAttribute('min', formatDate(today));
        document.getElementById('date').setAttribute('value', formatDate(today));
    </script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
@endsection
