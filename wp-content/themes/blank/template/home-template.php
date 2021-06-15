<?php
	/*Template Name: HOME */ 
get_header();
?>
<div class="container">
	<h1>Welcome</h1><br>
	<p>Have a Good Day! </p>
	<style type="text/css">
		h1{
			font-size: 50px;
			text-align: center;
			color: blue;
		}
		p{
			text-align: center;
			font-size: 30px;
			color: red ;
		}
	</style>

	<div class="container">
<div id="carouselExample Indicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
</ol>
<div class="carousel-inner">
	<div class="carousel-item active">
		<img class="d-block w-100" src="http://localhost/wordpress1/wp-content/uploads/2021/04/new.jpg" alt="First slide">
</div>
<div class="carousel-item">
	<img class="d-block w-100" src="http://localhost/wordpress1/wp-content/uploads/2021/04/2.jpg" alt="Second slide">
</div>
<div class="carousel-item">
	<img class="d-block w-100" src="http://localhost/wordpress1/wp-content/uploads/2021/04/3.jpg" alt="Third slide">
	</div>
</div>
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class= "carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role=" button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></p> 
		<span class="sr-only">Next</span>
	</a>



</div>
</div>
<?php get_footer(); ?>}