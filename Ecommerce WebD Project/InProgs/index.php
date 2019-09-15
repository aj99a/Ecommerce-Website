

<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="Project.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lifestyle Store</title>
  </head>
  <body style="background-image: url(img/aj.jpg)">
    <nav class="navbar navbart navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                    <a class="navbar-brand tcolor" href="#">E-Store</a>
                </div>
                <div>
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#" class="tcolor"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="http://localhost/PhpProject/Login.php" data-toggle="modal" data-target="myModal"  class="tcolor"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <li><a href="#" class="tcolor"><span class="glyphicon glyphicon-briefcase"></span> About Us</a></li>
                        <li><a href="#" class="tcolor"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>
                    </ul>
                </div>    
      </div>
    </nav>
      
      <div id="myModal" class="modal fade text-center">
    <div class="modal-dialog">
      <div class="modal-content">
      </div>
    </div>
  </div>
     
  
 <!-- Javascript  -->  
   
     <script>     
    $('.li-modal').on('click', function(e){
      e.preventDefault();
      $('#myModal').modal('show').find('.modal-content').load($(this).attr('href'));
    }); 
     </script>";
     
   

      
      
      
    
      
    <div class="container-fluid"> 
    <div class="row text-center" id="cameras">
        <div class="col-md-4 col-sm-6 home-feature">
            <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Note 9</h4>
                        </div>
                        <div class="panel-body">
                             <img src="img/yo.jpg" alt="">
                            <p>6.5", SD845</p>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>
                        </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 home-feature ">
            <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Note 9</h4>
                        </div>
                        <div class="panel-body">
                             <img src="img/aj2.jpg" alt="">
                            <p>6.5", SD845</p>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>
                        </div>
            </div>                
        </div>
        <div class="col-md-4 col-sm-6 home-feature ">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Note 9</h4>
                        </div>
                        <div class="panel-body">
                             <img src="img/sj.jpg" alt="">
                            <p>6.5", SD845</p>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>
                        </div>
                    </div>
        </div>
    </div>
  
      
        <div class="row text-center" id="cameras">
        <div class="col-md-4 col-sm-6 home-feature">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Note 9</h4>
                        </div>
                        <div class="panel-body">
                             <img src="img/sj.jpg" alt="">
                            <p>6.5", SD845</p>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>
                        </div>                 
                    </div>
        </div>
            
        <div class="col-md-4 col-sm-6 home-feature">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Note 9</h4>
                        </div>
                        <div class="panel-body">
                             <img src="img/g.jpg" alt="">
                            <p>6.5", SD845</p>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>
                        </div>
                    </div>
        </div>
            
        <div class="col-md-4 col-sm-6 home-feature">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Note 9</h4>
                        </div>
                        <div class="panel-body">
                             <img src="img/sj.jpg" alt="">
                            <p>6.5", SD845</p>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>
                        </div>
                    </div>
        </div>
    </div>
  </div>
      
      
    
    
      <footer class="foot" >
                <div class="row">
                <div class="col-xs-4">
                    <center><h3>Information</h3>
                            <p>About Us</p>
                            <p>Contact Us<p>
                    </center>
                </div>
                <div class="col-xs-4">
                    <center><h3>My Account</h3>
                            <p>Login</p>
                            <p>Sign Up</p>
                    </center>
                </div>
                <div class="col-xs-4">
                    <center><h3>Contact Us</h3>
                            <p>Contact : 45454545</p>        
                    </center>
                </div>
                </div>
            </footer>
      
      
      
      
  </body>
</html>

