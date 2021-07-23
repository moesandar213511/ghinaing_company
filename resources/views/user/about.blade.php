 @extends('user.site_user.user_master')

 @section('title','Green Hackers')

 @section('content')
        <!--Home Section Start-->
        <section id="home" class="banner banner-preview" style="background-image: url('images/background/stats-bg.jpg')" data-stellar-background-ratio=".7" data-scroll-index="0">
            <div class="container">
                
            </div>
        </section>
        <!--Home Section End-->
        <style>
            @media(max-width: 767px){
              .teachers{
                padding-top: 1300px!important;
              }
              .teachers_title{
                font-size: 20px;
              }
            }
            @media(max-width: 743px) and (min-width: 500px){
              .teachers{
                padding-top: 1000px!important;
              }
            }
            @media (max-width: 500px) {
              .teachers{
                padding-top: 1400px!important;
              }
            }
            @media (max-width: 991px) {
              .teachers{
                padding-top: 200px;
              }
              .teachers_title{
                font-size: 20px;
              } 

            }
            .c_p{
              background-color: #28a745!important;
              color: #fff;
              padding: 5px;
            }
            .title-area{
              display: inline;

              float: none!important;

              padding: auto!important;

              text-align: center;
            }
          </style>

        <!-- Start about  -->
  <section id="about" style="margin-top: -200px!important;background-color: #fff;position: relative;z-index: 100;">
@foreach ($about as $data)
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area">
            <h2 class="title text-center" style="margin-top: 35px;">About us</h2>
            <div class="text-center">
                <span class="line"></span>
            </div>
              <p>{!! $data->description !!}</p>
          </div>
        </div>
        
      </div>
      <div class="row">
        <div class="col-md-6">
          <h5>
            Our Complated Project
          </h5>
          <div class="row">
            <div class="col-md-12">
                <div class="c_p">
                    <b>WEBSITE</b>
                    <span class="pull-right">122 Projects</span>
                </div>
            </div>
          </div>
          <br>

          <div class="row">
            <div class="col-md-12">
                <div class="c_p">
                    <b>WEBSITE</b>
                    <span class="pull-right">122 Projects</span>
                </div>
            </div>
          </div>
          <br>

          <div class="row">
            <div class="col-md-12">
                <div class="c_p">
                    <b>SOFTWARE</b>
                    <span class="pull-right">522 Projects</span>
                </div>
            </div>
          </div>
          <br>

          <div class="row">
            <div class="col-md-12">
                <div class="c_p">
                    <b>SCHOOL MANAGEMENT</b>
                    <span class="pull-right">1222 Projects</span>
                </div>
            </div>
          </div>
          <br>

          <div class="row">
            <div class="col-md-12">
                <div class="c_p">
                    <b>SEO</b>
                    <span class="pull-right">122 Projects</span>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <br>
            <div class="accordion" id="accordionExample">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                      <button class="btn btn-link" style="display: block;" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          <i class="fa fa-plus-circle"></i> Introduction
                      </button>
                    </h2>
                  </div>
              
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                      {!! $data->introduction !!}
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          <i class="fa fa-plus-circle"></i> Our Technical Work
                      </button>
                    </h2>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                      {!! $data->technical_work !!}
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          <i class="fa fa-plus-circle"></i> Mission
                      </button>
                    </h2>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                      {!! $data->mission !!}
                    </div>
                  </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingThree">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <i class="fa fa-plus-circle"></i> Vision
                        </button>
                      </h2>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                      <div class="card-body">
                        {!! $data->vision !!}
                      </div>
                    </div>
                  </div>
              </div>
        </div>
      </div>
    </div>
@endforeach
  </section>
  <!-- end about -->
        <!-- Teachers -->

    <div class="teachers">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="teachers_title text-center">Our Member</div>
                </div>
            </div>
            <div class="row teachers_row">
                
                <!-- Teacher -->
                @foreach ($members as $member)
                <div class="col-lg-4 col-md-6">
                        <div class="teacher">
                            <div class="teacher_image"><img src="{{$member->photo_url}}" data-toggle="modal" data-target="#myModal" alt="https://unsplash.com/@nickkarvounis"></div>
                            <div class="teacher_body text-center">
                                <div class="teacher_title"><a href="#" data-toggle="modal" data-target="#myModal">{{$member->name}}</a></div>
                                <div class="teacher_subtitle">{{$member->position}}</div>
                                <div class="teacher_social">
                                    <ul>
                                        <li><a href="{{$member->link}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $paginate_members->links() }}
        </div>
    </div> 
 @endsection