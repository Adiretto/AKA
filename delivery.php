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
	<div class="container1_delivery">
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
		          <a class="nav-link " href="chefs.php">ABOUT US</a>
		        </li>
		        <li class="nav-item ps-2 pe-2">
		          <a class="nav-link active" href="delivery.php">DELIVERY</a>
		        </li>
		        <li class="nav-item ps-2 pe-2">
		          <a class="nav-link" href="javascript:void(0)">RESERVATION</a>
		        </li>
		        <?php 
		        	if($_COOKIE['user'] != ''):
		        ?>
		        <li class="nav-item ps-2 pe-2">
		        	<button onclick="window.location.href='registration.php';" class="btn_reg"style="text-transform: uppercase;"><?=$_COOKIE['user']?></button>
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
	<div class="containter2_delivery container-fluid p-sm-5 p-3">
		<div class="px-md-5 px-sm-0 mx-sm-5 ">
			<form action="check.php" class="px-lg-5 px-md-0 mx-lg-5 mx-md-0" method="post">
				<div class="title_registration mt-3">
					<center><h1>Delivery</h1></center>
					<center><p>Please fill out the form below and we'll do our best to accommodate your desired date and any requests you may have to make your party/celebration memorable.</p></center>
				</div>
				<div class="form-group mt-3">
					<label for="text" class="form-label">Name</label>
					<input id="Name" class="form-control" name="name" type="text" placeholder="Enter name">
				</div>
				<div class="form-group mt-3">
					<label for="phone" class="form-label">Phone</label>
					<input id="phone" class="form-control" name="phone" type="text" placeholder="Enter phone">
				</div>
				<div class="form-group mt-3">
					<label for="Email" class="form-label">Email</label>
					<input id="Email" class="form-control" name="email" type="text" placeholder="Enter email">
				</div>
				<div class="form-group mt-3">
					<label for="address" class="form-label">Address</label>
					<input id="address" class="form-control" name="address" type="text" placeholder="Enter address">
				</div>
				<div class="form-group mt-3">
					<label for="description" class="form-label">Description</label>
					<textarea class = "form-control" rows="5" cols="40" name="description" form="usrform" placeholder="Description(what do you want to order)..."></textarea>
				</div>
				<button class="btn btn_registration mt-4" name = "submit" type="submit">SUBMIT</button>
			</p>
			</form>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="text/javascript" src = "js/app.js"></script>
</body>
</html>
<!DOCTYPE html>
