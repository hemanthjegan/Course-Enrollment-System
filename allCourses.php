<?php

require 'config.php';

error_reporting(E_ERROR | E_PARSE);

$email = $_SESSION["email"];  // email fetch from during login       

       $result = mysqli_query($con, "SELECT * FROM user_reg WHERE email = '$email'");
       $user_info = mysqli_fetch_assoc($result);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
      }
      
      #container{
          width:100%;
          height: 950px;
      }
      .content-1{
          width : 46%;
          height: 700px;
          float:left;
          margin-left: 15px;
      }
      
      .content-2{
          width : 46%;
          height: 700px;
          float:right;
          margin-right: 15px;
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
      .duration{

      }
      
      #user-info{
          margin-left: 15px;
      }

      .btn-2{
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
</head>
<body>
    
    <header>
        <center><h1>Welcome to Udemy <h1></center>
    </header>
    <div id= "user-info">
        <b><p style = "font-size : 20px">User Name : <?php echo $user_info["username"]; ?> </p></b>
    </div>
    <center><h2 style = "font-size: 26px">All Courses<h2></h2></center><br>
        <div id ="container">
            <div class = "content-1">
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

                <h3>Artificial Intelligence  <p style = "display : inline" class = "duration">(7.5 month)</p> </h3>
                <p>MERN stack is a collection of technologies that enables faster application development.
                     It is used by developers worldwide. The main purpose of using MERN stack is to develop apps using 
                     JavaScript only. This is because the four technologies that make up the technology stack are all JS-based.
                </p>
    
                <a href="courseReg.php" class ="btn">Apply</a><br></br><hr>

                <h3>Cloud Computing  <p style = "display : inline" class = "duration">(5 month)</p> </h3>
                <p>Data science is the study of data to extract meaningful insights for business. It is a multidisciplinary approach 
                    that combines principles and practices from the fields of mathematics, statistics, artificial intelligence, and 
                    computer engineering to analyze large amounts of data.
                </p>
    
                <a href="courseReg.php" class ="btn" class = "duration">Apply</a><br></br><hr>
    
                <h3>Machine Learning  <p style = "display : inline" class = "duration">(5 month)</p> </h3>
                <p>Full stack development refers to the end-to-end application software development, including the front end and back end.
                     The front end consists of the user interface, and the back end takes care of the business logic and application workflows.
                </p>
    
                <a href="courseReg.php" class ="btn">Apply</a><br></br><hr>
    
                <h3>Chatgpt  <p style = "display : inline" class = "duration">(2 month)</p> </h3>
                <p>A data analyst is responsible for collecting, cleaning, and analyzing data that can be used to improve business
                     decisions. They must be able to effectively communicate their findings to those who will make the decisions. 
                     Data analysts typically have a strong background in mathematics and computer science.
                </p>
    
                <a href="courseReg.php" class ="btn">Apply</a><br></br><hr>
    
                <h3>Deep Learning <p style = "display : inline" class = "duration">(3.5 month)</p> </h3>
                <P>Power BI is a Data Visualization and Business Intelligence tool that converts data from different data sources to 
                    interactive dashboards and BI reports. Power BI suite provides multiple software, connector, and services - Power BI desktop, 
                    Power BI service based on Saas, and mobile Power BI apps available for different platforms
                </P>
    
                <a href="courseReg.php" class ="btn">Apply</a>
                
            </div>
    </div>
    <center><a href="index.php" class = "btn-2">Back to Main</a></center>
</body>
</html>