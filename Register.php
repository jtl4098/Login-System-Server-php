<?php 
    $con = mysqli_connect("localhost", "jtl4098", "rlf95130!", "jtl4098");
    mysqli_query($con,'SET NAMES utf8');

    $userID = $_POST["userID"];
    $userPassword = $_POST["userPassword"];
    $userName = $_POST["userName"];


    $statement = mysqli_prepare($con, "INSERT INTO USER VALUES (?,?,?)");
    mysqli_stmt_bind_param($statement, "sss", $userID, $userPassword, $userName);
    mysqli_stmt_execute($statement);


    $response = array();
    $response["success"] = true;
 
   
    echo json_encode($response);



?>