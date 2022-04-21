<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
        with font-awesome or any other icon font library -->
    <li class="nav-item @if(Request::is('home')) active @endif">
        <a href="{{ url('home') }}" class="nav-link ">
            <i class="nav-icon fas fa-home"></i>
            <p>
                Accueil
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
  
    <li class="nav-item @if(Request::is('admin/users*')) active @endif">
        <a href="{{ url('admin/users') }}" class="nav-link ">
            <i class="nav-icon fas fa-user"></i>
            <p>
            Inscriptions
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
    <li class="nav-item @if(Request::is('admin/passagers*')) active @endif">
        <a href="{{ url('admin/passagers') }}" class="nav-link ">
            <i class="nav-icon fas fa-user"></i>
            <p>
            Passagers
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
    <li class="nav-item @if(Request::is('admin/conducteurs*')) active @endif">
        <a href="{{ url('admin/conducteurs') }}" class="nav-link ">
            <i class="nav-icon fas fa-user"></i>
            <p>
            Conducteurs
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
    <li class="nav-item @if(Request::is('admin/trajets*')) active @endif">
        <a href="{{ url('admin/trajets') }}" class="nav-link ">
            <i class="nav-icon fas fa-user"></i>
            <p>
            Trajets
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
   
    
</ul>