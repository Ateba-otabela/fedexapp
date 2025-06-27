<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Welcome to Market Nest</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
 
    .hero {
      background: url('https://via.placeholder.com/1600x600') center/cover no-repeat;
      color: white;
      padding: 100px 0;
      text-shadow: 2px 2px 4px rgba(0,0,0,0.6);
    }
    .product img {
      height: 200px;
      object-fit: cover;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Market Nest</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Shop</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
          <!-- Register Button -->
<button type="button" class="btn btn-success btn-sm me-3" data-bs-toggle="modal" data-bs-target="#registerModal">
  Register
</button>

<!-- Register Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="registerModalLabel">Create an Account</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
      <form method="POST" action="{{ route('register') }}">
      @csrf
          <div class="mb-3">
            <label for="registerName" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="registerName" placeholder="John Doe" name="name">
          </div>

          <div class="mb-3">
            <label for="registerEmail" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="registerEmail" placeholder="example@email.com" name="email">
          </div>

          <div class="mb-3">
            <label for="registerPassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="registerPassword" placeholder="Create a password" name="password">
          </div>

          <div class="mb-3">
            <label for="registerConfirm" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="registerConfirm" placeholder="Repeat password" name="password_confirmation">
          </div>

          <button type="submit" class="btn btn-primary w-100">Register</button>
        </form>
      </div>

      <div class="modal-footer">
        <small class="text-muted">Already have an account? <a href="#" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a></small>
      </div>

    </div>
  </div>
</div>

<!-- Bootstrap JS (needed for modal functionality) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

          <!-- Login Button -->
<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#loginModal">
  Login
</button>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login to Your Account</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="POST" action="{{ route('login') }}">
      @csrf
          <div class="mb-3">
            <label for="loginEmail" class="form-label">Email address</label>
            <input type="email" class="form-control" id="loginEmail" placeholder="name@example.com" name="email">

          </div>
          <div class="mb-3">
            <label for="loginPassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="loginPassword" placeholder="••••••••" name="password">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="rememberMe">
            <label class="form-check-label" for="rememberMe">Remember me</label>
          </div>
          <button type="submit" class="btn btn-success w-100">Login</button>
        </form>
      </div>
      <div class="modal-footer">
        <small class="text-muted">Don't have an account? <a href="#">Register</a></small>
        
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS (required for modal) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero text-center" style="background-image: url('{{asset('testing/images/WhatsApp Image 2025-04-07 at 14.12.39_6c43e550.jpg')}}');">
    <div class="container">
      <h1 class="display-4 fw-bold">Welcome to <span style="color:pink;">Market Nest</span></h1>
      <p class="lead">Your one-stop shop for everything you love.</p>
      <!-- Login Button -->
<button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#loginModal">
Start Shopping
</button>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login to Your Account</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
        <small class="text-muted">Don't have an account? <a href="#">Register</a></small>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS (required for modal) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    </div>
  </section>

  <!-- Featured Products -->
  <section class="py-5">
    <div class="container">
      <h2 class="text-center mb-4">Featured Products</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card product">
            <img src="{{ asset('testing/images/IMG-20250405-WA0457.jpg') }}" class="card-img-top" alt="Product 1">
            <div class="card-body text-center">
              <h5 class="card-title">Product One</h5>
              <p class="card-text">$49.99</p>
              <a href="#" class="btn btn-outline-primary">View Details</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card product">
            <img src="{{ asset('testing/images/e55d8aa2-1a47-4ba3-91f7-b01e8d131471.png') }}" class="card-img-top" alt="Product 2">
            <div class="card-body text-center">
              <h5 class="card-title">Product Two</h5>
              <p class="card-text">$59.99</p>
              <a href="#" class="btn btn-outline-primary">View Details</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card product">
            <img src="{{ asset('testing/images/IMG-20250405-WA0453.jpg') }}" class="card-img-top" alt="Product 3">
            <div class="card-body text-center">
              <h5 class="card-title">Product Three</h5>
              <p class="card-text">$69.99</p>
              <a href="#" class="btn btn-outline-primary">View Details</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3">
    <p class="mb-0">&copy; 2025 ShopEase. All rights reserved.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
