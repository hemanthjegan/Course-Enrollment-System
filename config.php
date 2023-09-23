<?php

session_start();
$con = mysqli_connect("localhost", "root", "", "course_enroll");

if(!$con){
    die(mysqli_error());
}

?>