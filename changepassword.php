<?php
include_once 'config/db.php';
include_once 'config/authHandle.php';

$userData = checkUser($con);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="xAt6bRT9oae06rTrZCLjfXwc2Cn4sOZZNNeYQDZj">

    <title>Dashboard</title>
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
</head>

<body class="c-app">
    <div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

        <div class="c-sidebar-brand d-md-down-none">
            <a class="c-sidebar-brand-full h4" href="#">
                Dashboard
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
                    Sheets
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item">
                        <a href="sheet1.php" class="c-sidebar-nav-link ">
                            <i class="fa-fw fas fa-folder c-sidebar-nav-icon"></i>
                            Sheet 1
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

            <a class="c-header-brand d-lg-none" href="#">Dashboard</a>

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
                                        Change Password
                                    </div>

                                    <div class="card-body">
                                        <form action="changepassword.php" method="POST">
                                           <label>Password</label>
                                            <input type="password" name="password" class="form-control" required>
                                            
                                           <label>Confirm-Password</label>
                                            <input type="password" name="cpassword" class="form-control" required>
                                            
                                            <br>
                                            <input type="hidden" name="id" value="<?php echo $userData['userId']; ?>">
                                            <input type="submit" name="submit" value="Change Password" class="btn btn-danger">
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
  echo  $id = $_POST['id'];
   echo $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if($password == $cpassword){
        $sql = "UPDATE `users` SET `password`= '$password' WHERE `id` = '$id' ";
        $result = mysqli_query($con, $sql);
    
        header('location: index.php');
    }else{
        header('Location: changepassword.php?error=true');
    }
}
?>