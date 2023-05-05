<?php
require('db.php');


    if(isset($_POST['register']))
    {
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $phone=$_POST['phone'];
        $gender=$_POST['gender'];
        $address1=$_POST['address1'];
        $address2=$_POST['address2'];
        $city=$_POST['city'];
        $state=$_POST['state'];

        
        $sql = "INSERT INTO user (FIRSTNAME, LASTNAME, GENDER, ADDRESS1, ADDRESS2, CITY, STATE, PHONE, EMAIL, USERNAME, PASSWORD) VALUES ('$fname','$lname','$gender','$address1','$address2','$city','$state','$phone','$email','$username','$password')";

        if ($conn->multi_query($sql) == TRUE) {
            echo "Successfully Registered";
            echo "<script>window.location.assign('login.php')</script>";
        }
        else{
            echo "<script>alert('error');</script>";
        }
    }   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akmal Ace</title>
    <style>
        body{
            min-height: 100vh;
            background-image: url("Image/gradient.jpg");
            background-size: cover;
        }
        html, body{
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        fieldset{
            border-radius: 40px;
            border: 4px solid #8F43EE;
            background-color: #363636;
            width: 500px;
            margin: auto;
        }
        table{
            font-size: 20px;
            padding: 20px 20px;
        }
        th, td{
            color: white
        }
        input[type="submit"], input[type="reset"] {
            background-color: #8F43EE;
            color: white;
            width: 200px;
            height: 40px;
            border-radius: 40px;
        } 
        legend{
            font-size: 20px;
            margin: auto;
        }
    </style>
</head>
<body>
    <fieldset style="opacity: 80%;">
    <legend style="color: white;"><h1>SIGN UP</h1></legend>  
    <form method="post">
        <table style="margin: auto;">
            <tr>
                <td>
                    <label for="fname">First Name:</label>
                </td>
                <td>
                    <input type="text" id="fname" name="fname" value="" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="fname">Last Name:</label>
                </td>
                <td>
                    <input type="text" id="lname" name="lname" value="" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email:</label>
                </td>
                <td>
                    <input type="email" id="email" name="email" value="" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="zip">Username:</label>
                </td>
                <td>
                     <input type="text" id="username" name="username" value="" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password">Password</label>
                </td>
                <td>
                    <input type="password" id="password" name="password" value="" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password">Re-Enter Password</label>
                </td>
                <td>
                    <input type="password" id="epass" name="epass" value="" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="number">Phone Number</label>
                </td>
                <td>
                    <input type="number" id="phone" name="phone" min="0" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="gender" id="gender" name="gender">Gender:</label>
                </td>
                <td>
                    <input type="radio" id="gender1" name="gender" value="Male">
                    <label for="male"> Male</label>
                    <input type="radio" id="gender2" name="gender" value="Female">
                    <label for="female"> Female</label>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="zip">Address 1:</label>
                </td>
                <td>
                     <input type="text" id="address1" name="address1" value="" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="zip">Address 2:</label>
                </td>
                <td>
                     <input type="text" id="address2" name="address2" value="" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="zip">City :</label>
                </td>
                <td>
                     <input type="text" id="city" name="city" value="" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="zip">State:</label>
                </td>
                <td>
                     <input type="text" id="state" name="state" value="" required>
                </td>
            </tr>
        </table><br><br>
        <center>
            <input type="submit" name="register" value="Register"></button>
            <input type="reset" name="clear-button" value="Clear" style="color: black; background-color: white; border:2px solid #8F43EE;">
        </center>
    </form>
    </fieldset>
</body>
</html>