<div class="navbar navbar-inverse set-radius-zero" >
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="right-div">
            <a href="{{route("logout")}}" class="btn btn-info pull-right">LOG ME OUT</a>
        </div>
    </div>
</div>
<!-- LOGO HEADER END-->
<section class="menu-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="navbar-collapse collapse ">
                    @php
                        $navItems = [
                            ['Users', 'users.index'],
                           ['Products', 'products.index'],
                           ['User actions', 'useractions.index'],
                           ['Home', 'home']
                        ];
                    @endphp
                    <ul id="menu-top" class="nav navbar-nav navbar-right">
                        @foreach($navItems as $item)
                            <li class="nav-item @if(request()->routeIs($item[1])) active @endif">
                                <a class="nav-link" href="{{ route($item[1])}}">
                                    <span>{{ $item[0] }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
