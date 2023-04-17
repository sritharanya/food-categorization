<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link rel="stylesheet" href="style.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <div>
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
  <h1>REGISTERATION </h1>
  <?php
        $con=mysqli_connect("localhost","root","","db_food");
        if(!$con){
            echo "sorry i could not connect to the database";
            exit;
        }
        else
        echo"connected";
     
   
    //taking all values from the form data(input)
    $cust_id=$_REQUEST['cust_id'];
    $username=$_REQUEST['username'];
    $address=$_REQUEST['address'];
    $contact=$_REQUEST['contact'];
    $password=$_REQUEST['password'];

    //performing insert queryexecution
    $sql="INSERT INTO tb_customer VALUES ('$cust_id','$username','$address','$contact','$password')";
    if(mysqli_query($con,$sql))
    {
      echo"data stored";
    }
    else{
      echo"ERROR:Hush! Sorry $sql.".mysqli_error($con);
    }



?>
</body>
</html>
    















