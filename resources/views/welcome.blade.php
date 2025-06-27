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
          
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
          <button class="btn btn-light" type="submit"><i class="fas fa-search"></i></button>
        </form>
      </div>
    </div>
  </nav>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Shipment Info</title>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .shipment-card {
      margin-bottom: 1.5rem;
    }
    .fedex-purple {
      background-color: #4d148c;
      color: white;
    }
    .card-header {
      font-weight: bold;
      background-color: #343a40;
      color: white;
    }
    .info-label {
      font-weight: 500;
    }
    
  #map {
    height: 200px;
    width: 100%;
    border: 1px solid #ccc;
    border-radius: 8px;
    margin-top: 15px;
  }


  </style>
</head>
<body>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<div class="container mt-4">
  <h2 class="mb-4">Shipment Details</h2>

  <!-- Shipment Card -->
  <div class="card  shadow-sm">
    <div class="ps-3 fs-5 fedex-purple">
      Shipment #1 
    </div>
    <div class="card-body row">
      <div class="col-md-6 mb-2">
        <span class="info-label">Sender's Name:</span>{{ $shipment->senders_name }}
      </div>
      <div class="col-md-6 mb-2">
        <span class="info-label">Company Location:</span>{{ $shipment->company_location }}
      </div>
      <div class="col-md-6 mb-2">
        <span class="info-label">Code:</span>{{ $shipment->code }}
      </div>
      <div class="col-md-6 mb-2">
        <span class="info-label">Company Email:</span> {{ $shipment->company_email }}
      </div>
      <div class="col-md-6 mb-2">
        <span class="info-label">Receiver's Name:</span> {{ $shipment->receivers_name }}
      </div>
      <div class="col-md-6 mb-2">
        <span class="info-label">Receiver Location:</span> {{ $shipment->receiver_location }}
      </div>
      <div class="col-md-6 mb-2">
        <span class="info-label">Zip Code:</span> {{ $shipment->zip_code }}
      </div>
      <div class="col-md-6 mb-2">
        <span class="info-label">Receiver Email:</span> {{ $shipment->receiver_email }}
      </div>
      <div class="col-md-6 mb-2">
        <span class="info-label">Package:</span>{{ $shipment->package }}
      </div>
      <div class="col-md-6 mb-2">
        <span class="info-label">Destination:</span> {{ $shipment->destination }}
      </div>
      <div class="col-md-6 mb-2">
        <span class="info-label">Carrier:</span> {{ $shipment->carier }}
      </div>
      <div class="col-md-6 mb-2">
        <span class="info-label">Type of Shipment:</span> {{ $shipment->type_of_shipment }}
      </div>
      <div class="col-md-6 mb-2">
        <span class="info-label">Weight:</span> {{ $shipment->weight }}
      </div>
      <div class="col-md-6 mb-2">
        <span class="info-label">Shipment Mode:</span> {{ $shipment->shipment_mode }}
      </div>
      <div class="col-md-6 mb-2">
        <span class="info-label">Carrier No:</span> {{ $shipment->carrier_No }}
      </div>
      <div class="col-md-6 mb-2">
        <span class="info-label">Product:</span> {{ $shipment->product }}
      </div>
      <div class="col-md-6 mb-2">
        <span class="info-label">Quantity:</span> {{ $shipment->qty }}
      </div>
      <div class="col-md-6 mb-2">
        <span class="info-label">Payment Mode:</span> {{ $shipment->payment_mode }}
      </div>
      <div class="col-md-6 mb-2 ">
        <span  class="info-label ">Comment:</span> {{ $shipment->comment }}
      </div>
      <div class="col-md-6 mb-2">
        <span class="info-label">Delivery Date:</span> {{ $shipment->delivery_date }}
      </div>
      <div class="col-md-6 mb-2">
        <span class="info-label">Delivery Time:</span> {{ $shipment->delivery_time }}
      </div>
      <div class="col-md-6 mb-2">
        <span class="info-label">Pick Up Date:</span> {{ $shipment->pick_up_date }}
      </div>
      <div class="col-md-6 mb-2">
        <span class="info-label">Pick Up Time:</span> {{ $shipment->pick_up_time }}
      </div>
      <div class="col-md-6 mb-2">
        <span class="info-label">Date:</span> {{ $shipment->date }}
      </div>
      <div class="col-md-6 mb-2">
        <span class="info-label">Time:</span>{{ $shipment->time }}
      </div>
      <div class="col-md-6 mb-2">
        <span class="info-label">Location:</span> {{ $shipment->location }}
      </div>
      <div class="col-md-6 mb-2 text-success">
        <span class="info-label">Status:</span> {{ $shipment->status }}
      </div>
      <div class="col-md-6 mb-2 text-success">
        <span class="info-label">Remark:</span> {{ $shipment->remark }}
      </div>
      <div class="col-md-6 mb-2">
        <span class="info-label">Updated By:</span> Admin
      </div>
  
  </div>
  <div class="card-body row">
      <div class="col-md-6 mb-2">
        <span class="info-label">Current Location:</span> <span id="location-name">{{ $shipment->location}}</span>
      </div>
      <div class="col-12">
        <div id="map">Loading map...</div>
      </div>
    </div>
    </div>
</div>
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
        &copy; FedEx 1995–2025 | <a href="#">Terms of Use</a> | <a href="#">Privacy & Security</a>
      </div>
    </div>
  </footer>
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<!-- Geocoding with Nominatim -->
<script>
  const locationName = document.getElementById("location-name").textContent;

  async function showMap(location) {
    const response = await fetch(`https://nominatim.openstreetmap.org/search?format=json&q=${encodeURIComponent(location)}`);
    const data = await response.json();

    if (data.length > 0) {
      const lat = parseFloat(data[0].lat);
      const lon = parseFloat(data[0].lon);

      const map = L.map('map').setView([lat, lon], 13);
      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 18,
        attribution: '© OpenStreetMap'
      }).addTo(map);

      L.marker([lat, lon]).addTo(map)
        .bindPopup(location)
        .openPopup();
    } else {
      document.getElementById("map").innerText = "Location not found.";
    }
  }

  showMap(locationName);
</script>
