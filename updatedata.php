<?php
include_once 'config/db.php';
include_once 'config/authHandle.php';

$userData = checkUser($con);

$sql = "SELECT * FROM `details` WHERE `id` = 0 ";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
    $TOb = $row[1];
    $TW = $row[2];
    $TCL = $row[3];
    $TBBSL = $row[4];
    $TS = $row[5];
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

            <a class="c-header-brand d-lg-none" href="#">JAAN AUR JAHAN</a>

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
                                        Update Data
                                    </div>

                                    <div class="card-body">
                                        <form action="updatedata.php" method="POST">
                                           <label>Total Observers</label>
                                            <input type="number" name="TOb"  class="form-control" required>
                                            
                                           <label>Total Warriors</label>
                                            <input type="number" name="TW"  class="form-control" required>
                                            
                                           <label>Total Covid locations</label>
                                            <input type="number" name="TCL"  class="form-control" required>
                                            
                                           <label>Total BBS locations</label>
                                            <input type="number" name="TBSSL"  class="form-control" required>
                                            
                                           <label>Total Suggestion</label>
                                            <input type="number" name="TS" class="form-control" required>
                                            
                                            <label>Select Report</label>
                                            <select class="form-control" name="city">
                                                <option value="0">Rupapur</option>
                                                <option value="1">Loni</option>
                                                <option value="2">Ajbapur</option>
                                                <option value="3">Hariawan</option>
                                            </select>
                                            <br>
                                            <input type="submit" name="submit" value="Update Data" class="btn btn-danger">
                                        </form>
                                        <?php
                                        if (isset($_GET['error']) == 'true') {
                                            echo "<p style='color: red; text-align: center; width: 100%; font-size: 15px;'>Password and Confirm-Password <b>Do Not Match</b></p>";
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </main>

        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/perfect-scrollbar.min.js"></script>
    <script src="https://unpkg.com/@coreui/coreui@3.2/dist/js/coreui.min.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
    <script src="https://17835-546363217e5fb4b5.2019.quickadminpanel.com/js/main.js"></script>


</body>

</html>

<?php
if (isset($_POST['submit'])) {
    $TOb = $_POST['TOb'];
    $TW = $_POST['TW'];
    $TCL = $_POST['TCL'];
    $TBSSL = $_POST['TBSSL'];
    $TS = $_POST['TS'];
    $city = $_POST['city'];

        $sql = "UPDATE `details` SET `TOb`=$TOb,`TW`=$TW,`TCL`=$TCL,`TBSSL`= $TBBSL,`TS`= $TS WHERE `id` = $city";
        $result = mysqli_query($con, $sql);
    
        header('location: index.php');
}
?>