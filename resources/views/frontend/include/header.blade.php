           <!-- container start -->
            <div class="container">
                <!-- navigation bar -->
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="{{Url('/')}}">
            <img src="{{asset('frontend/images/Logo.webp')}}" style="width:337px;" alt="image" >
          </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
              <!-- <i class="icofont-navigation-menu ico_menu"></i> -->
              <div class="toggle-wrap">
                <span class="toggle-bar"></span>
              </div>
            </span>
          </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <!-- secondery menu start -->
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/about-us')}}">About Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/contact-us')}}">Contact Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link dark_btn" href="dashboard/teacher/signin.html">Subadmin Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link dark_btn" href="{{url('/admin/login')}}">Admin Login </a>
                    </li>

                </ul>
            </div>
        </nav>
        <!-- navigation end -->
    </div>
    <!-- container end -->