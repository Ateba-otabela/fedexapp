<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register - ShopEase</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
   body {
      background-color:rgb(209, 217, 226);
    }
    .register-wrapper {
      min-height: 100vh;
    }
  
      .register-image {
      background: url('{{asset('testing/pallet/baggage-handlers-load-suitcases-onto-cart-sunrise-airport-tarmac_200360-3766.jpg')}}') center/cover no-repeat;
      border-top-left-radius:30px;
      border-top-right-radius:350px;
      border-bottom-right-radius:30px;
    }
    
  </style>
</head>
<body>

  <div class="container-fluid register-wrapper">
    <div class="row">
      <!-- Left Image/Message Column -->
      <div class="col-lg-6 d-none d-lg-flex align-items-center justify-content-center register-image text-white text-center p-5">
        <div>
          <h3 class="display-6 fw-bold text-info">Welcome To American Pallet Liquidator</h3>
          <p class="lead">Post new product to the shopping amazing with quality goods</p>
        </div>
      </div>

      <!-- Right Form Column -->
      <div class="col-lg-6 d-flex align-items-center justify-content-center p-5">
        <div class="w-100" style="max-width: 400px;">
          <h2 class="mb-4 text-center">Post New Product</h2>
          <form method="POST" action="{{ route('post_product') }}" enctype="multipart/form-data">
       @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Product Title</label>
              <input type="text" class="form-control" id="title" placeholder="Mercedes Benze 2022"  name="title">
              @error('title')
                  <span class="text-danger fw-bold">{{ $message }}</span>
              @enderror
            </div>

            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <input type="text" class="form-control" id="title" placeholder="New version with an engine 4958"  name="description">
              @error('description')
                  <span class="text-danger fw-bold">{{ $message }}</span>
              @enderror
            </div>

            <div class="mb-3">
              <label for="price" class="form-label">price</label>
              <input type="text" class="form-control" id="price" placeholder="$234" name="price">
              @error('price')
                  <span class="text-danger fw-bold">{{ $message }}</span>
              @enderror
            </div>
            <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select class="form-select" id="category" name="category" >
          <option selected disabled>Select category</option>
          <option value="electronics">Electronics</option>
          <option value="fashion">Fashion</option>
          <option value="home">Home</option>
          <option value="books">Books</option>
        </select>
        @error('category')
                  <span class="text-danger fw-bold">{{ $message }}</span>
        @enderror
      </div>
      <div class="mb-4">
        <label for="product_image" class="form-label">Product Image</label>
        <input type="file" class="form-control" id="product_image" name="product_image" accept="image/*,video/*">
        @error('product_image')
                  <span class="text-danger fw-bold">{{ $message }}</span>
        @enderror
      </div>

            <button type="submit" class="btn btn-warning w-100">Post Product</button>
          </form>

          
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

</x-app-layout>