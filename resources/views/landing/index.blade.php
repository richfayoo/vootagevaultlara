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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Climate+Crisis&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <title>VootageVault</title>
</head>
<body>

  @include('landing.navbar')
      

    <!---------------------------------------------------------------------------------------
    HERO
    ----------------------------------------------------------------------------------------->
    <header>
      <div class="overlay"></div>
      <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="asset('/storage/bg_pantai.mp4')" type="video/mp4">
      </video>
      
    <div class="hero px-4 pt-5 text-center">
      <h1 class="display-4 fw-bold text-white pt-5">Earn 10% More</h1>
      <div class="col-lg-6 mx-auto pb-5">
        <p class="lead mb-4">You're best choice to sell your footage, earn more with us </p>
      </div>

    </div>
    
  </header>
    
    <!---------------------------------------------------------------------------------------
    Section
    ----------------------------------------------------------------------------------------->
    <nav class="navhome nav justify-content-center py-3 mt-5">
      <a class="nav-link active" href="#">Home</a>
      <a class="nav-link text-dark" href="#">Videos</a>
      <a class="nav-link text-dark" href="#">Leaderboard</a>
      <a class="nav-link text-dark" href="#">Challenges</a>
    </nav>

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
      <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp" alt="Photo">
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
      <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.webp" alt="Photo">
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
      <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp" alt="Photo">
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
      <img  src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp" alt="Photo">
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
      src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp"/>
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
          <img src="{{ asset('/storage/cloud (1).jpeg') }}" alt="Profile">
          <span>Shavalino Fayola</span>
        </div>
        <div class="icons">
          <button class="btn btn-sm ">Download</button>
        </div>
      </div>
    </div>

  </div>

  <div class="d-flex justify-content-center align-items-center">
    <a href="explore.html" class="btn btn-primary btn-lg">See More</a>
  </div>
</div>
<!-- Gallery -->  
   
@include('landing.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/script.js"></script>
</body>
</html>