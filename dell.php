<?php
include("connection.php");
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
        
        <div class="container-fulid">
            <div class="row">
                <div class="col-md-2 col-sm-2 col-12 bg-info">
                        <center><h3><font color="white">Brands</font></h3></center>
                        <br>
                            <center><font><a href="dell.php" style="color:white">Dell</a></font></center>
                            <br>
                            <center><font><a href="hp.php" style="color:white">Hp</a></font></center>
                            <br>
                            <center><font><a href="samsung.php" style="color:white">Samsung</a></font></center>
                            <br>
                            <center><font><a href="cannon" style="color:white">Cannon</a></font></center>
                            <br>
                        <center><h3><font color="white">Catagory</font></h3></center>
                        <br>
                            <center><font><a href="laptop.php" style="color:white">Laptop</a></font></center>
                            <br>
                            <center><font><a href="mobile.php" style="color:white">Mobile</a></font></center>
                            <br>
                            <center><font><a href="camera.php" style="color:white">Camera</a></font></center>
                             <br>
                            <center><font><a href="tv.php" style="color:white">Tv</a></font></center>
                    
                        

                </div>
                
                <div class="col-md-10 col-sm-10 col-12">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-12">


                            <?php
                            $dell="dell";
                                $query="SELECT * FROM product WHERE brand='$dell' limit 0,3";
                                $data=mysqli_query($conn,$query);
                                while($result=mysqli_fetch_array($data))
                                {
                                     $id=$result['id'];
                                     $name=$result['name'];
                                     $img=$result['image'];
                                     $brand=$result['brand'];
                                     echo "<br><center><div><img src='admin/$img' height='150px' width='150px'>
                                     <br><br>
                                     <h4>$brand</h4><br>
                                      <h4>$name</h4><br>
                                     <a href='buy.php?id=$id' class='btn btn-primary'>Buy Now</a>
                                 </div></center><br>";                              
                                }  
                            ?>
                        </div>
                        <div class="col-md-4 col-sm-4 col-12">


                            <?php
                            $dell="dell";
                                $query="SELECT * FROM product WHERE brand='$dell' limit 3,3";
                                $data=mysqli_query($conn,$query);
                                while($result=mysqli_fetch_array($data))
                                {
                                     $id=$result['id'];
                                     $name=$result['name'];
                                     $img=$result['image'];
                                     $brand=$result['brand'];
                                     echo "<br><center><div><img src='admin/$img' height='150px' width='150px'>
                                     <br><br>
                                     <h4>$brand</h4><br>
                                      <h4>$name</h4><br>
                                     <a href='buy.php?id=$id' class='btn btn-primary'>Buy Now</a>
                                 </div></center><br>"; 
                                 
                                }  
                            ?>
                        </div>
                         <div class="col-md-4 col-sm-4 col-12">


                            <?php
                            $dell="dell";
                                $query="SELECT * FROM product WHERE brand='$dell' limit 6,3";
                                $data=mysqli_query($conn,$query);
                                while($result=mysqli_fetch_array($data))
                                {
                                     $id=$result['id'];
                                     $name=$result['name'];
                                     $img=$result['image'];
                                     $brand=$result['brand'];
                                     echo "<br><center><div><img src='admin/$img' height='150px' width='150px'>
                                     <br><br>
                                     <h4>$brand</h4><br>
                                      <h4>$name</h4><br>
                                     <a href='buy.php?id=$id' class='btn btn-primary'>Buy Now</a>
                                 </div></center><br>"; 
                                 
                                }  
                            ?>
                        </div>
                                                                
                    </div> 
                </div>
            </div>
        </div>  
        <br>
        <div class="container-fulid  footer" style="background:black">
                <center><h3><font  color="white">My Project</font></h3></center>

        </div>  
</body>
 
</html>