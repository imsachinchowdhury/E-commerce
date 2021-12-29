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
        <div class="container">
            <h3>Buyer List</h3>
            <table class="table">

                <tr>
                
                    <td>Product Name</td>
                    <td>Brand</td>
                    <td>category</td>
                    <td>Price</td>
                    <td>Name</td>
                    <td>Address</td>
                    <td>City</td>
                    <td>State</td>
                    <td>Mobile</td>
                    <td>Pincode</td>
                </tr>


                <?php
    $query="SELECT * FROM sell";
    $data=mysqli_query($conn,$query);
    $total=mysqli_num_rows($data);
    if($total!=0)
    {
        while($result=mysqli_fetch_array($data))
        {
            echo "<tr>
            <td>$result[1]</td>
            <td>$result[2]</td>
            <td>$result[3]</td>
            <td>$result[4]</td>
            <td>$result[5]</td>
            <td>$result[6]</td>
            <td>$result[7]</td>
            <td>$result[8]</td>
            <td>$result[9]</td>
            <td>$result[10]</td>
            <td>$result[11]</td>
            </tr>";
        }
    }
    ?>
            </table>

            
           
        </div>
        <center><div class="container-fulid" style="color:black;background:silver">
                <h3>My Project</h3>
        </div>  </center>
</body>

 
</html>