 @extends('user.site_user.user_master')

 @section('title','Green Hackers')

 @section('content')
     <!--Home Section Start-->
        <section id="home" class="banner banner-preview" style="background-image: url('images/background/stats-bg.jpg") data-stellar-background-ratio=".7" data-scroll-index="0">
         
        </section>
        <!--Home Section End-->

        
  <!--Portfolio Section Start-->
        <section class="portfolio pt-100 pb-70" style="margin-top: -200px!important;background-color: #fff;position: relative;z-index: 100;">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="heading text-center">
                            <h2>Work I Have Done</h2>
                        </div>
                        <div class="portfolio-filter text-center">
                            <ul>
                                <li class="sel-item" data-filter="*">All</li>
                                <li data-filter=".design">Web Service</li>
                                <li data-filter=".application">Application Service</li>
                                <li data-filter=".development">IoT Service</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row portfolio-items">
                    <!--Portfolio Item-->
                    <div class="col-lg-4 col-md-6 item application">
                        <div class="item-content">
                            <img src="images/portfolio/img-1.jpg" alt="">
                            <div class="item-overlay">
                                <h6>Application</h6>
                                <div class="icons">
                                    <span class="icon link">
                                        <a href="{{asset('images/portfolio/img-1.jpg')}}">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Portfolio Item-->
                    <div class="col-lg-4 col-md-6 item design">
                        <div class="item-content">
                            <img src="images/portfolio/img-2.jpg" alt="">
                            <div class="item-overlay">
                                <h6>Web Design</h6>
                                <div class="icons">
                                    <span class="icon link">
                                        <a href="{{asset('images/portfolio/img-2.jpg')}}">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Portfolio Item-->
                    <div class="col-lg-4 col-md-6 item development">
                        <div class="item-content">
                            <img src="images/portfolio/img-3.jpg" alt="">
                            <div class="item-overlay">
                                <h6>Application</h6>
                                <div class="icons">
                                    <span class="icon link">
                                        <a href="{{asset('images/portfolio/img-3.jpg')}}">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Portfolio Item-->
                    <div class="col-lg-4 col-md-6 item design development">
                        <div class="item-content">
                            <img src="images/portfolio/img-4.jpg" alt="">
                            <div class="item-overlay">
                                <h6>Development</h6>
                                <div class="icons">
                                    <span class="icon link">
                                        <a href="{{asset('images/portfolio/img-4.jpg')}}">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Portfolio Item-->
                    <div class="col-lg-4 col-md-6 item development application">
                        <div class="item-content">
                            <img src="{{asset('images/portfolio/img-5.jpg')}}" alt="">
                            <div class="item-overlay">
                                <h6>Web Design</h6>
                                <div class="icons">
                                    <span class="icon link">
                                        <a href="{{asset('images/portfolio/img-5.jpg')}}">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Portfolio Item-->
                    <div class="col-lg-4 col-md-6 item application development">
                        <div class="item-content">
                            <img src="images/portfolio/img-6.jpg" alt="">
                            <div class="item-overlay">
                                <h6>Web Design</h6>
                                <div class="icons">
                                    <span class="icon link">
                                        <a href="{{asset('images/portfolio/img-6.jpg')}}">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Portfolio Section End-->
    
 @endsection