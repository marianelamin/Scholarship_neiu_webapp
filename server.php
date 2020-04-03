<?php
    require_once("server1.php");

/*
    Don't forget to have your server1.php file with the following information:

    <?php
        //database for development
        $db_host = ""; // ip address where the DB is running at (probabbly "localhost")
        $db_name = ""; // the name of the database you want to connect to
        $db_user = ""; // the name of the user that has an account on the database (probabbly db_Spr19...)
        $db_pass = ""; // password of the user

        $mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

        //check connection, if there an error it will spit it out
        if ($mysqli->connect_error) {
            die('Connect Error: ' . $mysqli->connect_error);
        }


    ?>
*/
