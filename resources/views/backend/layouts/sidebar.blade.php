<aside class="main-sidebar sidebar-dark-primary elevation-4">
    {{-- <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{('backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Panneau d'administration</span>
    </a> --}}

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{('img/image1.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Recherche" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          {{-- <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Page d'acceuil
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           
          </li> --}}
         


@if (Auth::user()->role == 1 )

          <li class="nav-item">
            <a href="{{URL::to('/list_bookcategory')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Liste des catégories de livres
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL::to('/add_bookcategory')}}" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Ajouter une catégorie de livre
                 {{-- <span class="right badge badge-danger">Nouvelle</span> --}}
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{URL::to('/user_list')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                
                  Liste des utilisateurs
                  {{-- <span class="right badge badge-danger">Nouveau</span> --}}
              </p>
            </a>
          </li>
        
@endif


@if (Auth::user()->role == 2 )

          <li class="nav-item">
            <a href="{{URL::to('/list_bookcategory')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Liste des catégories de livres
                 {{-- <span class="right badge badge-danger">Nouvelle</span> --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL::to('/add_bookcategory')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Ajouter une catégorie de livre
                 {{-- <span class="right badge badge-danger">Nouvelle</span> --}}
              </p>
            </a>
          </li>

     
        
@endif



@if (Auth::user()->role == 3 )

          <li class="nav-item">
            <a href="{{URL::to('/list_bookcategory')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Liste des catégories de livres
                 
              </p>
            </a>
          </li>
          
        
@endif


<li class="nav-item">
<a class="dropdown-item" href="{{ route('logout') }}"
onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
<i class="fas fa-sign-out-alt"></i> Deconnexion
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
@csrf
</form>
</li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>