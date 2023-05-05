<?php
require('db.php');

    if(isset($_POST['login']))
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        
        $res = $conn->query("SELECT * FROM user where username='$username' and password='$password'");
        if(($row=$res->fetch_assoc())==true)
        {
            $customerUsername=$row['USERNAME'];
            $customerPassword=$row['PASSWORD'];
            echo "<script>alert('Welcome');</script>";
            echo "<script>window.location.assign('success.php')</script>";
        }
        else
            {
            echo ' <script>alert("Wrong Credential");</script>';
        }
    }   
?>
<!DOCTYPE html>
	<html>
	<head>
		<title>Akmal Ace</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <style>
            body{
                min-height: 100vh;
                background-image: url("Image/BuyMeCoffee.jpg");
                background-size: cover;
            }
            html, body{
                height: 100%;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }
            fieldset{
                width: 30%;
                margin: auto;
                border: 4px solid #8F43EE;
                border-radius: 40px;
            }
            .inside-form input{
                width: 300px;
                height: 40px;
                border-radius: 40px;
            }
            button[type="submit"] {
                background-color: #C9A7EB;
                color: black;
                width: 200px;
                height: 40px;
                border-radius: 40px;
            } 
            .container-3 h1{
                color: white;
            }
            .container-3 a{
                color: lightblue;
            }
            legend{
                font-size: 20px;
                color: white;
                margin: auto;
            }
        </style>
	</head>
	<body>
        <fieldset style="background-color: #363636; opacity: 80%;">
            <legend><h1>Buy Me A Coffee</h1></legend>
            <div class="container-3" align=center>
    		    <h1>LOGIN</h1><br>
        		<form class="inside-form" method="post">
            		<input type="text" name="username" placeholder="Username" class="text-center" required>
                    <br><br>
            		<input type="password" name="password" placeholder="Password"  class="text-center" required>
            		<br><br>
            		<button type="submit" name="login" class="btn btn-red">Login </button>
        		</form>
                <br>
                <a href="register.php">Register here!</a> 
            </div>
        </fieldset>
	</body>
</html>