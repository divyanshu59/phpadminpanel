<?php
include_once 'config/db.php';
include_once 'config/authHandle.php';

$userData = checkUser($con);


if(!isset($_GET['id'])){
    header('Location: sheet1.php?id=0');
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
                    Report
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
                                            <a type="button" href="?id=0" class="btn ">BSS</a>
                                            <a type="button" href="?id=1165994494" class="btn">Covid Control</a>
                                            <a type="button" href="?id=410674427" class="btn ">Observer</a>
                                            <a type="button" href="?id=1037639889" class="btn">Monthly BSS Chart</a>
                                            <a type="button" href="?id=753943982" class="btn ">Monthly Covid Chart</a>
                                            <a type="button" href="?id=1061880492" class="btn ">Observation Monthly</a>
                                            <a type="button" href="?id=426727338" class="btn">Suraksha</a>
                                            <a type="button" href="?id=1037259284" class="btn ">Observer Wise BSS</a>
                                            <a type="button" href="?id=365196969" class="btn ">Details-5</a>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <div id="box">
                                            <table id="statistics" class="table  table-condensed table-striped"></table>
                                        </div>
                                        <a id="downloadLink" class="btn btn-warning" style="float: right; color:white; border: none;" onclick="exportF(this)">Export to excel</a>
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
    var mySpreadsheet = 'https://docs.google.com/spreadsheets/d/1VbalJcOaDbu3-2HyFfY1VEfxuqAHUHuLg7c0gMlOiAg/edit#gid=' + id;
    // Load an entire worksheet.
    $('#statistics').sheetrock({
        url: mySpreadsheet
    });

function exportF(elem) {
  var table = document.getElementById("statistics");
  var html = table.outerHTML;
  var url = 'data:application/vnd.ms-excel,' + escape(html); // Set your html table into url 
  elem.setAttribute("href", url);
  elem.setAttribute("download", "export.xls"); // Choose the file name
  return false;
}
</script>

</html>