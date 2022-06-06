<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $newpassword = $_POST['password'];

    resetPassword($email, $newpassword);
}


function resetPassword($email, $password){
    //open file and check if the username exist inside
    //if it does, replace the password

    $filename = "../storage/users.csv";
    $handle = fopen($filename, 'r');
    $saved_data = fgets($handle);
    fclose($handle);

    $data_array = explode(',', $saved_data);

    if ($data_array[1]==$email){
        $new_data = $data_array[0].",".$data_array[1].",".$password."\n";
        $filename = "../storage/users.csv";
        $handle = fopen($filename, 'w');
        fwrite($handle, $new_data);
        fclose($handle);
        echo 'password reset successful <br>';
        echo '<a href="../forms/login.html" target="_blank">Login here</a>';
    }
    else{
       echo  'User does not exist <br>';
       echo '<a href="../forms/register.html" target="_blank">Register here</a>';
    }
}



