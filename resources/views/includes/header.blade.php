<header class="theme-1">
    <div class="header__upper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="header__upper--left">
                        <div class="logo">
                            <a href="index.html"><img src="assets/images/logo-main.png" alt=""></a>
                        </div>
                        <div class="search-bar">
                            <form class="form">
                                <span class="icon icon-left"><i class="fas fa-map-marker-alt"></i></span>
                                <input class="form-control" type="search" name="search-bar"
                                    placeholder="Tell us your location" id="search-bar">
                                <button class="button button-dark" type="submit"><img
                                        src="assets/images/arrow-shape.png" alt=""></button>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header__upper--right">
                        <nav class="navigation">
                            <ul>
                                <li><a href="ride-with-cabgo.html">Ride</a></li>
                                <li><a href="my-driver-dashboard.html">Drive</a></li>
                                <li><a href="contact-us.html">Help</a></li>
                                <li><a href="{{ url('login') }}">Sign in</a></li>
                            </ul>
                        </nav>
                        <a href="ride-with-cabgo.html" class="button button-dark big">Ride with Carrgo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header__lower">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-dark">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto">
                                <li class="nav-item dropdown active">
                                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button"
                                        aria-expanded="false" href="index.html"><i class="fas fa-home"></i>Home <span
                                            class="sr-only">(current)</span></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="index-1.html">Home 2</a></li>

                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html"><i
                                            class="fas fa-exclamation-circle"></i>About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="our-services.html"><i class="fas fa-cog"></i>Our
                                        Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="our-vehicles.html"><i class="fas fa-taxi"></i>Our
                                        Vehicles</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="packages.html"><i class="fas fa-cube"></i>Packages</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact-us.html"><i
                                            class="fas fa-map-marker-alt"></i>Contacts</a>
                                </li>
                            </ul>
                            <div class="my-2 my-lg-0">
                                <a href="sign-up.html" class="button button-light big">Become a Driver</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
