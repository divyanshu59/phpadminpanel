<?php
include_once 'config/db.php';
include_once 'config/authHandle.php';

$userData = checkUser($con);

$sql = "SELECT * FROM `details` WHERE `id` = 0 ";
$result = mysqli_query($con, $sql);
$row = array();
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
    $TOb = $row[1];
    $TW = $row[2];
    $TCL = $row[3];
    $TBSSL = $row[4];
    $TS = $row[5];
}

$sql = "SELECT * FROM `details` WHERE `id` = 1 ";
$result = mysqli_query($con, $sql);
$row = array();
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
    $TOb1 = $row[1];
    $TW1 = $row[2];
    $TCL1 = $row[3];
    $TBSSL1 = $row[4];
    $TS1 = $row[5];
}

$sql = "SELECT * FROM `details` WHERE `id` = 2 ";
$result = mysqli_query($con, $sql);
$row = array();
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
    $TOb2 = $row[1];
    $TW2 = $row[2];
    $TCL2 = $row[3];
    $TBSSL2 = $row[4];
    $TS2 = $row[5];
}

$sql = "SELECT * FROM `details` WHERE `id` = 3 ";
$result = mysqli_query($con, $sql);
$row = array();
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
    $TOb3 = $row[1];
    $TW3 = $row[2];
    $TCL3 = $row[3];
    $TBSSL3 = $row[4];
    $TS3 = $row[5];
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="xAt6bRT9oae06rTrZCLjfXwc2Cn4sOZZNNeYQDZj">

    <title>JAAN AUR JAHAN</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/@coreui/coreui@3.2/dist/css/coreui.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/css/perfect-scrollbar.min.css" rel="stylesheet" />
    <link href="https://17835-546363217e5fb4b5.2019.quickadminpanel.com/css/custom.css" rel="stylesheet" />
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <style>
    .c-sidebar{
        background-color: #2890b0 !important;
    }
    .c-header{
        background-color: #2890b0 !important;
    }
    .cardinner{
        background-color: #2890b0 !important;
        color: white;
    }
    .card-text{
        font-size: 20px;
    }
    </style>


</head>

