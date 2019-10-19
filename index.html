<?php
include "db.php";

session_start();
if(isset($_SESSION["uid"])){
	
}

$sql = "SELECT * FROM products ORDER BY RAND() LIMIT 8";
$result = mysqli_query($con, $sql);

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>G-Cherries Store</title>
		<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/w4.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="catelogue/main.js"></script>
  <link id="favicon" rel="shortcut icon" href="/GiggleCherries/product_images/favicon.png" type="image/png" />

</head>
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>

<!-- Navbar -->
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top" style="background-color: #333;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar">G-Cherries</span>                        
      </button>
      <a class="navbar-brand" href="#myPage"><img src="product_images/logo.jpeg" class="w3-round w3-margin-bottom" alt="G-Cherries Logo" style="width:28%; max-height:300px"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index2.php">HOME</a></li>
        <li><a href="#products">NEW PRODUCTS</a></li>
        <li><a href="#trending">TRENDING</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="/GiggleCherries/catelogue/index.php">SHOP MORE
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/GiggleCherries/catelogue/index.php"><h3>Cake & Snacks</h3></a></li>
            <li><a href="/GiggleCherries/catelogue/index.php"><h3>Baking Tools</h3></a></li>
            <li><a href="/GiggleCherries/catelogue/index.php"><h3>Event Mgt.</h3></a></li>
            <li><a href="/GiggleCherries/catelogue/index.php"><h3>Others</h3></a></li> 
          </ul>
        </li>
        <li><a href="#contact">CONTACT</a></li> 

        <!-- This section is the Nav-Bar sign in and Cart Logo on home page -->
              <ul class="nav navbar-nav navbar-right">
        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
          <div class="dropdown-menu" style="width:600px;">
            <div class="panel panel-success">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-md-3">S/No</div>
                  <div class="col-md-3">Product Image</div>
                  <div class="col-md-3">Product Name</div>
                  <div class="col-md-3">Price (₦)</div>
                </div>
              </div>
              <div class="panel-body">
                <div id="cart_product" style="max-height: 310px; overflow: scroll; overflow-x:hidden; overflow-y:scroll;">
                <!--<div class="row">
                  <div class="col-md-3">Sl.No</div>
                  <div class="col-md-3">Prod uct Image</div>
                  <div class="col-md-3">Product Name</div>
                  <div class="col-md-3">Price in $.</div>
                </div>-->
                </div>
              </div>
              <div class="panel-footer"></div>
            </div>
          </div>
        </li>
        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>BLOG</a>
          
        </li>
      </ul>

      <!-- The Nav Bar and Sign in Cart Logo ENDS HERE -->

      </ul>
    </div>
  </div>
</nav>

<!-- Navbar on small screens -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- Automatic Slideshow Images -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
    <img src="product_images/cover11.jpg" style="width:94%; max-height:500px">     
      </div>

      <div class="item">
    <img src="product_images/cover12.jpg" style="width:94%; max-height:500px">     
      </div>

        <div class="item">
    <img src="product_images/cover13.jpg" style="width:94%; max-height:500px">     
      </div>

      <div class="item">
    <img src="product_images/cover14.jpg" style="width:94%; max-height:500px">     
      </div>
  </div>

  <!-- The Featured Products Section -->
  <div id="products" class="container text-center">

    <h2 class="w3-wide">Featured Products</h2><br>
    <p class="w3-opacity"><i>Place your Order while Stock Last</i></p>
    <p class="w3-justify"></p>

      <!-- The Featured Products Section 
        <div class="col-sm-3">
        <h3>Chocolate Cake</h3>
        <img src="images/chocolate cake1.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:80%; max-height:200px">
        <p class="list-price text-danger">List Price: <s>₦15,000</s></p>
        <p class="price">Our Price: ₦10,000</p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-1">Details</button>
        <button class="btn" data-toggle="modal" data-target="#details-1">Buy Now</button>
         </div>
-->

<?php while ($product = mysqli_fetch_assoc($result)){ ?>
        <div class="col-sm-3" style="height:400px">
        <div class="panel-heading" style="height:100px"><h3><?php echo $product['product_title']; ?></h3></div>
        <div style="height:200px">
        <img src="catelogue/product_images/<?php echo $product['product_image']; ?>" class="w3-round w3-margin-bottom" alt="<?php echo $product['product_title']; ?>" style="width:80%; max-height:200px">
        </div>
         <p class="list-price text-danger">List Price: <s>₦15,000</s></p>
        <p class="price"><b>Our Price: ₦ <?php echo number_format($product['product_price'],0); ?></b></p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-1" id="<?php echo $product['product_id']; ?>" onclick="showDetails(this);">Details</button>
        <button class="btn" data-toggle="modal" data-target="#details-1" id="<?php echo $product['product_id']; ?>" onclick="showDetails(this);">Buy Now</button>
      </div>  
<?php } ?>
    </div>


<!-- Container (TOUR Section) -->
<div id="trending" class="bg-1">
  <div class="container">
    <h3 class="text-center">TRENDING</h3>
    <ul class="list-group">
      <li class="list-group-item" style="color: black;"><h2>Butter Icing-Cake <span class="label label-info">Latest!</span></h2></li>
      <li class="list-group-item" style="color: black;"><h2>Cake Steamer <span class="badge">3</span> <span class="label label-success">In Stock!</span></h2></li> 
      <li class="list-group-item" style="color: black;"><h2>Three Steps Fondant castle <span class="label label-danger">Sold Out!</span></h2></li> 
    </ul>
    
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="paris.jpg" alt="Paris" width="400" height="300">
          <p><strong>Tutorial</strong></p>
          <p>Friday 1 November 2018</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Coming Soon!</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="newyork.jpg" alt="New York" width="400" height="300">
          <p><strong>Promo!!!</strong></p>
          <p>Saturday 2 November 2018</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Coming Soon!</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="sanfran.jpg" alt="San Francisco" width="400" height="300">
          <p><strong>Baking Tools</strong></p>
          <p>Sunday 20 November 2018</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Coming Soon!</button>
        </div>
      </div>
    </div>
  </div>
      </div>
   </div>

<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3 class="text-center">CONTACT</h3>
  <p class="text-center"><em>Drop a note!</em></p>

    <div class="row">
      <div class="col-md-4">
        <i class="fa fa-map-marker" style="width:30px"></i>10, Moshood Str. Ikosi-Ketu, Lagos, Nig<br>
        <i class="fa fa-phone" style="width:30px"></i> <b>Phone:</b> +234 7034626807<br>
        <i class="fa fa-mobile" style="width:30px"></i> <b>Phone:</b> +234 8092908916<br>
        <i class="fa fa-envelope" style="width:30px"> </i> <b>Email:</b> cherries5000@gmail.com<br>
      </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
  </div>
  
<!-- End Page Content -->
</div>



<!-- Footer -->
<footer class="text-center">
  <a href="https://www........." target="_blank"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
  <a href="https://www........." target="_blank"><i class="fa fa-instagram w3-hover-opacity"></i></a>
  <i class="fa fa-youtube w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i><br><br>
  <p class="w3-medium">Powered by <a href="https://www........." target="_blank">G-Cherries</a></p>
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

  <!--DETAILS MODAL-->
<?php 

      include 'details-modal-cakes.php';
?>


<!-- This script calls the modal showDetail when button is clicked -->


  <script src="js/modalAjax.js"></script>

  <script src="catelogue/main.js"></script>
</body>
</html>
















































