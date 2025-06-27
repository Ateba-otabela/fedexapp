<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Shipment Information</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light py-4">

<div class="container">
  <h2 class="mb-4">Edit Shipment Information</h2>
  <form>
    <!-- Sender Info -->
    <div class="card mb-3">
      <div class="card-header">Sender Information</div>
      <div class="card-body row g-3">
        <div class="col-md-4">
          <label for="id" class="form-label">ID</label>
          <input type="text" class="form-control" id="id">
        </div>
        <div class="col-md-4">
          <label for="senders_name" class="form-label">Sender's Name</label>
          <input type="text" class="form-control" id="senders_name">
        </div>
        <div class="col-md-4">
          <label for="company_location" class="form-label">Company Location</label>
          <input type="text" class="form-control" id="company_location">
        </div>
        <div class="col-md-4">
          <label for="code" class="form-label">Code</label>
          <input type="text" class="form-control" id="code">
        </div>
        <div class="col-md-4">
          <label for="company_email" class="form-label">Company Email</label>
          <input type="email" class="form-control" id="company_email">
        </div>
      </div>
    </div>

    <!-- Receiver Info -->
    <div class="card mb-3">
      <div class="card-header">Receiver Information</div>
      <div class="card-body row g-3">
        <div class="col-md-4">
          <label for="receivers_name" class="form-label">Receiver's Name</label>
          <input type="text" class="form-control" id="receivers_name">
        </div>
        <div class="col-md-4">
          <label for="receiver_location" class="form-label">Receiver Location</label>
          <input type="text" class="form-control" id="receiver_location">
        </div>
        <div class="col-md-4">
          <label for="zip_code" class="form-label">ZIP Code</label>
          <input type="text" class="form-control" id="zip_code">
        </div>
        <div class="col-md-4">
          <label for="receiver_email" class="form-label">Receiver Email</label>
          <input type="email" class="form-control" id="receiver_email">
        </div>
      </div>
    </div>

    <!-- Package Info -->
    <div class="card mb-3">
      <div class="card-header">Package Details</div>
      <div class="card-body row g-3">
        <div class="col-md-4">
          <label for="package" class="form-label">Package</label>
          <input type="text" class="form-control" id="package">
        </div>
        <div class="col-md-4">
          <label for="destination" class="form-label">Destination</label>
          <input type="text" class="form-control" id="destination">
        </div>
        <div class="col-md-4">
          <label for="carier" class="form-label">Carrier</label>
          <input type="text" class="form-control" id="carier">
        </div>
        <div class="col-md-4">
          <label for="type_of_shippment" class="form-label">Type of Shipment</label>
          <input type="text" class="form-control" id="type_of_shippment">
        </div>
        <div class="col-md-4">
          <label for="weight" class="form-label">Weight</label>
          <input type="text" class="form-control" id="weight">
        </div>
        <div class="col-md-4">
          <label for="shipment_mode" class="form-label">Shipment Mode</label>
          <input type="text" class="form-control" id="shipment_mode">
        </div>
        <div class="col-md-4">
          <label for="carrier_No" class="form-label">Carrier No</label>
          <input type="text" class="form-control" id="carrier_No">
        </div>
        <div class="col-md-4">
          <label for="product" class="form-label">Product</label>
          <input type="text" class="form-control" id="product">
        </div>
        <div class="col-md-4">
          <label for="qty" class="form-label">Quantity</label>
          <input type="number" class="form-control" id="qty">
        </div>
      </div>
    </div>

    <!-- Shipping & Status -->
    <div class="card mb-3">
      <div class="card-header">Shipping & Tracking</div>
      <div class="card-body row g-3">
        <div class="col-md-4">
          <label for="payment_mode" class="form-label">Payment Mode</label>
          <input type="text" class="form-control" id="payment_mode">
        </div>
        <div class="col-md-4">
          <label for="comment" class="form-label">Comment</label>
          <input type="text" class="form-control" id="comment">
        </div>
        <div class="col-md-4">
          <label for="delivery_date" class="form-label">Delivery Date</label>
          <input type="date" class="form-control" id="delivery_date">
        </div>
        <div class="col-md-4">
          <label for="delivery_time" class="form-label">Delivery Time</label>
          <input type="time" class="form-control" id="delivery_time">
        </div>
        <div class="col-md-4">
          <label for="pick_up_date" class="form-label">Pick Up Date</label>
          <input type="date" class="form-control" id="pick_up_date">
        </div>
        <div class="col-md-4">
          <label for="pick_up_time" class="form-label">Pick Up Time</label>
          <input type="time" class="form-control" id="pick_up_time">
        </div>
        <div class="col-md-4">
          <label for="date" class="form-label">Date</label>
          <input type="date" class="form-control" id="date">
        </div>
        <div class="col-md-4">
          <label for="time" class="form-label">Time</label>
          <input type="time" class="form-control" id="time">
        </div>
        <div class="col-md-4">
          <label for="location" class="form-label">Location</label>
          <input type="text" class="form-control" id="location">
        </div>
        <div class="col-md-4">
          <label for="status" class="form-label">Status</label>
          <input type="text" class="form-control" id="status">
        </div>
        <div class="col-md-4">
          <label for="remark" class="form-label">Remark</label>
          <input type="text" class="form-control" id="remark">
        </div>
        <div class="col-md-4">
          <label for="updated_by" class="form-label">Updated By</label>
          <input type="text" class="form-control" id="updated_by">
        </div>
        <div class="col-md-4">
          <label for="updated_by" class="form-label">Current location</label>
          <input type="text" class="form-control" id="updated_by">
        </div>
      </div>
    </div>

    <button type="submit" class="btn btn-dark m-3">Update Information</button>
  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

</x-app-layout>