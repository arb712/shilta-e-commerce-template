<?php
session_start();
$con = mysqli_connect("localhost","root","","account");

if(isset($_POST["username"])){
    $user=$_POST['username'];
    $pass=$_POST['password'];
    // $email=$_POST['email'];

    $sql = "select * from user_log where username='".$user."'AND password='".$pass."'";

    $result= mysqli_query( $con ,$sql);
    $num = mysqli_num_rows($result);
    
        if($num == 1){
            include('index.html');
            
        }else
        {
            echo "<script type='text/javascript'>alert('Password Wrong'); window.history.back();</script>";
        }
    }
?>