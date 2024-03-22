<?php
session_destroy();
?>


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

  <script>
    // Check if user is logged in (you may need to replace this with your actual logic)
    $isLoggedIn = isset($_SESSION['username']);
    // Select the logout link
    const logoutLink = document.getElementById('logout-link');

    // If user is logged in, display the logout link
    if (isLoggedIn) {
        logoutLink.style.display = 'inline'; // Use 'inline' to display as inline element
    }

    // Add click event listener to logout link
    logoutLink.addEventListener('click', (event) => {
        // Prevent default link behavior (i.e., navigating to '#')
        event.preventDefault();

        // Perform logout functionality here (e.g., destroy session, clear tokens)
        // Redirect the user to the logout page or perform any other necessary actions
        alert('Logout functionality will go here');
        });
  </script>
</head>
<!-- body -->

<body class="main-layout">
  <!-- loader  -->
  <div class="loader_bg">
    <div class="loader"><img src="../Limbo/images/loading.gif" alt="#" /></div>
  </div>
  <!-- end loader -->
  <!-- header -->
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
                      <li class="active"> <a href="idex.php">Home</a> </li>
                      <li> <a href="../Limbo/home/signup.php">Sign-up</a> </li>
                      <li > <a   href="../Limbo/home/login.php">login</a> </li>
                      <li > <a   href="../Limbo/functions/logout.php" style="display: none;" id="logout-link">logout</a> </li>
                      <li > <a   href="../Limbo/Limbo_main_page/blog/Community Page.php">View Songs and Playlist</a> </li>
                      <li > <a   href="../Limbo/Limbo_main_page/carousel/main.php">Add Song and Playlist</a> </li>
                      <li> </li>
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
     <section class="slider_section">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">

            <div class="container">
              <div class="carousel-caption">
                <div class="row">
                  <div class="col-md-12">
                    <div class="text-bg">
                      <span>LIMBO</span>
                      <h1>MUSIC COMMUNITY</h1>
                      <p>Community Crescendo: Where Every Note Finds Its Echo 🎵 | Embracing Harmony, Building Bonds | Unite in the Melodic Tapestry of Our Community | Notes of Connection, Rhythms of Togetherness | Join us in Crafting the Symphony of Shared Musical Journeys!</p>
                      <a href="../Limbo/home/signup.php">Join The Community</a> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
</section>
</div>
</header>

<!-- about  -->
<div id="about" class="about">
  <div class="container">
    <div class="row display_boxflex">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="about-box">
          <h2>About Us</h2>
          <p>Step into our music sanctuary, a space where melodies intersect with opinions. We're dedicated to nurturing a dynamic community of music lovers who not only relish the joy of listening but also revel in articulating their thoughts on the beats that move them. Every song is a narrative, and every listener a storyteller. Join us in celebrating the diversity of musical encounters, share your perspectives on favorite tracks, and become part of a community where the language of music transcends boundaries. Your voice adds to the harmonious symphony of shared experiences in our music-sharing haven.</p>
          <a href="../Limbo/home/signup.php"> Join the Community </a>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="about-box">
          <figure><img src="images/ygmarley.jpg" alt="#" /></figure>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- end abouts -->




<!-- upcoming -->
<div id="upcoming" class="upcoming">
  <div class="container-fluid padding_left3">
    <div class="row display_boxflex">
      <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
       <div class="box_text">
          <div class="titlepage">
            <h2>Playlist Harmony</h2>
          </div>
          <p>Explore a unique musical journey with our exclusive playlist sharing feature. Unlike others, we foster a vibrant community beyond listening. Curate, showcase, and exchange personalized music seamlessly. Join us in elevating the art of playlist curation for a symphony of diverse musical experiences!</p>
          <a href="../Limbo/home/signup.php">Share Your Playlist!</a>
        </div>
      </div> 
    
      <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 border_right">
         <div class="upcomimg">
           <figure><img src="images/up.jpeg" alt="#" preserveAspectRatio="xMidYMid slice"/></figure>
        </div>
          </div>
  </div>
    </div>
</div>
<!-- end upcoming -->


    <!--  footer -->
    <footr>
      <div class="footer ">
        <div class="container">
          <div class="row">
            
            <div class="col-md-12 border_top">
              <br>
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
                            <a href="#"><img src="icon/email.png" alt="#" /></a>tempLimbo@gmail.com </li>
                          </ul>
                         

                        </div>
                      </div>
                       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
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