<div class="top-bar">
    <div class="top-bar-left">
        <ul class="dropdown menu" data-dropdown-menu>
            <li>{!! link_to('/', trans('navs.home')) !!}</li>
            <li class="has-submenu">
                <a href="#">One</a>
                <ul class="submenu menu vertical" data-submenu>
                    <li><a href="#">One</a></li>
                    <li><a href="#">Two</a></li>
                    <li><a href="#">Three</a></li>
                </ul>
            </li>
            <li><a href="#">Two</a></li>
            <li><a href="#">Three</a></li>
        </ul>
    </div>
    <div class="top-bar-right">
        <ul class="dropdown menu align-right" data-dropdown-menu>
        @if( Auth::guest() )
            <li>{!! link_to('auth/login', trans('navs.login')) !!}</li>
            <li>{!! link_to('auth/register', trans('navs.register')) !!}</li>
        @else
            <li class="has-submenu">
                <a href="#">{{ Auth::user()->name }}</a>
                <ul class="submenu menu vertical" data-submenu>
                    <li>{!! link_to('dashboard', trans('navs.dashboard')) !!}</li>

                    @permission('view-backend')
                    <li>{!! link_to_route('backend.dashboard', trans('navs.administration')) !!}</li>
                    @endauth

                    <li>{!! link_to('auth/logout', trans('navs.logout')) !!}</li>
                </ul>
            </li>
        @endif
        </ul>
    </div>
</div>
