<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <div class="jumbotron">
  

  <h1>Admin</h1>
<p class="lead">
</p>
<p class="my-4"> 
</p>
    <h1>Hello, world!</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <?php
        $con=mysqli_connect("localhost","root","","test");
        if(!$con){
            echo "sorry i could not connect to the database";
            exit;
        }
        else
        echo"connected";
     
    $query="SELECT * FROM t";
    $conresult= mysqli_query($con,$query);
    echo "<table border='1'>";
    while($row= mysqli_fetch_assoc($conresult)){
        echo "<tr>";
        echo"<td>ID:$row[id]<br>\n";
        echo"NAME:$row[name]<br>\n";
        echo"QUANTITY:$row[qty]<br>\n";
        echo"OREDERED:$row[order]</td>\n";
        echo "</tr>";
    }
    echo "</table>";?>
  </body>
</html>