<body class="c-app">
    <div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

        <div class="c-sidebar-brand d-md-down-none">
            <a class="c-sidebar-brand-full h4" href="#">
                JAAN AUR JAHAN
            </a>
        </div>

        <ul class="c-sidebar-nav">
            <li class="c-sidebar-nav-item">
                <a href="index.php" class="c-sidebar-nav-link">
                    <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                    </i>
                    Dashboard
                </a>
            </li>
            <?php if ($userData['userType'] == "ADMIN") { ?>

                <li class="c-sidebar-nav-dropdown">
                    <a class="c-sidebar-nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                        </i>
                        User management
                    </a>
                    <ul class="c-sidebar-nav-dropdown-items">

                        <li class="c-sidebar-nav-item">
                            <a href="adduser.php" class="c-sidebar-nav-link ">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon"></i>
                                Add Users
                            </a>
                        </li>
                        <li class="c-sidebar-nav-item">
                            <a href="users.php" class="c-sidebar-nav-link ">
                                <i class="fa-fw fas fa-user c-sidebar-nav-icon"></i>
                                Users
                            </a>
                        </li>
                    </ul>
                </li>

            <?php }  ?>

            <li class="c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                    </i>
                    Reports
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item">
                        <a href="sheet1.php" class="c-sidebar-nav-link ">
                            <i class="fa-fw fas fa-folder c-sidebar-nav-icon"></i>
                            Rupapur
							
						
                        </a>
                    </li>

                </ul>
                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item">
                        <a href="" class="c-sidebar-nav-link ">
                            <i class="fa-fw fas fa-folder c-sidebar-nav-icon"></i>
                            Loni
                        </a>
                    </li>
                </ul>
                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item">
                        <a href="" class="c-sidebar-nav-link ">
                            <i class="fa-fw fas fa-folder c-sidebar-nav-icon"></i>
                            Ajbapur
                        </a>
                    </li>
                </ul>
                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item">
                        <a href="" class="c-sidebar-nav-link ">
                            <i class="fa-fw fas fa-folder c-sidebar-nav-icon"></i>
                            Hariawan
                        </a>
                    </li>
                </ul>
                
           
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link " href="changepassword.php">
                    <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                    </i>
                    Change password
                </a>
            </li>
            <li class="c-sidebar-nav-item">
                <a href="logout.php" class="c-sidebar-nav-link">
                    <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt"></i>
                    Logout
                </a>
            </li>
        </ul>

    </div>
    <div class="c-wrapper">
        <header class="c-header c-header-fixed px-3">
            <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
                <i class="fas fa-fw fa-bars"></i>
            </button>

            <a class="c-header-brand d-lg-none" href="#">JAAN AUR JAHAN</a>

            <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
                <i class="fas fa-fw fa-bars"></i>
            </button>

            <ul class="c-header-nav ml-auto">

            </ul>
        </header>

        <div class="c-body">
            <main class="c-main">


                <div class="container-fluid">
                    <div class="content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                    <?php if ($userData['userType'] == "ADMIN") { ?> 
                                        <a style="float:right;" href="updatedata.php">Update Data</a>
                                    <?php } ?>
                                        Jaan AUR JAHAN
                                    </div>

                                    <div class="card-body">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a data-toggle="tab" href="#home">Rupapur</a></li>
                                            <li><a data-toggle="tab" href="#menu1">Loni</a></li>
                                            <li><a data-toggle="tab" href="#menu2">Ajbapur</a></li>
                                            <li><a data-toggle="tab" href="#menu3">Hariawan</a></li>
                                        </ul>

                                        <div class="tab-content">
                                            <div id="home" class="tab-pane fade in active">
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="card cardinner">
                                                                <div class="card-body">
                                                                    <h4 class="card-title">Total Observers</h4>
                                                                    <p class="card-text"><?php echo $TOb ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="card cardinner">
                                                                <div class="card-body">
                                                                    <h4 class="card-title">Total Warriors</h4>
                                                                    <p class="card-text"><?php echo $TW ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="card cardinner">
                                                                <div class="card-body">
                                                                    <h4 class="card-title">Total Covid locations</h4>
                                                                    <p class="card-text"><?php echo $TCL ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="card cardinner">
                                                                <div class="card-body">
                                                                    <h4 class="card-title">Total BBS locations</h4>
                                                                    <p class="card-text"><?php echo $TBSSL ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="card cardinner">
                                                                <div class="card-body">
                                                                    <h4 class="card-title">Total Suggestion</h4>
                                                                    <p class="card-text"><?php echo $TS ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div id="menu1" class="tab-pane fade">
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="card cardinner">
                                                                <div class="card-body">
                                                                    <h4 class="card-title">Total Observers</h4>
                                                                    <p class="card-text"><?php echo $TOb1 ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="card cardinner">
                                                                <div class="card-body">
                                                                    <h4 class="card-title">Total Warriors</h4>
                                                                    <p class="card-text"><?php echo $TW1 ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="card cardinner">
                                                                <div class="card-body">
                                                                    <h4 class="card-title">Total Covid locations</h4>
                                                                    <p class="card-text"><?php echo $TCL1 ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="card cardinner">
                                                                <div class="card-body">
                                                                    <h4 class="card-title">Total BBS locations</h4>
                                                                    <p class="card-text"><?php echo $TBSSL1 ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="card cardinner">
                                                                <div class="card-body">
                                                                    <h4 class="card-title">Total Suggestion</h4>
                                                                    <p class="card-text"><?php echo $TS1 ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div id="menu2" class="tab-pane fade">
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="card cardinner">
                                                                <div class="card-body">
                                                                    <h4 class="card-title">Total Observers</h4>
                                                                    <p class="card-text"><?php echo $TOb2 ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="card cardinner">
                                                                <div class="card-body">
                                                                    <h4 class="card-title">Total Warriors</h4>
                                                                    <p class="card-text"><?php echo $TW2 ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="card cardinner">
                                                                <div class="card-body">
                                                                    <h4 class="card-title">Total Covid locations</h4>
                                                                    <p class="card-text"><?php echo $TCL2 ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="card cardinner">
                                                                <div class="card-body">
                                                                    <h4 class="card-title">Total BBS locations</h4>
                                                                    <p class="card-text"><?php echo $TBSSL2 ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="card cardinner">
                                                                <div class="card-body">
                                                                    <h4 class="card-title">Total Suggestion</h4>
                                                                    <p class="card-text"><?php echo $TS2 ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div id="menu3" class="tab-pane fade">
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="card cardinner">
                                                                <div class="card-body">
                                                                    <h4 class="card-title">Total Observers</h4>
                                                                    <p class="card-text"><?php echo $TOb3 ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="card cardinner">
                                                                <div class="card-body">
                                                                    <h4 class="card-title">Total Warriors</h4>
                                                                    <p class="card-text"><?php echo $TW3 ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="card cardinner">
                                                                <div class="card-body">
                                                                    <h4 class="card-title">Total Covid locations</h4>
                                                                    <p class="card-text"><?php echo $TCL3 ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="card cardinner">
                                                                <div class="card-body">
                                                                    <h4 class="card-title">Total BBS locations</h4>
                                                                    <p class="card-text"><?php echo $TBSSL3 ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="card cardinner">
                                                                <div class="card-body">
                                                                    <h4 class="card-title">Total Suggestion</h4>
                                                                    <p class="card-text"><?php echo $TS3 ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </main>

        </div>
    </div>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/perfect-scrollbar.min.js"></script>
    <script src="https://unpkg.com/@coreui/coreui@3.2/dist/js/coreui.min.js"></script>
    

</body>

</html>