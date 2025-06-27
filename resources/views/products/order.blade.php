<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Orders</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="alert alert-warning d-flex align-items-start gap-2 p-4 rounded shadow-sm mt-3" role="alert">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 mt-1" viewBox="0 0 16 16" role="img" aria-label="Warning:">
        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.964 0L.165 13.233c-.457.778.091 1.767.982 1.767h13.707c.89 0 1.438-.99.982-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1-2.002 0 1 1 0 0 1 2.002 0z"/>
    </svg>
    <div>
        <h5 class="alert-heading">Payment Pending</h5>
        <p>Your order has <strong>not yet been placed</strong>.</p>
        <p>Please complete the payment and obtain your transaction ID.</p>
        <p>Once you have the transaction ID, click on <strong>"Enter Transaction ID"</strong> to finalize your order and receive a tracking number.</p>
        <hr class="my-2">
        <p class="mb-0"><strong>Note:</strong> If payment is not received within 24 hours, the order will be automatically canceled.</p>
    </div>
</div>
  <div class="container my-5">
    <h1 class="mb-4 fw-bold">My Orders</h1>

    <!-- Filter Buttons -->
    <div class="mb-4 d-flex gap-2 flex-wrap">
      <button class="btn btn-primary">All</button>
      <button class="btn btn-outline-secondary">Pending</button>
      <button class="btn btn-outline-secondary">Shipped</button>
      <button class="btn btn-outline-secondary">Delivered</button>
      <button class="btn btn-outline-secondary">Cancelled</button>
    </div>

    <!-- Orders Table -->
    <div class="card shadow-sm">
      <div class="card-body p-0">
        <div class="table-responsive">
        <table class="table table-bordered table-striped">
  <thead class="table-dark">
    <tr>
      
      <th>S/N</th>
      <th>Product</th>
      <th>Quantity</th>
      <th>Price</th>
      <th>Total</th>
      <th>Status</th>
      <th>Transaction ID</th>
    </tr>
  </thead>
  <tbody>
@forelse ($orders as $order)
 
<tr>
      
      <td>{{$loop->iteration}}</td>
      <td>{{ $order->product }}</td>
      <td>{{ $order->quantity }}</td>
      <td>{{ $order->price }}</td>
      <td>{{ $order->total }}</td>
      <td><span class="badge bg-warning text-dark">{{ $order->status }}</span></td>
      <td><button class="btn btn-sm bg-info">Enter Transaction ID</button></td>
    </tr>

  </tbody>
@empty
  <h1 class="text-center">No Orders, place an order</h1>
@endforelse
</table>

        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



</x-app-layout>

