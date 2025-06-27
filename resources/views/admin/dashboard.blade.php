<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard - E-commerce</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            min-height: 100vh;
            background-color: #343a40;
            color: #fff;
        }
        .sidebar a {
            color: #adb5bd;
            text-decoration: none;
        }
        .sidebar a:hover {
            color: #fff;
        }
        .dashboard-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .dashboard-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-2 sidebar p-3">
            <h4 class="text-white">Admin Panel</h4>
            <hr class="bg-light">
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link"><i class="bi bi-speedometer2"></i> Dashboard</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link"><i class="bi bi-box"></i> Products</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link"><i class="bi bi-cart-check"></i> Orders</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link"><i class="bi bi-person"></i> Users</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link"><i class="bi bi-truck"></i> Tracking</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link"><i class="bi bi-box-arrow-right"></i> Logout</a></li>
            </ul>
        </div>

        <!-- Main content -->
        <div class="col-md-10 p-4">
           <div class="d-flex justify-content-between mb-3">
               <h2 class="mb-4">Dashboard</h2>
              <a href="/d"> <button class="btn btn-sm bg-dark text-white pt-1">Track product</button></a>
           </div>
            
            <!-- Overview cards -->
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="card dashboard-card text-bg-primary">
                        <div class="card-body">
                            <h5 class="card-title">P. Orders</h5>
                            <p class="card-text fw-bold fs-4 text-white">{{$totalOrders}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card dashboard-card text-bg-success">
                        <div class="card-body">
                            <h5 class="card-title">Paid Order</h5>
                            <p class="card-text fs-4 text-white fw-bold">{{$totalProducts}}</p>
                        </div>
                    </div>
                </div>
                   <div class="col-md-3">
                    <div class="card dashboard-card text-bg-info">
                        <div class="card-body">
                            <h5 class="card-title text-white">Total Products</h5>
                            <p class="card-text fs-4 text-white fw-bold">{{$totalProducts}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card dashboard-card text-bg-warning">
                        <div class="card-body">
                            <h5 class="card-title text-white">Users</h5>
                            <p class="card-text fs-4 fw-bold text-white">{{$totalUsers}}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tracking Info -->
            <div class="mt-5">
                <h4>Tracking Information</h4>
                <div class="table-responsive">
                    
                        <table class="table table-bordered table-striped">
  <thead class="table-dark">
    <tr>
      <th>Sender's name</th>
      <th>Receiver's name</th>
      <th>Receiver's location</th>
      <th>package</th>
      <th>Receiver's email</th>
      <th>Destination</th>
      <th>Tracking number</th>
      <th>location</th> 
      <th>Action</th><!-- Action column -->
    </tr>
  </thead>
  @forelse ($shipment as $shipment)
  <tr>
      <td>{{  $shipment->senders_name }}</td>
      <td>{{  $shipment->receivers_name }}</td>
      <td>{{  $shipment->receiver_location}}</td>
      <td>{{  $shipment->package}}</td>
      <td>{{  $shipment->receiver_email}}</td>
      <td>{{  $shipment->destination}}</td>
      <td>{{  $shipment->tracking_number}}</td>
      <td><span class="badge bg-warning text-dark"></span>{{  $shipment->location}}</td>
      <td>
        <a href="{{ route('showtracking', $shipment->id) }}" class="btn btn-sm btn-primary">Edit</a>
        <form action="#" method="POST" style="display:inline;">
       
        </form>
      </td>
    </tr>
  @empty
      <h4 class="text-center text-muted">No tracking Information, click on the tracking button </h4>
  @endforelse
  <tbody>



  </tbody>
</table>

                </div>
            </div>

        </div>
    </div>
</div>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>


</x-app-layout>