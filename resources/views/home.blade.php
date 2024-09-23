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
        .aa{
            cursor: pointer;
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
                    <a href="/" class="nav-item nav-link active">Home</a>
                    <a href="/event" class="nav-item nav-link">Event</a>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <div class="d-none d-lg-flex ms-2">
                    <a class="btn btn-outline-primary py-2 px-3" href="/event">
                        Add a Event
                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="/assets/img/1.jpeg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                {{-- <div class="col-lg-7 pt-5">
                                <h1 class="display-4 text-white mb-3 animated slideInDown">Let's Change The World With Humanity</h1>
                                <p class="fs-5 text-white-50 mb-5 animated slideInDown">Aliqu diam amet diam et eos. Clita erat ipsum et lorem sed stet lorem sit clita duo justo erat amet</p>
                                <a class="btn btn-primary py-2 px-3 animated slideInDown" href="">
                                    Learn More
                                    <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                <img class="w-100" src="/assets/img/2.jpeg" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            {{-- <div class="col-lg-7 pt-5">
                                <h1 class="display-4 text-white mb-3 animated slideInDown">Let's Save More Lifes With Our Helping Hand</h1>
                                <p class="fs-5 text-white-50 mb-5 animated slideInDown">Aliqu diam amet diam et eos. Clita erat ipsum et lorem sed stet lorem sit clita duo justo erat amet</p>
                                <a class="btn btn-primary py-2 px-3 animated slideInDown" href="">
                                    Learn More
                                    <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Event box Start -->

    {{-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Events</div>
                <h1 class="display-6 mb-5">Upcoming Events</h1>
            </div>
            @foreach ($events as $event)
            <div class="row g-4 justify-content-center mb-5">
                <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <!-- <i class="fas fa-book"></i> -->
                        <h4 class="event-title mb-3">{{$event->title}}</h4>
                        <h3 class= "event-desc-title">Description</h3>
                        <p class="event-desc mb-4">{{ $event->desc }}</p>

                        <div class="row">
                            <div class="col-md-12">
                                <h5 class= "h5 event-desc-title">Location</h5>
                                <p class= "text-start fs-6"> {{$event->where}} <span class="text-bold">at</span> {{$event->when}}</p>
                            </div>


                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <h5 class= "h5 event-desc-title">Email</h5>
                                <p class= "text-start fs-6"> {{$event->email}} (<a href="">map</a>)</p>
                            </div>

                            <div class="col-md-4">
                                <h5 class= "h5 event-desc-title">Manger</h5>
                                <p class= "text-start fs-6">{{$event->managerName}}</p>
                            </div>

                            <div class="col-md-4">
                                <h5 class= "h5 event-desc-title">Phone number</h5>
                                <p class= "text-start text-sm">{{$event->phone}}</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <h5 class= "h5 event-desc-title">Music type</h5>
                                <p class= "text-start fs-6">ROCK</p>
                            </div>

                            <div class="col-md-4">
                                <h5 class= "h5 event-desc-title">Event type</h5>
                                <p class= "text-start fs-6">{{$event->type}}</p>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div> --}}


    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Events</div>
                <h1 class="display-6 mb-5">Upcoming Events</h1>
            </div>
            @foreach ($events as $item => $event)
            <h3>{{$item}}</h3>
            @foreach ($event as $value)
            <a class="aa" data-toggle="modal" data-target="#view_{{$value->id}}">
                <div class="row g-4 justify-content-center mb-5">
                    <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                            <!-- <i class="fas fa-book"></i> -->
             
                            <h6 class="text-start text-primary mb-3">{{$value->when}}</h6>
                            <h4 class="event-title mb-2">{{$value->title}}</h4>
                            <div class="row">
                                <div class="col-md-12">
                                    <p class= "text-start fs-6">By: {{$value->managerName}}, {{$value->when}}</p>
                                </div>
    
                            </div>
    
    
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
            @endforeach

        </div>
    </div>

    <!-- Event form -->
{{-- 
    <div class="container-fluid donate my-5 py-5" data-parallax="scroll" data-image-src="img/carousel-2.jpg" id="event_add_box">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-12 wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="display-6 text-white mb-5">Do you want to insert a new event?</h1>
                </div>
                <div class="col-lg-10 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100 bg-white p-5">
                        @if (session('success'))
                        <p>{{ session('success') }}</p>
                    @endif
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
                                            <option selected value="Rock">Rock</option>
                                            <option value="Pop music">Pop</option>
                                            <option value="Electronic">Electronic </option>
                                            <option value="Country">Country</option>
                                        </select>
                                    </div>
    
                                    <div class="col-lg-6">
                                        <label class="event-label p-2" for="type">Select Event Type</label>
                                        <div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="event_type" id="inlineRadio1" value="Lesson" required>
                                                <label class="form-check-label" for="inlineRadio1">Lesson</label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="event_type" id="inlineRadio2" value="Traning" required>
                                                <label class="form-check-label" for="inlineRadio2">Traning</label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="event_type" id="inlineRadio3" value="Dancing" required>
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
    </div> --}}

    



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


    {{-- model --}}
    @foreach ($events as $item => $event)
    @foreach ($event as $value)
    <div class="modal fade bd-example-modal-lg" id="view_{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered rounded" role="document">
            <div class="modal-content">
    
                <div class="modal-body">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-3">
                        <h4 class="my-3">{{ $value->title }}</h4>
    
                        <h5 class= "text-primary event-desc-title">Location</h5>
                         <h5 class= "text-start fs-6 mb-3"> {{$value->where}} , {{$value->zone}} <span class="text-primary">at: </span> {{$value->when}}</h5>
    
                         <div class="row mb-3">
                            <div class="col-md-4">
                                <h6 class= "text-start fs-6"><span class="text-primary">Music type: </span>ROCK</h6>
                            </div>
    
                            <div class="col-md-4">
                                <h6 class= "text-start fs-6"><span class="text-primary">Event type: </span>
                                    @foreach ((array) $value['event_type'] as $item)
                                        {{$item}}
                                    @endforeach
                             
                                </h6>
                            </div>
    
                            <div class="col-md-4">
                                <h6 class= "text-start fs-6"><span class="text-primary">Price: </span>{{$value->price}}</h6>
                            </div>
    
                        </div>
    
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <h6 class= "text-start fs-6"><span class="text-primary">Email: </span>{{$value->email}}</h6>
                            </div>
    
                            <div class="col-md-6">
                                <h6 class= "text-start fs-6"><span class="text-primary">Phone number: </span>{{$value->phone}}</h6>
                            </div>
    
                        </div>
                        <h5 class= "text-primary event-desc-title">Description</h5>
                        <p class="event-desc">{!! $value->desc !!}</p>
    
                    </div>
    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach

        
    @endforeach


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
