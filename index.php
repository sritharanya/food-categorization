<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            store data</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<style>
    #r{
        float: right;
        height:50px;
        width: 20px;
        padding: 20px;
    }
    #l{
        float:right;
        transform: rotate(-45deg);
    box-shadow: black 10px 5px 15px;
    }
    #body{
        background:linear-gradient(yellow,pink,white);
    }
  
    </style>
</head>
<body class=jumbotron id="body">
<h1>Register here:</h1>

    <table><tr><td>

    <center>
        <div id="r">
        <legend>
        <fieldset>
        <form action="registeration.php" method="post">
            <p><table><tr><td>
                <label for="cust_id">Customer id:</label></td><td>
                <input type="text" name="cust_id" id="cust_id"></p><p></td>
              <tr><td>  <label for="username">User name:</label></td>
                <td><input type="text" name="username" id="username"></p><p></td>
                <tr><td><label for="address">Address:</label></td>
                <td><input type="text" name="address" id="address"></p><p></td>
               <tr><td> <label for="contact">Contact:</label></td>
                <td><input type="text" name="contact" id="contact"></p><p></td>
               <tr><td> <label for="password">Password:</label></td>
               <td> <input type="password" name="password" id="password"></td>&nbsp;<tr></tr>
               <br><tr><td><input class="btn btn-primary btn-lg" type="submit" value="Submit"></td>
               <td><a button class="btn btn-primary btn-lg" href="../phppart/login.php">Cancel</a></br>
</tr></table>

</p>
</fieldset></legend></div>
</form>
</center></td></tr></table>
<div id="l"><center>
    <img src="../modules/assets/thali type 1.jpg" width=500px height=500px>
   

</center>
</div>
<p>Already having an account?<a href="../phppart/login.php">Login</a></p>
</body>
</html>