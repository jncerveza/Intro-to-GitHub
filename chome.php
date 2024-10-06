<!DOCTYPE html>

<html>
    <head>
		<meta charset="UTF-8">
        <title>Ezra</title>
        <link type="text/css" rel="stylesheet" href	="chomedesign.css">
		<?php 
		session_start()
		?>
    </head>

    <body>
		<!-- Navigation bar -->
        <header>
			<a href="#" class="logo">EZRA</a>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#aboutus">About</a></li>
				<li><a href="#bseller">Best Sellers</a></li>
				<li><a href="review_page.php">Reviews</a></li>
				<li><a href="#">Contact Us</a></li>
				<li><a href="#" class="order">Order</a></li>
			</ul>
		</header>

		<!-- Banner -->
		<section class="banner"></section>
		<script type="text/javascript">
			window.addEventListener("scroll", function(){
				var header = document.querySelector("header");
				header.classList.toggle("sticky", window.scrollY > 0);
			})
		</script>

		<!-- About us -->		
		<div class="aboutus" id="aboutus">
			<img src="Pictures/aboutus.jpg" width="100%">
		</div>

		<!-- Best Sellers -->
		<div class="bseller" id="bseller">
			<h1 class="bsellerh1">BEST SELLERS</h1>

			<div class="card">
				<img src="Pictures/bs2.jpg">
				<div class="intro">
					<h1>Button-Up</h1>
					<p>The <span>Button-Up</span> is a cool shirt.</p>
				</div>
			</div>

			<div class="card">
				<img src="Pictures/bs1.jpg">
				<div class="intro">
					<h1>Hoodie</h1>
					<p>The <span>Hoodie</span> is a cool shirt.</p>
				</div>
			</div>

			<div class="card">
				<img src="Pictures/bs3.jpg">
				<div class="intro">
					<h1>Backless</h1>
					<p>The <span>Backless</span> is a cool shirt.</p>
				</div>
			</div>
		</div>







    </body>
</html>