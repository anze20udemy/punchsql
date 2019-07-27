<?php

$con = mysqli_connect("localhost","root","","punch"); // Povezava do baze
// Check connection
if (mysqli_connect_errno())
  {
  echo "Neuspešna povezava z MySQL: " . mysqli_connect_error();
  }
?>