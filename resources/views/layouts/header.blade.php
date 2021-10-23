<?php
use App\Http\Controllers\ProductsController;
if (Session::has('user')) {
    $total = ProductsController::getTotalCartItems();
} else {
    $total = 0;
}

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="{{ URL::asset('/images/bootstrap-4.svg') }}" alt="Bootstrap logo" width="30" height="24"
                class="d-inline-block align-top">
            AES Computer</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav text-center   mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="allOrders">All Orders</a>
                </li>
            </ul>
           

            <ul class="nav navbar-nav navbar-right ms-auto">
                <li>
                    <a class="nav-link" href="/cart">Cart({{ $total }})</a>
                </li>
                @if (Session::has('user'))
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Session::get('user')['name'] }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="/logout">Logout</a></li>

                        </ul>
                    </li>
                @else
                    <li>
                        <a href="/login" class="nav-link">Login</a>
                        
                    </li>
                    <li>
                        <a href="/register" class="nav-link">Register</a>
                    </li>
                @endif

            </ul>

        </div>
    </div>
</nav>
