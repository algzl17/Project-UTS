<?php
session_start();
if(isset($_SESSION["salah"])){
    if($_SESSION["salah"] >= 3){
        echo '<h1>ANDA TELAH DIBLOKIR</h1>';
        exit();
    } elseif ($_SESSION["salah"] < 3) {
        
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>-= Project UTS Ku =-</title>
        <link rel="icon" href="assets/images/favicon.png">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/floating-labels.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        
        

        <script >
            window.setTimeout(function () {
                $(".alert").fadeTo(400,0).slideUp(400,function () {
                  $(this).remove();
                });
              }, 4000);
            function showModal() {
                $('#myModal').on('shown.bs.modal', function () {
                    $('#myInput').trigger('focus')
                  });
              }
        </script>
    </head>
    <body>
        
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
          <div class="container">
              <img class="mb-4" width="72" height="72" src="assets/images/ucrew.png">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="#about">HOME</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="#services">TENTANG</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="#contact">KONTAK KAMI</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        
    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
                
              <strong>University Crew</strong>
              <h4 class="text-info"> Project ku sebelum UTS</h4>
            </h1>
            <hr>
          </div>
          <div class="col-lg-6 mx-auto">
            <button onclick="showModal();" class="btn btn-primary btn-block" type="button" data-toggle="modal" data-target="#exampleModal">
            LOGIN IN
            </button>
          </div>
        </div>
      </div>
    </header>
 
    <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header alert-primary ">
                <h5 class="modal-title" id="exampleModalLabel">ADMINISTRATOR</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <form method="POST" action="login.php" class=" container form-signin jumbotron">
                        <div>
                          <?php
                            if (isset($_SESSION["salah"])) {
                              if ($_SESSION["salah"] < 3 ) {
                                echo '<div align="center" class="alert alert-danger alert-dismissible fade show" role="alert">
                                      -= PERHATIAN =- <br>
                                      Anda Gagal Masuk ke-'.$_SESSION["salah"].'
                                      <button type="button" class="close" data-dismiss="alert" arial-label="close">
                                     <span aria-hidden="true">&times;</span>
                                      </button>
                                      </div>';
                              }
                             }
                          ?>
                        </div>

                        <div class="form-label-group">
                          <input class="form-control " type="email" name="email" id="email" required="" placeholder="Email Address" autofocus="yes" autocomplete="no">
                          <label for="email">Email Address</label>
                        </div>
                        <div class="form-label-group">
                          <input class="form-control" type="password" name="password" required="yes" id="password" placeholder="password">
                          <label for="email">Password</label>
                        </div>
                      <button name="login" class="btn btn-lg btn-success btn-block" type="submit">SIGN IN</button>
                    </form>

              </div>
              <div class="modal-footer alert-primary">
                  
                <button type="button" class="btn btn-secondary " data-dismiss="modal">TUTUP</button>
                
              </div>
            </div>
          </div>
            
      <!-- Javascript -->
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
    </body>
</html>
