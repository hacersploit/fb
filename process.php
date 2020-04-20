<?php
session_start();
$db = mysqli_connect("localhost","root","","combination");
if(isset($_POST['login_btn'])){

    $username = mysql_real_escape_string($_POST['username']);
    $password = mysql_real_escape_string($_POST['password']);

    $password=md5($password);
    $sqlquery="SELECT * FROM registration WHERE username='$username' AND password='$password'";
    $result = mysqli_query($db,$sqlquery);


    if(mysqli_num_rows($result)==1){

        $_SESSION['message']="You are now logged in.";
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;

        header("location:loginhome.php");
    }
    else{
        $_SESSION['message']="Incorrect Username or Password."; 
        header("location:login.php");
        echo '<h3>Invalid username or password</h3>';
    }

}
?>
