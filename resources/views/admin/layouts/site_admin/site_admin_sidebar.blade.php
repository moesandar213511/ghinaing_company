<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{asset('images/admin_image//sidebar-1.jpg')}}">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="{{url('/')}}" target="_blank" class="simple-text logo-normal">
            <img src="{{asset('images/admin_image/ghi.png')}}" style="width:50px;height:50px;" alt="">
        </a>
    </div>
 <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item @if($url=="project") active @endif">
                <a class="nav-link" href="{{url('admin/project')}}">
                    <i class="material-icons">bubble_chart</i>
                    <p>Manage Project</p>
                </a>
            </li>
            <li class="nav-item @if($url=="partner_company") active @endif">
                <a class="nav-link" href="{{url('admin/partner_company')}}">
                    <i class="material-icons">location_ons</i>
                    <p>Manage PartnerCompany</p>
                </a>
            </li>
            <li class="nav-item @if($url=="feedback") active @endif">
                <a class="nav-link" href="{{url('admin/feedback')}}">
                    <i class="material-icons">notifications</i>
                    <p>Feed Back</p>
                </a>
            </li><hr>
            <li class="nav-item @if($url=="about") active @endif">
                <a class="nav-link" href="{{url('admin/about')}}">
                    <i class="material-icons">notifications</i>
                    <p>About</p>
                </a>
            </li>
            <li class="nav-item @if($url=="member") active @endif">
                <a class="nav-link" href="{{url('admin/member')}}">
                    <i class="material-icons">group</i>
                    <p>Manage Member</p>
                </a>
            </li><hr>
            <li class="nav-item @if($url=="training") active @endif">
                <a class="nav-link" href="{{url('admin/training')}}">
                    <i class="material-icons">language</i>
                    <p>Training</p>
                </a>
            </li><hr>
            <li class="nav-item @if($url=="markting") active @endif">
                <a class="nav-link" href="{{url('admin/markting')}}">
                    <i class="material-icons">bubble_chart</i>
                    <p>Digital Markting</p>
                </a>
            </li><hr>
            <li class="nav-item @if($url=="our_website") active @endif">
                <a class="nav-link" href="{{url('admin/our_website')}}">
                    <i class="material-icons">bubble_chart</i>
                    <p>Our WebSite</p>
                </a>
            </li><hr>
            <li class="nav-item">
                <a class="nav-link" href="{{url('logout')}}">
                    <i class="material-icons">logout</i>
                    <p>Logout</p>
                </a>
            </li>
            {{-- <li class="nav-item @if($url=="feedback") active @endif">
                <a class="nav-link" href="{{url('admin/feedback')}}">
                    <i class="material-icons">location_ons</i>
                    <p>Manage Feedback</p>
                </a>
            </li> --}}
            {{--<li class="nav-item ">--}}
                {{--<a class="nav-link" href="./notifications.html">--}}
                    {{--<i class="material-icons">notifications</i>--}}
                    {{--<p>Notifications</p>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item ">--}}
                {{--<a class="nav-link" href="./rtl.html">--}}
                    {{--<i class="material-icons">language</i>--}}
                    {{--<p>RTL Support</p>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item active-pro ">--}}
                {{--<a class="nav-link" href="./upgrade.html">--}}
                    {{--<i class="material-icons">unarchive</i>--}}
                    {{--<p>Upgrade to PRO</p>--}}
                {{--</a>--}}
            {{--</li>--}}
        </ul>
    </div>
</div>