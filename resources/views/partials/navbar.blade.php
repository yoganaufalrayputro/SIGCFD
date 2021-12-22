<nav class="navbar navbar-default navbar-fixed-top navbar-shrink">
    <div class="container mt-4 ">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <a class="navbar-brand page-scroll" href="#page-top">Dagangnih!</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav navbar-nav navbar-left">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}"
                        href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="page-scroll" href="#mitra">Profil usaha</a>
                </li>

            </ul>

            <ul class=" nav navbar-nav navbar-right ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Welcome back, {{ auth()->user()-> name }}
                        </a>
                        {{-- <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Pendaftaran Tenant</a></li>
                            <li><a class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul> --}}
                    </li>
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropbtn">Dropdown</a>
                        <div class="dropdown-content">
                          <a href="#">pendaftaran tenan</a>
                          <a href="#">login</a>
                        </div>
                      </li>

                @else
                    <li class="nav-item">
                        <a href="/login" class="nav-link {{ ($title === "login") ? 'active' : '' }}">
                            <i class="bi bi-box-arrow-in-right"></i> Login</a>
                    </li>
                @endauth
            </ul>

        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
