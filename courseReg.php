<?php

require 'config.php';

// error_reporting(E_ERROR | E_PARSE);

if(isset($_POST['apply'])){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $coursename = $_POST["Coursename"];
    $phonenumber = $_POST["phonenumber"];


         $duplicate = mysqli_query($con, "SELECT * FROM course_reg WHERE email = '$email' ");
         if(mysqli_num_rows($duplicate ) > 3){
             echo
             "<script> alert('Maximum Course applied !!'); </script>";
         }
         else{
          $numrows = mysqli_num_rows($duplicate );
          $_SESSION["numrows"] = $numrows;
          $duplicate_course = mysqli_query($con, "SELECT * FROM course_reg WHERE coursename = '$coursename'AND email = '$email' ");
          if(mysqli_num_rows($duplicate_course ) > 0){
            echo
            "<script> alert('Course already applied !!'); </script>";
        }else{
                $query = "INSERT INTO course_reg (username, email, coursename, phonenumber)
                VALUES('$username', '$email', '$coursename', '$phonenumber')";
                $result = mysqli_query($con, $query);

        if( $result){
             echo
             "<script> alert('Applied Successfully'); </script>";
         }
         else{
             echo 
             "<script> alert('Something went wrong !'); </script>";
         }
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
      margin-bottom: 10px;
    }

    input[type="text"],
    input[type="number"],
    input[type="date"],
    select,
    input[type="email"],
    input[type="password"],
    input[type="confirmpassword"]  {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 4px;
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
      margin-top: 20px;
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
    <h1>Course Registration</h1>
  </header>
  <main>
  <form class="register" action="" method="POST">
      <label for="username">Username</label>
      <input type="text" id="username" name="username" placeholder="Enter username" required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Enter email" required>

      <label for="coursename">Course</label>
      <select id="coursename" name="Coursename" required>
        <option value="">Select course..</option>
        <option value="Data Analyst">Data Analyst</option>
        <option value="Data Science">Data Science</option>
        <option value="Mern-stack">Mern-stack</option>
        <option value="Full-stack">Full-stack</option>
        <option value="Power-BI">Power-BI</option>
        <option value="Cloud Computing">CLOUD COMPUTING</option>
        <option value="Machine learning">MACHINE LEARNING</option>
        <option value="Deep learning">DEEP LEARNING</option>

      </select>

      <label for="phone">Phone Number</label>
      <input type="text" id="phone" name="phonenumber" placeholder="Enter phone number" required>

      <button class="submit-btn" type="submit" name="apply">Register</button>

    </form>
  </main>
</body>
</html>