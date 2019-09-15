
<nav class="navbar navbar-fixed-top" style="background-color: rgb(225,225,225)">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand tcolor" href="index.php">E-Store</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <?php
                if (isset($_SESSION['email'])) {
                    ?>
                    <li><a href = "Cart.php" class="tcolor"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                    <li><a href = "Settings.php" class="tcolor"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
                    <li><a href = "logout_script.php" class="tcolor"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                    
                    <?php
                } else {
                    ?>
                    <li><a href="SignUp.php" class="tcolor"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a data-toggle="modal" data-target="#myModal" class="tcolor"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

                    <li><a href="About.php" class="tcolor"><span class="glyphicon glyphicon-briefcase"></span> About Us</a></li>
                    <li><a href="ContactUs.php" class="tcolor"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>
                        <?php
                    }
                    ?>
            </ul>
        </div>
    </div>
</nav>


<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">    
    <div class="modal-header">
          <h4 class="modal-title">Login</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
      <div class="panel panel-default">
        <div class="panel-heading text-center">
        </div>
        <div class="panel-body">
          <div class="panel-body">
                                <p>Don't have an account? <a href="SignUp.html">Register</a></p>
                                <form role="form" action="login-submit.php" method="POST">
                                    <div class="form-group">
                                        <input type="email" class="form-control"  placeholder="Email" name="e-mail" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
                                </form><br/>
          </div>
        </div> 
      </div>
    </div>
     
    <div class="modal-footer">
        <div class="panel-footer">
        <p><a href="Settings.php">Forgot Password?</a></p>
        </div>
    </div>
   </div>
   </div>
   </div>