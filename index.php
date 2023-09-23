<?php

require 'config.php';

error_reporting(E_ERROR | E_PARSE);

$email = $_SESSION["email"];  // email fetch from during login       

        $duplicate = mysqli_query($con, "SELECT * FROM course_reg WHERE email = '$email'");
        $numrows = mysqli_num_rows($duplicate);

       $result = mysqli_query($con, "SELECT * FROM user_reg WHERE email = '$email'");
       $user_info = mysqli_fetch_assoc($result);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      margin-left: 0;
      margin-right: 0;
      margin-top: 0;
      padding: 0;
}

header {
      background-color: #333;
      color: #fff;
      padding: 10px;
}

.header-btn-1{
    display : inline;
    float : right;
    margin-top:-55px;
    text-decoration: none;
    margin-right: 170px;
    /* text-decoration:none; */
    color:Black;
    Background-color:white;
    font-size:15px;
    padding:5px;
    padding-left: 10px;
    padding-right: 10px;
    border-radius: 4px;
    transition:0.7s ease;
}
.header-btn-1:hover{
    color:red;
}

.header-btn-2{
    display : inline;
    float : right;
    margin-top:-55px;
    text-decoration: none;
    margin-right: 70px;
    /* text-decoration:none; */
    color:Black;
    Background-color:white;
    font-size:15px;
    padding:5px;
    padding-left: 10px;
    padding-right: 10px;
    border-radius: 4px;
    transition:0.7s ease;
}
.header-btn-2:hover{
    color:red;
}

#container{
    width:100%;
    height: 950px;
}
.content-1{
    width : 46%;
    height: 700px;
    float:left;
    margin-left: 25px;
}

.content-2{
    width : 49%;
    height: 700px;
    float:right;
    margin-right: 20px;
}

.content-2-1{
    width : 100%;
    height: 350px;
}

.content-2-2{
    width : 100%;
    height: 350px;
    text-decoration: underline;
}

p{
    font-size: 15px;
}

h3{
    font-size: 22px;
}

.btn{
    margin-left: 20px;
    text-decoration:none;
    color:white;
    Background-color:black;
    font-size:15px;
    padding:5px;
    padding-left: 10px;
    padding-right: 10px;
    border-radius: 4px;
    transition:0.7s ease;
}
.btn:hover{
    color:dodgerblue;
}

table{
    margin-left: auto;
    margin-right: auto;
    width: 95%;
    font-size: px;
}

table,th,td{
    border: 1px solid black;
    text-align: center;
    font-size : 20px;
}

.duration{

}

#user-info{
    margin-left: 25px;
}


.btn-2 {
      display: block;
      width: 10%;
      padding: 9px;
      background-color: black;
      color: #fff;
      font-size: 18px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s;
      margin-top: 20px;
      text-decoration:none;
    }
    .btn-2:hover{
        color:dodgerblue;
     }

</style>
<body>
<header>
    <center><h1>Welcome to Udemy <h1></center>
    <b><a href="userProfile.php" class="header-btn-1">Profile</a></b>
    <b><a href="userLogin.php" class ="header-btn-2">Logout</a></b>
</header>
<div id= "user-info">
    <b><p style = "font-size : 20px">User Name : <?php echo $user_info["username"]; ?> </p></b>
</div>
    <div id ="container">
        <div class = "content-1">
            <center><h2 style = "font-size: 26px; text-decoration: underline;">Top Courses<h2></h2></center>
            <h3>Data Science  <p style = "display : inline" class = "duration">(6 month)</p> </h3>
            <p>Data science is the study of data to extract meaningful insights for business. It is a multidisciplinary approach 
                that combines principles and practices from the fields of mathematics, statistics, artificial intelligence, and 
                computer engineering to analyze large amounts of data.
            </p>

            <a href="courseReg.php" class ="btn" class = "duration">Apply</a><br></br><hr>

            <h3>MERN-Stack  <p style = "display : inline" class = "duration">(5.5 month)</p> </h3>
            <p>MERN stack is a collection of technologies that enables faster application development.
                 It is used by developers worldwide. The main purpose of using MERN stack is to develop apps using 
                 JavaScript only. This is because the four technologies that make up the technology stack are all JS-based.
            </p>

            <a href="courseReg.php" class ="btn">Apply</a><br></br><hr>

            <h3>Full-stack  <p style = "display : inline" class = "duration">(5 month)</p> </h3>
            <p>Full stack development refers to the end-to-end application software development, including the front end and back end.
                 The front end consists of the user interface, and the back end takes care of the business logic and application workflows.
            </p>

            <a href="courseReg.php" class ="btn">Apply</a><br></br><hr>

            <h3>Data Analyst  <p style = "display : inline" class = "duration">(5 month)</p> </h3>
            <p>A data analyst is responsible for collecting, cleaning, and analyzing data that can be used to improve business
                 decisions. They must be able to effectively communicate their findings to those who will make the decisions. 
                 Data analysts typically have a strong background in mathematics and computer science.
            </p>

            <a href="courseReg.php" class ="btn">Apply</a><br></br><hr>

            <h3>power BI  <p style = "display : inline" class = "duration">(1.5 month)</p> </h3>
            <P>Power BI is a Data Visualization and Business Intelligence tool that converts data from different data sources to 
                interactive dashboards and BI reports. Power BI suite provides multiple software, connector, and services - Power BI desktop, 
                Power BI service based on Saas, and mobile Power BI apps available for different platforms
            </P>

            <a href="courseReg.php" class ="btn">Apply</a>

        </div>

        <div class="content-2">
            <div class = "content-2-1">
            <center><h2 style = "font-size: 26px; text-decoration: underline;">Enrolled Courses<h2></h2></center><br><br>
            <table>
                <tr>
                    <th>S.no</th>
                    <th>Name of the Courses</th>
                    <th>Date & Time</th>
                </tr>
                    <?php 
                    $_sno = 1;
                    if($numrows > 0){
                        while($row = mysqli_fetch_assoc($duplicate)){
                            echo '<td>' . $_sno . '</td>';
                            echo '<td>' . $row["coursename"] . '</td>';
                            echo '<td>' . $row["date-time"] . '</td></tr>';
                            $_sno += 1; 
                            }                       
                    }
                        ?>
            </table>
            </div>
            <div class = "content-2-1">
            <center><h2 style = "font-size: 26px; text-decoration: underline;">Description<h2></h2></center><br><br>

            </div>
        </div>
</div>

<center><a href="allCourses.php" class = "btn-2">All courses</a></center>

</body>
</html>