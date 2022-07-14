<?php
    $name=$_POST['username'];
    $email=$_POST["email"];
    $pass=$_POST['password'];

    if(trim($name)==""){
        echo "error";
    } else if(strlen(trim($name))<=1)
        echo "error";
    else if(trim($email)=="" || trim($pass)==""||trim($_POST['message'])=="")
        echo "error";
    else{
//        $_POST['password']=md5($pass);
//        echo "<h1>All data</h1>";
//        foreach ($_POST as $key=>$value){
//            echo "<p>$value</p>";
//        }
        header('Location: /learnPhp/about.php');
        exit;
    }