<?php

if ( isset($_POST['cancel'] ) ) {
    // Redirect the browser to login.php
    header("Location: login.php");
    return;
}



$failure = false;  // If we have no POST data

// Check to see if we have some POST data, if we do process it
if ( isset($_POST['who']) ) {
    if ( strlen($_POST['who']) != 6) {
        $failure = "6-digit-number is required";
    } else {
        $var = urlencode($_POST['who']);
            // echo $var."<br />";
        $i = 0;
        foreach ($nameFromId as $id) {
            // echo $id."<br />";
            $i++;
            // echo $i;
            if ($id == $var) {
                // echo "Move to the page and start uploading...";
                if(isset($_POST['name']) && strlen($_POST['name'])>=3 )
                    {header("Location: upload.php?name=".urlencode($_POST['name'])."&id=".urldecode($_POST['who']));
                }else{
                    // echo "number of array: ".$i."id: ".$id."  name: ".$id_names[$i-1];
                    // echo '<br/>';
                    header("Location: upload.php?name=".$nameFromId[$var]."&id=".$var);
                    }
            return;
            }else
            {
               $failure = "Incorrect number"; 
            }
        }
      } 
    }


// Fall through into the View
?>

<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
    <?php include("../css/style_config.php") ?>
    <title>Iniciar Sesion - Proyecto de amor</title>
</head>
<body>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-6 col-md-offset-3" align="center">
<h1>NEIU</h1>
<h4>Please Log in</h4>

<img src="../images/logo.png" alt=" logo"><br><br>


<?php
if ( $failure != "" ) 
  echo('<p style="color: red;">'.htmlentities($failure)."</p>\n");
  ?>


<form method="POST" action="login.php">
    <!-- <label for="email">Email: </label> -->
    <input class="form-control" type="text" name="email" id="email" placeholder="Email..." required><span style="color:gray;"><?=$failure?></span><br/>
    <!-- <label for="pass">Contraseña: </label> -->
    <input class="form-control" type="password" name="password" id="pass" placeholder="Contraseña..." required><br/>
    <input type="submit" name="submit" value="Inicia Sesion">
    <input type="submit" name="cancel" value="Cancel">
</form>
<p>
<a href="">Forgot password</a>
</p>
</div>
</body>
</html>