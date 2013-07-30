<?php
include 'secure/db_connect.php';
include 'secure/functions.php';
sec_session_start(); // Our custom secure way of starting a php session.
if(login_check($mysqli) == true) { ?>

<!DOCTYPE html>
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


        <meta name="author" content="Chris Perez - Webdesigner - www.peyotedesign.ch">
        <meta name="description" content="Secure user login and registration">
        <title>Secure user login and registration</title>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

        <!-- Responsive -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap-responsive.css" rel="stylesheet">

        <!--Custom Styles-->
        <link href="css/style.css" rel="stylesheet">

        <!--Icon home Screen Touch -->
        <link rel="apple-touch-icon-precomposed" href="icon.png">


    </head>
    <body>
        <div class="container-fluid" id="mainwrapper">
            <div class="container-fluid" id="content">
                <h1>Secure login & registration form</h1>
                <h4>Congratulations you are logged in!</h4>
                <p><a href="logout.php">Logout</a></p>
    

</div><!--/container-fluid-->
</div><!--/container-fluid-->

<!--Scripts-->
<script src="js/jquery-1.8.2.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="secure/sha512.js"></script>
<script src="secure/forms.js"></script>

     
 

</body>
</html>

<?php } else {
   echo 'You are not authorized to access this page, please login. <br/>';
}

;?>
