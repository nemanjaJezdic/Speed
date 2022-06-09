<div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    @foreach($menu as $link)
        <li class="nav-item">
            <a class="nav-link @if(request()->routeIs($link->route)) active @endif" href="{{ route($link->route )}}" >{{ $link->title }}</a>
        </li>
    @endforeach

    @if(session()->has('user') && session()->get('user')->role_id == 1)
        <li class="nav-item">
            <a class="nav-link" href="{{route("users.index")}}" >Admin panel</a>
        </li>
    @endif
</div>
