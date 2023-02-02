<?php   
    // start or resume existing session
    session_start();

    // declare variables related to your xampp and sql config
    $servername = "localhost";
    $server_user = "root";
    $server_password = "";
    $database_name = "pmms";
    $port = 3306;
    $errors = array();
    
    // declare a connect object variable to pass in the condition if connection failed, else continue.
    $connectdb = new mysqli($servername,$server_user,$server_password,$database_name,$port);
    if($connectdb->connect_error){
        die('Connection Failed:' .$connectdb->connect_error);
      }
?>
