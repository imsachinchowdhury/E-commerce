<?php
           include("connection.php");
           error_reporting(0);



?>

<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body height="100%">
    
        <div class="container-fulid">
            <nav class="navbar navbar-expand-md  bg-dark navbar-dark">
            <h3><font color="White"><b>My Shop</b></font></h3>
                <button type="button" class="navbar-toggler ml-auto" data-toggle="collapse" data-target="#menu">
                        <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="menu">
                    <div class="container">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link"><font color="white">Home</font></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"><font color="white">About Us</font></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"><font color="white">Contact Us</font></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"><font color="white">Help</font></a>
                        </li>
                    </ul>
                </div>
            </div>
            </nav>
        </div>
        <div class="container">
            <h3>Admin login</h3>
            <form action="" method="POST">
                <lable>Username</label>
                <input type="email" name="email"class="form-control">
                <br>
                <lable>Password</label>
                <input type="password" name="password"class="form-control">
                <br>
                
                <input type="submit" name="submit" value="login">
            </form>
           
        </div>
        <div class="container-fulid bg-dark footer">
                this is a footer
        </div>  
</body>
 
</html>
<?php

           if(isset($_POST['submit']))
           {
               $un=$_POST['email'];
               $ps=$_POST['password'];
               
               $query="INSERT INTO admin1 VALUES('$un','$ps')";
               $data=mysqli_query($conn,$query);
               if($data)
               {

               }
               else
               {
                   echo "Not Insert";
               }


           }
           else
           {
               echo "NO";
           }
           ?>