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
                    <div class="col-md-6">
                        <img src="{{asset('images/sdlc.jpg')}}" alt="" class="img-responsive">
                    </div>
                    <div class="col-md-6">
                        <h3>
                            Software for you....
                        </h3>
                        <p>
                            We are experts in custom development of web-based and window based applications designed to meet organization's specific requirements and business needs.Software can be developed for a variety of purposes, the most common being to meet specific needs of a specific client/business.Our team of well-qualified professional software developers provides complete support, starting from conception and design to implementation, training and troubleshooting.
                        </p>
                        <p>
                            We have the expertise to develop application and utility software, distributed and service-oriented applications, enterprise applications or web service applications for various organizations.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center" style="border: 1px solid #fafafa;margin-top: 50px;">
                            
                        </div>
                        <div style="margin-top: -20px;" class="text-center">
                            <p class="text-center" style="display: inline-block;background-color: #fff;width: 200px;font-size: 25px;">
                                Our Software
                            </p>
                        </div>
                    </div>
                </div>
                <style>
                    .list-inline li{
                        line-height: 40px;
                        font-size: 20px;
                    }
                </style>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-unstyled list-inline">
                            <li> School/College/Coaching Management System </li>
                            <li> Inventory Management System </li>
                            <li> Finance Management System </li>
                            <li> Hotel/Restorant Management System </li>
                            <li> Hotel Management System </li>
                            <li> Small Business Software </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-unstyled list-inline">
                            <li>Billing Software System </li>
                            <li>E- Commerce Management System </li>
                            <li>Truck Management System </li>
                            <li>Tours & Travels Booking Management </li>
                            <li>Gym & Healthcare </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Portfolio Section End-->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h4>
                            Andorid App For You
                        </h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores tenetur eum et esse necessitatibus laboriosam, quos, earum veniam dicta ut accusamus alias autem nesciunt non, odio at eligendi? Ex, molestiae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe labore quos nesciunt laboriosam aliquam quas debitis cum eius voluptatibus ducimus, fuga voluptatem perferendis accusamus excepturi nam aperiam? Quidem, blanditiis eum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, distinctio dolores iste eaque, esse at consectetur tenetur harum aperiam quasi quaerat fugiat laudantium aliquam enim ex possimus asperiores magni nihil!
                        </p>
                    </div>
                    <div class="col-md-6">
                        <img src="{{asset('images/img-1.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </section><br><br>

 @endsection