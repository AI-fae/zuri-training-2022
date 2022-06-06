<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    registerUser($username, $email, $password);

}

function registerUser($username, $email, $password){
    //save data into the file
    $data = $username.",".$email.",".$password."\n";
    $filename = "../storage/users.csv";
    $handle = fopen($filename, "w");
    fwrite($handle, $data);
    fclose($handle);
    echo "User Successfully registered <br>";  
}
?>
<a href="../forms/login.html">Login here</a>


