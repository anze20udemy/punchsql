<?php
/*
Author: Javed Ur Rehman
Website: http://www.allphptricks.com/
*/


$con = mysqli_connect("localhost","root","","punch");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Neuspešna povezava z MySQL: " . mysqli_connect_error();
  }
?>