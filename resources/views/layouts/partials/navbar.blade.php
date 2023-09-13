<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <style>
        /* Styles for the mobile menu icon */
        #mobile-menu-toggle {
            display: none;
            cursor: pointer;
        }

        /* Media query for screens smaller than lg (992px) */
        @media (max-width: 500px) {
            #main-nav {
                display: none;
            }

            #mobile-menu-toggle {
                display: block;
            }

            /* Styles for the hamburger menu icon */
            #mobile-menu-toggle i {
                font-size: 24px;
            }
            
            .nav {
                display: inline;
                flex-wrap: wrap;
                padding-left: 0;
                margin-bottom: 0;
                list-style: none;
            }
            
          }
    </style>
</head>
<body>
    <header class="p-3 bg-dark text-white">
        <span>
            <div style="padding-right: 10px;" id="mobile-menu-toggle" class="d-lg-none">
                    <div id="i"><img style=" float: left;" width="40px" height="auto"src="{{ asset('images/Hamburger.png') }}"></div>
            </div> 
        </span>
        <span>
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">   
                <a style="padding-right: 10px;" href="http://127.0.0.1:8000"><img width="90px" height="auto" src="{{ asset('images/InfuLabs.png') }}" alt="Logo"></a>

                    <nav id="main-nav" class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <ul class="nav">
                            <li><a href="http://127.0.0.1:8000" class="nav-link px-2 text-white">Home</a></li>
                            <li><a href="#" class="nav-link px-2 text-white">FAQ</a></li>
                            <li><a href="#" class="nav-link px-2 text-white">Services</a></li>
                            <li><a href="http://127.0.0.1:8000/peopleDetail" class="nav-link px-2 text-white">Influencer</a></li>
                            <li><a href="#" class="nav-link px-2 text-white">Contact</a></li>
                        </ul>
                    </nav>

                

                    @auth
                    @if(auth()->user()->name)
                        {{ auth()->user()->name}}
                    @else
                        User
                    @endif
                    <div class="text-end" style="padding-left: 10px;">
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
        </span>

    </header>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Toggle the navigation when the menu icon is clicked
            $("#mobile-menu-toggle").click(function() {
                $("#main-nav").slideToggle();
            });
        });
    </script>
</body>
</html>
