<?php

    if(isset($_POST['signup']))
    {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    echo $password;
    $mycon=mysqli_connect("localhost","root","","form");
    $q="insert into client values ('$name','$email','$password')";
    $rec=mysqli_query($mycon,$q);
    echo "Record Saved!";
    mysqli_close($mycon);
    }

    if(isset($_POST['signin']))
    {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $mycon=mysqli_connect("localhost","root","","form");
    $q="select * from client where email='$email' and password='$password'";
    $rec=mysqli_query($mycon,$q);
        if(mysqli_num_rows($rec)>0)
        {
            echo "Login!";
        }
        else
        {
            echo "Login Failed Because invalid email or password!!";
        }
    }
?>