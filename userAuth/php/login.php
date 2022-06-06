<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];


loginUser($email, $password);

}

function loginUser($email, $password){
    $filename = "../storage/users.csv";
    $handle = fopen($filename, "r");
    $csv_data = fgets($handle);
    fclose($handle);

    $user_array = explode(",", $csv_data);
    $user_email = $user_array[1];
    $user_password = $user_array[2];

    if ($user_email==$email && $user_password==$password){
        session_start();
        $_SESSION["email"] =$email;
        $_SESSION["password"]=$password;
        header("Location: ../dashboard.php");
        exit();
        
    } 
    else{
        header("Location: ../forms/login.html");
        exit();
    }

}

