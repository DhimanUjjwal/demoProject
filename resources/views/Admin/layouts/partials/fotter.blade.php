<section class="">
  <!-- Footer -->
  <footer class="text-center text-white" style="background-color: #4c4c72;">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: CTA -->
      <section class="">
        <p class="d-flex justify-content-center align-items-center">
            @auth('admin')
                <h4>Welcome to InfuLabs  {{auth('admin')->user()->name}}</h4>
            @endauth
      </section>
      <!-- Section: CTA -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 Copyright: Admin InfuLabs
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</section>