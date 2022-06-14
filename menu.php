<!DOCTYPE html>
<html lang="en">
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
	<div class="container1_menu">
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
		          <a class="nav-link active" href="menu.php" >MENU</a>
		        </li>
		        <li class="nav-item ps-2 pe-2">
		          <a class="nav-link " href="chefs.php">ABOUT US</a>
		        </li>
		        <li class="nav-item ps-2 pe-2">
		          <a class="nav-link" href="reservation.php">RESERVATION</a>
		        </li>
		        <?php 
		        	if($_COOKIE['user'] != ''):
		        ?>
		        <li class="nav-item ps-2 pe-2">
		        	<button onclick="window.location.href='exit.php';" class="btn_reg" style="text-transform: uppercase;">Log out</button>
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
	<div class="container-fluid container2_menu p-lg-5 p-md-5 pt-sm-3 py-4 px-2">
		<div class="title1 mt-5">
			<center><h1 style="text-align center;">Our Menu</h1></center>
		</div>

		<div class="title2 mt-4">
			<center><h1 class ="mb-5"style="text-align: center;" id="title"><a class = "menu_link active" id = "Breakfast" href="javascript:void(0);">Breakfast</a>  |  <a class = "menu_link" id = "Lunch" href="javascript:void(0);">Lunch</a>  |  <a class = "menu_link" id = "Dinner" href="javascript:void(0);">Dinner</a>   |  <a class = "menu_link" id = "Drinks" href="javascript:void(0);">Drinks</a></h1></center>
			<center><h1 style="text-align: center;display: none;" class="title111">Breakfast</h1></center>

			<div class="row justify-content-between  menu_menu active mt-sm-4 mt-4" id="menu_1">
				<div class="col-lg-6 col-md-6 col-sm-6  p-lg-4 p-0 foods_menu ">
					<div class="prod foods_section mx-5 py-lg-4 py-md-4 py-sm-4 py-3">
						<h1 class="name">some breakfast   <span class="price">16$</span></h1>
						<p class="mt-4 intro">Two flapjacks served with molasses and our signature sassafras-infused whipped cream.</p>
						<div class="buy">
							<a class="btn-ens-action btn-ens-style" data-rel="7906df1d289331">Buy</a>

						</div>
					</div>
					<div class="foods_section mx-5 py-lg-4 py-md-4 py-sm-4 py-3">
						<h1>some breakfast   16$</h1>
						<p class="mt-4">Cornmeal and molasses hotcakes served with sweet fennel pork sausage.</p>
						<a class="btn-ens-action btn-ens-style" data-rel="7906df1d289335">Buy</a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6  p-lg-4 p-0 foods_menu ">
					<div class="foods_section mx-5 py-lg-4 py-md-4 py-sm-4 py-3">
						<h1>some breakfast    16$</h1>
						<p class="mt-4">Two thick buckwheat cakes served with honey and our signature sassafras-infused whipped cream.</p>
						<a class="btn-ens-action btn-ens-style" data-rel="7906df1d289336">Buy</a>
					</div>
					<div class="foods_section mx-5 py-lg-4 py-md-4 py-sm-4 py-3" id="foods_section_last">
						<h1>some breakfast   16$</h1>
						<p class="mt-4">Corn grits and local beans known as Arizona Strawberries. Served with onion, garlic,poblano, and ham gravy.</p>
						<a class="btn-ens-action btn-ens-style" data-rel="7906df1d289337">Buy</a>
					</div>
				</div>
			</div>
			<div class="row justify-content-between  menu_menu mt-sm-4 mt-4" id="menu_2">
				<center><h1 style="text-align: center;" class="title111">Lunch</h1></center>
				<div class="col-lg-6 col-md-6 col-sm-6 p-lg-4 p-0 foods_menu ">
					<div class="foods_section mx-5 py-lg-4 py-md-4 py-sm-4 py-3">
						<h1>some lunch   16$</h1>
						<p class="mt-4">Two flapjacks served with molasses and our signature sassafras-infused whipped cream.</p>
						<a class="btn-ens-action btn-ens-style" data-rel="7906df1d289338">Buy</a>
					</div>
					<div class="foods_section mx-5 py-lg-4 py-md-4 py-sm-4 py-3">
						<h1>some lunch   16$</h1>
						<p class="mt-4">Cornmeal and molasses hotcakes served with sweet fennel pork sausage.</p>
						<a class="btn-ens-action btn-ens-style" data-rel="7906df1d289339">Buy</a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 	p-lg-4 p-0 foods_menu ">
					<div class="foods_section mx-5 py-lg-4 py-md-4 py-sm-4 py-3">
						<h1>some lunch    16$</h1>
						<p class="mt-4">Two thick buckwheat cakes served with honey and our signature sassafras-infused whipped cream.</p>
						<a class="btn-ens-action btn-ens-style" data-rel="7906df1d289340">Buy</a>
					</div>
					<div class="foods_section mx-5 py-lg-4 py-md-4 py-sm-4 py-3" id="foods_section_last">
						<h1>some lunch   16$</h1>
						<p class="mt-4">Corn grits and local beans known as Arizona Strawberries. Served with onion, garlic,poblano, and ham gravy.</p>
						<a class="btn-ens-action btn-ens-style" data-rel="7906df1d289341">Buy</a>
					</div>
				</div>
			</div>
			<div class="row justify-content-between  menu_menu mt-sm-4 mt-4" id="menu_3">
				<center><h1 style="text-align: center;" class="title111">Dinner</h1></center>
				<div class="col-lg-6 col-md-6 col-sm-6 p-lg-4 p-0 foods_menu ">
					<div class="foods_section mx-5 py-lg-4 py-md-4 py-sm-4 py-3">
						<h1>some dinner   16$</h1>
						<p class="mt-4">Two flapjacks served with molasses and our signature sassafras-infused whipped cream.</p>
						<a class="btn-ens-action btn-ens-style" data-rel="7906df1d292894">Buy</a>
					</div>
					<div class="foods_section mx-5 py-lg-4 py-md-4 py-sm-4 py-3">
						<h1>some dinner   16$</h1>
						<p class="mt-4">Cornmeal and molasses hotcakes served with sweet fennel pork sausage.</p>
						<a class="btn-ens-action btn-ens-style" data-rel="7906df1d292895">Buy</a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 p-lg-4 p-0 foods_menu ">
					<div class="foods_section mx-5 py-lg-4 py-md-4 py-sm-4 py-3">
						<h1>some dinner    16$</h1>
						<p class="mt-4">Two thick buckwheat cakes served with honey and our signature sassafras-infused whipped cream.</p>
						<a class="btn-ens-action btn-ens-style" data-rel="7906df1d292896">Buy</a>
					</div>
					<div class="foods_section mx-5 py-lg-4 py-md-4 py-sm-4 py-3" id="foods_section_last">
						<h1>some dinner   16$</h1>
						<p class="mt-4">Corn grits and local beans known as Arizona Strawberries. Served with onion, garlic,poblano, and ham gravy.</p>
						<a class="btn-ens-action btn-ens-style" data-rel="7906df1d292897">Buy</a>
					</div>
				</div>
			</div>
			<div class="row justify-content-between  menu_menu mt-sm-4 mt-4" id="menu_4">
				<center><h1 style="text-align: center;" class="title111">Drinks</h1></center>
				<div class="col-lg-6 col-md-6 col-sm-6 p-lg-4 p-0 foods_menu ">
					<div class="foods_section mx-5 py-lg-4 py-md-4 py-sm-4 py-3">
						<h1>some drink   16$</h1>
						<p class="mt-4">Two flapjacks served with molasses and our signature sassafras-infused whipped cream.</p>
						<a class="btn-ens-action btn-ens-style" data-rel="7906df1d292898">Buy</a>
					</div>
					<div class="foods_section mx-5 py-lg-4 py-md-4 py-sm-4 py-3">
						<h1>some drink   16$</h1>
						<p class="mt-4">Cornmeal and molasses hotcakes served with sweet fennel pork sausage.</p>
						<a class="btn-ens-action btn-ens-style" data-rel="7906df1d292899">Buy</a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6  p-lg-4 p-0 foods_menu ">
					<div class="foods_section mx-5 py-lg-4 py-md-4 py-sm-4 py-3">
						<h1>some drink    16$</h1>
						<p class="mt-4">Two thick buckwheat cakes served with honey and our signature sassafras-infused whipped cream.</p>
						<a class="btn-ens-action btn-ens-style" data-rel="7906df1d292900">Buy</a>
					</div>
					<div class="foods_section mx-5 py-lg-4 py-md-4 py-sm-4 py-3" id="foods_section_last">
						<h1>some drink   16$</h1>
						<p class="mt-4">Corn grits and local beans known as Arizona Strawberries. Served with onion, garlic,poblano, and ham gravy.</p>
						<a class="btn-ens-action btn-ens-style" data-rel="7906df1d292901">Buy</a>
					</div>
				</div>
			</div>			
				<center><button class="reservation_btn mt-3" id="full_menu"><b>FULL MENU</b></button></center>
				<center><button class="reservation_btn mt-3" id="short_menu"><b>SHORT MENU</b></button></center>
			</div>
		</div>
	
	<div class="container3_menu p-lg-5 p-md-5 p-sm-4 p-2 py-5">
		<div class="container pt-5">
			<div class="title_menu_footer pt-lg-5 pt-3">
				<center><h1 class = "text-white" style="text-align: center;">EAT TOGETHER</h1></center>
			</div>

			<div class="text_menu_footer mx-lg-5 pt-lg-5 pt-3">
				<center><p class="text-white">Every plate achieves that elusive, cuisine-defining balance of sweet, salty, and sour–dessert.
				</p></center>
			</div>
			<center><button onclick="window.location.href='reservation.php';" class="reservation_btn mt-lg-5 mt-3" ><b>MAKE RESERVATION</b></button></center>
		</div>
	</div>
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
	<script defer src="js/busket.js"></script>
	<link href="css/busket.css" rel="stylesheet">
</body>
</html>
