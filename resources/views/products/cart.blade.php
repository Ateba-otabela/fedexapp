  

<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Shopping Cart & Checkout</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container py-5">
    <div class="justify-content-between d-flex">
      <div> <h2 class="mb-4 fw-bold">Shopping Cart</h2></div>
      <form action="{{route('delete_all')}}" method="post">
        @csrf
            <div><button type="submit" class="btn btn-danger btn-sm">Clear Cart</button></div>
      </form>
     
    </div>
   

    <!-- Cart Table -->
    <div class="card shadow-sm mb-4">
      <div class="card-body">
        <table class="table table-bordered table-hover mb-0">
          <thead class="table-light">
            <tr>
              <th>Product</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Total</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <!-- Cart Item -->
             @foreach ($carts as $cart)
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="{{ 'storage/'. $cart->file }}" class="rounded" alt="Product Image" style="height: 50px; width:50px ;">
                      <div class="ms-3">
                        <div class="fw-semibold">{{ $cart->title }}</div>
                        <div class="text-muted small">{{ $cart->category}}</div>
                      </div>
                    </div>
                  </td>
                  <td>${{ $cart->price }}</td>
                  <td>{{ $cart->quantity}}</td>
                  <td>${{ $cart->total }}</td>
                  <form action="{{ route('delete_cart', $cart->id) }}" method="post">
                    @csrf
                     <td><button type="submit" class="btn btn-outline-danger btn-sm">Remove</button></td>
                   
                  </form>
                
                </tr>
             @endforeach
          
          </tbody>
        </table>
      </div>
    </div>


    <form action="{{ route('place_order') }}" method="post">
                 @csrf
                 <button type="submit" class="btn btn-dark w-100 mt-3 mb-3a" data-bs-toggle="modal" data-bs-target="#successModal">
  Place Order & Pay ${{ $cart->total }}
                </button>
              </form>


    <!-- Checkout Row -->
    <div class="row gy-4">
      <!-- Summary Section -->
      <div class="col-md-5">
        <div class="card shadow-sm p-4">
          <h5 class="fw-bold mb-3">Order Summary</h5>
          <div class="d-flex justify-content-between mb-2">
        
            <span>Subtotal:</span>
            <span>${{ $cart->total }}</span>
          </div>
          <div class="d-flex justify-content-between mb-2">
            <span>Shipping:</span>
            <span>$10.00</span>
          </div>
          <hr>
          <div class="d-flex justify-content-between fs-5 fw-bold mb-4">
            <span>Total Amount:</span>
            <span>${{ $cart->total + 100}}</span>
          </div>
          <a href="/product" class="btn btn-outline-secondary w-100">Continue Shopping</a>
        </div>
       
      </div>

      <!-- Payment Section -->
      <div class="col-md-7">
        <div class="card shadow-sm p-4">
          <h5 class="fw-bold mb-3">Payment Details</h5>

          <form>
            <!-- Payment Method -->
            <div class="mb-3">
              <label class="form-label">Payment Method</label>
              <select class="form-select">
                <option>Credit/Debit Card</option>
                <option>PayPal</option>
                <option>Bank Transfer</option>
              </select>
            </div>

            <!-- Card Info -->
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label">Cardholder Name</label>
                <input type="text" class="form-control" placeholder="John Doe">
              </div>
              <div class="col-md-6">
                <label class="form-label">Card Number</label>
                <input type="text" class="form-control" placeholder="1234 5678 9012 3456">
              </div>
              <div class="col-md-4">
                <label class="form-label">Expiry</label>
                <input type="text" class="form-control" placeholder="MM/YY">
              </div>
              <div class="col-md-4">
                <label class="form-label">CVV</label>
                <input type="password" class="form-control" placeholder="123">
              </div>
              <div class="col-12">
            
              
             
              <!-- Button trigger modal -->
              

  
            



              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@if(session('orderPlaced'))
<script>
    document.addEventListener("DOMContentLoaded", function () {
        Swal.fire({
            icon: 'success',
            title: 'Order placed successfully!',
          text: 'A confirmation email has been sent to your inbox. Please check your email for payment instructions. After making the payment, return here and enter your transaction ID to complete the order process.',
            confirmButtonText: 'Okay'
        });
    });
</script>
@endif



</x-app-layout>