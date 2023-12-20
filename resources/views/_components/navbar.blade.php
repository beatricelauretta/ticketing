<nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{asset('images/logo.png')}}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Package</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Testimonials</a>
                    </li>
                </ul>
                @auth 
                <div class="d-flex user-logged nav-item dropdown no-arrow">
                    <a href="#" role="button" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" id="dropdownMenuLink">
                        Halo, {{Auth::user()->name}}!
                    </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="right:0; left:auto">
                            <li>
                                <a href="#" class="dropdown-item">My Dashboard</a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Sign Out</a>
                                <form method="get" action="{{route('logout')}}" style="display:none" id="logout-form">
                                    <input type="hidden" name="token" value="{{csrf_token()}}">
                                </form>
                            </li>
                        </ul>
                </div>
            @else
                <div class="d-flex">
                    <a href="{{url('/login')}}" class="btn btn-master btn-secondary me-3">
                        Sign In
                    </a>
                    <a href="#" class="btn btn-master btn-primary">
                        Sign Up
                    </a>
                </div>
                @endauth
            </div>
        </div>
    </nav>