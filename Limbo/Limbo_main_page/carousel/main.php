<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="website">
    <title>Limbo Music Community</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="../main-css/main1.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../main-css/rate.css">

    
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #2ca4f9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
              id="bd-theme"
              type="button"
              aria-expanded="false"
              data-bs-toggle="dropdown"
              aria-label="Toggle theme (auto)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            Light
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            Dark
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#circle-half"></use></svg>
            Auto
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
      </ul>
    </div>

    
<header data-bs-theme="dark">
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">LIMBO MUSIC</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../../index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../../../Limbo/home/userprofile.php">User Profile</a>
          </li>
      </div>
    </div>
  </nav>
</header>

<main>

  <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    
    <div class="carousel-inner">
      <div class="carousel-item active" id="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <div class="container_edit" >
          <div class="carousel-caption text-start">
            <h1>Harmony Unleashed: Where Beats Become Stories and Music Finds its Home.</h1>
            <p class="opacity-75">
              "Welcome to our music sanctuary, where melodies meet opinions! Our website is dedicated to fostering a vibrant community of music enthusiasts who share a passion for not just listening, but expressing their thoughts on the tunes that move them. We believe that every song has a story, and every listener is a storyteller. Join us in celebrating the diversity of musical experiences by sharing your views on your favorite songs. Discover new tracks, engage in lively discussions, and become part of a community where the language of music transcends boundaries. Let your voice be the melody that adds to the symphony of shared experiences at our music-sharing haven."
            </p>
            <p><a class="btn btn-lg btn-primary" href="#" >
              CLICK ON AN OPTION BELOW TO CONTRIBUTE!</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="options-container" id="options-container">
      <div class="row">
  
        
  
        <div class="col-lg-4">
          <h2 class="fw-normal">ADD SONG</h2>
          <p>Share the beats you love – add your favorite songs to our growing database! Your musical discoveries could be the next gems for others to enjoy. Join the song-sharing journey and contribute to the rhythm of our vibrant community</p>
          <button type="button" class="btn btn-secondary" id="add-song-button">Click Here!
          </button>
        </div><!-- /.col-lg-4 -->
  
        
        <div class="col-lg-4">
          <h2 class="fw-normal">REVIEW A SONG</h2>
          <p>"Unleash your opinions on a song and be the voice that shapes its narrative. Share your thoughts, rate the beats, and join the chorus of music enthusiasts. Your reviews add depth to the symphony of shared musical experiences</p>
          <button type="button" class="btn btn-secondary" id="review-song-button">Click Here!</button>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <h2 class="fw-normal">SHARE PLAYLIST </h2>
          <p>Share the magic of handpicked playlists from Spotify, Apple Music, or Tidal, connecting melodies to emotions. Whether it's a road trip mix, a calming selection, or an energetic compilation, let your curated playlists speak volumes and bring people together through the harmony of shared music.</p>
          <button type="button" class="btn btn-secondary" id="share-playlist-button">Click Here!</button>
        </div><!-- /.col-lg-4 -->
        
      </div><!-- /.row -->
    </div>
    


    <!-- START THE FEATURETTES -->
    <div class="space" id="featurette-divider1"></div>

    <div class="space" id="featurette-divider1"></div>

    <!-- <hr class="featurette-divider" > -->
      <div class="row featurette" id="add-song-form">
        <div class="col-md-7">
          <!-- placeholder for form  -->
          <form action="../../db/submit_song.php" method="post">
            <!-- Title Field -->
            <div class="mb-3">
                <label for="title" class="form-label">Title:</label>
                <input type="text" class="form-control" id="title" name="title" maxlength="255" required pattern="[a-zA-Z0-9\s]+">
            
                <!-- Release Date Field -->
                <label for="releaseDate" class="form-label">Release Date:</label>
                <input type="date" class="form-control" id="releaseDate" name="releaseDate" required>
            
                <!-- Genre Field -->
                <label for="genre" class="form-label">Genre:</label>
                <input type="text" class="form-control" id="genre" name="genre" maxlength="255" required pattern="[a-zA-Z\s]+">
        
                <!-- Album Field -->
                <label for="album" class="form-label">Album:</label>
                <input type="text" class="form-control" id="album" name="album" maxlength="255" required>
        
                <!-- Song Link Field -->
                <label for="songLink" class="form-label">Link to Song (Spotify, Apple music, etc.):</label>
                <input type="url" class="form-control" id="songLink" name="songLink" maxlength="255" required>
        
                <!-- Artist Name Field -->
                <label for="artistName" class="form-label">Artist Name:</label>
                <input type="text" class="form-control" id="artistName" name="artistName" maxlength="255" required>
        
                <!-- General Thoughts About Song Field -->
                <label for="generalThoughts" class="form-label">General Thoughts About Song:</label>
                <textarea class="form-control" id="generalThoughts" name="generalThoughts" rows="2"></textarea>
                
              
                <div class="rate">
                  <input type="radio" id="star5" name="rate" value="5" />
                  <label for="star5" title="text">5 stars</label>
                  <input type="radio" id="star4" name="rate" value="4" />
                  <label for="star4" title="text">4 stars</label>
                  <input type="radio" id="star3" name="rate" value="3" />
                  <label for="star3" title="text">3 stars</label>
                  <input type="radio" id="star2" name="rate" value="2" />
                  <label for="star2" title="text">2 stars</label>
                  <input type="radio" id="star1" name="rate" value="1" />
                  <label for="star1" title="text">1 star</label>
                </div>
            </div>
            <label for="songRating" class="form-label">Rate the song</label><br><br>
            
            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
        <!-- <div class="space"></div> -->
        <div class="col-md-5">
          <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="700" height="800" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
            <rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/>
            <image x="0" y="0" width="100%" height="100%" href="../../home/images/i4.jpeg" preserveAspectRatio="xMidYMid slice" />
          </svg>
          
        </div>
      </div>

      <div class="space" id="featurette-divider1"></div>

      <hr class="featurette-divider">

      <div class="space" id="featurette-divider2"></div>

      <div class="row featurette" id="review-song-form">
        <div class="col-md-7 order-md-2">
          <form action="">
            <h4>RATE THE SONG LYRICS:</h4>
            <div class="rate">
              <input type="radio" id="star5" name="rate" value="5" />
              <label for="star5" title="text">5 stars</label>
              <input type="radio" id="star4" name="rate" value="4" />
              <label for="star4" title="text">4 stars</label>
              <input type="radio" id="star3" name="rate" value="3" />
              <label for="star3" title="text">3 stars</label>
              <input type="radio" id="star2" name="rate" value="2" />
              <label for="star2" title="text">2 stars</label>
              <input type="radio" id="star1" name="rate" value="1" />
              <label for="star1" title="text">1 star</label>
            </div>
            <br><br><br>
            <h4>RATE THE SONG VOCALS:</h4>
          <div class="rate">
            <input type="radio" id="star5" name="rate" value="5" />
            <label for="star5" title="text">5 stars</label>
            <input type="radio" id="star4" name="rate" value="4" />
            <label for="star4" title="text">4 stars</label>
            <input type="radio" id="star3" name="rate" value="3" />
            <label for="star3" title="text">3 stars</label>
            <input type="radio" id="star2" name="rate" value="2" />
            <label for="star2" title="text">2 stars</label>
            <input type="radio" id="star1" name="rate" value="1" />
            <label for="star1" title="text">1 star</label>
          </div>
          <br><br><br>
          <br><br>
          <h4>RATE THE SONG MELODY:</h4>
          <div class="rate">
            <input type="radio" id="star5" name="rate" value="5" />
            <label for="star5" title="text">5 stars</label>
            <input type="radio" id="star4" name="rate" value="4" />
            <label for="star4" title="text">4 stars</label>
            <input type="radio" id="star3" name="rate" value="3" />
            <label for="star3" title="text">3 stars</label>
            <input type="radio" id="star2" name="rate" value="2" />
            <label for="star2" title="text">2 stars</label>
            <input type="radio" id="star1" name="rate" value="1" />
            <label for="star1" title="text">1 star</label>
          </div>
          <br><br><br>
          <h4>OVERALL ENJOYMENT:</h4>
          <div class="rate">
            <input type="radio" id="star5" name="rate" value="5" />
            <label for="star5" title="text">5 stars</label>
            <input type="radio" id="star4" name="rate" value="4" />
            <label for="star4" title="text">4 stars</label>
            <input type="radio" id="star3" name="rate" value="3" />
            <label for="star3" title="text">3 stars</label>
            <input type="radio" id="star2" name="rate" value="2" />
            <label for="star2" title="text">2 stars</label>
            <input type="radio" id="star1" name="rate" value="1" />
            <label for="star1" title="text">1 star</label>
          </div>
          <br><br><br>

          <button type="submit" class="btn btn-primary">Submit</button>

          </form>
        </div>
        <div class="col-md-5 order-md-1">
          <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><image x="0" y="0" width="100%" height="100%" href="../../home/images/i5.jpeg" preserveAspectRatio="xMidYMid slice" /></svg>
        </div>
      </div>

      <div class="space" id="featurette-divider3"></div>
    
    <hr class="featurette-divider">

    <div class="row featurette" id="share-playlist-form">
    <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-2"> Got a PLaylist? <span class="text-body-secondary">Share it with the WORLD.</span></h2>
        <p class="lead">Embark on a musical odyssey with me! Ready to share your favorite playlist? The stage is yours to spread the rhythm and share the beats. Don't keep the magic to yourself – hit play, then share the melody with the world. Who's joining your musical voyage? Share the playlist link to the platform where the magic unfolds, and let the symphony echo far and wide.</p>

      <form action="">
        <!-- Playlist Link -->
        <label for="artistAchievements" class="form-label">Link to Playlist(Spotify, Apple music, etc..):</label>
        <input type="text" class="form-control" id="songLink" name="songLink" maxlength="255" required>

      </form>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><image x="0" y="0" width="100%" height="100%" href="../../home/images/up.jpeg" preserveAspectRatio="xMidYMid slice" /></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->

  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2017–2024 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>
<script>

   document.getElementById('add-song-button').addEventListener('click', function () {
    var addSongForm = document.getElementById('add-song-form');
    var divider1 = document.getElementById('featurette-divider1');
    divider1.scrollIntoView({ behavior: 'smooth' });
  });

  document.getElementById('review-song-button').addEventListener('click', function () {
    var reviewSongForm = document.getElementById('review-song-form');
    var divider2 = document.getElementById('featurette-divider2');
    divider2.scrollIntoView({ behavior: 'smooth' });
  });

  document.getElementById('share-playlist-button').addEventListener('click', function () {
    var sharePlaylistForm = document.getElementById('share-playlist-form');
    var divider3 = document.getElementById('featurette-divider3');
    divider3.scrollIntoView({ behavior: 'smooth' });
  });
</script>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
