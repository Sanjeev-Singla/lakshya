<div class="header-right">
    {{-- <i class="fa fa-user-o fa-2x" style="color: white;margin-right: 25px;"></i> --}}
    <a href="{{ route('website.cart') }}">
        <i class="fa fa-shopping-cart fa-2x" style="color: white;"></i>
        <span>2</span>
    </a>
</div>
<nav class="main-menu mobile-menu">
    <ul>
        <li><a class="{{ Request::is('/') ? 'active' : '' }}" href="{{ route('website.home') }}">Home</a></li>
        <li><a class="{{ Request::is('products*') ? 'active' : '' }}" href="{{ route('website.all-products') }}">Products</a></li>
        @if (\Auth::check())
            <li><a class="{{ Request::is('change-password') ? 'active' : '' }}" href="{{ route('website.change-password') }}">Change Password</a></li>
            <li><a href="{{ route('website.logout') }}">Logout</a></li>
        @else
            <li><a class="{{ Request::is('register*') ? 'active' : '' }}" href="{{ route('website.register') }}">Register</a></li>
            <li><a class="{{ Request::is('signin*') ? 'active' : '' }}" href="{{ route('website.signin') }}">Sign in</a></li>
        @endif
    </ul>
</nav>