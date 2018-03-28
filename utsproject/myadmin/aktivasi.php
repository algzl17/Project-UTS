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
    <style>
            th {
                text-align: center;
            }
    </style>
    
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
                    <li >
                        <a href="index.php">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li >
                        <a href="data.php">
                            <i class="material-icons">content_paste</i>
                            <p>Data User</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="aktivasi.php">
                            <i class="material-icons">library_books</i>
                            <p>Aktivasi 365</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            
            <div class="content text-center">
                <h2 class="text-info ">Mahasiswa Aktivasi Office 365</h2>
                    <?php
                    ini_set('displays_errors', 'on');
                    error_reporting(E_ALL);
                    include_once 'config/dao.php';
                    $dao = new Dao2();
                    $result = $dao->read();

                    echo '<table class="table table-striped table-bordered" align="center">
                            <thead>
                                <tr>
                                    <th><b>NO</b></th>
                                    <th><b>NAMA</b></th>
                                    <th><b>EMAIL</b></th>
                                    <th><b>TELEPON</b></th>
                                </tr>
                            </thead>
                                    <tbody>';

                        while ($row = mysqli_fetch_array($result))
                        {
                                echo '<tr>
                                                <td>'.$row['no'].'</td>
                                                <td>'.$row['nama'].'</td>
                                                <td>'.$row['email'].'</td>
                                                <td>'.$row['telpon'].'</td>
                                       </tr>';
                        }
                        echo '
                            </tbody>
                        </table>';
                    ?>
            </div>
            
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