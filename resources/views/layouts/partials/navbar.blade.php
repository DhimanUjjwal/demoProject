<header class="p-3 bg-dark text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
  
      <a href="http://127.0.0.1:8000/"><img width="100px" height="auto" src="{{ asset('images/InfuLabs.png') }}"></a>
    
      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="http://127.0.0.1:8000/" class="nav-link px-2 text-white">Home</a></li>
        <li><a href="#" class="nav-link px-2 text-white">FAQ</a></li>
        <li><a href="#" class="nav-link px-2 text-white">Services</a></li>
        <li><a href="http://127.0.0.1:8000/peopleDetail" class="nav-link px-2 text-white">Influencer</a></li>
        <li><a href="#" class="nav-link px-2 text-white">Contact</a></li>
      </ul>

      @auth
        {{auth()->user()->name}}
        <div class="text-end">
          <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Logout</a>
        </div>
      @endauth

      @guest
        <div class="text-end">
          <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Login</a>
          <a href="{{ route('register.perform') }}" class="btn btn-warning">Sign-up</a>
        </div>
      @endguest
    </div>
  </div>
</header> 

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

