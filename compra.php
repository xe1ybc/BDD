<?php 
include("conexion.php"); 

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>campra</title>
	<href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  em{
  	color:#99A3A4;
  	font-family: Century Gothic; 
  }
  h1{
  	color:#808B96;
  	font-family: Century Gothic; 
  	text-shadow: 2px 2px 2px #aaa
  }
  .container {
      padding: 80px 120px;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
  .carousel-inner img {
      -webkit-filter: grayscale(60%);
      filter: grayscale(60%); /* make all photos black and white */ 
      width: 60%; /* Set width to 100% */
      margin: auto;
  }
  .p{
    color: #95EA5D !important;
      	font-family: Century Gothic; 

  }
  .carousel-caption h3 {
      color: #3C5E7F !important;
      font-family: Century Gothic; 
      text-shadow: 2px 2px 2px #000


  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
  }  
  </style>

</head>

<body background="colo2.jpg" bgproperties="fixed">
	<center><h1>Usted ya puede disfrutar de la gran variedad de series</h1></center>

<center><p><em>Lo mas visto en VIKI</em></p></center>
	
 

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/ayh.PNG" alt="New York" width="500" height="500">
        <div class="carousel-caption">
          <h3>Are You Human Too?</h3>
          <p>Que es lo que realmente ser un humano, esta es la historia de un robot que es mejor humano que muchos humanos que lo son de naturaleza</p>
        </div>      
      </div>

      <div class="item">
        <img src="images/ds.png" alt="oh nana" width="500" height="500">
        <div class="carousel-caption">
          <h3>Descendants of the Sun</h3>
          <p>Es una serie que retrata la vida de unos militares y un grupo de médicos, que conviven en medio de una zona en conflicto llamada Uruk</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="images/joy.PNG" alt="Los Angeles" width="500" height="500">
        <div class="carousel-caption">
          <h3>Goblin</h3>
          <p>Una joven tiene la capacidad de ver fantasmas y algunos le dicen que es la novia del GOBLIN . Su destino es ponerle fin a la inmortalidad del Goblin.</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

</body>
</html>