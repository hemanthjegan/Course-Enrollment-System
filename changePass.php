<?php

require 'config.php';

// error_reporting(E_ERROR | E_PARSE);

$email = $_SESSION["email"];
$password = $_SESSION["password"];  // password fetch from user_reg

if(isset($_POST['button'])){
    $old_password = $_POST["old_password"];
    $new_password = $_POST["new_password"];
    $re_password = $_POST["re_password"];

    if($old_password == $password){
        if($new_password == $re_password){

            $query ="UPDATE user_reg SET password = '$new_password' WHERE email = '$email' ";
           $result = mysqli_query($con, $query);

   if( $result){
        echo "<script> alert('Password Changed'); </script>";
        header("Location: userLogin.php");
    }
    else{
        echo "<script> alert('Something went wrong !'); </script>";
    }

        }else{
            echo "<script> alert('Password missmatch !'); </script>";
        }


    }else{
        echo "<script> alert('Incorrect old Password !'); </script>";
    }

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Udemy</title>
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

    input[type="password"]{
      width: 96%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .btn {
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

      <label for="old_password">Old Password</label>
      <input type="password" id="old_password" name="old_password" placeholder="Enter your old password" required>
        <br><br>
      <label for="new_password">New Password</label>
      <input type="password" id="new_password" name="new_password" placeholder="Enter your new password" required>
        <br><br>
      <label for="re_password">Re-Password</label>
      <input type="password" id="re_password" name="re_password" placeholder="Re-Enter your password" required>

      <button class="btn" type="submit" name="button">Change Password</button>


    </form>
  </main>

</body>
</html>