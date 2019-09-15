<?php
require("includes/common.php");
if (isset($_SESSION['email'])) {
    header('location: home.php');
}
?>

<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="Project.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Store</title>
  </head>
  <body style="background-image: url(img/mypic.jpg)">
      
     <?php
    include 'includes/header.php';
    ?>
      
      
      
      
   
      
    <div class="container-fluid"> 
    <div class="row text-center" id="cameras">
        <div class="col-md-4 col-sm-6 home-feature">
            <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><b>Samsung Galaxy Note 9</b></h4>
                        </div>
                        <div class="panel-body">
                             <img src="img/a1.jpg" alt="">
                             <p>
                                  6.4" Super AMOLED Display, Exynos 9810, 8GB RAM, 512GB Storage, 12MP+12MP Dual Rear Cameras, 4000mAh, ₹78,900   
                             </p>
                            <p><a data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Order Now</a></p>
                        </div>
            </div>
        </div>
        
        
        <div class="col-md-4 col-sm-6 home-feature ">
            <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Huawei Mate 20 Pro</h4>
                        </div>
                        <div class="panel-body">
                             <img src="img/a2.jpg" alt="">
                             <p>
                                 6.39" AMOLED Display, Kirin 980, 6GB RAM, 128GB Storage, 40MP+20MP+8MP Triple Rear Cameras, 4200mAh, ₹69,990
                             </p>
                             
                            <p><a data-toggle="modal" data-target="#myModal"  role="button" class="btn btn-primary btn-block">Order Now</a></p>
                        </div>
            </div>                
        </div>
        
        <div class="col-md-4 col-sm-6 home-feature ">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Apple iPhone XS Max</h4>
                        </div> 
                        <div class="panel-body">
                            <img src="img/a89.jpg" alt="">
                             <p>
                                6.5", Super AMOLED Display, Apple A12 Bionic, 4GB RAM, 512GB Storage, 12MP+12MP Dual Rear Cameras, 3174mAh, ₹1,14,085
                             </p>
                            <p><a data-toggle="modal" data-target="#myModal"  role="button" class="btn btn-primary btn-block">Order Now</a></p>
                        </div>
                    </div>
        </div>

    </div>
  
      
        <div class="row text-center" id="cameras">
        <div class="col-md-4 col-sm-6 home-feature">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Xiaomi Mi Mix 3</h4>
                        </div>
                        <div class="panel-body">
                            <img src="img/a4.jpg" alt="">
                            <p>6.39", Super AMOLED Display, Snapdragon 845, 10GB RAM, 256GB Storage, 12MP+12MP Dual Rear Cameras, 3200mAh, ₹47,970 </p>
                            <p><a data-toggle="modal" data-target="#myModal"  role="button" class="btn btn-primary btn-block">Order Now</a></p>
                        </div>                 
                    </div>
        </div>
            
        <div class="col-md-4 col-sm-6 home-feature">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>OnePlus 6T</h4>
                        </div>
                        <div class="panel-body">
                             <img src="img/a5.jpg" alt="">
                             <p>
                              6.41", Optic AMOLED Display, Snapdragon 845, 8GB RAM, 256GB Storage, 16MP+20MP Dual Rear Cameras, 3700mAh, ₹37,999
                             </p>
                            <p><a data-toggle="modal" data-target="#myModal"  role="button" class="btn btn-primary btn-block">Order Now</a></p>
                        </div>
                    </div>
        </div>
            
        <div class="col-md-4 col-sm-6 home-feature">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Razer Phone 2</h4>
                        </div>
                        <div class="panel-body">
                             <img src="img/a6.jpg" alt="">
                             <p>
                                 5.72", IGZO IPS LCD Display, Snapdragon 845, 8GB RAM, 64GB Storage, 12MP+12MP Dual Rear Cameras, 4000mAh, ₹99,999
                             </p>
                            <p><a data-toggle="modal" data-target="#myModal"  role="button" class="btn btn-primary btn-block">Order Now</a></p>
                        </div>
                    </div>
        </div>
    </div>
  </div>
      
      
    
    
    <?php
    include 'includes/footer.php';
    ?>
      
      
      
      
  </body>
</html>

