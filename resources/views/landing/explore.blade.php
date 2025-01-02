<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../assets/js/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/heroes/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/styles.css">
    <title>VootageVault</title>
</head>
<body>
  <!-----------------------------------------------------------------------------------------------------------------------------------
  navbar
  -------------------------------------------------------------------------------------------------------------------------------------->
  <nav class="navba navbar navbar-expand-lg fixed-top">
    <div class="container-fluid px-5">
      <a class="navbar-brand" href="index.html">VootageVault</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <form class="d-flex p-4" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Explore</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

 
  <!-----------------------------------------------------------------------------------------------------------------------------------
    Body
  -------------------------------------------------------------------------------------------------------------------------------------->


    <div class="container my-5">
        <h2 class="text-center mb-4">Free Stock Photos</h2>
        <div class="d-flex justify-content-end mb-3">
          <button class="btn btn-outline-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Trending
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Popular</a></li>
            <li><a class="dropdown-item" href="#">Newest</a></li>
          </ul>
        </div>



  <!-- Gallery -->
  <div class="row">
    
    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
      <div class="photo-card">
        <img src="{{ asset('/storage/cactus (8).jpeg') }}" alt="Photo">
        <div class="photo-overlay">
          <div class="profile-info">
            <img src="{{ asset('/storage/cactus (10).jpeg') }}g" alt="Profile">
            <span>Rexzy Febriano</span>
          </div>
          <div class="icons">
            <button class="btn btn-sm ">Download</button>
          </div>
        </div>
      </div>
  
      <div class="photo-card">
        <img src="{{ asset('/storage/cactus (9).jpeg') }}" alt="Photo">
        <div class="photo-overlay">
          <div class="profile-info">
            <img src="{{ asset('/storage/cactus (10).jpeg') }}" alt="Profile">
            <span>Rexzy Febriano</span>
          </div>
          <div class="icons">
            <button class="btn btn-sm ">Download</button>
          </div>
        </div>
      </div>
  
      <div class="photo-card">
        <img src="{{ asset('/storage/cactus (9).jpeg') }}" alt="Photo">
        <div class="photo-overlay">
          <div class="profile-info">
            <img src="{{ asset('/storage/cactus (10).jpeg') }}" alt="Profile">
            <span>Rexzy Febriano</span>
          </div>
          <div class="icons">
            <button class="btn btn-sm ">Download</button>
          </div>
        </div>
      </div>
  
    </div>
  
    <div class="col-lg-4 mb-4 mb-lg-0">
      <div class="photo-card">
        <img src="{{ asset('/storage/iceberg (10).jpeg') }}" alt="Photo">
        <div class="photo-overlay">
          <div class="profile-info">
            <img src="{{ asset('/storage/iceberg (14).jpeg') }}" alt="Profile">
            <span>Hakim Makarim</span>
          </div>
          <div class="icons">
            <button class="btn btn-sm ">Download</button>
          </div>
        </div>
      </div>
  
      <div class="photo-card">
        <img src="{{ asset('/storage/cloud (19).jpeg') }}" alt="Photo">
        <div class="photo-overlay">
          <div class="profile-info">
            <img src="{{ asset('/storage/iceberg (14).jpeg') }}" alt="Profile">
            <span>Hakim Makarim</span>
          </div>
          <div class="icons">
            <button class="btn btn-sm ">Download</button>
          </div>
        </div>
      </div>
  
      <div class="photo-card">
        <img src="{{ asset('/storage/cactus (1).jpeg') }}" alt="Photo">
        <div class="photo-overlay">
          <div class="profile-info">
            <img src="{{ asset('/storage/iceberg (14).jpeg') }}" alt="Profile">
            <span>Rexzy Febriano</span>
          </div>
          <div class="icons">
            <button class="btn btn-sm ">Download</button>
          </div>
        </div>
      </div>
      
      <div class="photo-card">
        <img  src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.webp" alt="Photo">
        <div class="photo-overlay">
          <div class="profile-info">
            <img src="{{ asset('/storage/iceberg (14).jpeg') }}" alt="Profile">
            <span>Rexzy Febriano</span>
          </div>
          <div class="icons">
            <button class="btn btn-sm ">Download</button>
          </div>
        </div>
      </div>
      
    </div>
  
    <div class="col-lg-4 mb-4 mb-lg-0">
      
      <div class="photo-card">
        <img
        src="{{ asset('/storage/cloud (16).jpeg') }}"/>
        <div class="photo-overlay">
          <div class="profile-info">
            <img src="{{ asset('/storage/cloud (1).jpeg') }}" alt="Profile">
            <span>Shavalino Fayola</span>
          </div>
          <div class="icons">
            <button class="btn btn-sm ">Download</button>
          </div>
        </div>
      </div>
  
      <div class="photo-card">
        <img
        src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.webp" alt="Yosemite National Park"/>
        <div class="photo-overlay">
          <div class="profile-info">
            <img src="{{ asset('/storage/cloud (12).jpeg') }}" alt="Profile">
            <span>Shavalino Fayola</span>
          </div>
          <div class="icons">
            <button class="btn btn-sm ">Download</button>
          </div>
        </div>
      </div>
  
    </div>
  
  </div>
  <!-- Gallery -->
