<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        body{
            background-image: url(d54b754f31f338feab0a2d201b2a58b3.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            /* opacity: 40%; */
        }
        .con{
        height: 400px;
        width: 400px;
        border-radius: 20px;
        border: 5px inset purple;
        position: absolute;
        padding: 30px;
        top:20%;
        left:35%;
        text-align: center;
        background-color: plum;
        position:absolute;
        z-index: 100%;
        opacity: 40%;
        
        
    }
    label{
        font-size: 25px;
        font-weight: bold;
        height: 8px;
        width: 50px;
        
    }
    input{
        height: 20px;
        width: 250px;
        text-align: center;
        border-radius: 10px;
    }
    h1{
        text-align: center;
        text-shadow: 3px 5px 5px white;
    }
    #btn{
        height: 35px;
        width: 90px;
        border: 4px inset black;
        border-radius: 10%;
        background-color: purple;
        color: white;
        box-shadow: 2px 3px 3px 3px whitesmoke;
        
    }
    </style>
</head>
<body>
    <div class="con">
        <h1>SignUP/SignIn Form</h1>
        <form action="connection.php" method="post">
            <label for="name">Name</label><br>
            <input type="text" name="name" id="name" placeholder="Enter user name"><br><br>
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" placeholder="Enter your e-mail"><br><br>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password" placeholder="Enter password"><br><br>
            <input type="submit" value="signup" name="signup" id="btn" class="signup" name="signup">
            <input type="submit" value="signin" name="signin" id="btn" class="signin" name="signin">
        </form>
    </div>
</body>
</html>