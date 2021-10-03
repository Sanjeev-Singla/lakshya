
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-users"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('products*') ? 'active' : '' }}">
    <a href="{{ route('products.index') }}"><i class="fa fa-product-hunt"></i><span>Products</span></a>
</li>

<li class="{{ Request::is('orders*') ? 'active' : '' }}">
    <a href="{{ route('orders.index') }}"><i class="fa fa-shopping-cart"></i><span>Orders</span></a>
</li>

