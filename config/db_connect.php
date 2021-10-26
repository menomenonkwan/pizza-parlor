<?php 

  // connect to database
  $conn = mysqli_connect('localhost', 'brannon', 'test1234', 'pizza_parlor');

  // check connection
  if(!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
  }

?> 