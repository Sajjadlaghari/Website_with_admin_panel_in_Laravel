  @include('admin.Header')
<div id="toaster"></div>

<div class="wrapper">
  
  
  <!-- ====================================
  ——— PAGE WRAPPER
  ===================================== -->
  <div class="page-wrapper">
    
     @include('admin.Navbar')
        <!-- ====================================
        ——— CONTENT WRAPPER
        ===================================== -->
        <div class="content-wrapper">
          <div class="content"><!-- Card Profile -->
<div class="card ">

  <div class="card-header-bg" style="background-image:url(assets/img/user/user-bg-01.jpg)"></div>

  <div class="">


    <!-- <ul class="nav nav-profile-follow">
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span class="h5 d-block">1503</span>
          <span class="text-color d-block">Friends</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span class="h5 d-block">2905</span>
          <span class="text-color d-block">Followers</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span class="h5 d-block">1200</span>
          <span class="text-color d-block">Following</span>
        </a>
      </li>

    </ul> -->

    <div class="profile-button">
      <!-- <a class="btn btn-primary btn-pill" href="user-planing-settings.html">Upgrade Plan</a> -->
    </div>

  </div>

  <!-- <div class="card-footer card-profile-footer">
    <ul class="nav nav-border-top justify-content-center">
      <li class="nav-item">
        <a class="nav-link" href="user-profile.html">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="user-activities.html">Activities</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="user-profile-settings.html">Settings</a>
      </li>

    </ul>
  </div> -->

</div>

<div class="row">
  <div class="col-xl-3">
    <!-- Settings -->
    <div class="card card-default">

    </div>
  </div>
  <div class="col-xl-12">
    <!-- Account Settings -->
    <div class="card card-default">
     
      <div class="card-header">
      <div class="profile-avata">
        <img class="rounded-circle mt-n8" src="images/user/user-md-01.jpg" alt="Avata Image">
        <a class="h5 d-block mt-3 mb-2" href="#">{{$user->name}}</a>
        <a class="d-block text-color" href="#">{{$user->email}}</a>
      </div>

        <h2 class="mb-5">Account Settings</h2>
          
      </div>

      <div class="card-body">
        @if(Session::has('status'))
        <p class="alert alert-success">{{ Session::get('status') }}</p>
        @endif

        <form method="POST" action="{{url('/update')}}">
          @csrf
          <div class="row mb-2">
            <div class="col-lg-12">
              <div class="form-group">
                <label for="firstName">First name</label>
                <input type="text" value="{{$user->name}}" name="name" class="form-control" id="firstName" >
              </div>
            </div>
          </div>

          <div class="form-group mb-4">
            <label for="userName">User name</label>
            <input type="email" value="{{$user->email}}" name="email" class="form-control" id="userName">
            <input type="hidden" name="id" value="{{$user->id}}">
          </div>

          <div class="form-group mb-4">
            <label for="newPassword">New password</label>
            <input type="password" value="{{$user->password}}" name="password" class="form-control" id="newPassword">
          </div>

          <div class="d-flex justify-content-end mt-6">
            <button type="submit" class="btn btn-primary mb-2 btn-pill">Update Profile</button>
          </div>
        </form>
      </div>
    </div>




  </div>

</div>
</div>
          
        </div>
        
          <!-- Footer -->
          <footer class="footer mt-auto">
            <div class="copyright bg-white">
              <p>
                &copy; <span id="copy-year"></span> Copyright Mono Dashboard Bootstrap Template by <a class="text-primary" href="http://www.iamabdus.com/" target="_blank" >Abdus</a>.
              </p>
            </div>
            <script>
                var d = new Date();
                var year = d.getFullYear();
                document.getElementById("copy-year").innerHTML = year;
            </script>
          </footer>

      </div>
    </div>
    
                    <!-- Card Offcanvas -->
                    <div class="card card-offcanvas" id="contact-off" >
                      <div class="card-header">
                        <h2>Contacts</h2>
                        <a href="#" class="btn btn-primary btn-pill px-4">Add New</a>
                      </div>
                      <div class="card-body">

                        <div class="mb-4">
                          <input type="text" class="form-control form-control-lg form-control-secondary rounded-0" placeholder="Search contacts...">
                        </div>

                        <div class="media media-sm">
                          <div class="media-sm-wrapper">
                            <a href="user-profile.html">
                              <img src="images/user/user-sm-01.jpg" alt="User Image">
                              <span class="active bg-primary"></span>
                            </a>
                          </div>
                          <div class="media-body">
                            <a href="user-profile.html">
                              <span class="title">Selena Wagner</span>
                              <span class="discribe">Designer</span>
                            </a>
                          </div>
                        </div>

                        <div class="media media-sm">
                          <div class="media-sm-wrapper">
                            <a href="user-profile.html">
                              <img src="images/user/user-sm-02.jpg" alt="User Image">
                              <span class="active bg-primary"></span>
                            </a>
                          </div>
                          <div class="media-body">
                            <a href="user-profile.html">
                              <span class="title">Walter Reuter</span>
                              <span>Developer</span>
                            </a>
                          </div>
                        </div>

                        <div class="media media-sm">
                          <div class="media-sm-wrapper">
                            <a href="user-profile.html">
                              <img src="images/user/user-sm-03.jpg" alt="User Image">
                            </a>
                          </div>
                          <div class="media-body">
                            <a href="user-profile.html">
                              <span class="title">Larissa Gebhardt</span>
                              <span>Cyber Punk</span>
                            </a>
                          </div>
                        </div>

                        <div class="media media-sm">
                          <div class="media-sm-wrapper">
                            <a href="user-profile.html">
                              <img src="images/user/user-sm-04.jpg" alt="User Image">
                            </a>

                          </div>
                          <div class="media-body">
                            <a href="user-profile.html">
                              <span class="title">Albrecht Straub</span>
                              <span>Photographer</span>
                            </a>
                          </div>
                        </div>

                        <div class="media media-sm">
                          <div class="media-sm-wrapper">
                            <a href="user-profile.html">
                              <img src="images/user/user-sm-05.jpg" alt="User Image">
                              <span class="active bg-danger"></span>
                            </a>
                          </div>
                          <div class="media-body">
                            <a href="user-profile.html">
                              <span class="title">Leopold Ebert</span>
                              <span>Fashion Designer</span>
                            </a>
                          </div>
                        </div>

                        <div class="media media-sm">
                          <div class="media-sm-wrapper">
                            <a href="user-profile.html">
                              <img src="images/user/user-sm-06.jpg" alt="User Image">
                              <span class="active bg-primary"></span>
                            </a>
                          </div>
                          <div class="media-body">
                            <a href="user-profile.html">
                              <span class="title">Selena Wagner</span>
                              <span>Photographer</span>
                            </a>
                          </div>
                        </div>

                      </div>
                    </div>



    
                    <script src="plugins/jquery/jquery.min.js"></script>
                    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                    <script src="plugins/simplebar/simplebar.min.js"></script>
                    <script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>

                    
                    <script src="js/mono.js"></script>
                    <script src="js/chart.js"></script>
                    <script src="js/map.js"></script>
                    <script src="js/custom.js"></script>

                    


                    <!--  -->


  </body>
</html>
