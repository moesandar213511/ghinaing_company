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
                        <img src="{{asset('images/seo.png')}}" alt="" class="img-responsive">
                    </div>
                    <div class="col-md-6">
                        <h3>
                            SEO for you....
                        </h3>
                        <p>
                            We are experts in custom development of web-based and window based applications designed to meet organization's specific requirements and business needs.Software can be developed for a variety of purposes, the most common being to meet specific needs of a specific client/business.Our team of well-qualified professional software developers provides complete support, starting from conception and design to implementation, training and troubleshooting.
                        </p>
                        <p>
                            We have the expertise to develop application and utility software, distributed and service-oriented applications, enterprise applications or web service applications for various organizations.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!--Portfolio Section End-->
       <section class="websites  pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h3 class="text-center">Digital Markting</h3>
                    </div>
                </div>
                <div class="row">
                    @foreach ($markting as $data)
                    <div class="col-md-4">
                        <div class="website-item">
                            <span class="icon">
                                <i class="{{$data->icon_name}}"></i>
                            </span>
                            <h4>{{$data->title}}</h4>
                            <p class="lg-text">{!! $data->description !!}</p>
                        </div>
                    </div>
                    @endforeach
{{--                     <div class="col-md-4">
                        <div class="website-item">
                            <span class="icon">
                                <i class="fa fa-book"></i>
                            </span>
                            <h4>Educational Website</h4>
                            <p class="lg-text">In Educational websites we make school and colleges modules. These modules includes, Admission modules, Fees management, Library management, HR (payroll), Attendance, Exam, Online test.<br>For Examples:- Shaurya School of study, Gurukul School of study Etc.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="website-item">
                            <span class="icon">
                                <i class="fa fa-heart"></i>
                            </span>
                            <h4>Matrimonial website</h4>
                            <p class="lg-text">Matrimonial website help to search life partner easily with respect to time and money.In this website only you have find bride and groom according you that you want and think.It helps to choose bride & groom with matching personality by easy way & also it save time.<br>For Examples:-Agarwal Shadi Etc.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="website-item">
                            <span class="icon">
                                <i class="fa fa-code"></i>
                            </span>
                            <h4>Web Hosting</h4>
                            <p class="lg-text">Web hosting facility provided by us. if you want to host your website on server and manage, SIMPTION will be a best place for you.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="website-item">
                            <span class="icon">
                                <i class="fa fa-smile-o"></i>
                            </span>
                            <h4>Domain Name</h4>
                            <p class="lg-text">Domain name registration and domain related work done by us. We Transfer the domain name from one server to different server and provide with the server configaration
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="website-item">
                            <span class="icon">
                                <i class="fa fa-user"></i>
                            </span>
                            <h4>Personal Portfolio</h4>
                            <p class="lg-text">In Personal portfolio websites we make websites for personal use purpose in which we arrange portfolio as we need like Photography website.<br>Kunal Kankar Etc.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="website-item">
                            <span class="icon">
                                <i class="fa fa-book"></i>
                            </span>
                            <h4>Training & Workshop</h4>
                            <p class="lg-text">We are provided Training & Workshop in colleges and distribute some idea and knowledge about our experience.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="website-item">
                            <span class="icon">
                                <i class="fa fa-heart"></i>
                            </span>
                            <h4>Project List</h4>
                            <p class="lg-text">We are best in everyfield like School Management Software, Gst Software and also in Robotics.We are best in Robotics.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="website-item">
                            <span class="icon">
                                <i class="fa fa-code"></i>
                            </span>
                            <h4>Online Service</h4>
                            <p class="lg-text">In Personal portfolio websites we make websites for personal use purpose in which we arrange portfolio as we need like Photography website.<br>Kunal Kankar Etc.</p>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>

 @endsection