<div class="header_section">
    <div class="row">
        <div class="col-sm-4">
            <div class="search_icon"></div>
        </div>
        <div class="col-sm-4">
            <div class="logo"><a href="{{route("home")}}"><img src="{{asset("assets/images/logo.png")}}"></a></div>
        </div>
        <div class="col-sm-4">
            <div class="togle_3">
                <div class="left_main">
                    <div class="menu_main">

                        @if(session()->has('user'))

                            <a href="{{route("logout")}}"><i class="fa fa-fw fa-user"></i>Log out</a>

                        @else
                        <a href="{{route("login")}}"><i class="fa fa-fw fa-user"></i> Login</a>
                        <a href="{{route("register")}}">Register</a>
                            @endif

                    </div>
                </div>
                <div class="right_main">
                    <div class="togle_main"><a class="openbtn" onclick="openNav()"><img src="{{asset("assets/images/togle-menu-icon.png")}}" style="max-width: 100%;"></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
