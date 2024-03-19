<!DOCTYPE html>
<html lang="en">

<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>Limbo</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- fevicon -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="css/responsive.css">  
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>
<!-- body -->

<body class="main-layout contineer_page" style="background-image: url('images/i4.jpeg');">
  <!-- loader  -->
  <div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="#" /></div>
  </div>
  <!-- end loader -->
  <!-- header -->
  <header>
    <!-- header inner -->
 
      <div class="header">
        <div class="container">
          <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col logo_section">
              <div class="full">
                <div class="center-desk">
                  <div class="logo">
                    <!-- <a href="index.html"><img src="images/logo.png" alt="#" /></a> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-9">
              
               <div class="menu-area">
                <div class="limit-box">
                  <nav class="main-menu ">
                    <ul class="menu-area-main">
                      <li > <a href="../../Limbo/index.php">Home</a> </li>      
                        <li > <a   href="login.php">login</a> </li>
                      <li  > <a  class="last_manu" href="#"><img src="images/search_icon.png" alt="#" /></a> </li>
                      
                     </ul>
                   </nav>
                
               </div> 
             </div>
           </div>
         </div>
       </div>
     </div>
     <!-- end header inner -->

     <!-- end header -->


</header>

<div class="backgro_mh">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="heding">
           <h2>Join the Community - Sign-up</h2>
        </div>
      </div>
    </div>
  </div>
</div>


    <!--  footer -->
    <footr>
      <div class="footer ">
        <div class="container">
          <div class="row">
            <div class="col-md-12" style="color: white;"><br>
              <form action="../db/submit-signup.php" method="post">

                <div>
                  <label for="email" class="form-label">Email</label>
                  <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" required>
                  <div id="emailHelp" class="form-text">Please enter a valid email address.</div>
              </div>

                <div>
                    <label for="username" class="form-label">Create a username</label>
                    <input type="text" name="username" class="form-control" id="username" aria-describedby="usernameHelp" pattern="^[a-zA-Z0-9_]{5,}$" title="Username must be at least 5 characters long and contain only letters, numbers, and underscores" required>
                      <?php
                        // Check if error message exists in URL parameters
                        if (isset($_GET['error'])) {
                            // Display error message
                            echo "<p style='color: red;'>".$_GET['error']."</p>";
                        }
                        ?>
                    <div id="usernameHelp" class="form-text">Username is required.</div>
                </div>
                
                <div class="mb-3">
                    <label for="password" class="form-label">Create a Password</label>
                    <input type="password" name="password" class="form-control" id="password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$" title="Password must contain at least one uppercase letter, one lowercase letter, one number, and be at least 8 characters long" required>
                    <div id="passwordHelp" class="form-text">A Password is required.</div>
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <br>
        </div>
        <div class="col-md-12 border_top">
            <form class="news">
                <h3>Newsletter</h3>
                <input class="newslatter" placeholder="Enter your email" type="email" name="email" required>
                <button class="submit" type="submit">Subscribe</button>
            </form>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
              <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                  <div class="address">
                    <ul class="loca">
                      <li>
                        <a href="#"><img src="icon/loc.png" alt="#" /></a>Ashesi University
                   
                        <li>
                          
                            <a href="#"><img src="icon/call.png" alt="#" /></a>+12586954775 </li>
                          <li>
                            <a href="#"><img src="icon/email.png" alt="#" /></a>TempLimbo@gmail.com </li>
                          </ul>
                         

                        </div>
                      </div>
                    </div>
                  </div>

                </div>

              </div>
               <div class="container">
              <div class="copyright">
              </div>
              </div>
            </div>
          </footr>
          <!-- end footer -->
          <!-- Javascript files-->
          <script src="js/jquery.min.js"></script>
          <script src="js/popper.min.js"></script>
          <script src="js/bootstrap.bundle.min.js"></script>
          <script src="js/jquery-3.0.0.min.js"></script>
          <script src="js/plugin.js"></script>
          <!-- sidebar -->
          <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
          <script src="js/custom.js"></script>
          <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>




</body>

</html>