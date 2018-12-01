<?php

if ( isset($_POST['cancel'] ) ) {
    // Redirect the browser to login.php
    header("Location: login.php");
    return;
}

use PHPMailer\PHPMailer\PHPMailer;
$failure = $msg = "";  // If we have no POST data


$name_error = $email_error = $pass_error = $passC_error ="";
$name = $email = $pass = $passC = '';
if(isset($_POST['submit']))
{
    // echo '<pre>';
    // echo var_dump($_POST);
    // echo '</pre>';
    // Check to see if we have some POST data, if we do process it
if ( !empty($_POST['entry_email']) || !empty($_POST['entry_password']) || !empty($_POST['entry_passwordConfirmed']) || !empty($_POST['entry_name']) ) 
{
    require "server.php";
    $name =  $mysqli->escape_string($_POST['entry_name']);
    $email = $mysqli->escape_string($_POST['entry_email']);
    $pass = $mysqli->escape_string($_POST['entry_password']);
    $passC = $mysqli->escape_string($_POST['entry_passwordConfirmed']);

   if(strcmp($pass,$passC) == 0){

    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        $name_error = "Solo letras y espacios son permitidos"; 
      }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_error = "Invalid email format"; 
      }
    
      $hashed_pass = password_hash(test_input($_POST["entry_password"]),PASSWORD_BCRYPT);
    //   echo 'test pswd: '.$hashed_pass;


   }else{
       $pass_error = "Las contraseñas deben ser identicas";
   }
   
   $sql = " SELECT usr_id FROM login WHERE email='$email'; ";
   $result = $mysqli->query($sql);
   if($result->num_rows > 0){
       $msg = "El correo electronico ya existe en la base de datos";
   }
   else{
       // crear el tocken y enviar correo
    //    echo 'creating token...';
        $token = 'qwertzuiopasdfghjklyxcvbnmQWERTZUIOPASDFGHJKLYXCVBNM0123456789!$/()*';
        $token = str_shuffle($token);
        $token = substr($token, 0, 10);
        $sql = "INSERT INTO login (email,hash,is_confirmed,token) VALUES ('$email', '$hashed_pass', '0', '$token');";
        $result = $mysqli->query($sql) or ($mysqli->error);
        // echo '<p>this is insert_id: '.$mysqli->insert_id;
        // echo 'mysqli object: '.$result;
        // echo'</p>';
        include_once "../PHPMailer/PHPMailer.php";

        // echo 'sending email...';
        
        $mail = new PHPMailer();
        $mail->setFrom('info@pda.org.ve');
        $mail->addAddress($email, $name);
        $mail->Subject = "Verifica tu email!";
        $mail->isHTML(true);
        $mail->Body = "
        <p>
            Bienvenido a Proyecto de Amor. Para activar tu cuenta haz click en el enlace siguiente:<br><br>
            
            <a href='https://pda.org.ve/miembro/login/confirm.php?email=$email&token=$token'>Activa tu cuenta</a>
            <br><br>
            Dios te bendiga.
        </p>
            --------------------------------------
        <p> Si tienes dudas porfavor no resopndas a este correo, contactanos a <a mailto:proyectodeamor@gmail.com>proyectodeamor@gmail.com</a></p>
        ";

        if ($mail->send())
            $msg = '<p style="color: green;">You have been registered! Please verify your email!.</p>';
        else
        $msg = '<p style="color: red;">Something wrong happened! Please try again!.</p>';
   
  }

    }
    else
    {
        $failure = "Debes ingresar todos los campos";
    }




}


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

// Fall through into the View
?>

<!DOCTYPE html>
<html>
<head>
    <?php include("../css/style_config.php") ?>
    <title>Sign up - NEIU Admin</title>
</head>
<body>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-6 col-md-offset-3" align="center">
<h1>Sign up a new member</h1>
<p>Enter the email of your employee who will be managing the scholarships.  Be aware that this person will have full permission to add, edit, delete and update any scholarship that is stored in he Database.</p>
<h4>Enter email of the new member.</h4>

<img class="img-fluid" width="20%" src="../images/logo.png" alt="NEIU logo"><br><br>


<?php
if ( $failure == "" )
  echo($msg);
  echo($failure);
  ?>


<form method="POST" action="signup.php">
<input class="form-control" type="text" name="entry_name" id="name" placeholder="Nombre..." required><span style="color:gray;"><?=$name_error?></span><br/>
    <!-- <label for="email">Email: </label> -->
    <input class="form-control" type="text" name="entry_email" id="email" placeholder="Email..." required><span style="color:gray;"><?=$email_error?></span><br/>
    <!-- <label for="pass">Contraseña: </label> -->
    <input class="form-control" type="password" name="entry_password" id="pass" placeholder="Confirm Email..." required><span style="color:gray;"><?=$pass_error?></span><br/>
    <input class="form-control" type="password" name="entry_passwordConfirmed" id="passConf" placeholder="Confirma contraseña..." required><span style="color:gray;"><?=$passC_error?></span><br/>
    <input type="submit" name="submit" value="Continue">
    <input type="submit" name="cancel" value="Cancel">
</form>
</div>
</body>
</html>