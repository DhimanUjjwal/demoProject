<header class="p-3 bg-light text-dark">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
  
      <a href="http://127.0.0.1:8000/"><img width="100px" height="auto" src="{{ asset('images/InfuLabs.png') }}"></a>
    
      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="http://127.0.0.1:8000/admin" class="nav-link px-2 text-black">Admin</a></li>
      </ul>

      @auth('admin')
        {{auth('admin')->user()->name}}
        <div class="text-end" style="padding-left: 10px;">
          <a href="{{ route('admin.logout.perform') }}" class="btn btn-outline-dark me-2">Logout</a>
        </div>
      @endauth

      @guest('admin')
        <div class="text-end">
          <a href="{{ route('admin.login.perform') }}" class="btn btn-outline-dark me-2">Login</a>
        </div>.
      @endguest
    </div>
  </div>
</header> 

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

