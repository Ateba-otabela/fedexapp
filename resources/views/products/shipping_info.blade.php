<x-app-layout>
<div class="container py-5">
    <h1 class="text-center mb-4">Contact Us</h1>

    <!-- Contact Form Section -->
    <div class="row">
      <div class="col-md-6">
        <h4 class="mb-3">Send Us a Message</h4>
        <form>
          <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your full name" required />
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email" required />
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" rows="4" placeholder="Write your message here" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary w-100">Send Message</button>
        </form>
      </div>

</x-app-layout>