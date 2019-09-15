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
    <title>Contact Us</title>
</head>

<body>
    <?php
    include 'includes/header.php';
    ?>
      
      <div class="container bstyle">
          <div class="row">
              <div class='col-xs-10'>
                <h2>LIVE SUPPORT</h2>
                <h4>24hours | 7 days a week | 365 days a year Live Technical Support</h4>
                <p>WE ARE HERE TO SERVE YOU. Our Contact crew are available 24/7. So any doubts regarding
                any product or detail about our store can be clarified any time. Happy Shopping!
                </p>
              </div>
              <div class='col-xs-2'>
                  <img src="img/livesupport.jpg" alt="Live Support">  
              </div>
          </div>
          
          
          <div class="row">
              <div class='col-xs-7'>
                  <h2>CONTACT US</h2>
                  <form role="form" action="ContactUs_submit.php" method="POST">
                                    <div class="form-group">
                                        <p>Name</p>
                                        <input class="form-control" name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <p>E-mail</p>
                                        <input type="email" class="form-control"  name="e-mail" required>
                                    </div>
                                    <div>
                                    <p>Message</p>
                                    <textarea name="message" class="form-control" rows="7" cols="70">      
                                    </textarea>
                                    </div><br>
                                    
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button><br><br>
                  </form>

                  
              </div>
              <div class='col-xs-5'>
                  <h2>Company Information :</h2>
                  <p>
                      E-Store Mobiles Pvt. Ltd.
                      #1183, 22nd 'A' Cross, 30th Main, Near KIMS
                      Banashankari 2nd Stage, Bengaluru-560070<br><br>
                      For Online Queries
                      Email: online@sangeethamobiles.com<br><br>
 
                      For Store Queries  
                      Email: support@sangeethamobiles.com
                      Call: 080-49397000
                      Timings:
                      Weekdays: 8:30 am to 8:30 pm
                      Sunday: 9:30 am to 5:00 pm
                  </p>
              </div>
          </div>
      </div>
      
    <?php
    include 'includes/footer.php';
    ?>
      
      
      
  </body>
</html>

