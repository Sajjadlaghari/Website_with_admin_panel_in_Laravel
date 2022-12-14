
  @include('admin.Header')
<div id="toaster"></div>

<div class="wrapper">
  
  
  <!-- ====================================
  ——— PAGE WRAPPER
  ===================================== -->
  <div class="page-wrapper">
    
     @include('admin.Navbar')

     <div class="container">
       
     </div>

        <!-- ====================================
        ——— CONTENT WRAPPER
        ===================================== -->
        <div class="content-wrapper">
          <div class="content"><div class="row no-gutters">
  <div class="col-lg-5 col-xxl-4">
    <div class="card card-default chat-left-sidebar">
      <form class="card-header px-0">
        <div class="input-group px-5">
          <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Search...">
        </div>
      </form>

      <ul class="card-body px-0" data-simplebar style="height: 630px;">
        <li class="mb-4 px-5 py-2">
          <a href="javascript:void(0)" class="media media-message">
            <div class="position-relative mr-3">
              <img class="rounded-circle" src="images/user/user-sm-01.jpg" alt="User Image">
              <span class="status away"></span>
            </div>
            
            <div class="media-body">
              <div class="message-contents">
                <span class="d-flex justify-content-between align-items-center mb-1">
                  <span class="username text-dark">Anna Patuary</span>
                  <span class="">
                    <span class="state text-smoke"><em>5min</em></span>
                  </span>
                </span>
                
                <p class="last-msg text-smoke">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque
                  odio, eligendi delectus vitae.</p>
              </div>
            </div>
          </a>
        </li>

        <li class="mb-4 px-5 py-2">
          <a href="javascript:void(0)" class="media media-message">
            <div class="position-relative mr-3">
              <img class="rounded-circle" src="images/user/user-sm-02.jpg" alt="User Image">
              <span class="status away"></span>
            </div>
            
            <div class="media-body">
              <div class="message-contents">
                <span class="d-flex justify-content-between align-items-center mb-1">
                  <span class="username text-dark">Riman Ghose</span>
                  <span class="">
                    <span class="badge badge-secondary">3</span>
                    <span class="state text-smoke"><em>1hrs</em></span>
                  </span>
                </span>
                
                <p class="last-msg text-smoke">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque
                  odio, eligendi delectus vitae.</p>
              </div>
            </div>
          </a>
        </li>

        <li class="bg-primary mb-4 px-5 py-2">
          <a href="javascript:void(0)" class="media media-message">
            <div class="position-relative mr-3">
              <img class="rounded-circle" src="images/user/user-sm-03.jpg" alt="User Image">
              <span class="status active"></span>
            </div>
            
            <div class="media-body">
              <div class="message-contents">
                <span class="d-flex justify-content-between align-items-center mb-1">
                  <span class="username text-white">Anna Patuary</span>
                  <span class="">
                    <span class="state text-white"><em>11:59am</em></span>
                  </span>
                </span>
                
                <p class="last-msg text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque
                  odio, eligendi delectus vitae.</p>
              </div>
            </div>
          </a>
        </li>

        <li class="mb-4 px-5 py-2">
          <a href="javascript:void(0)" class="media media-message">
            <div class="position-relative mr-3">
              <img class="rounded-circle" src="images/user/user-sm-04.jpg" alt="User Image">
              <span class="status away"></span>
            </div>
            
            <div class="media-body">
              <div class="message-contents">
                <span class="d-flex justify-content-between align-items-center mb-1">
                  <span class="username text-dark">Riman Ghose</span>
                  <span class="">
                    <span class="state text-smoke"><em>10min</em></span>
                  </span>
                </span>
                
                <p class="last-msg text-smoke">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque
                  odio, eligendi delectus vitae.</p>
              </div>
            </div>
          </a>
        </li>

        <li class="mb-4 px-5 py-2">
          <a href="javascript:void(0)" class="media media-message">
            <div class="position-relative mr-3">
              <img class="rounded-circle" src="images/user/user-sm-05.jpg" alt="User Image">
              <span class="status away"></span>
            </div>
            
            <div class="media-body">
              <div class="message-contents">
                <span class="d-flex justify-content-between align-items-center mb-1">
                  <span class="username text-dark">Anna Patuary</span>
                  <span class="">
                    <span class="state text-smoke"><em>26-Jan-20</em></span>
                  </span>
                </span>
                
                <p class="last-msg text-smoke">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque
                  odio, eligendi delectus vitae.</p>
              </div>
            </div>
          </a>
        </li>

        <li class="mb-4 px-5 py-2">
          <a href="javascript:void(0)" class="media media-message">
            <div class="position-relative mr-3">
              <img class="rounded-circle" src="images/user/user-sm-01.jpg" alt="User Image">
              <span class="status active"></span>
            </div>
            
            <div class="media-body">
              <div class="message-contents">
                <span class="d-flex justify-content-between align-items-center mb-1">
                  <span class="username text-dark">Anna Patuary</span>
                  <span class="">
                    <span class="badge badge-secondary">4</span>
                    <span class="state text-smoke"><em>2hrs</em></span>
                  </span>
                </span>
                
                <p class="last-msg text-smoke">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque
                  odio, eligendi delectus vitae.</p>
              </div>
            </div>
          </a>
        </li>

        <li class="mb-4 px-5 py-2">
          <a href="javascript:void(0)" class="media media-message">
            <div class="position-relative mr-3">
              <img class="rounded-circle" src="images/user/user-sm-02.jpg" alt="User Image">
              <span class="status away"></span>
            </div>
            
            <div class="media-body">
              <div class="message-contents">
                <span class="d-flex justify-content-between align-items-center mb-1">
                  <span class="username text-dark">Riman Ghose</span>
                  <span class="">
                    <span class="state text-smoke"><em>15-Jan-20</em></span>
                  </span>
                </span>
                
                <p class="last-msg text-smoke">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque
                  odio, eligendi delectus vitae.</p>
              </div>
            </div>
          </a>
        </li>

        <li class="mb-4 px-5 py-2">
          <a href="javascript:void(0)" class="media media-message">
            <div class="position-relative mr-3">
              <img class="rounded-circle" src="images/user/user-sm-03.jpg" alt="User Image">
              <span class="status away"></span>
            </div>
            
            <div class="media-body">
              <div class="message-contents">
                <span class="d-flex justify-content-between align-items-center mb-1">
                  <span class="username text-dark">Anna Patuary</span>
                  <span class="">
                    <span class="state text-smoke"><em>30min</em></span>
                  </span>
                </span>
                
                <p class="last-msg text-smoke">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque
                  odio, eligendi delectus vitae.</p>
              </div>
            </div>
          </a>
        </li>

        <li class="mb-4 px-5 py-2">
          <a href="javascript:void(0)" class="media media-message">
            <div class="position-relative mr-3">
              <img class="rounded-circle" src="images/user/user-sm-04.jpg" alt="User Image">
              <span class="status away"></span>
            </div>
            
            <div class="media-body">
              <div class="message-contents">
                <span class="d-flex justify-content-between align-items-center mb-1">
                  <span class="username text-dark">Riman Ghose</span>
                  <span class="">
                    <span class="state text-smoke"><em>01-Jan-20</em></span>
                  </span>
                </span>
                
                <p class="last-msg text-smoke">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque
                  odio, eligendi delectus vitae.</p>
              </div>
            </div>
          </a>
        </li>

        <li class="mb-4 px-5 py-2">
          <a href="javascript:void(0)" class="media media-message">
            <div class="position-relative mr-3">
              <img class="rounded-circle" src="images/user/user-sm-05.jpg" alt="User Image">
              <span class="status away"></span>
            </div>
            
            <div class="media-body">
              <div class="message-contents">
                <span class="d-flex justify-content-between align-items-center mb-1">
                  <span class="username text-dark">Anna Patuary</span>
                  <span class="">
                    <span class="badge badge-secondary">5</span>
                    <span class="state text-smoke"><em>3hrs</em></span>
                  </span>
                </span>
                
                <p class="last-msg text-smoke">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque
                  odio, eligendi delectus vitae.</p>
              </div>
            </div>
          </a>
        </li>

        <li class="mb-4 px-5 py-2">
          <a href="javascript:void(0)" class="media media-message">
            <div class="position-relative mr-3">
              <img class="rounded-circle" src="images/user/user-sm-04.jpg" alt="User Image">
              <span class="status away"></span>
            </div>
            
            <div class="media-body">
              <div class="message-contents">
                <span class="d-flex justify-content-between align-items-center mb-1">
                  <span class="username text-dark">Riman Ghose</span>
                  <span class="">
                    <span class="state text-smoke"><em>31-Dec-19</em></span>
                  </span>
                </span>
                
                <p class="last-msg text-smoke">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque
                  odio, eligendi delectus vitae.</p>
              </div>
            </div>
          </a>
        </li>

        <li class="mb-4 px-5 py-2">
          <a href="javascript:void(0)" class="media media-message">
            <div class="position-relative mr-3">
              <img class="rounded-circle" src="images/user/user-sm-05.jpg" alt="User Image">
              <span class="status away"></span>
            </div>
            
            <div class="media-body">
              <div class="message-contents">
                <span class="d-flex justify-content-between align-items-center mb-1">
                  <span class="username text-dark">Anna Patuary</span>
                  <span class="">
                    <span class="state text-smoke"><em>26-Dec-19</em></span>
                  </span>
                </span>
                
                <p class="last-msg text-smoke">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque
                  odio, eligendi delectus vitae.</p>
              </div>
            </div>
          </a>
        </li>

        <li class="mb-4 px-5 py-2">
          <a href="javascript:void(0)" class="media media-message">
            <div class="position-relative mr-3">
              <img class="rounded-circle" src="images/user/user-sm-01.jpg" alt="User Image">
              <span class="status active"></span>
            </div>
            
            <div class="media-body">
              <div class="message-contents">
                <span class="d-flex justify-content-between align-items-center mb-1">
                  <span class="username text-dark">Anna Patuary</span>
                  <span class="">
                    <span class="state text-smoke"><em>10-Dec-19</em></span>
                  </span>
                </span>
                
                <p class="last-msg text-smoke">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque
                  odio, eligendi delectus vitae.</p>
              </div>
            </div>
          </a>
        </li>

        <li class="mb-4 px-5 py-2">
          <a href="javascript:void(0)" class="media media-message">
            <div class="position-relative mr-3">
              <img class="rounded-circle" src="images/user/user-sm-02.jpg" alt="User Image">
              <span class="status away"></span>
            </div>
            
            <div class="media-body">
              <div class="message-contents">
                <span class="d-flex justify-content-between align-items-center mb-1">
                  <span class="username text-dark">Riman Ghose</span>
                  <span class="">
                    <span class="badge badge-secondary">7</span>
                    <span class="state text-smoke"><em>5hrs</em></span>
                  </span>
                </span>
                
                <p class="last-msg text-smoke">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque
                  odio, eligendi delectus vitae.</p>
              </div>
            </div>
          </a>
        </li>

        <li class="mb-4 px-5 py-2">
          <a href="javascript:void(0)" class="media media-message">
            <div class="position-relative mr-3">
              <img class="rounded-circle" src="images/user/user-sm-03.jpg" alt="User Image">
              <span class="status away"></span>
            </div>
            
            <div class="media-body">
              <div class="message-contents">
                <span class="d-flex justify-content-between align-items-center mb-1">
                  <span class="username text-dark">Anna Patuary</span>
                  <span class="">
                    <span class="state text-smoke"><em>01-Dec-19</em></span>
                  </span>
                </span>
                
                <p class="last-msg text-smoke">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque
                  odio, eligendi delectus vitae.</p>
              </div>
            </div>
          </a>
        </li>

      </ul>
    </div>
  </div>

  <div class="col-lg-7 col-xxl-8">
    <!-- Chat -->
    <div class="card card-default chat-right-sidebar">
      <div class="card-header">
        <h2>Selena Wagner</h2>

        <div class="dropdown">
          <div class="dropdown">
            <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="user-profile-settings.html">Profile</a>
              <a class="dropdown-item" href="javascript:void(0)">Logout</a>
            </div>
          </div>
        </div>
      </div>

      <div class="card-body pb-0" data-simplebar style="height: 545px;">
        <!-- Media Chat Left -->
        <div class="media media-chat">
          <img src="images/user/user-sm-01.jpg" class="rounded-circle" alt="Avata Image">
          <div class="media-body">
            <div class="text-content">
              <span class="message">Hello my name is anna.</span>
              <time class="time">5 mins ago</time>
            </div>
          </div>
        </div>

        <!-- Media Chat Right -->
        <div class="media media-chat media-chat-right">
          <div class="media-body">
            <div class="text-content">
              <span class="message">Hello i am Riman.</span>
              <time class="time">4 mins ago</time>
            </div>

            <div class="text-content">
              <span class="message">I want to know about yourself</span>
              <time class="time">3 mins ago</time>
            </div>
          </div>
          <img src="images/user/user-sm-02.jpg" class="rounded-circle" alt="Avata Image">
        </div>

        <!-- Media Chat Left -->
        <div class="media media-chat">
          <img src="images/user/user-sm-01.jpg" class="rounded-circle" alt="Avata Image">
          <div class="media-body">
            <div class="text-content">
              <span class="message">Its had resolving otherwise she contented therefore.</span>
              <time class="time">1 mins ago</time>
            </div>
          </div>
        </div>

        <!-- Media Chat Right -->
        <div class="media media-chat media-chat-right">
          <div class="media-body">
            <div class="text-content">
              <span class="message">Hello i am Riman.</span>
              <time class="time">4 mins ago</time>
            </div>

            <div class="text-content">
              <span class="message">I want to know about yourself</span>
              <time class="time">3 mins ago</time>
            </div>
          </div>
          <img src="images/user/user-sm-02.jpg" class="rounded-circle" alt="Avata Image">
        </div>

        <!-- Media Chat Left -->
        <div class="media media-chat">
          <img src="images/user/user-sm-01.jpg" class="rounded-circle" alt="Avata Image">
          <div class="media-body">
            <div class="text-content">
              <span class="message">Its had resolving otherwise she contented therefore.</span>
              <time class="time">1 mins ago</time>
            </div>
          </div>
        </div>

        <!-- Media Chat Right -->
        <div class="media media-chat media-chat-right">
          <div class="media-body">
            <div class="text-content">
              <span class="message">Hello i am Riman.</span>
              <time class="time">4 mins ago</time>
            </div>

            <div class="text-content">
              <span class="message">I want to know about yourself</span>
              <time class="time">3 mins ago</time>
            </div>
          </div>
          <img src="images/user/user-sm-02.jpg" class="rounded-circle" alt="Avata Image">
        </div>

      </div>

      <div class="chat-footer">
        <form>
          <div class="input-group input-group-chat">
            <div class="input-group-prepend">
              <span class="emoticon-icon mdi mdi-emoticon-happy-outline"></span>
            </div>
            <input type="text" class="form-control" aria-label="Text input with dropdown button">
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

                    
                    
                    <script src="plugins/apexcharts/apexcharts.js"></script>
                    
                    
                    
                    <script src="plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
                    
                    
                    
                    <script src="plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
                    <script src="plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
                    <script src="plugins/jvectormap/jquery-jvectormap-us-aea.js"></script>
                    
                    
                    
                    <script src="plugins/daterangepicker/moment.min.js"></script>
                    <script src="plugins/daterangepicker/daterangepicker.js"></script>
                    <script>
                      jQuery(document).ready(function() {
                        jQuery('input[name="dateRange"]').daterangepicker({
                        autoUpdateInput: false,
                        singleDatePicker: true,
                        locale: {
                          cancelLabel: 'Clear'
                        }
                      });
                        jQuery('input[name="dateRange"]').on('apply.daterangepicker', function (ev, picker) {
                          jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
                        });
                        jQuery('input[name="dateRange"]').on('cancel.daterangepicker', function (ev, picker) {
                          jQuery(this).val('');
                        });
                      });
                    </script>
                    
                    
                    
                    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
                    
                    
                    
                    <script src="plugins/toaster/toastr.min.js"></script>

                    
                    
                    <script src="js/mono.js"></script>
                    <script src="js/chart.js"></script>
                    <script src="js/map.js"></script>
                    <script src="js/custom.js"></script>

                    


                    <!--  -->


  </body>
</html>
