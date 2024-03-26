<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Intelligent Career Guidance</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/s.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>

		<!--Header-->
        <header id="header" class="transparent-nav" style="position: fixed;background-color: rgb(120, 70, 167,0.1); top: 0; border:none">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a class="logo" href="index.php">Caristography</a>
					</div>
					<!-- /Logo -->

					<!-- Mobile toggle -->
					<button class="navbar-toggle">
						<span></span>
					</button>
					<!-- /Mobile toggle -->
				</div>

				<?php
					// Check if the user is logged in, if not then redirect him to login page
					if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true):
				?>

				<!-- Navigation -->
				<nav id="nav">
					<ul class="main-menu nav navbar-nav navbar-right">
						<li><a href="index.php">Home</a></li>
                        <li class="dropdown">
                            <a class="dropbtn" href="javascript:void(0)">Services <span>&#11167;</span></a>
                            <div class="dropdown-content">
								<a href="\INTELLIGENT-CAREER-GUIDANCE-SYSTEM-main\career-quiz-master\index.html">Career Prediction</a>
                                <a href="http://127.0.0.1/php%20CAREERLY/courses.php">Courses</a>
                                <a href="http://127.0.0.1/php%20CAREERLY/blog.php">Knowledge Network</a>
								
                            </div>
                        </li>
						<li><a href="index.php#about">About Us</a></li>
						<li><a href="contact.php">Contact Us</a></li>
						<li>
							<a href="login.php">Login</a>
						</li>
						<li>
							<a href="register.php">Register</a>
						</li>
						
						
                        
					</ul>
				</nav>
				<!-- /Navigation -->
				<?php else: ?>
					<!-- Navigation -->
				<nav id="nav">
					<ul class="main-menu nav navbar-nav navbar-right">
						<li><a href="index.php">Home</a></li>
                        <li class="dropdown">
                            <a class="dropbtn" href="javascript:void(0)">Services <span>&#11167;</span></i></a>
                            <div class="dropdown-content">
								<a href="\INTELLIGENT-CAREER-GUIDANCE-SYSTEM-main\career-quiz-master\index.html">Career Prediction</a>
                                <a href="courses.php">Courses</a>
                                <a href="blog.php">Knowledge Network</a>
								
                            </div>
                        </li>
						
						<li>
							<a href = "books.php">Books</a>
						
						</li>

						<li>
							<a href = "englishvideos.php" > Videos</a>
						</li>
						
						<li>
							<a href="https://www.mycompiler.io/">online compiler</a>
							
						</li>
						<li><a href="Notes/index.html">Take Notes</a></li>
						<li><a href="contact.php">Contact Us</a></li>
						<li><a href="index.php#about">About Us</a></li>
						
						
						<li><a href="logout.php" >Log out</a></li>
					
                        
					</ul>
				</nav>
				<!-- /Navigation -->
				<?php endif ?>

			</div>
			<script>
// Select the header element
const header = document.getElementById("header");

// Add an event listener to the window for scrolling
window.addEventListener("scroll", function() {
    // Check the scroll position
    if (window.scrollY > 0) {
        // If scrolled down, add a background color
        header.style.backgroundColor = "rgba(120, 70, 167)";
    } else {
        // If at the top, make it transparent again
        header.style.backgroundColor = "rgb(120, 70, 167,0.1)";
    }
});


			</script>
		</header>
		<!-- /Header -->