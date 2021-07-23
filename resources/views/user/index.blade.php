 @extends('user.site_user.user_master')

 @section('title','Green Hackers')

 @section('content')
    <!--Home Section Start-->
        <section id="home" class="banner" style="background-image: url('images/background/home-banner-bg.jpg')" data-stellar-background-ratio=".7" data-scroll-index="0">
            <div class="container">
                <!--Banner Content-->
                <div class="banner-caption">
                    <h1>Welcome </h1>
                    <p class="cd-headline clip mt-30">
                        <span>From Green Hackers.</span><br>
                        <span class="blc">Specialized in</span>
                        <span class="cd-words-wrapper">
                            <b class="is-visible">Web Service.</b>
                            <b>Android Service.</b>
                            <b>IoT Service.</b>
                        </span>
                    </p>
                </div>
                <div class="arrow bounce">
                    <a class="fa fa-chevron-down fa-2x" href="#" data-scroll-nav="1"></a>
                </div>
            </div>
            <!--Creative Background Svg-->
            <svg id="home-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1400 300" preserveAspectRatio="none">
                <path class="p-curve" d="M0,96.1c109.9,67.5,145.1,201.1,329.6,202.5S1043.2,99.5,1400,0v300H0V96.1z"/>
            </svg>
        </section>
        <!--Home Section End-->

         <!--About Section Start-->
        <section class="about pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <!--About Image-->
                        <div class="about-img">
                            <img src="{{asset('images/about-img.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <!--About Content-->
                        <div class="about-content">
                            <div class="about-heading">
                                <h2>About US</h2>
                                <span>UI/UX Designer & Web Developer</span>
                            </div>
                            <p>I'm <b>Kalvin Doe</b> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to specimen book.</p>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                            <span class="about-button">
                                <a class="main-btn" href="#">Read More</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Section End-->

        

        <!--Services Section Start-->
        <section class="services bg-gray pt-100 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="heading text-center">
                            <h6>Services</h6>
                            <h2>What I Can Offer</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <!--Service Item-->
                        <div class="service-item">
                            <span class="icon">
                                <i class="fa fa-laptop"></i>
                            </span>
                            <h4>Web Service</h4>
                            <p>Lorem Ipsum is simply dummy text of the Lorem has been the industry's standard dummy text ever.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!--Service Item-->
                        <div class="service-item">
                            <span class="icon">
                                <i class="fa fa-gears"></i>
                            </span>
                            <h4>Android Service</h4>
                            <p>Lorem Ipsum is simply dummy text of the Lorem has been the industry's standard dummy text ever.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!--Service Item-->
                        <div class="service-item">
                            <span class="icon">
                                <i class="fa fa-mobile"></i>
                            </span>
                            <h4>IoT Service</h4>
                            <p>Lorem Ipsum is simply dummy text of the Lorem has been the industry's standard dummy text ever.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!--Service Item-->
                        <div class="service-item">
                            <span class="icon">
                                <i class="fa fa-rocket"></i>
                            </span>
                            <h4>Product</h4>
                            <p>Lorem Ipsum is simply dummy text of the Lorem has been the industry's standard dummy text ever.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!--Service Item-->
                        <div class="service-item">
                            <span class="icon">
                                <i class="fa fa-pencil"></i>
                            </span>
                            <h4>Project</h4>
                            <p>Lorem Ipsum is simply dummy text of the Lorem has been the industry's standard dummy text ever.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!--Service Item-->
                        <div class="service-item">
                            <span class="icon">
                                <i class="fa fa-support"></i>
                            </span>
                            <h4>Training</h4>
                            <p>Lorem Ipsum is simply dummy text of the Lorem has been the industry's standard dummy text ever.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Services Section End-->

        <!--Stats Section Start-->
        <section class="stats pt-100 pb-100" style="background-image: url('images/background/stats-bg.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <!--Stats Item-->
                        <div class="single-stat">
                            <span class="stat-icon">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </span>
                            <h2 class="counter" data-count="220">10</h2>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <!--Stats Item-->
                        <div class="single-stat">
                            <span class="stat-icon">
                                <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                            </span>
                            <h2 class="counter" data-count="700">20</h2>
                            <p>Projects Completed</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <!--Stats Item-->
                        <div class="single-stat">
                            <span class="stat-icon">
                                <i class="fa fa-edit" aria-hidden="true"></i>
                            </span>
                            <h2 class="counter" data-count="1100">10</h2>
                            <p>Product</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <!--Stats Item-->
                        <div class="single-stat">
                            <span class="stat-icon">
                                <i class="fa fa-trophy" aria-hidden="true"></i>
                            </span>
                            <h2 class="counter" data-count="160">15</h2>
                            <p>Service</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Stats Section End-->

         <!-- Project -->
    <section class="our_project">
                <div class="container">
                    <h2 class="tittle text-center mb-lg-5 mb-3">Latest Project</h2>
                    <div class="row">
                        @foreach ($projects as $project)
                            <div class="col-md-3">
                                <div class="text-center" style="padding-bottom: 50px;">
                                    <div class="border">
                                    <img src="{{$project->photo_url}}" style="width: 100%;height: 180px;" alt="" class="img-responsive">
                                    <a href="#">
                                        <p class="text-center" id="title">
                                                {{$project->title}}
                                        </p>
                                    </a>
                                    <div class="link">
                                        <a href="{{$project->link}}">{{$project->link}}</a>
                                    </div>
                                  
                                    <br>
                                </div>
                             </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <div class="blog-button mb-25">
                                <a class="main-btn" href="{{url('/our_project')}}">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
    </section>



        <!--partner company Section Start-->
        <section class="blogs pt-100 pb-100 bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="heading text-center">
                            <h2>Partner Company</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="owl-carousel owl-theme">
                        @foreach ($partners as $partner)
                         <div class="grid-item">
                                <div class="grid-item-inner">
                                    <div class="event-item">
                                        <div class="event-thumbnail">
                                            <a href="{{$partner->link}}">
                                            <img src="{{$partner->photo_url}}" alt="image">
                                            </a>
                                        </div><!-- /event-thumbnail -->
                                    </div>
                                </div>
                         </div>
                         @endforeach
{{--                          <div class="grid-item">
                                <div class="grid-item-inner">
                                    <div class="event-item">
                                        <div class="event-thumbnail">
                                            <img src="{{asset('images/client_logo/client_logo-2.png')}}" alt="image">
                                            </a>
                                        </div><!-- /event-thumbnail -->
                                    </div>
                                </div>
                         </div>
                         <div class="grid-item">
                                <div class="grid-item-inner">
                                    <div class="event-item">
                                        <div class="event-thumbnail">
                                            <img src="{{asset('images/client_logo/client_logo-3.png')}}" alt="image">
                                            </a>
                                        </div><!-- /event-thumbnail -->
                                    </div>
                                </div>
                         </div>
                         <div class="grid-item">
                                <div class="grid-item-inner">
                                    <div class="event-item">
                                        <div class="event-thumbnail">
                                            <img src="{{asset('images/client_logo/client_logo-4.png')}}" alt="image">
                                            </a>
                                        </div><!-- /event-thumbnail -->
                                    </div>
                                </div>
                         </div>
                         <div class="grid-item">
                                <div class="grid-item-inner">
                                    <div class="event-item">
                                        <div class="event-thumbnail">
                                            <img src="{{asset('images/client_logo/client_logo-5.png')}}" alt="image">
                                            </a>
                                        </div><!-- /event-thumbnail -->
                                    </div>
                                </div>
                         </div>
                         <div class="grid-item">
                                <div class="grid-item-inner">
                                    <div class="event-item">
                                        <div class="event-thumbnail">
                                            <img src="{{asset('images/client_logo/client_logo-1.png')}}" alt="image">
                                            </a>
                                        </div><!-- /event-thumbnail -->
                                    </div>
                                </div>
                         </div> --}}
                    </div>
                    
                </div>
            </div>
        </section>
        <!--partner company Section End-->

        <!--Testimonials Section Start-->
        <section class="testimonials pt-100 pb-100" style="background-image: url('images/background/testimonials-bg.jpg')">
            <div class="container">  
                <div class="row">                    
                    <div class="col-lg-10 offset-lg-1">
                        <div class="owl-carousel owl-theme text-center">
                            @foreach($feedbacks as $feedback)
                            <!--Testimonials Item-->
                            <div class="testimonial-item">
                                
                                <div class="author-img">
                                    <img src="{{$feedback->photo_url}}" alt="">
                                </div>
                                <h5>{{$feedback->name}}</h5>
                                {{-- <span>Creative Director</span> --}}
                                <p>{!! $feedback->description !!}</p>
                                
                            </div>
                            @endforeach
                        </div>
                    </div>                   
                </div>   
            </div>
        </section>
        <!--Testimonials Section End-->
 @endsection
 
 
 