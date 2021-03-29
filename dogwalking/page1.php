<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dog PA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
session_start();
?>
<style>
.jumbotron {
  background-color: #00FF00;
  color: #ffffff;
}
</style>

<body>
  <div id="myPage"class="jumbotron text-center">
    <h1>Dog PA</h1>
    <p>We specialize in caring for your dogs</p>
  </div>
  <style>
.bg-grey {
  background-color: #66ff66;
}
</style>
<style>
.logo {
  font-size: 200px;
}
@media screen and (max-width: 768px) {
  .col-sm-4 {
    text-align: center;
    margin: 25px 0;
  }
}
</style>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Logo-holder</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#values">OUR VALUES </a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#quote">PAST CUSTOMERS</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <?php 
        if(isset($_SESSION['name'])){
          echo "<li><a href='logout.php'>Logout</a></li>";
          echo "<li> logged in as: ".$_SESSION['name']."</li>";
        }
        else{
          echo "<li><a href='login.php'>Login</a></li>";
        }
        ?>

      </ul>
    </div>
  </div>
</nav>
<div id="about" class="container-fluid">
  <div class="row">
    <div class="text-center">
      <h2>About Dog PA</h2>
      <h4>We love animlas more than we love humans.</h4>
      <p><br></p>
    </div>
    <div class="col-sm-4">
      <span class=""></span>
    </div>
  </div>
</div>

<div id="values" class="container-fluid bg-grey">
  <div class="row">
    <div class="text-center">
      <h2>Our Values</h2>
      <h4><strong>To Animals:</strong>To respect and treat them the same or above a human and to make sure that they are happy above all else. </h4>
      <h4><strong>To You:</strong> To make sure you feel that your Dog is being treated the best it could be so that you have no worries while you are away.</h4>
    </div>
  </div>
</div>
<div id="services" class="container-fluid">
  <div class="text-center">
    <h2>Services</h2>
    <h4>Choose the service for you</h4>
  </div>
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Dog Sitting</h1>
        </div>
        <div class="panel-body">
          <p><strong>Dont let your dog be lonley</strong></p>
          <p><strong>Much nicer than a kennel</strong></p>
          <p><strong>Take care of other tasks</strong></p>
          <p><strong>Constant contact with your dog</strong></p>
        </div>
        <div class="panel-footer">
          <h3>$20</h3>
          <h4>per hour</h4>
          <button class="btn btn-lg">Explore</button>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Dog Walking</h1>
        </div>
        <div class="panel-body">
          <p><strong>Dogs will have fun</strong> </p>
          <p><strong>Explore the outoors</strong> </p>
          <p><strong>Get much needed exercise</strong> </p>
          <p><strong>Recieve the mental stimulation they need</strong> </p>
        </div>
        <div class="panel-footer">
          <h3>£15</h3>
          <h4>per hour</h4>
          <button class="btn btn-lg">Explore</button>
        </div>
      </div>
    </div>
   <div class="col-sm-4">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Vet Visits</h1>
        </div>
        <div class="panel-body">
          <p><strong>Go during off peak hours</strong></p>
          <p><strong>A lengthy task taken care of</strong></p>
          <p><strong>Strong connections with local vets</strong></p>
          <p><strong>Keep your animal stress free</strong></p>
        </div>
        <div class="panel-footer">
          <h3>£15</h3>
          <h4>per hour</h4>
          <button class="btn btn-lg">Explore</button>
        </div>
      </div>
    </div>
  </div>
</div>
<style>
.panel {
  border: 1px solid #000000;
  border-radius:0;
  transition: box-shadow 0.5s;
}

.panel:hover {
  box-shadow: 5px 0px 40px rgba(0,0,0, .2);
}

.panel-footer .btn:hover {
  border: 1px solid #00ff00;
  background-color: #fff !important;
  color: #00ff00;
}

.panel-heading {
  color: #fff !important;
  background-color: #00ff00 !important;
  padding: 25px;
  border-bottom: 1px solid transparent;
  border-top-left-radius: 0px;
  border-top-right-radius: 0px;
  border-bottom-left-radius: 0px;
  border-bottom-right-radius: 0px;
}

.panel-footer {
  background-color: #fff !important;
}

.panel-footer h3 {
  font-size: 32px;
}

.panel-footer h4 {
  color: #aaa;
  font-size: 14px;
}

.panel-footer .btn {
  margin: 15px 0;
  background-color: #66ff66;
  color: #000;
}
</style>
<div id= "quote" class="text-center">
<h2>What our users say</h2>
</div>
<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">

  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  
  <div class="carousel-inner" role="listbox">
    <div class="item active">
    <h4>"I have never seen my dog happier!"<br><span style="font-style:normal;">Luke Fray</span></h4>
    </div>
    <div class="item">
      <h4>"lovley staff"<br><span style="font-style:normal;">Laurie French</span></h4>
    </div>
    <div class="item">
      <h4>"bark bark bark"<br><span style="font-style:normal;">Buddy the retriever</span></h4>
    </div>
  </div>

  
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <style>
  .carousel-control.right, .carousel-control.left {
  background-image: none;
  color: #00FF00;
}

.carousel-indicators li {
  border-color: #00FF00;
}

.carousel-indicators li.active {
  background-color: #00FF00;
}

.item h4 {
  font-size: 19px;
  line-height: 1.375em;
  font-weight: 400;
  font-style: italic;
  margin: 70px 0;
}

.item span {
  font-style: normal;
}
  </style>
  
</div>

<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you as soon as possible.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> london, UK</p>
      <p><span class="glyphicon glyphicon-phone"></span> 07786966153</p>
      <p><span class="glyphicon glyphicon-envelope"></span> camphertania1@gmail.com</p>
    </div>
      <div class="row">
        <div class="col-sm-12 form-group">
        <button onclick="document.location='contactus.php'">Contact Us</button>
        </div>
      </div>
    </div>
  </div>
</div>


<script>
$(document).ready(function(){
  
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

   
  if (this.hash !== "") {

  
    event.preventDefault();

    
    var hash = this.hash;

   
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){

      
      window.location.hash = hash;
      });
    } 
  });
})
</script>
<style>
.navbar {
  margin-bottom: 0;
  background-color: #66ff66;
  z-index: 9999;
  border: 0;
  font-size: 12px !important;
  line-height: 1.42857143 !important;
  letter-spacing: 4px;
  border-radius: 0;
}

.navbar li a, .navbar .navbar-brand {
  color: #fff !important;
}

.navbar-nav li a:hover, .navbar-nav li.active a {
  color: #000 !important;
  background-color: #fff !important;
}

.navbar-default .navbar-toggle {
  border-color: transparent;
  color: #fff !important;
}
</style>

<style>
footer .glyphicon {
  font-size: 20px;
  margin-bottom: 20px;
  color: #66ff66;
}
</style>

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Back to Top</p>
</footer>
</body>
</html>