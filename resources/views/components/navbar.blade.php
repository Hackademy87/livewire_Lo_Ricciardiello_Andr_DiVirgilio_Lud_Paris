<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="">Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="{{route('song.create')}}">CREA PRODOTTI</a>
        </li>
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>


<form class="d-flex" role="search" action="" method="GET">
        <input class="form-control me-2" type="search" placeholder="Search" name="search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
  <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        
          <li class="nav-item">
            <a class="btn btn-primary" href="">Login</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-secondary mx-2" href="">Registrati</a>
          </li>
    
          <li class="nav-item">
            
          </li>
          <li class="nav-item">
            <form action="" method="POST">
             
              <button class="btn btn-secondary mx-2" >Logout</button>
            </form>
          </li>
        
      </ul>


    </div>
  </div>
</nav>
      