<?php 

    include_once 'config/db.php';
    include_once 'config/authHandle.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/auth.css">
    <script src="assets/js/auth.js"></script>
    <title>ADMIN PANEL</title>
	<style type= "text/css">
		body{
			animation: change 5s infinite;
		}
		@keyframes bgcolor {
    0% {
        background-color: #45a3e5
    }

    30% {
        background-color: #66bf39
    }

    60% {
        background-color: #eb670f
    }

    90% {
        background-color: #f35
    }

    100% {
        background-color: #864cbf
    }
}

body {
    -webkit-animation: bgcolor 20s infinite;
    animation: bgcolor 10s infinite;
    -webkit-animation-direction: alternate;
    animation-direction: alternate;
}
		</style>
</head>

<body style="background-color:skyblue;"></body>
	
    <div class="container myCtn">
        <div class="card">
            <div class="card-body">
                <div class="col-md-12">
					

                 <h2 class="text-center mt-3">JAAN AUR JAHAN
						<img src="corona_app_icon1.png" alt="corona_app_icon1" style="width:100px;height:100px;margin-left:15px;"></h2>
                    <h4 class="text-center mt-3">Sign in</h4>
                    <form action="auth.php" id="contact-form" method="POST" class="main-form needs-validation" role="form" novalidate>

                        <div class="form-group">
                            <label>
                                <input type="text" name="email" id="form_email" class="my_form-control" required>
                                <small class="my_place">Your email</small>
                                <div class="invalid-feedback">Please enter the above field.</div>
                            </label>
                        </div>

                        <div class="form-group">
                            <label>
                                <input type="password" name="password" id="form_password" class="my_form-control" required>
                                <small class="my_place">Your password</small>
                                <div class="invalid-feedback">Please enter the above field.</div>

                            </label>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" name="submit" class="btn btn-primary mt-3 mx-auto">SIGN IN</button>
                        </div>
                        <?php 
                            if(isset($_GET['error'])== 'true'){
                                echo "<p class='error'>Invalid Email or Password</p>";
                            }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<?php 

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];


    login($email, $password, $con);

   
}

?>


