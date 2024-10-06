<html>
    <head><link rel="stylesheet" href="shit.css"></head>
    <body>
        <!-- Navigation bar -->
<header>
			<a href="#" class="logo">EZRA</a>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#aboutus">About</a></li>
				<li><a href="#bseller">Best Sellers</a></li>
				<li><a href="#">Reviews</a></li>
				<li><a href="#">Contact Us</a></li>
				<li><a href="#" class="order">Order</a></li>
			</ul>
</header>

<!-- Banner -->
		<script type="text/javascript">
			window.addEventListener("scroll", function(){
				var header = document.querySelector("header");
				header.classList.toggle("sticky", window.scrollY > 0);
			})
		</script>
        <form action="" method="POST">
        <p class="whole">
        <h1>Login</h1>
        <div>
            <p class="infos">
                <label>Username:<br><input type="text" name="username" placeholder="Username" required></label>
            </p>
            <p class="infos">
                <label>Password:<br><input type="password" name="password" placeholder="Password" required></label>
            </p>
        </div>
        <p><button type="submit">Login</button><button></form><a href="Registration.php">Registration</a></button></p>
    </body>
</html>
<?php
include("sqlConnet.php");
session_start();

if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
		
	$query="SELECT * FROM user WHERE username = '".$username."' AND password = '".$password."' limit 1";
		
	$result = @mysqli_query($conn, $query);

    if (empty($_POST['username']) || empty($_POST['password'])) {
        echo "<h1>No entered username and/or password...</h1><br>";
    } else if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username; // Store the username in a session variable
        echo "<h1>Password Accepted...</h1><br><br>";

		// Redirect to the homepage
		header("Location: chome.php"); 
        exit();

    } else {
        echo "<h1>Invalid username and/or password...</h1>";
    }

}
?>