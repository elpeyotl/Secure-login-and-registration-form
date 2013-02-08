    <!DOCTYPE html>
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


        <meta name="author" content="Chris Perez - Webdesigner - www.peyotedesign.ch">
        <meta name="description" content="Secure user login and registration - Database Codes">
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
          <h4>Setting it up</h4>
          <p>Get your clone from Github:<br><a href="https://github.com/elpeyotl/Secure-login-and-registration-form">Project on Github</a></p>
          <h4>Database</h4>
          <p>Create a database & user in your MySQL database</p>
          <p>We will need 2 tables. Use these SQL snippets here to create them</p>
          <div class="container-fluid code">
            <pre>
CREATE TABLE `secure_login`.`members` (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
`username` VARCHAR(30) NOT NULL,
`email` VARCHAR(50) NOT NULL,
`password` CHAR(128) NOT NULL,
`salt` CHAR(128) NOT NULL
) ENGINE = InnoDB;
            </pre>


          </div><!--/container-fluide-->

          <div class="container-fluid code">
            <pre>
CREATE TABLE `secure_login`.`login_attempts` (
`user_id` int(11) NOT NULL,
`time` VARCHAR(30) NOT NULL 
) ENGINE=InnoDB
            </pre>
                  </div><!--/container-fluide-->
            <p>Update your database settings in the /secure/db_connect.php file</p>
            
            <img src="img/db_connect.png" width='auto' align="center"/>

            <h4>And BOOM! You are done!</h4>
            <p><a href="http://www.peyotedesign.ch/securelogin">See the demo</a></p>
            <p>Thank you wiki-how for the scripts! <a href="http://www.wikihow.com/Create-a-Secure-Login-Script-in-PHP-and-MySQL">Article</a><p>

                  <p>
<ul id="circles">
                <li class="circle"></li>
                <li class="circle"></li>
                <li class="circle"></li>
                <br><a href="http://www.peyotedesign.ch">PeyoteCode</a>
            </ul>
    </p>


</div><!--/container-fluid-->
</div><!--/container-fluid-->

<!--Scripts-->
<script src="js/jquery-1.8.2.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="secure/sha512.js"></script>
<script src="secure/forms.js"></script>

     
  

      <!--GOOGLE ANALYTICS-->
    <script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-38301376-1']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

    </script>

</body>
</html>