</div>

   <!-----------------------------------------------------------------------------------------------------------------------------------
    FOoter
  -------------------------------------------------------------------------------------------------------------------------------------->
  <footer class="footer py-5">
    <div class="container">
      <div class="row">
        <!-- Left Section -->
        <div class="col-md-4">
          <h5>Where stories come together.</h5>
          <div class="mt-3">
            <button class="btn btn-outline-secondary me-2">Download on iOS</button>
            <button class="btn btn-outline-secondary">Download on Android</button>
          </div>
        </div>

        <!-- Center Section -->
        <div class="col-md-4">
          <h6 class="text-uppercase text-muted">Pexels</h6>
          <ul class="list-unstyled">
            <li><a href="#" class="text-dark text-decoration-none">Free Stock Photos</a></li>
            <li><a href="#" class="text-dark text-decoration-none">Free Videos</a></li>
            <li><a href="#" class="text-dark text-decoration-none">Popular searches</a></li>
            <li><a href="#" class="text-dark text-decoration-none">Collections</a></li>
            <li><a href="#" class="text-dark text-decoration-none">Challenges</a></li>
            <li><a href="#" class="text-dark text-decoration-none">Leaderboard</a></li>
            <li><a href="#" class="text-dark text-decoration-none">Other plugins & apps</a></li>
          </ul>
        </div>

        <!-- Right Section -->
        <div class="col-md-4">
          <h6 class="text-uppercase text-muted">Free Stock Photos</h6>
          <div class="d-flex flex-wrap gap-2">
            <a href="#" class="btn btn-outline-secondary btn-sm">Black and white photography</a>
            <a href="#" class="btn btn-outline-secondary btn-sm">Happy birthday images</a>
            <a href="#" class="btn btn-outline-secondary btn-sm">Cool wallpapers</a>
            <a href="#" class="btn btn-outline-secondary btn-sm">Galaxy wallpaper</a>
            <a href="#" class="btn btn-outline-secondary btn-sm">iPhone wallpaper</a>
          </div>
        </div>
      </div>

      <!-- Social Media Links -->
      <div class="row mt-4">
        <div class="col text-center">
          <a href="#" class="me-3"><i class="bi bi-instagram"></i></a>
          <a href="#" class="me-3"><i class="bi bi-youtube"></i></a>
          <a href="#" class="me-3"><i class="bi bi-tiktok"></i></a>
          <a href="#" class="me-3"><i class="bi bi-linkedin"></i></a>
          <a href="#"><i class="bi bi-twitter"></i></a>
        </div>
      </div>

      <!-- Bottom Section -->
      <div class="row mt-4">
        <div class="col text-center text-muted">
          <p>&copy; 2024 VootageVault</p>
          <p>
            <a href="#" class="text-dark text-decoration-none me-2">Terms of Use</a>
            <a href="#" class="text-dark text-decoration-none me-2">Privacy Policy</a>
            <a href="#" class="text-dark text-decoration-none me-2">License</a>
            <a href="#" class="text-dark text-decoration-none me-2">Imprint</a>
            <a href="#" class="text-dark text-decoration-none">Cookies Policy</a>
          </p>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/js/script.js"></script>


</body>
</html>