<?php

require 'config.php';

error_reporting(E_ERROR | E_PARSE);

if(isset($_POST['button'])){
    $username = $_POST["username"];
    $email = $_POST["email"]; 
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $phonenumber = $_POST["phonenumber"];
    $address = $_POST["address"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];

    // $password=password_hash($password, PASSWORD_DEFAULT);

         $duplicate = mysqli_query($con, "SELECT * FROM user_reg WHERE email = '$email' ");
         if(mysqli_num_rows($duplicate ) > 0){
             echo
             "<script> alert('Username or Email Has Already Taken'); </script>";
         }
         else{
            if($password == $confirmpassword){

                $query = "INSERT INTO user_reg (username, email, age, gender, dob, phonenumber, address, password)
                VALUES('$username', '$email', '$age', '$gender', '$dob', '$phonenumber', '$address', '$password')";
                $result = mysqli_query($con, $query);

                $fetch_data = mysqli_query($con, "SELECT * FROM user_reg WHERE email = '$email' ");
                $row = mysqli_fetch_assoc($fetch_data);
                $_SESSION["username"] = $row["username"];
                $_SESSION["email"] = $row["email"];
                $_SESSION["age"] = $row["age"];
                $_SESSION["gender"] = $row["gender"];
                $_SESSION["dob"] = $row["dob"];
                $_SESSION["phonenumber"] = $row["phonenumber"];
                $_SESSION["address"] = $row["address"];
                $_SESSION["password"] = $row["password"];

        if( $result){
             echo
             "<script> alert('Registration Successful'); </script>";
         }
         else{
             echo 
             "<script> alert('Something went wrong !'); </script>";
         }
        }else{
            echo 
             "<script> alert('Password mismatch !'); </script>";
        }
    }
}
   

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
      max-width: 600px;
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
    }

    input[type="text"],
    input[type="number"],
    input[type="date"],
    select,
    input[type="email"],
    input[type="password"],
    input[type="confirmpassword"]  {
      width: 68%;
      float : right;
      padding: 10px;
      font-size: 16px;
      margin-top:-27px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    select{
        width : 71.6%;
    }


    .submit-btn {
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
    }

    .login-btn{
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
    <h1>User Registration</h1>
  </header>
  <main>
  <form class="register" action="" method="POST">
      <label for="username">Username</label>
      <input type="text" id="username" name="username" placeholder="Enter username" required>
      <br><br>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Enter email" required>
      <br><br>

      <label for="age">Age</label>
      <input type="number" id="age" name="age" placeholder="Enter age" required>
      <br><br>

      <label for="dob">Date of Birth</label>
      <input type="date" id="dob" name="dob" required>
      <br><br>

      <label for="gender">Gender</label>
      <select id="gender" name="gender" required>
        <option value="">Select gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
      </select>
      <br><br>

      <label for="phone">Phone Number</label>
      <input type="text" id="phone" name="phonenumber" placeholder="Enter phone number" required>
      <br><br>

      <label for="address">Address</label>
      <input type="text" id="address" name="address" placeholder="Enter address" required>
      <br><br>

      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Enter password" required>
      <br><br>

      <label for="confirmpassword">Confirm Password</label>
      <input type="password" id="confirmpassword" name="confirmpassword" placeholder="Enter confirmpassword" required>
      <br><br>
      
      <button class="submit-btn" type="submit" name="button">Register</button>
      
      <a href = "userLogin.php" class = "login-btn" >Login</a>

    </form>
  </main>
</body>
</html>