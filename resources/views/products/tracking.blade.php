<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>FedEx Clone - Responsive</title>
  <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/a2e0e6f91c.js" crossorigin="anonymous"></script>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
    }
    .fedex-purple {
      background-color: #4d148c;
      color: white;
    }
    .quick-action i {
      font-size: 1.5rem;
      color: #4d148c;
    }
    .footer-links a {
      text-decoration: none;
      color: #4d148c;
      padding-bottom: 0.5rem;
    }
    .footer-links a:hover {
        text-decoration: underline;
    }
    .footer-icons i {
      font-size: 1.2rem;
      color: #4d148c;
      margin: 0 8px;
    }
    .btn-orange {
      background-color: #ff6600;
      color: white;
      border: none;
    }
    .btn-orange:hover {
      background-color: #e65c00;
      color: white;
    }
    .btn-outline-primary {
        border-color: #4d148c;
        color: #4d148c;
    }
    .btn-outline-primary:hover {
        background-color: #4d148c;
        color: white;
    }
    .card {
        border: 1px solid #ddd;
        transition: box-shadow 0.3s ease-in-out;
    }
    .card:hover {
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }
    /* Ensure images in cards don't get distorted */
    .card-img-top {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }
  </style>
</head>
<body>

  <!-- Top Navbar -->
  <nav class="navbar navbar-expand-lg fedex-purple">
    <div class="container-fluid px-4">
      <a class="navbar-brand text-white fw-bold" href="#">FedEx</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu" aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" style="background-image: url('data:image/svg+xml;charset=utf8,%3Csvg viewBox=\'0 0 30 30\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath stroke=\'rgba(255, 255, 255, 1)\' stroke-width=\'2\' stroke-linecap=\'round\' stroke-miterlimit=\'10\' d=\'M4 7h22M4 15h22M4 23h22\'/%3E%3C/svg%3E');"></span>
      </button>
      <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shipping</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Create Shipment</a></li>
              <li><a class="dropdown-item" href="#">Rates</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Tracking</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Track a Package</a></li>
              <li><a class="dropdown-item" href="#">Advanced Tracking</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Design & Print</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Support</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Sign Up or Log In</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
          <button class="btn btn-light" type="submit"><i class="fas fa-search"></i></button>
        </form>
      </div>
    </div>
  </nav>

  <!-- Quick Actions + Tracking -->
  <section class="container my-4">
    <div class="bg-light p-4 rounded shadow-sm">
        <div class="row gy-4 align-items-center">
            <div class="col-lg-7">
                <div class="row text-center">
                    <div class="col-6 col-md-3">
                        <div class="quick-action">
                            <i class="fas fa-calculator"></i>
                            <div>Get a Quote</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="quick-action">
                            <i class="fas fa-shipping-fast"></i>
                            <div>Ship now</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="quick-action">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>Find Locations</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="quick-action">
                            <i class="fas fa-headset"></i>
                            <div>Contact support</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <form action="{{route('track')}}" method="POST" class="d-flex gap-2">
                    @csrf
                    <input type="text" class="form-control" name="tracking_number" placeholder="Tracking number" />
                    <button type="submit" class="btn btn-orange text-nowrap">TRACK</button>
                </form>
            </div>
        </div>
    </div>
  </section>

  <!-- Hero Section -->
  <section class="container my-5">
    <div class="row align-items-center">
      <div class="col-md-6">
        <!-- Replaced src with a placeholder and added img-fluid class -->
        <img src="{{asset('testing/images/IMG-20250627-WA0019.jpg')}}" alt="FedEx Founder" class="img-fluid rounded">
      </div>
      <div class="col-md-6 mt-4 mt-md-0">
        <h4>Honoring the Legacy of Frederick W. Smith</h4>
        <p class="text-muted">Visionary Founder of FedEx</p>
        <p>An innovative leader whose legacy will be felt for generations to come.</p>
        <a href="#" class="btn btn-outline-primary">Read about Mr. Smith's legacy</a>
      </div>
    </div>
  </section>

  <!-- Why Ship Section -->
  <section class="container my-5">
    <div class="row align-items-center gy-4">
        <!-- Changed to col-12 col-lg-6 to stack on mobile -->
        <div class="col-12 col-lg-6">
           <h1>Why ship with FedEx?</h1>
           <div class="row mt-4">
              <!-- Changed to col-12 col-md-6 to stack on smaller screens -->
              <div class="col-12 col-md-6">
                <h6>Innovative solutions for reliability & speed</h6>
                <p>Whether it's across states or worldwide, we prioritize the secure and swift arrival of your shipments.</p>

                <h6 class="mt-4">We ship everywhere*</h6>
                <p>From major cities to remote locations, your goods can reach worldwide.</p>
              </div>
              <div class="col-12 col-md-6">
                <h6>Careful handling you can trust</h6>
                <p>When you need reliable delivery and careful handling, trust FedEx to get your items where they need to go on time.</p>
                <h6 class="mt-4">FedEx can ship for less than the Post Office</h6>
                <p>Two-day retail shipping, one flat rate. FedEx One Rate®**</p>
              </div>
           </div>
           <small class="d-block mt-3 text-muted">*FedEx doesn't ship anywhere sanctioned by the U.S.<br>**Exclusions apply. Visit the One Rate page to learn more.</small>
        </div>
        <div class="col-12 col-lg-6">
            <!-- Removed fixed width/height, added img-fluid -->
            <img src="{{asset('testing/images/IMG-20250627-WA0007.jpg')}}" alt="FedEx Shipping Box" class="img-fluid rounded">
        </div>
    </div>
    <div class="d-flex justify-content-center mt-5">
        <button class="btn btn-lg btn-orange">START SHIPPING NOW</button>
    </div>
  </section>

  <!-- Summer Section -->
  <section class="container my-5">
    <div class="text-center mb-5">
        <h2 class="display-5">Summer is more relaxing with flexible shipping</h2>
    </div>
    <div class="row gy-4">
        <!-- Replaced placeholder content with responsive cards -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100">
                <img src="{{asset('testing/images/IMG-20250627-WA0018.jpg')}}" class="card-img-top" alt="Vacation Hold">
                <div class="card-body">
                    <h5 class="card-title">Make packing shipments a breeze</h5>
                    <p class="card-text mb-5">Going on vacation? Redirect your packages to a secure FedEx location or a participating retailer and pick them up when you're back.</p>
                    <a href="#" class="fw-bold">PACK WITH CONFIDENT</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100">
                <img src="{{asset('testing/images/IMG-20250627-WA0016.jpg')}}" class="card-img-top" alt="Delivery Manager">
                <div class="card-body">
                    <h5 class="card-title">Keep packages secure from afar</h5>
                    <p class="card-text">Take a trip without worrying about boxes piling up at home. Use FedEx Delivery Manager® to redirect packages for pickup. Or place a free vacation hold.</p>
                    <a href="#" class="fw-bold">MANAGE YOUR DELIVERIES</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100">
                <img src="{{asset('testing/images/IMG-20250627-WA0008.jpg')}}" class="card-img-top" alt="FedEx Mobile App">
                <div class="card-body">
                    <h5 class="card-title">Ship and track with a few taps</h5>
                    <p class="card-text">Get delivery updates on your phone by enabling push notifications in the FedEx® Mobile app. Track packages and manage deliveries from one convenient place.</p>
                    <a href="#" class="fw-bold">DOWMLOAD THE APP</a>
                </div>
            </div>
        </div>
    </div>
 </section>

  <!-- Proactive Business Section -->
  <section class="container my-5">
    <div class="row align-items-center gy-4">
        <div class="col-lg-6">
           <p class="fs-4">Ship globally with the right guidance</p>
           <p>It’s a big world, and international shipping can be complex. But it’s easier with support from experts, timesaving tools, and flexible shipping and logistics services.</p>
           <button class="btn btn-lg btn-outline-primary mt-3">EXPLORE GLOBAL SHIPPING</button>
        </div>
        <div class="col-lg-6">
             <!-- Removed fixed width/height, added img-fluid -->
             <img src="{{asset('testing/images/IMG-20250627-WA0015.jpg')}}" alt="Global Shipping" class="img-fluid rounded">
        </div>
    </div>

     <p class="display-5 text-center mt-5 pt-4">Be proactive to help your business shine</p>

     <!-- Adjusted grid and alignment for responsiveness -->
     <div class="row mt-4 align-items-center gy-3">
        <div class="col-md-3 text-center">
          <!-- Removed fixed width, added img-fluid -->
          <img src="{{asset('testing/images/IMG-20250627-WA0010.jpg')}}" alt="Customs" class="img-fluid rounded">
        </div>
        <div class="col-md-9 text-center text-md-start">
            <p class="fs-5 mb-1">Clear customs. And a path forward.</p>
            <p>The latest U.S. tariffs and international shipping requirements are new. But changes in global trade aren't. FedEx has been helping customers navigate global regulations for 50+ years.</p>
            <a href="#" class="fw-bold">UNDERSTAND TARIFFS</a>
        </div>
     </div>

      <div class="row mt-5 align-items-center gy-3">
        <div class="col-md-3 text-center">
          <img src="{{asset('testing/images/IMG-20250627-WA0011.jpg')}}" alt="Rewards" class="img-fluid rounded">
        </div>
        <div class="col-md-9 text-center text-md-start">
            <p class="fs-5 mb-1">Watch your shipments turn into rewards.</p>
            <p>With FedEx Rewards, you earn gift cards from name-brand retailers when you ship. And you get a $10 gift card just for completing your first eligible shipment. It's free to sign up.*</p>
            <a href="#" class="fw-bold">JOIN FEDEX REWARDS</a>
        </div>
     </div>

      <div class="row mt-5 align-items-center gy-3">
        <div class="col-md-3 text-center">
          <img src="{{asset('testing/images/IMG-20250627-WA0012.jpg')}}" alt="Perishables" class="img-fluid rounded">
        </div>
        <div class="col-md-9 text-center text-md-start">
            <p class="fs-5 mb-1">Shipping perishables? Outsmart hot days.</p>
            <p>Learn how to pack items that need to stay cool, cold, or frozen. And let experts at the FedEx Packaging Lab test your packaging before you ship. It may help reduce claims.</p>
            <a href="#" class="fw-bold">PROTECT YOUR PERISHABLES</a>
        </div>
     </div>

     <div class="mt-5 pt-4 border-top">
         <h6>FedEx rate and surcharge changes</h6>
         <small class="text-muted"> Learn more about rate and surcharge changes--last updated 6/23/2025.</small>

          <h6 class="mt-4">FedEx money-back guarantee</h6>
         <small class="text-muted">We offer a money-back guarantee for select services. This guarantee may be suspended, modified, or revoked. Please check money-back guarantee for the latest status of our money-back guarantee.</small>

         <small class="d-block mt-4 text-muted">*For details, please see FedEx Rewards Terms and Conditions.</small>
     </div>
 </section>


  <!-- Footer -->
  <footer class="bg-light pt-5 pb-3 mt-5 border-top">
    <div class="container">
      <!-- Changed to col-6, col-lg-3 for better layout on small and medium screens -->
      <div class="row mb-4 gy-4">
        <div class="col-md-3 col-6">
          <h6 class="fw-bold">OUR COMPANY</h6>
          <div class="footer-links d-flex flex-column">
            <a href="#">About FedEx</a>
            <a href="#">Our Portfolio</a>
            <a href="#">Investor Relations</a>
            <a href="#">Careers</a>
          </div>
        </div>
        <div class="col-md-3 col-6">
          <h6 class="fw-bold">MORE FROM FEDEX</h6>
          <div class="footer-links d-flex flex-column">
            <a href="#">FedEx Developer Portal</a>
            <a href="#">FedEx Compatible</a>
            <a href="#">ShopRunner</a>

          </div>
        </div>
        <div class="col-md-3 col-6">
          <h6 class="fw-bold">LANGUAGE</h6>
          <select class="form-select" aria-label="Language select">
            <option selected>English</option>
            <option>Français</option>
            <option>Español</option>
          </select>
        </div>
        <div class="col-md-3 col-6">
          <h6 class="fw-bold">FOLLOW FEDEX</h6>
          <div class="footer-icons mt-2">
            <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
            <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
            <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
          </div>
        </div>
      </div>
      <div class="text-center small text-muted border-top pt-3">
        &copy; FedEx 1995–2025 | <a href="#">Terms of Use</a> | <a href="#">Privacy & Security</a><br>
        <a href=""><small> &copy;ateba otabela jean patrice</small></a>
      </div>
    </div>
  </footer>

  <!-- Consolidated and cleaned up script section -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    // Example of how you could trigger the SweetAlert popup.
    // This is just for demonstration as the original PHP logic was removed.
    document.addEventListener('DOMContentLoaded', function() {
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.has('tracking_error')) {
            Swal.fire({
                icon: 'error',
                title: 'Invalid tracking number!',
                text: 'Go back to your orders and verify your tracking number and try again',
                confirmButtonText: 'Okay'
            });
        }
    });

   
    // Use SweetAlert2 for popup confirmation
    @if(session('tracking'))
        Swal.fire({
            icon: 'error',
            title: 'Invalid tracking number!',
            text: 'Go back to your orders and verify your tracking number and try again',
            confirmButtonText: 'Okay'
        });
    @endif


  </script>
</body>
</html>