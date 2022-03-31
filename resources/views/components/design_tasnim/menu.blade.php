<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

<header id="header">
  <div class="d-flex flex-column">

    <div class="profile">
      <img src="tasnim/img/logo.jpg" alt="" >
    </div>

  @auth

    <nav id="navbar" class="nav-menu navbar">
      <ul>
        <li><a href="#" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Ajouter Proprietaire</span></a></li>
        <li><a href="#" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Liste des proprataires</span></a></li>
        <li><a href="#" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Liste des proprietés</span></a></li>
        <li><a href="#" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>--------</span></a></li>
        <li><a href="#" class="nav-link scrollto"><i class="bx bx-server"></i> <span>--------</span></a></li>
        <li><a href="#" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>---------</span></a></li>
      </ul>
    </nav>

  @endauth
  </div>
</header>

<main id="main">
    <section class="breadcrumbs">
  <div class="container">

    
        @guest
        <div class="d-flex justify-content-between align-items-center">
          {{-- <ol>
            <li><a href="login" class="btn btn-success">Connexion</a></li>
            <li><a href="register" class="btn btn-success">S'inscrire</a></li>
          </ol> --}}
        </div>
        @else
          <x-app-layout>
          </x-app-layout>
        @endguest
       
         
  </div>
