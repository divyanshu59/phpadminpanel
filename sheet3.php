<?php
include_once 'config/db.php';
include_once 'config/authHandle.php';

$userData = checkUser($con);


if(!isset($_GET['id'])){
    header('Location: sheet3.php?id=0');
}
else{
    $id = $_GET['id'];
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-sheetrock/1.1.4/dist/sheetrock.min.js"></script>


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
    <!-- Grid -->
    <!-- Load jQuery and Sheetrock from CDNJS -->
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
    
        #box {
            overflow: scroll !important;
            width: 100% !important;
            height: 80vh !important;
        }

        .btn-group {
            overflow-x: scroll;
            width: 100% !important;
        }

        .btn {
            border: 1px solid black;
        }
    </style>
</head>

<body class="c-app">
	<body style="background-color:powderblue;">
    <div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

        <div class="c-sidebar-brand d-md-down-none">
            <a class="c-sidebar-brand-full h4" href="#">
               <img src=" corona_app_icon1.png"> JAAN AUR JAHAN
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
                    Data Bank
                </a>
                 
                <?php if($userData['permission'][1] == 1){ ?>
                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item">
                        <a href="sheet1.php" class="c-sidebar-nav-link ">
                            <i class="fa-fw fas fa-folder c-sidebar-nav-icon"></i>
                            Rupapur
							
						
                        </a>
                    </li>

                </ul>
                <?php }if($userData['permission'][2] == 1){ ?>
                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item">
                        <a href="sheet2.php" class="c-sidebar-nav-link ">
                            <i class="fa-fw fas fa-folder c-sidebar-nav-icon"></i>
                            Loni
                        </a>
                    </li>
                </ul>
                <?php }if($userData['permission'][3] == 1){ ?>
                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item">
                        <a href="sheet3.php" class="c-sidebar-nav-link ">
                            <i class="fa-fw fas fa-folder c-sidebar-nav-icon"></i>
                            Ajbapur
                        </a>
                    </li>
                </ul>
                <?php }if($userData['permission'][4] == 1){ ?>
                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item">
                        <a href="sheet4.php" class="c-sidebar-nav-link ">
                            <i class="fa-fw fas fa-folder c-sidebar-nav-icon"></i>
                            Hariawan
                        </a>
                    </li>
                </ul>
                <?php } ?> 
                <?php if($userData['permission'][1] == 1){ ?>
                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item">
                        <a href="sheet1.php" class="c-sidebar-nav-link ">
                            <i class="fa-fw fas fa-folder c-sidebar-nav-icon"></i>
                            Rupapur
							
						
                        </a>
                    </li>

                </ul>
                <?php }if($userData['permission'][2] == 1){ ?>
                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item">
                        <a href="sheet2.php" class="c-sidebar-nav-link ">
                            <i class="fa-fw fas fa-folder c-sidebar-nav-icon"></i>
                            Loni
                        </a>
                    </li>
                </ul>
                <?php }if($userData['permission'][3] == 1){ ?>
                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item">
                        <a href="sheet3.php" class="c-sidebar-nav-link ">
                            <i class="fa-fw fas fa-folder c-sidebar-nav-icon"></i>
                            Ajbapur
                        </a>
                    </li>
                </ul>
                <?php }if($userData['permission'][4] == 1){ ?>
                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item">
                        <a href="sheet4.php" class="c-sidebar-nav-link ">
                            <i class="fa-fw fas fa-folder c-sidebar-nav-icon"></i>
                            Hariawan
                        </a>
                    </li>
                </ul>
                <?php } ?>
            </li>
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

            <a class="c-header-brand d-lg-none" href="#">JaanAurJahan</a>

            <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
                <i class="fas fa-fw fa-bars"></i>
            </button>

            <ul class="c-header-nav ml-auto">

            </ul>
            <div class="dropdown">
                <img src="<?php echo $userData['image'] ?>" class="dropdown-toggle" data-toggle="dropdown" style="border-radius: 50%; width: 50px; height: 50px; float: right; margin-right: 10px;">
                <ul class="dropdown-menu dropdown-menu-right" >
                <li><?php echo $userData['userName'] ?></li>
                <li><?php echo $userData['userEmail'] ?></li>
                <li><?php echo $userData['userType'] ?></li>
                </ul>
            </div>
        </header>

        <div class="c-body">
            <main class="c-main">


                <div class="container-fluid">
                    <div class="content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="btn-group">
                                            <a type="button" href="?id=0" class="btn ">BBS</a>
											<a type="button" href="?id=951153274" class="btn">SURAKSHA</a>
                                            <a type="button" href="?id=1448011108" class="btn ">SUJHAV</a>
                                            <a type="button" href="?id=188685259" class="btn">OBSERVER</a>
                                            <a type="button" href="?id=965496009" class="btn ">COVID LOCATIONS</a>
                                            <a type="button" href="?id=1383658944" class="btn ">COVID WARRIORS</a>
                                            
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <div id="box">
                                            <table id="statistics" class="table  table-condensed table-striped"></table>
                                        </div>
                                        <a id="downloadLink" class="btn btn-warning" style="float: right; color:white; border: none;" onclick="exportF(this)">Download in excel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </main>

        </div>
    </div>



</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/perfect-scrollbar.min.js"></script>
<script src="https://unpkg.com/@coreui/coreui@3.2/dist/js/coreui.min.js"></script>


<script>
    var id = <?php echo $id; ?>;
    var mySpreadsheet = 'https://docs.google.com/spreadsheets/d/1es5FZXpnRfQQ6WRcEeeGVJoPV-a5FcwrjGgw4OD7bow/edit#gid=' + id;
    // Load an entire worksheet.
    $('#statistics').sheetrock({
        url: mySpreadsheet
    });

function exportF(elem) {
  var table = document.getElementById("statistics");
  var html = table.outerHTML;
  var url = 'data:application/vnd.ms-excel,' + escape(html); // Set your html table into url 
  elem.setAttribute("href", url);
  elem.setAttribute("download", "Ajbapur_BBS_Data.xls"); // Choose the file name
  return false;
}
</script>

</html>