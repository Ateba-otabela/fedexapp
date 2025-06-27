<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Products - ShopEase</title>
  <link href="{{ asset('bootstrap-5.0.2-dist/css/bootstrap.css') }}" rel="stylesheet" />
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




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>




<div class="text-center" style="background-image: url('{{asset('testing/pallet/man-with-helmet-carrying-boxes_23-2148923127.jpg')}}'); background-size: cover; background-repeat:no repeat;">
        <h1 style="padding-top:80px; color:white;">Welcome To <span class="text-warning">American Pallet Liquidator</span></h1>
        <p style="color:white;">Your one-shop marcket for quality products at competitive price</p>
        <button class="btn btn-lg mt-3 bg-warning" style=" color:black; margin-bottom:80px;">Start shopping</button>
    </div>
    <div class="d-flex row text-center mt-5 ms-4 me-4">
        <div class=" col-sm-12 mb-3 col-md-4">
            <div class="card bg-dark">
                <i class="bi bi-truck" style="font-size: 3rem; color: yellow;"></i>
                <h3 class="text-white">Fast Shipping</h3>
                <p class="text-white">Get your product delivered quickly anywhere in the world</p>
            </div>
</div>

 
        <div class=" col-sm-12 mb-3 col-md-4">
           <div class="card bg-dark">
           <i class="bi bi-shield-lock" style="font-size: 3rem; color: yellow;"></i>
                <h3 class="text-white">Fast Shipping</h3>
                <p class="text-white">Get your product delivered quickly anywhere in the world</p>
            </div>
        </div>
        <div class=" col-sm-12 mb-3 col-md-4">
            <div class="card bg-dark">
            <i class="bi bi-trophy" style="font-size: 3rem; color: yellow;"></i>
                <h3 class="text-white">Fast Shipping</h3>
                <p class="text-white">Get your product delivered quickly anywhere in the world</p>
            </div>
        </div>
    </div>
  <div class="container py-5">
    <h2 class="mb-4 text-center">Browse Our Products</h2>
    <div class="row g-4">
      
      <!-- Laravel Blade Example Starts -->
@forelse ( $products as $product)

<div class="col-md-4 mt-4 justify-content-between" data-aos="fade-up" data-aos-delay="">
 

          <div class="card product-card position-relative shadow-sm h-100">
            <span class="badge bg-primary category-badge">{{$product->category}}</span>
            @if($product->type === 'image')
               <img src="{{ ('storage/'.$product->file) }}" class="card-img-top product-img" alt="">
            @elseif($product->type === 'video')
                <video  controls poster="{{ asset('testing/images/IMG-20250405-WA0447.jpg') }}" height="200px" >
                    <source src="{{ ('storage/'.$product->file) }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
             @endif
             <form action=" {{ route('add_cart',$product->id) }}"  method="post">
             @csrf
                  <div class="card-body d-flex flex-column">
                    <div class="d-flex justify-content-between">
                      <div><h5 class="card-title">{{$product->title}}</h5></div>
                      <div>
                        <input type="number" name="quantity" class="form-control-sm form-control" min="1" placeholder="Qty..." style="width:60px;" required>
                      </div>
                    </div>
                                  <p class="card-text">{{$product->description}}</p>
                    <hr>
                    <div class="mt-auto d-flex justify-content-between align-items-center">
                      <span class="text-success fw-bold">${{$product->price}}</span>
                    
                     
                        <button type="submit" class="btn btn-sm btn-dark">Add to cart</button>
              </form>
                <i class="bi bi-hand-thumbs-up"></i> <!-- Like -->
<i class="bi bi-chat-left-text"></i> <!-- Comment -->
<i class="bi bi-eye"></i> 
              </div>
            </div>
          </div>
        </div>
@empty
<div class="col-12">
            <div class="card text-center">
            <i class="bi bi-box fs-1"></i>
                <h4 class="text-muted">No product available</h4>
                <p>Get your product delivered quickly anywhere in the world</p>
            </div>
        </div>
@endforelse ($products as $product)
    
<img src="{{asset('testing/pallet/young-asian-delivery-male-holding-clipboard-package-near-car-trunk-with-parcels_368093-18256.jpg')}}" alt="">
<h4>locale_canonicalize</h4>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni cum similique et optio enim, officiis adipisci dolores ea, in possimus minus nobis saepe cupiditate accusantium aliquam, quaerat nulla mollitia quae!</p>
   
<img src="{{asset('testing/pallet/baggage-handlers-load-suitcases-onto-airplane-sunset-creating-busy-scene_200360-3777.jpg')}}" alt="">

     <div class="btn btn-sm btn-dark">More...</div>
  
    </div>
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


<!-- Bootstrap & Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

</html>
<script>
  <!-- SweetAlert2 CDN -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  @if(session('orderPlaced'))
        Swal.fire({
            icon: 'success',
            title: 'Order placed successfully!',
            text: 'A confirmation email has been sent.',
            confirmButtonText: 'Okay'
        });
    @endif
</script>
</x-app-layout>