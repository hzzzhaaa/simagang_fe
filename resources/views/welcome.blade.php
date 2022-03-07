<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SiMAGANG</title>
        <link rel="shortcut icon" href="/img/logo.ico">
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet" />

<link rel="stylesheet" href="new/css/owl.carousel.min.css">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="new/css/bootstrap.min.css">
<!-- Style -->
<!-- <link rel="stylesheet" href="new/css/style.css"> -->
<style>
  #navbar-expand >li{
    padding-left:10px;
  padding-right:10px;
  }
  .footer{

  }
</style>
         <!-- Style-->
    <body>
    <div class="container-fluid vh-100">
      <div class="row h-100">
        <div class="col-md-8" style="background-color: #01ABAA;border-radius: 0px 30px 30px 0px;">
              <nav class="navbar  navbar-dark bg-transparent">
                  <!-- Navbar Brand-->
                      <a class="navbar-brand ps-3 h2" style="text-decoration:none; font-size: 30px;font-family: Poppins; " href="/">SiMagang</a>
                      <a class="navbar-brand ps-3" style="text-decoration:none font-family: Poppins;" href="/">Informasi Magang</a>
                      <a class="navbar-brand ps-3" style="text-decoration:none font-family: Poppins;" href="/">Kontak</a>
                  </nav>

              <div class="row align-items-center justify-content-center">
                  <div class="col-md-8 alignt-right">
                  <h1 style="color: white; font-family: Poppins;">SiMagang</h1>

                    <p style="font-weight: 600;font-size: 64px;line-height: 96px;display: flex;align-items: center;color:white; font-family: Poppins;">
                    Focus on the work that matters
                    </p>
                  <p class="mb-5" style="color: white; font-family: Poppins;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ligula nulla, bibendum a dapibus sit amet, ornare id nulla. In luctus congue eleifend. Duis id efficitur dolor, pellentesque suscipit lacus. Sed lacus lectus, ornare vitae sem eget, luctus tincidunt turpis. Cras et varius nisl, et vulputate quam. Morbi eu pulvinar arcu. Etiam nec nisi velit. Aenean a lorem ac tellus vehicula gravida id id mi. Morbi tincidunt ipsum nibh, vel suscipit dolor tempus laoreet. Sed condimentum justo sapien, in gravida risus maximus quis. Cras vel ante eu dui ultrices pharetra at et leo. Integer cursus venenatis diam, in iaculis velit commodo sagittis.</p>
                  <br>
                  <p style="color: white; font-size: 30px; font-family: Poppins;">Informasi Jadwal</p>
                  <table class="table table-bordered bg-light">
                          <thead class="table-success">
                              <tr>
                              <th scope="col">Kegiatan</th>
                              <th scope="col">Jadwal</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                              <td>Mark</td>
                              <td>Otto</td>
                              </tr>
                              <tr>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              </tr>
                          </tbody>
                      </table>
                      <p class="mb-5" style="color: white; font-family: Poppins; ">
                        Kontak Kami
                        <br>
                          <i class="fas fa-envelope-square"></i>
                          cs.pendaftaran@unj.ac.id
                          <br>
                          <i class="fab fa-twitter"></i>
                          @UPTTIKUNJ
                          <br>
                          <i class="fab fa-youtube"></i>
                          pustikomunj
                      </p>
                  </div>
              </div>

              <footer style="align-items: center; font-family: Poppins;">
              <div class="container text-center">
                  <p style="color:white;">
                  <i class="far fa-copyright"></i>
                  Hak Cipta Software Dev Pustikom UNJ. All Rights Reserved
                  </p>
              </div>
            </footer>

      </div>
        <div class="col-md-4"style="background-color: #FFFF; font-family: Poppins;">
        <br>
        <div class="row  justify-content-center">
         <div class="col-md-7">
          <div class="container text-center">
            <img src="/img/logo.png" id="logo-unj" alt="Logo UNJ" style="width:150px;height:150px;">
          </div>
         <div class="mb-4">
              <h1>Sign In</h1>
              <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>
            </div>
            <form class="login-form" method="POST" action="{{ route('login') }}">
                        @csrf
              <div class="form-group first">
                <label for="username">Username</label>
                <input id="username" type="username" class="form-control"  name="username"  autocomplete="username" autofocus>
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input id="password" type="password" class="form-control"  name="password">
              </div>

              <div class="d-flex mb-5 align-items-center">
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
              </div>

              <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button id="login" type="submit" class="btn btn-primary">
                        login
                    </button>
                </div>
                </div>
            </form>
          </div>
        </div>
      </div>


        </div>
    </div>
    </body>
</html>

