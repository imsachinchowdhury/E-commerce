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
                            <center><font><a href="cannon.php" style="color:white">Cannon</a></font></center>
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
                    
                    <?php
                        $id=$_GET['id'];
                            $query="SELECT * FROM product WHERE id like '%$id%'";
                            $data=mysqli_query($conn,$query);
                            $total=mysqli_num_rows($data);
                            
                            while($result=mysqli_fetch_array($data))
                            {
                                $id=$result['id'];
                                $pname=$result['name'];
                                $img=$result['image'];
                                $brand=$result['brand'];
                                $prc=$result['price'];
                                $category=$result['category'];
                                echo "<br><center><div><img src='admin/$img' height='150px' width='150px'>
                                <br><br>
                                <h4>Brand : $brand</h4><br>
                                <h4>Name : $pname</h4><br>
                                <h4>Price : $prc</h4><br>                      
                                </div></center><br>";      
                           }
                    ?> 
                
                <form action="" method="POST">
                <table class="table">
                    <tr>
                        <td>Enter Name</td>
                        <td><input type="text" name="name" placeholder="Enter Your Name" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><input type="text" name="address" placeholder="Enter Your Address" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>City</td>
                        <td><input type="text" name="city" placeholder="Enter Your City" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>State</td>
                        <td><input type="text" name="state" placeholder="Enter Your State" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Mobile</td>
                        <td><input type="text" name="mobile" placeholder="Enter your Mobile No" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Pin Code</td>
                        <td><input type="text" name="pin" placeholder="Enter your Pin Code" class="form-control"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="submit" value="Buy" class="btn btn-primary"></td>                    
                    </tr>
                </table>
                </form>
                <?php
            
                if(isset($_POST['submit']))
                {
                    $name=$_POST['name'];
                    $address=$_POST['address'];
                    $city=$_POST['city'];
                    $state=$_POST['state'];
                    $mobile=$_POST['mobile'];
                    $pin=$_POST['pin'];
                    $query1="INSERT INTO sell(product_name,brand,category,price,name,address,city,state,mobile,pincode) VALUES('$pname','$brand','$category','$prc','$name','$address','$city','$state','$mobile','$pin')";
                    $data1=mysqli_query($conn,$query1);
                    echo $pname;
                    if($data1)
                    {
                        echo "<script>alert('Your Order is Successfully submited')</script>";
                    }
                    else
                    {
                        echo "<script>alert('data not insert into database')</script>";
                    }
                }
                ?>

                </div>
            </div>
        </div>  
        <br>
        <div class="container-fulid  footer" style="background:black">
                <center><h3><font  color="white">My Project</font></h3></center>

        </div>  
</body>
 
</html>