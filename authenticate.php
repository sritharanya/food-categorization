<?php
  $con=mysqli_connect("localhost","root","","db_food");
  if(!$con){
      echo "sorry i could not connect to the database";
      exit;
  }
  else
  echo"connected";
  $username=$_POST['user'];
  $password=$_POST['pass'];
  //to prevent from sql injection
  $username=stripcslashes($username);
  $password=stripcslashes($password);
  $username=mysqli_real_escape_string($con,$username);
  $password=mysqli_real_escape_string($con,$password);
  $sql="SELECT * FROM tb_customer WHERE username='$username' AND password='$password'";
  $result=mysqli_query($con,$sql);
  $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
  $count=mysqli_num_rows($result);
  if($count==1){
    echo"<h1><center> Login successful</center></h1>";}
    else{
        echo"<h1><center> Login failed invalid username or password</center></h1>";}


  ?>

