 @extends('user.site_user.user_master')

 @section('title','Green Hackers')

 @section('content')
     <!--Home Section Start-->
        <section id="home" class="banner banner-preview" style="background-image: url('images/background/stats-bg.jpg") data-stellar-background-ratio=".7" data-scroll-index="0">
            <div class="container">
        </section>
        <!--Home Section End-->

        
        <!--Contact Section Start-->
        <section class="contact pt-100 pb-100" style="margin-top: -200px!important;background-color: #fff;position: relative;z-index: 100;">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="heading">
                            <h2>Contact</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <!--Contact Form-->
                        {{-- <form action="{{url('send_email')}}" id='contact-form' method='POST'> --}}
                        <form action="{{url('send_email')}}" method="post" id="contactform" class="comment-form">
                            {{ csrf_field() }}
                            <input type='hidden' name='form-name' value='contactForm'>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <!--name-->
                                    <input type="text" class="form-control con-validate" id="contact-name" placeholder="Name" minlength=3 name="name">
                                </div>
                                <div class="col-md-12 form-group">
                                    <!--email-->
                                    <input type="email" class="form-control con-validate" id="contact-email" placeholder="Email" name="email">
                                </div>
                                <div class="col-md-12 form-group">
                                    <!--email-->
                                    <input type="text" class="form-control con-validate" id="subject" placeholder="Subject" name="subject">
                                </div>
                                <div class="col-md-12 form-group">
                                    <!--message box-->
                                    <textarea class="form-control con-validate" id="contact-message" placeholder="Your Message" rows=6 name="message"></textarea>
                                </div>
                                <div class="col-md-12 text-center">
                                    <!--contact button-->
                                    <button id="contact-submit" class="mt-30 main-btn">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11749.146565839581!2d96.21044653812916!3d16.84339412180221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c19373aae8dda7%3A0x66b1fddc29486ea!2sGreen%20Hackers%20Institute%20(GHI%20MYANMAR)!5e0!3m2!1sen!2smm!4v1568185513071!5m2!1sen!2smm" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" __idm_frm__="147"></iframe>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Section End-->
 @endsection
 @section('js')
    @if(Session::has('success'))
        <script>
            toastr.success('{{Session("success")}}');
        </script>
    @endif
@endsection