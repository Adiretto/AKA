	<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css">
	<title>AKA</title>
	<link rel = "stylesheet"href="css/bootstrap.css" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Oranienbaum&family=Oswald:wght@300&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/746fcb21ce.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container1_chefs">
		<nav class="navbar navbar-expand-md navbar-dark">
		  <div class="container">
		    <a class="navbar-brand ps-2" href="javascript:void(0)">AKA</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar" id="collapse">
		      <i class="fa fa-bars" aria-hidden="true"></i>
		    </button>
		    <div class="collapse navbar-collapse" id="collapsibleNavbar">
		      <ul class="navbar-nav ms-auto">
		        <li class="nav-item ps-2 pe-2">
		          <a class="nav-link" href="/" >HOME</a>
		        </li>
		        <li class="nav-item ps-2 pe-2">
		          <a class="nav-link " href="menu.php" >MENU</a>
		        </li>
		        <li class="nav-item ps-2 pe-2">
		          <a class="nav-link active" href="chefs.php">ABOUT US</a>
		        </li>
		        <li class="nav-item ps-2 pe-2">
		          <a class="nav-link" href="reservation.php">RESERVATION</a>
		        </li>
		        <?php 
		        	if($_COOKIE['user'] != ''):
		        ?>
		        <li class="nav-item ps-2 pe-2">
		        	<button onclick="window.location.href='exit.php';" class="btn_reg"style="text-transform: uppercase;">Log out</button>
		        </li>
		        <?php else: ?>
		        <li class="nav-item ps-2 pe-2">
		          <a class="nav-link" href="authorization.php">LOGIN</a>
		        </li>
		        <li class="nav-item ps-2 pe-2">
		        	 <button onclick="window.location.href='registration.php';" class="btn_reg">SIGN UP</button>
		        </li>
		        <?php endif; ?>
		      </ul>
		    </div>
		  </div>
		</nav>
			<div class="row justify-content-around container1_text" style="color:#FFFFFF;font-family:'Oranienbaum', serif; ;height: 80vh;width: 100%;">
				<div class="col-lg-3 col-md-3 col-sm-4 col-7 align-self-center pt-2 container1_title" ><center><p>EAT</p></center></div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-7 align-self-center pt-2 container1_title" ><center><p>DRINK</p></center></div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-7 align-self-center pt-2 container1_title" ><center><p>VISIT</p></center></div>
			</div>
	</div>
	<div class="container2_chefs container-fluid p-lg-5 p-md-5 p-sm-2 p-0">
		<center><h1 class="pt-5 mb-4">Our chefs</h1></center>
		<div class="row justify-content-center">
			<div class="chef col-lg-6 col-md-6 col-sm-6 col-10 p-3 pe-lg-5 mt-3">
				<img class = "img-fluid ms-lg-auto d-block" style = "width: 550px;"src="images/chef_1.png">
				<h1 class="ms-lg-auto mt-4">Adilet Askar</h1>
				<p class="ms-lg-auto mt-4">Two flapjacks served with molasses and our signature sassafras-infused whipped cream.</p>
				<p class="ms-lg-auto mt-4 " style="font-weight: 600;">10 years experience</p>
			</div>
			<div class="chef col-lg-6 col-md-6 col-sm-6 col-10 p-3 ps-lg-5 mt-3">
				<img class = "img-fluid me-auto d-block" style = "width: 550px;"src="images/chef_2.png">
				<h1 class="me-lg-auto mt-4">Alisher Ainabekov</h1>
				<p class="me-lg-auto mt-4">Two flapjacks served with molasses and our signature sassafras-infused whipped cream.</p>
				<p class="me-lg-auto mt-4" style="font-weight: 600;">10 years experience</p>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="chef col-lg-6 col-md-6 col-sm-6 col-10 p-3 pe-lg-5 mt-3">
				<img class = "img-fluid ms-lg-auto d-block" style = "width: 550px;"src="images/chef_3.png">
				<h1 class="ms-lg-auto mt-4">Kaisar Sabyr</h1>
				<p class="ms-lg-auto mt-4">Two flapjacks served with molasses and our signature sassafras-infused whipped cream.</p>
				<p class="ms-lg-auto mt-4 " style="font-weight: 600;">10 years experience</p>
			</div>
			<div class="chef_last col-lg-6 col-md-6 col-sm-6 col-10 p-3 ps-lg-5 mt-3">
				<img class = "img-fluid me-auto d-block" style = "width: 550px;"src="images/chef_4.png">
				<h1 class="me-lg-auto mt-4">Dosya Kuletov</h1>
				<p class="me-lg-auto mt-4">Two flapjacks served with molasses and our signature sassafras-infused whipped cream.</p>
				<p class="me-lg-auto mt-4" style="font-weight: 600;">10 years experience</p>
			</div>
		</div>
	</div>
	<!--

	<div class="comments container-fluid p-sm-5 p-3">
		<div class="px-md-5 px-sm-0 mx-sm-5 ">
			<form action="comments.php" class="px-lg-5 px-md-0 mx-lg-5 mx-md-0" method="post">
				<div class="title_registration mt-3">
					<center><h1>Comments</h1></center>
				</div>
				<div class="form-group mt-3">
					<label for="text" class="form-label">Name</label>
					<input id="Name" class="form-control" name="name" type="text" placeholder="Enter name">
				</div>
				<div class="form-group mt-3">
					<label for="description" class="form-label">Comment</label>
					<textarea class = "form-control" rows="4" cols="40" name="text_comment" form="usrform" placeholder="Write your comment..."></textarea>
				</div>
				<input type="hidden" name="page_id" value="150" />
				<button class="btn btn_registration mt-4" name = "submit" type="submit">SUBMIT</button>
			</form>
		</div>
	</div> 

	</!-->
	<footer class="text-center text-lg-start text-muted text-white" style="background-color: black;">
        <section
            class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
        >
            <div class="me-5 d-none d-lg-block text-white">
                <span>Get connected with us on social networks:</span>
            </div>

            <div>
                <a href="" class="me-4 text-white">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-white">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-white">
                    <i class="fa fa-telegram" aria-hidden="true"></i>
                </a>
                <a href="" class="me-4 text-white">
                    <i class="fab fa-instagram"></i>
                </a>

                <a href="" class="me-4 text-white">
                    <i class="fab fa-github"></i>
                </a>
            </div>
        </section>

        <section class="">
            <div class="container text-center text-md-start mt-5 text-white">
                <div class="row mt-3">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>AKA
                        </h6>
                        <p>
                            If breakfast is the most important meal of the day, then brunch is the most important meal of the week. We treat it with the pomp and ceremony it deserves, using farm-fresh ingredients to craft food you’ll spend the next six days dreaming about.
                        </p>
                        <button onclick="window.location.href='reservation.php';" class="btn_reg">MAKE RESERVATION</button>
                    </div>


                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 text-white">
                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="/" class="nav-link nav_link text-reset">HOME</a>
                        </p>
                        <p>
                            <a href="menu.php" class="nav-link nav_link text-reset">MENU</a>
                        </p>
                        <p>
                            <a href="chefs.php" class="nav-link nav_link text-reset">ABOUT US</a>
                        </p>
                        <p class="nav-item ">
		          			<a class="nav-link nav_link" href="reservation.php">RESERVATION</a>
		       			</p>
                        <?php 
		        	if($_COOKIE['user'] != ''):
		        		?>
		        	<p class="nav-item ps-2 pe-2">
		        		<button onclick="window.location.href='registration.php';" class="btn_reg"style="text-transform: uppercase;"><?=$_COOKIE['user']?></button>
			        </p>
			        <?php else: ?>
			        <p class="nav-item">
			          <a href="authorization.php" class="nav-link nav_link text-reset">LOGIN</a>
			        </p>
			        <p class="nav-item ps-2 pe-2">
			        	 <button onclick="window.location.href='registration.php';" class="btn_reg">SIGN UP</button>
			        </p>
			        <?php endif; ?>
                    </div>

                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 text-white">
                        <h6 class="text-uppercase fw-bold mb-4">
                            Contact
                        </h6>
                        <p><i class="fas fa-home me-3"></i> Astana, Kabanbai Batyr, 60A/6</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            a4912520@gmail.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> +7 777 704 8144</p>
                        <p><i class="fas fa-print me-3"></i> +7 777 704 8144</p>
                    </div>
                </div>
            </div>
        </section>

    </footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="text/javascript" src = "js/app.js"></script>
</body>
</html>
<!DOCTYPE html>

