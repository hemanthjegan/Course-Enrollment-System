<?php

// require 'config.php';

// // error_reporting(E_ERROR | E_PARSE);

// $email = $_SESSION["email"];  // password fetch from user_reg

// if(isset($_POST['button'])){
//     $user_email = $_POST["user_email"];

//     if($user_email == $email){

//         header("Location: verifyOtp.php");

//     }else{
//         echo "<script> alert('User not found !'); </script>";
//     }

// }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
    <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #333;
      color: #fff;
      padding: 10px;
      text-align: center;
    }

    main {
      max-width: 500px;
      margin: 20px auto;
      background-color: #fff;
      border-radius: 5px;
      padding: 20px;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
    }

    h1 {
      text-align: center;
      margin-top: 0;
    }

    form {
      margin-top: 20px;
    }

    label {
      display: block;
      margin-bottom: 10px;
    }


    input[type="number"]{
      width: 96%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .verify-btn {
      display: block;
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: #fff;
      font-size: 16px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s;
      margin-top: 20px;
    }

    .btn{
      display: block;
      width: 100%;
      font-size: 16px;
      text-decoration : none;
      text-align : center;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s;
      margin-top: 20px;
    }


    .submit-btn:hover {
      background-color: #45a049;
    }
  </style>
</head>

<body>
  <header>
    <h1>Udemy</h1>
  </header>
  <main>
  <form class="" action="" method="POST">

      <label for="otp">Enter your OTP to verify</label>
      <input type="number" id="otp" name="user_otp" placeholder="Enter your OTP" required>

      <button class="verify-btn" type="submit" name="button">Verify</button>
    
      <a href = "changePass.php" class = "btn" >Change Password?</a>

    </form>
  </main>

</body>
</html>