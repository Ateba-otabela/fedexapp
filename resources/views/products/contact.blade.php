<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Contact Us</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .map-container {
      height: 400px;
      width: 100%;
      margin-bottom: 30px;
    }
  </style>
</head>
<body class="bg-light">

  <div class="container py-5">
    <h1 class="text-center mb-4">Contact Us</h1>

    <!-- Contact Form Section -->
    <div class="row">
      <div class="col-md-6">
        <h4 class="mb-3">Send Us a Message</h4>
        <form method="POST" action="{{ route('contact.send') }}">
          @csrf
          <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required />
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required />
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Write your message here" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary w-100">Send Message</button>
        </form>
      </div>

      <!-- Contact Details Section -->
      <div class="col-md-6">
        <h4 class="mb-3">Our Contact Details</h4>
        <ul class="list-unstyled">
          <li><strong>Phone:</strong> +17207987331</li>
          <li><strong>Email:</strong> <a href="mailto:support@example.com">fedext894@gmail.com</a></li>
          <li><strong>Address:</strong> 123 E-commerce St, Suite 500, City, Country</li>
        </ul>

        <h5 class="mt-4">Find Us On the Map</h5>
        <!-- Google Map Embed (Replace with your location) -->
        <div class="map-container">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2925.545428957357!2d-74.00601558449656!3d40.71277637933038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259abbb1fd1f1%3A0x92b7e9d12c3a0fc2!2sOne%20World%20Trade%20Center!5e0!3m2!1sen!2sus!4v1656497403925!5m2!1sen!2sus"
            width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

</x-app-layout>