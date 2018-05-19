
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Payroll | Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">P+</h1>

            </div>
            <h3>Welcome to Techcube Payroll Manager</h3>
           
            <p></p>
            <form class="m-t" role="form" action="signinclass.php?role=admin" method="post">
            
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="email" required="">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="password" required="">
                </div>
                
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a class="btn btn-danger block full-width m-b" href="forgot.php"><small>Forgot password ?</small></a>
            </form>
            <p class="m-t"> <small>&copy; <?php echo date('Y');?> Powered by<a href="http://www.techcube.co.ke" target="_blank"> Techcube Limited</a></small>  </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
