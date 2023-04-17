<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="../csspart/style.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body class =jumbotron id="body">
  <div class="container">
  <table>
    <tr>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
  <h1 class="display-4">Login</h1>
  <form name="f1" action="authenticate.php" onsubmit="return validation()" method="POST">
  <p><label>User Name:</label>
  <input type="text" id="user" name="user">
</p>
<p><label>Password:</label>
  <input type="password" id="pass" name="pass">
</p>
  <input type="submit" id="btn" value="Login">
</p></tr></table>
</form>
</div>
<script>
    function validation()
    {
        var id=document.f1.user.value;
        var ps=document.f1.pass.value;
        if(id.lenght==""&&ps.length=="")
        {
            alert("User Name and Password fields are empty");
            return false;
        }
        else
        {
            if(id.lenght=="")
            {
                alert("User Name is empty");
                return false;
            }
            if(ps.lenght=="")
            {
                alert("Password field is empty");
                return false;
            }
        }
    }
    </script>
  <?php
        $con=mysqli_connect("localhost","root","","db_food");
        if(!$con){
            echo "sorry i could not connect to the database";
            exit;
        }
        else
        echo"connected";
        ?>
</body>
</html>
     