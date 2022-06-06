<?php

logout();

function logout(){
    session_start();
    session_unset();
    session_destroy();
    header("Location: ../forms/login.html");
    exit();
    
}

