<?php
           include("connection.php");
           error_reporting(0);
           session_start();
           $user=$_SESSION['username'];
           if($user == true)
           {

           }
           else
           {
               header('location:admin.php');
           }

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
                            <a href="adminhome.php" class="nav-link"><font color="white">Home</font></a>
                        </li>
                        <li class="nav-item">
                            <a href="product.php" class="nav-link"><font color="white">Product</font></a>
                        </li>
                        <li class="nav-item">
                            <a href="sell.php" class="nav-link"><font color="white">Sell</font></a>
                        </li>
                        <li class="nav-item">
                            <a href="admin.php" class="nav-link"><font color="white">Logout</font></a>
                        </li>
                    </ul>
                </div>
            </div>
            </nav>
        </div>
        <br>
        <div class="container">
            <center><h3>Product List</h3></center>
            <br><br>
            <form action="" method="POST" enctype="multipart/form-data">
            <table class="table">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" placeholder="Enter Product Name" class="form-control"></td>
                </tr>
                <tr>
                    <td>Category</td>
                    <td>
                        <select name="category">
                            <option value="laptop">Laptop</option>
                            <option value="tv">TV</option>
                            <option value="mobile">Mobile</option>
                            <option value="camera">Camera</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Brand</td>
                    <td>
                        <select name="brand">
                            <option value="dell">Dell</option>
                            <option value="hp">HP</option>
                            <option value="samsung">Samsung</option>
                            <option value="cannon">Cannon</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Image</td>
                    <td><input type="file" name="username"  class="form-control"></td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td><input type="text" name="price" placeholder="Enter Product Price class="form-control"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="submit" value="Save"></td>
                </tr>

            </table>
            </form>
        </div>
                <!--Footer-->
                <div class="container-fulid">
            <center><h2 style="background:silver">My Project</h2></center>
        </div>
</body>
 
</html>
<?php
include("connection.php");
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $category=$_POST['category'];
    $brand=$_POST['brand'];
    $price=$_POST['price'];
    $filename=$_FILES['username']['name'];
    $tempname=$_FILES['username']['tmp_name'];
    $folder="aimages/".$filename;
    move_uploaded_file($tempname,$folder);
    if($filename!="")
    {
        $query="INSERT INTO product(name,category,brand,price,image) VALUES ('$name','$category','$brand','$price','$folder')";
        $data=mysqli_query($conn,$query);      
        if($data)
        {
            echo "<script>alert('Data Insert Into Database')</script>";
        }
    }
        else{

            echo "<script>alert('Data Not Insert Into Database')</script>";
        }
    

    
}
?>
