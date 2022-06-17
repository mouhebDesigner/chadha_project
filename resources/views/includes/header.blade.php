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
                            <a href="#" style="color: black">Tel: +xxx xx xxx xxx</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    @guest
                    <div class="header__upper--right">
                        <nav class="navigation">
                            <ul>
                                <li><a href="{{ url('login') }}">Se connecter</a></li>
                            </ul>
                        </nav>
                        <a href="{{ url('register') }}" class="button button-dark big">S'inscrire</a>
                    </div>
                    @else 
                    <div class="header__upper--right">
                        <a href="{{ url('profile') }}" class="username">
                            {{ Auth::user()->nom }}
                            {{ Auth::user()->prenom }}
                        </a>
                        
                        <a class="button button-dark big" style="color: white" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Déconnecter') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form> 
                    </div>

                    @endif
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
                                    <a class="nav-link" data-bs-toggle="dropdown" role="button"
                                        aria-expanded="false" href="index.html"><i class="fas fa-home"></i>Acceuil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('trajets') }}"><i class="fas fa-cube"></i>Trajets</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contacts.index') }}"><i class="fas fa-cube"></i>Contacts</a>
                                </li>
                            </ul>
                            @guest
                            <div class="my-2 my-lg-0">
                                <a href="{{ route('conducteur.trajets.create') }}" class="button button-light big">Publier un trajet</a>
                            </div>
                            @endif
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
