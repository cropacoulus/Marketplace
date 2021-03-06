<nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top" data-aos="fade-down">
    <div class="container-fluid">
        <button class="btn btn-secondary d-md-none mr-auto mr-2" id="menu-toggle">
            &laquo; Menu
        </button>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Dekstop Menu -->
            <ul class="navbar-nav d-none d-lg-flex ml-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown">
                        <img src="{{ asset('images/icon-user.png') }}" alt="User" class="rounded-circle mr-2 profile-picture">
                        Hi, Angga
                    </a>
                    <div class="dropdown-menu">
                        <a href="/" class="dropdown-item">Logout</a>
                    </div>
                </li>
            </ul>
            <!-- End Dekstop Menu -->

            <!--- Mobile Menu -->
            <ul class="navbar-nav d-block d-lg-none">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        Hi, Angga
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link d-inline-block">
                        Cart
                    </a>
                </li>
            </ul>
        <!-- End Mobile Menu -->
        </div>
    </div>
</nav>