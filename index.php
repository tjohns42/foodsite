<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <title>Home | Gulf Coast Dining</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <meta name="rating" content="General">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="HandheldFriendly" content="true">  
  <meta name="MobileOptimized" content="width">
  <link href="css/flexslider.css" rel="stylesheet" media="all"> 
  <link href="css/style.css" rel="stylesheet" media="all"> 
  <link href="print.css" rel="stylesheet" media="print">
  <link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
    
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>
  <div class="container" id="home">
    <header>
        <div id="logo">
          <h1>Gulf Coast<br><span>Dining</span></h1>
        </div>
      <nav>
        <ul>
          <li><a href="index.php" class="curpage">Home</a></li>
          <li><a href="restaurants.html">Restaurants</a></li>
          <li><a href="map.html">Map</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
        <div class="clear"></div>
      </nav>
    </header>
    <div class="main">
      <div class="flexslider">
        <ul class="slides">
          <li><a href=""><img src="images/1.jpg" height="350" width="960" alt=""></a></li>
          <li><a href=""><img src="images/1.jpg" height="350" width="960" alt=""></a></li>
          <li><a href=""><img src="images/1.jpg" height="350" width="960" alt=""></a></li>
        </ul>
      </div>
      <section class="content">
        <h1>Taste the Coast!</h1>
        <p>
          The Mississippi Gulf Coast offers a wide rage of cuisines for every appetite.  We help you find the
          right restaurant to satisfy your hunger.  
        </p>
        <div id="links">
          <div class="listing">
            <a href=""><img src="images/fine_dining.jpg" height="175" width="175" alt=""></a>
            <a href=""><h2>Fine Dining</h2></a>
          </div>
          
          <div class="listing">
            <a href=""><img src="images/browse.jpg" height="175" width="175" alt=""></a>
            <a href=""><h2>Browse</h2></a>
          </div>
          
          <div class="listing">
            <a href=""><img src="images/map.png" height="175" width="175" alt=""></a>
            <a href=""><h2>Coast Map</h2></a>
          </div>
        </div>
      </section>
      <section class="sidebar">
        <aside>
          <h2>Restaurant of the Month</h2>
          <div class="featured">
            <a href=""><h3>Put your restaurant here!</h3></a>
          </div>
          <h2>Coast's Top Rated</h2>
          <ol>
            <li>
              <h3>Yuki's</h3>
              <p>Japanese hibachi and sushi.</p>
              <div class="rating">
                <div class="rating_bar"><div class="rating_percent" style="width: 96%;"></div></div>
                <span class="rating_number">4.8/5</span>
              </div>
              <hr>
            </li>
            
            <li>
              <h3>The Shed</h3>
              <p>Best barbeque on the coast!</p>
              <div class="rating">
                <div class="rating_bar"><div class="rating_percent" style="width: 92%;"></div></div>
                <span class="rating_number">4.6/5</span>
              </div>
              <hr>
            </li>
            
            <li>
              <h3>Panda Palace</h3>
              <p>Chinese buffet and dining.</p>
              <div class="rating">
                <div class="rating_bar"><div class="rating_percent" style="width: 88%;"></div></div>
                <span class="rating_number">4.4/5</span>
              </div>
              <hr>
            </li>
          </ol>
        </aside>
      </section>
      <div class="clear"></div>
    </div>
    <footer>
      <div class="left">
        Copyright &copy; 2013 by Gulf Coast Dining
      </div>
      <div class="right">
        TNJdesigns: <a href="">Website Design</a>
      </div>
      <div class="clear"></div>
    </footer>
  </div>
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="js/jquery.flexslider.js"></script>
  <script>
  $(window).load(function() {
    $('.flexslider').flexslider({
      animation: "slide"
    });
  });
  </script>
</body>
</html>
