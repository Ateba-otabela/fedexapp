

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Products - ShopEase</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    .product-card {
      transition: transform 0.3s ease-in-out;
    }
    .product-card:hover {
      transform: scale(1.03);
    }
    .product-img {
      height: 220px;
      object-fit: cover;
    }
    .category-badge {
      position: absolute;
      top: 10px;
      left: 10px;
    }
    h1{
        font-size: 60px;
        margin-top: 190px;
        margin-bottom: 20px;
    }
  
  </style>
</head>
<body>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ShopEase Navbar</title>
  <link href="{{ asset('bootstrap-5.0.2-dist/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('bootstrap-5.0.2-dist/js/bootstrap.min.js') }}" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-white bg-warning shadow-sm sticky-top">
  <div class="container">
    <!-- Logo / Brand -->
    <a class="navbar-brand fw-bold " style="font-size:40px;" href="#">APL</a>

    <!-- Toggler for mobile -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="mainNavbar">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link active" href="/">Home</a></li>
        
         <li class="nav-item"><a class="nav-link" href="/admin">dashboard</a></li>
        
        <li class="nav-item"><a class="nav-link" href="/order">Orders</a></li>
        <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="/tracking">Tracking</a></li>
        <li class="nav-item"><a class="nav-link" href="/FAQ">FAQ</a></li>
      </ul>
        <?php
          //Small php code to display the cart count
    //           use App\Models\cart;
    //           $id = Auth::user()->id;
   
    // $cart_count = cart::where('user_id',$id)->count();
    //     ?>
      <!-- Search bar -->
      <form action="{{ route('search') }}" method="post" class="d-flex me-3" role="search">
        @csrf
        @auth
        <input class="form-control form-control-sm me-2" name="search" type="search" placeholder="Search products..." aria-label="Search">
        <button class="btn btn-outline-secondary btn-sm" type="submit"><i class="bi bi-search"></i></button>
      
         
       
        
        @endauth
       
      </form>

      <!-- Cart + Auth -->
       
        
      
      <a href="/cart" class="btn btn-outline-dark btn-sm me-2">
        <i class="bi bi-cart"></i> Cart
        
      </a>
<span class=" mt-2 rounded-circle bg-danger text-center text-white p-1" style="margin-right:29px; position:relative;"></span>
      <form action="{{ route('logout') }}" method="post">
        @csrf
         <!-- <button type="submit" class="btn btn-outline-danger btn-sm me-2">Logout</button> -->
      </form>
      
        @can('admin_access')
         <a href="/post_product" class="btn btn-outline-success btn-sm me-2">Post</a>
        @endcan
      


     @cannot('show_auth')

     <a href="{{ route('login') }}" class="btn btn-outline-primary btn-sm me-2">Login</a>
     @endcannot
     
       
     
    
              
    
    </div>
  </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<div class="container">
@if(session('success'))
        <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
 @endif
    {{ $slot }}
</div>
 



  
  <!-- Bootstrap & AOS scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 800,
      once: true
    });
  </script>
</body>
<footer class="bg-dark text-light pt-5 pb-3 shadow-sm">
  <div class="container">
    <div class="row">
      <!-- Company Info -->
      <div class="col-md-4 mb-4">
        <h5 class="fw-bold">FedEx</h5>
        <p>Your favorite destination for quality products at unbeatable prices. Fast delivery, easy returns, and customer-first service.</p>
      </div>

      <!-- Useful Links -->
      <div class="col-md-2 mb-4">
        <h6 class="text-uppercase fw-bold mb-3">Shop</h6>
        <ul class="list-unstyled">
          <li><a href="#" class="text-light text-decoration-none">Men</a></li>
          <li><a href="#" class="text-light text-decoration-none">Women</a></li>
          <li><a href="#" class="text-light text-decoration-none">Electronics</a></li>
          <li><a href="#" class="text-light text-decoration-none">Accessories</a></li>
        </ul>
      </div>

      <!-- Customer Service -->
      <div class="col-md-3 mb-4">
        <h6 class="text-uppercase fw-bold mb-3">Customer Service</h6>
        <ul class="list-unstyled">
          <li><a href="#" class="text-light text-decoration-none">Contact Us</a></li>
          <li><a href="#" class="text-light text-decoration-none">Shipping Info</a></li>
          <li><a href="#" class="text-light text-decoration-none">Returns</a></li>
          <li><a href="#" class="text-light text-decoration-none">FAQ</a></li>
        </ul>
      </div>

      <!-- Social Media -->
      <div class="col-md-3 mb-4">
        <h6 class="text-uppercase fw-bold mb-3">Follow Us</h6>
        <a href="#" class="text-light me-3"><i class="bi bi-facebook fs-5"></i></a>
        <a href="#" class="text-light me-3"><i class="bi bi-instagram fs-5"></i></a>
        <a href="#" class="text-light me-3"><i class="bi bi-twitter fs-5"></i></a>
        <a href="#" class="text-light"><i class="bi bi-youtube fs-5"></i></a>
      </div>
    </div>

    <hr class="text-secondary" />

    <div class="text-center">
      <small>&copy; 2025 ShopEase. All rights reserved.</small>
    </div>
  </div>
</footer>

<!-- Bootstrap & Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>
