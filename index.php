<?php 
    include("connection.php");
    include("login.php");
?>
    
<html>
    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="stylee.css">
    </head>
    <body>
        
        <div id="form">
            <!-- Logo Image Instead of "Welcome" -->
            <img src="images/clinic_logo.png" alt="Logo" id="logo">
            
            <form name="form" action="login.php" onsubmit="return isvalid()" method="POST">
                <input type="text" id="user" name="user" placeholder="Username">
                <input type="password" id="pass" name="pass" placeholder="Password">
                <input type="submit" id="btn" value="Login" name="submit"/>
            </form>
        </div>

        <script>
            function isvalid(){
                var user = document.form.user.value;
                var pass = document.form.pass.value;
                if(user.length == "" && pass.length == ""){
                    alert("Username and password field is empty!");
                    return false;
                }
                else if(user.length == ""){
                    alert("Username field is empty!");
                    return false;
                }
                else if(pass.length == ""){
                    alert("Password field is empty!");
                    return false;
                }
            }
        </script>
    </body>
</html>
