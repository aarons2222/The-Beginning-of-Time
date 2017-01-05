<?php 
$connect_error = 'Sorry, we\'re experiencing connection problems.';
$con = mysqli_connect('your_db_address', 'your_username', 'your_password') or die($connect_error);
mysqli_select_db($con, 'your_db_name') or die($connect_error); 
?>