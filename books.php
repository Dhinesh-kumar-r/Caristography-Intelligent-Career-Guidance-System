<?php
// Initialize the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
	<?php include 'header.php'?>
		<!-- Hero-area -->
		<div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/bgc2.jpg); " ></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row" >
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="index.php">Home</a></li>
							<li><a href="Courses.php"> courses</li>
						</ul>
						<h1 class="white-text">
							
						</h1>

					</div>
				</div>
			</div>

		</div>
		<!-- /Hero-area -->
		
        <!-- Courses -->
		<div id="courses" class="section">

			<!-- container -->
			<div class="container">

				<!-- row 
				<div class="row">
					<div class="section-header text-center">
						<h2>Explore Courses</h2>
						<p class="lead">Libris vivendo eloquentiam ex ius, nec id splendide abhorreant.</p>
					</div>
				</div>
				 -->
				
				<!-- tags widget -->
				<div class="widget tags-widget">
					<a class="tag" href="#web">Web</a>
					<a class="tag" href="#prog">Programming Langauges</a>
					<a class="tag" href="#">Css</a>
					<a class="tag" href="#">Responsive</a>
					<a class="tag" href="#bootstrap">bootstrap</a>
					<a class="tag" href="#web">Html</a>
					<a class="tag" href="#">Website</a>
					<a class="tag" href="#">Business</a>
				</div>
				<!-- /tags widget -->
				
				<!-- courses -->
				<hr class="section-hr" id="web">
				<div id="courses-wrapper" >
                 		
					<!-- row -->
					<div class="row" >
                        <div class="section-header text-center" >
							<h2  >Web Development</h2>
						</div>
						   
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.teamwerx.org/wp-content/uploads/2017/10/Web-Development-with-jQuery.pdf" target="_blank" class="course-img">
									<img src="./img/jq.png" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href=https://www.teamwerx.org/wp-content/uploads/2017/10/Web-Development-with-jQuery.pdf"" target="_blank" style="font-size:18px; text-align: center">The Complete jQuery Course</a>
								<div class="course-details" style="margin:5px;">
									<span class="course-category">Web Development</span>
									<span class="course-price course-free"></span>
								</div>
							</div>
						</div>
						<!-- /single course -->
						
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6" >
							<div class="course">
								<a href="https://riptutorial.com/Download/css.pdf" target="_blank" class="course-img">
									<img src="./img/css.png" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://riptutorial.com/Download/css.pdf" target="_blank" style="font-size:18px; text-align: center"><b>Introduction to CSS </b></a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Web Design</span>
									<span class="course-price course-free"></span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://riptutorial.com/Download/html.pdf" target="_blank" class="course-img">
									<img src="./img/html.jpeg " alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://riptutorial.com/Download/html.pdf" target="_blank" style="font-size:18px; text-align: center">The Complete course on HTML</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Web Development</span>
										<span class="course-price course-free"></span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://riptutorial.com/Download/bootstrap-modal.pdf" class="course-img" target="_blank">
									<img src="./img/bootstrap.jpeg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://riptutorial.com/Download/bootstrap-modal.pdf" target="_blank" style="font-size:18px; text-align: center">Introduction to Bootstrap</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Web Design</span>
									<span class="course-price course-free"></span>
								</div>
							</div>
						</div>
						<!-- /single course -->

					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
                        
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://riptutorial.com/Download/javascript.pdf" target="_blank" class="course-img">
									<img src="./img/javascript.jpeg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://riptutorial.com/Download/javascript.pdf" target="_blank" style="font-size:18px; text-align: center">JavaScript Tutorial</a>
								<div class="course-details" style="margin:5px;">
									<span class="course-category">Web Development</span>
									<span class="course-price course-free"></span>
								</div>
							</div>
						</div>
						<!-- /single course -->


						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://riptutorial.com/Download/react.pdf" target="_blank" class="course-img">
									<img src="./img/reactjs.jpeg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://riptutorial.com/Download/react.pdf" target="_blank" style="font-size:18px; text-align: center">React Tutorial</a>
								<div class="course-details" style="margin:5px;">
									<span class="course-category">Web Development</span>
									<span class="course-price course-free"></span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://riptutorial.com/Download/ruby-language.pdf" target="_blank" class="course-img">
									<img src="./img/ruby.jpeg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://riptutorial.com/Download/ruby-language.pdf" target="_blank" style="font-size:18px; text-align: center">Ruby Tips and Tricks</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Web Development</span>
									<span class="course-price course-premium"></span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.dcpehvpm.org/E-Content/BCA/BCA-II/Web%20Technology/the-complete-reference-html-css-fifth-edition.pdf" class="course-img" target="_blank">
									<img src="./img/htmlcss.jpeg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.dcpehvpm.org/E-Content/BCA/BCA-II/Web%20Technology/the-complete-reference-html-css-fifth-edition.pdf" target="_blank" style="font-size:18px; text-align: center">HTML & CSS</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Web Development</span>
									<span class="course-price course-premium"></span>
								</div>
							</div>
						</div>
						<!-- /single course -->

					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
                        
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://riptutorial.com/Download/ruby-on-rails.pdf" target="_blank" class="course-img">
									<img src="./img/rails.jpeg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://riptutorial.com/Download/ruby-on-rails.pdf" target="_blank" style="font-size:18px; text-align: center">Ruby on Rails5</a>
								<div class="course-details" style="margin:5px;">
									<span class="course-category">Web Development</span>
									<span class="course-price course-premium"></span>
								</div>
							</div>
						</div>
						<!-- /single course -->


						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.udemy.com/course/the-complete-c-programming/" target="_blank" class="course-img">
									<img src="./img/coursesass.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.udemy.com/course/the-complete-c-programming/" target="_blank" style="font-size:18px; text-align: center">Introduction to Sass</a>
								<div class="course-details" style="margin:5px;">
									<span class="course-category">Web Development</span>
									<span class="course-price course-premium"></span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href= "https://sd.blackball.lv/library/Learning_React_(2020).pdf" target="_blank" class="course-img">
									<img src="./img/reactjs.png" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://sd.blackball.lv/library/Learning_React_(2020).pdf" target="_blank" style="font-size:18px; text-align: center">React complete course</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Web Development</span>
									<span class="course-price course-premium"></span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://exploringjs.com/impatient-js/downloads/impatient-js-preview-book.pdf" class="course-img" target="_blank">
									<img src="./img/javascript1.jpeg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://exploringjs.com/impatient-js/downloads/impatient-js-preview-book.pdf" target="_blank" style="font-size:18px; text-align: center">Complete guide on JavaScript</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Web Development</span>
									<span class="course-price course-premium"></span>
								</div>
							</div>
						</div>
						<!-- /single course -->

					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
                        <div class="section-header text-center">
                            <h2 id="prog">Programming Langauges</h2>
                        </div>

						
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://riptutorial.com/Download/r-language.pdf" class="course-img">
									<img src="./img/course01.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://riptutorial.com/Download/r-language.pdf" target="_blank" style="font-size:18px; text-align: center">R Programming</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Programming</span>
									<span class="course-price course-free"></span>
								</div>
							</div>
						</div>
						<!-- /single course -->
						
						<!-- /single course -->

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://riptutorial.com/Download/cplusplus.pdf" class="course-img" target="_blank">
									<img src="./img/cpp.jpeg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://riptutorial.com/Download/cplusplus.pdf" target="_blank" style="font-size:18px; text-align: center;" >Learn C++</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Programming</span>
									<span class="course-price course-free"></span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- /single course -->

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://riptutorial.com/Download/java-language.pdf" class="course-img" target="_blank">
									<img src="./img/java1.jpeg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://riptutorial.com/Download/java-language.pdf" target="_blank" style="font-size:18px; text-align: center">Java Tutorial</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Programming</span>
									<span class="course-price course-free"></span>
								</div>
							</div>
						</div>
						<!-- /single course -->


						<!-- /single course -->

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://riptutorial.com/Download/python-language.pdf" class="course-img" target="_blank">
									<img src="./img/python.png" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://riptutorial.com/Download/python-language.pdf" target="_blank" style="font-size:18px; text-align: center">Complete guide on python</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Programming</span>
									<span class="course-price course-free"></span>
								</div>
							</div>
						</div>
						<!-- /single course -->

					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
                        
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="http://rmi.yaht.net/bookz/core.java/9780134177373-Vol-1.pdf" target="_blank" class="course-img">
									<img src="./img/java.png" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="http://rmi.yaht.net/bookz/core.java/9780134177373-Vol-1.pdf" target="_blank" style="font-size:18px; text-align: center">Core Java</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Programming</span>
									<span class="course-price course-premium"></span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://cfm.ehu.es/ricardo/docs/python/Learning_Python.pdf" class="course-img" target="_blank">
									<img src="./img/python1.jpeg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://cfm.ehu.es/ricardo/docs/python/Learning_Python.pdf" target="_blank" style="font-size:18px; text-align: center">Python Programming</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Programming</span>
									<span class="course-price course-premium"></span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://riptutorial.com/Download/csharp-language.pdf" target="_blank" class="course-img">
									<img src="./img/csharp.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://riptutorial.com/Download/csharp-language.pdf" target="_blank" style="font-size:18px; text-align: center">C# Tutorial</a>
								<div class="course-details" style="margin:5px;">
									<span class="course-category">Programming</span>
									<span class="course-price course-free"></span>
								</div>
							</div>
						</div>
						<!-- /single course -->


						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://riptutorial.com/Download/c-language.pdf" target="_blank" class="course-img">
									<img src="./img/c.jpeg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://riptutorial.com/Download/c-language.pdf" target="_blank" style="font-size:18px; text-align: center">Complete C programming</a>
								<div class="course-details" style="margin:5px;">
									<span class="course-category">Programming</span>
									<span class="course-price course-free"></span>
								</div>
							</div>
						</div>
						<!-- /single course -->

					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
                        <div class="section-header text-center">
                            <h2 id="prog">Server Side</h2>
                        </div>

						
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://riptutorial.com/Download/php.pdf" target="_blank" class="course-img">
									<img src="./img/php.jpeg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://riptutorial.com/Download/php.pdf" target="_blank" style="font-size:18px; text-align: center"><b>PHP Tips, Tricks, and Techniques</b></a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Server Side</span>
									<span class="course-price course-free"></span>
								</div>
							</div>
						</div>
						<!-- /single course -->
						
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://riptutorial.com/Download/sql.pdf" target="_blank" class="course-img">
									<img src="./img/mysql.jpeg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://riptutorial.com/Download/sql.pdf" target="_blank" style="font-size:18px; text-align: center"><b>SQL Tutorial</b></a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Server Side</span>
									<span class="course-price course-free"></span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://riptutorial.com/Download/node-js.pdf" target="_blank" class="course-img">
									<img src="./img/nodejs.jpeg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://riptutorial.com/Download/node-js.pdf" target="_blank" style="font-size:18px; text-align: center"><b>Node.js crash course</b></a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Server Side</span>
									<span class="course-price course-free"></span>
								</div>
							</div>
						</div>
						<!-- /single course -->


						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://riptutorial.com/Download/git.pdf" target="_blank" class="course-img">
									<img src="./img/git.jpeg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://riptutorial.com/Download/git.pdf" target="_blank" style="font-size:18px; text-align: center"><b>Mastering Git</b></a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Server Side</span>
									<span class="course-price course-free"></span>
								</div>
							</div>
						</div>
						<!-- /single course -->

					</div>
					<!-- /row -->

				</div>
				<!-- /courses -->

				<!--<div class="row">
					<div class="center-btn">
						<a class="main-button icon-button" href="#">More Courses</a>
					</div>
				</div>-->

			</div>
			<!-- container -->

		</div>
		<!-- /Courses -->
		<?php include 'footer.php'?>
		
</html>


