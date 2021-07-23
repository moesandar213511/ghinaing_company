<nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <!-- LOGO -->
                <a class="navbar-brand logo" href="index.html">
                    GREEN HACKERS
                </a>

                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item @if($url=="index") active @endif">
                            <a href="{{url('/')}}" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item @if($url=="about") active @endif">
                            <a href="{{url('/about')}}" class="nav-link">About</a>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="custom-drop dropdown-toggle"  id="dropdownMenu2" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Service</a>
                                 <div class="dropdown-menu dropdown-primary">
                                    <a class="dropdown-item" href="{{url('training')}}">Training</a>
                                    <a class="dropdown-item" href="#">Our Pricing</a>
                                    <a class="dropdown-item" href="{{url('/seo')}}">SEO</a>
                                    <a class="dropdown-item" href="{{url('/our_project')}}">Our Project</a>
                                    <a class="dropdown-item" href="{{url('our_website')}}">Our Website</a>
                                    <a class="dropdown-item" href="{{url('software')}}">Software</a>
                                  </div>
                        </li>
                        <li class="nav-item @if($url=="contact") active @endif">
                            <a href="{{url('/contact')}}" class="nav-link">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>