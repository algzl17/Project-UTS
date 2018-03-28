<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard </title>
    <link rel="icon" href="../assets/images/favicon.png">
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/material-dashboard.css" rel="stylesheet" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="blue" data-image="../assets/img/test.png">
           
            <div class="logo">
                <a href="../index.html" class="simple-text">
                    Project UTS
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="index.php">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="data.php">
                            <i class="material-icons">content_paste</i>
                            <p>Data User</p>
                        </a>
                    </li>
                    <li>
                        <a href="aktivasi.php">
                            <i class="material-icons">library_books</i>
                            <p>Aktivasi 365</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <a class="navbar-brand" href="#"><b>University Crew</b></a>
                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">Profile</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Profil</a>
                                        <a href="../index.php">Keluar</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group  is-empty">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="material-input"></span>
                            </div>
                            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                <i class="material-icons">search</i>
                                <div class="ripple-container"></div>
                            </button>

                        </form>

                    </div>
                </div>
            </nav>
            <div class="content text-center">
                <h1>SELAMAT DATANG</h1>
                <img class="mb-4" width="350" height="350" src="../assets/images/ucrew.png">
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a > By : Shofiyullah AL Ghozaly || 5150411119 </a>
                            </li>
                        </ul>
                    </nav>
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                         Project Sebelum UTS
                    </p>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/material.min.js" type="text/javascript"></script>
<script src="js/perfect-scrollbar.jquery.min.js"></script>
<script src="js/material-dashboard.js?v=1.2.0"></script>

</html>