<?php

require 'config.php';

// error_reporting(E_ERROR | E_PARSE);

$email = $_SESSION["email"];  // email fetch from during login  
$password = $_SESSION["password"];

       $result = mysqli_query($con, "SELECT * FROM user_reg WHERE email = '$email'");
       $user_info = mysqli_fetch_assoc($result);

       if(isset($_POST['button'])){
        $username = $_POST["username"];
        // $email = $_POST["email"]; 
        $age = $_POST["age"];
        $gender = $_POST["gender"];
        $dob = $_POST["dob"];
        $phonenumber = $_POST["phonenumber"];
        $address = $_POST["address"];
        // $update_password = $_POST["update_password"];
    
        // $password=password_hash($password, PASSWORD_DEFAULT);
    
                // if($update_password == $password){
                    $query ="UPDATE user_reg SET username = '$username', age = '$age',  gender = '$gender', dob= '$dob',
                     phonenumber = '$phonenumber', address = '$address' WHERE email = '$email' ";
                    $result = mysqli_query($con, $query);
    
            if( $result){
                 echo
                 "<script> alert('Update Successful'); </script>";
             }
             else{
                 echo 
                 "<script> alert('Something went wrong !'); </script>";
             }
            // }else{
            //     echo 
            //      "<script> alert('Incorrect Password !'); </script>";
            // }
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
    input[type="email"] {
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

    .submit-btn:hover {
      background-color: #45a049;
    }
  </style>
</head>

<body>
  <header>
    <h1>Profile</h1>
  </header>
  <main>
  <form class="register" action="" method="POST">
      <label for="username">Username</label>
      <input type="text" id="username" name="username" placeholder="Enter username" value="<?php echo $user_info["username"]; ?>" required>
      <br><br>

      <label for="age">Age</label>
      <input type="number" id="age" name="age" value="<?php echo $user_info["age"]; ?>" placeholder="Enter age" required>
      <br><br>

      <label for="dob">Date of Birth</label>
      <input type="date" id="dob" name="dob"value="<?php echo $user_info["dob"]; ?>"  required>
      <br><br>

      <label for="gender">Gender</label>
      <select id="gender" name="gender" value="<?php echo $user_info["gender"]; ?>" required>
        <option value="">Select gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
      </select>
      <br><br>

      <label for="phone">Phone Number</label>
      <input type="text" id="phone" name="phonenumber" value="<?php echo $user_info["phonenumber"]; ?>" placeholder="Enter phone number" required>
      <br><br>

      <label for="address">Address</label>
      <input type="text" id="address" name="address" value="<?php echo $user_info["address"]; ?>" placeholder="Enter address" required>
      <br><br>

      <button class="submit-btn" type="submit" name="button">Update Profile</button>

    </form>
  </main>
</body>
</html>