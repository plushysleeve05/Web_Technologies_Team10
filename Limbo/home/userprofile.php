<?php
session_start();

$username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <!-- bootstrap css -->
    <link rel="stylesheet" href="Limbo/home/css/bootstrap.min.css">
  <!-- style css -->
    <link rel="stylesheet" href="../home/css/userstyle.css">
  <!-- Responsive-->
    <link rel="stylesheet" href="../home/css/responsive.css">  
  <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="Limbo/home/css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>
<body>
  <header>
    <!-- header inner -->
    <div class="header-top">
      <div class="header">
        <div class="container">
          <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col logo_section">
              <div class="full">
                <div class="center-desk">
                  <div class="logo">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-9">
              
               <div class="menu-area">
                <div class="limit-box">
                  <nav class="main-menu ">
                    <ul class="menu-area-main">
                      <li class="active"> <a href="../Limbo_main_page/carousel/main.php">Main</a> </li>
                     </ul>
                   </nav>
                
               </div> 
             </div>
           </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
    <h2>User Profile</h2>
    <p>Welcome, <?php echo $username; ?></p>
    <form id="profileForm">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="<?php echo $username; ?>" readonly>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>" readonly>
        <input type="submit" value="Change Username">
        <input type="submit" value="Change Email">
    </form>
    </div>
 </header>
</body>
</html>
