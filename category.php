<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <style>
    #d{
    float: right;
    transform: rotate(30deg);
    box-shadow: black 10px 5px 15px;
}
    </style>

  
  </head>
  <body>  <div class="jumbotron">
<h1>Categories Available</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <div>
      <div>
      <img id="d" src="../modules/assets/heart diet.jpg" alt="Image " width="50%" height="30%" usemap="#mapoo">

</div>
<div class="row">

</div>
<div class="row">
  <h1>column2
</h1>
  
</div>
</div>
 
    <?php
        $con=mysqli_connect("localhost","root","","db_food");
        if(!$con){
            echo "sorry i could not connect to the database";
            exit;
        }
        else
        echo"connected";

     
    $query="SELECT * FROM tb_category";
    $conresult= mysqli_query($con,$query);
    echo "<table border='1'>";
    while($row= mysqli_fetch_assoc($conresult)){
        echo "<tr>";
        echo"<td>ID:$row[category_id]<br>\n";
        echo"NAME:$row[category_name]<br>\n";
        echo"DESCRIPTION:$row[description]<br>\n";
        
        echo "</tr>";
    }
    echo "</table>";?>
  </body>
</html>