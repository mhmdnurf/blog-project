<nav class="navbar navbar-expand-lg">
    <div class="search-area">
        <div class="search-area-inner d-flex align-items-center justify-content-center">
            <div class="close-btn"><i class="icon-close"></i></div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <form action="#">
                        <div class="form-group">
                            <input type="search" name="search" id="search" placeholder="What are you looking for?">
                            <button type="submit" class="submit"><i class="icon-search-1"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <!-- Navbar Brand -->
        <div class="navbar-header d-flex align-items-center justify-content-between">
            <!-- Navbar Brand --><a href="/" class="navbar-brand">Bootstrap Blog</a>
            <!-- Toggle Button-->
            <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse"
                aria-expanded="false" aria-label="Toggle navigation"
                class="navbar-toggler"><span></span><span></span><span></span></button>
        </div>
        <!-- Navbar Menu -->
        <div id="navbarcollapse" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="/" class="nav-link ">Home</a>
                </li>
                <li class="nav-item"><a href="/" class="nav-link">Blog</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                            Welcome back, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/admin"><i
                                        class="bi bi-layout-sidebar-reverse"></i>Dashboard</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit"class="dropdown-item"><i
                                            class="bi bi-box-arrow-in-right"></i>Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="/login"><i class="bi bi-box-arrow-in-right"></i>Login</a>
                    </li>
                </ul>
            @endauth
            <div class="navbar-text"><a href="#" class="search-btn"><i class="icon-search-1"></i></a>
            </div>
            </ul>
        </div>
    </div>
</nav>
