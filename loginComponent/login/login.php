<?php

if ( isset($_POST['cancel'] ) ) {
    // Redirect the browser to login.php
    header("Location: login.php");
    return;
}

$failure = false;  // If we have no POST data

if(isset($_POST['submitt'] )){

    
    // Check to see if we have some POST data, if we do process it
    if ( !isset($_POST['email']) || !isset($_POST['password']) ) {
    $failure = "Incorrect email or password";
    }
    else
    {
        
        $correo = htmlentities($_POST['email']);
        $contra = htmlentities($_POST['password']);
        
        // do some validation
        // prepare conection to the db
        // read the database, check for a user of that correo
        //bring the row and check the hash against the password
        //if correct show the edit page (start sesion)
        //if not correct send back to log in (wipeout and destroy session).
        
          }


}


// Fall through into the View
?>

<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
    <?php include("../css/style_config.php") ?>
    <title>Log In - Edit Scholarships</title>
</head>
<body>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-6 col-md-offset-3" align="center">
<h1>Financial Aid - El Centro</h1>
<h4>Please Log in</h4>

<img class="img-thumbnail" src="../../images/neiu_wordmark_color.png" alt=" logo"><br><br>


<?php
if ( $failure != "" ) 
  echo('<p style="color: red;">'.htmlentities($failure)."</p>\n");
  ?>


<form method="POST" action="login.php">
    <!-- <label for="email">Email: </label> -->
    <input class="form-control" type="text" name="email" id="email" placeholder="Email..." required><span style="color:gray;"><?=$failure?></span><br/>
    <!-- <label for="pass">Contraseña: </label> -->
    <input class="form-control" type="password" name="password" id="pass" placeholder="Contraseña..." required><br/>
    <input type="submit" name="submit" value="Log in">
    <input type="submit" name="cancel" value="Cancel">
</form>
<p>
<a href="">Forgot password</a>
</p>
</div>
</body>
</html>