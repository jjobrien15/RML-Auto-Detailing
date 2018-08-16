<?php
	$pagename = "Home";
	require_once "header.inc.php";
?>
<section class="banner home-banner">
	<?php require_once "nav.inc.php"; ?>
		<div class="content">

				<div class="col-md-8 text-center mx-auto inner-content">
					<h2>Welcome To RML Auto Detailing</h2>
					<p>At RML Auto Detailing we pay extra attention to detail. From the finest conditioning of your leather interior to the impecible paint correction on the outside, we can handle all of your detailing needs. Oh, did I mention we come to you? Yes, you read that correct. RML Auto Detailing will travel to you. While you relax at home we will be making your vehicle look even better then the day it rolled off the lot.
					</p>

					<button class="btn" href="services.php">See Packages</button>
					<button class="btn" href="about.php">About Us</button>
				</div>

		</div>
</section>

<section class="intro container-fluid">

		<div class="row text-center px-5">
			<div class="col-md-4">
				<div class="far fa-gem"></div>
				<h2>Packages</h2>
				<p>Our tiered package system is the best bang for your buck! Check out our total package deals to see what kind of shine you prefer on your vehicle!</p>
				<a class="btn" href="javascript:void(0)" id="packagesLink">Packages</a>
			</div>

			<div class="col-md-4">
				<div class="fa fa-car"></div>
				<h2>Individual Packages</h2>
				<p>Paint is delicate. So we treat it that way. We get the perfect shine everytime!</p>
				<button class="btn" href="services.php">Exterior Packages</button>
			</div>

			<div class="col-md-4">
				<div class="fa fa-cubes"></div>
				<h2>Other Services</h2>
				<p>Need it all? We got you covered! Check out our package deals to see what we can do!</p>
				<button class="btn" href="services.php">Full Detail Packages</button>
			</div>
		</div>
</section>

<section class="info">
	<div class="info-content">
		<div class="container no-gutter row text-center">
			<div class="col-md-7">
				<h2>Wash & Wax While You Relax!</h2>
				<p>Acheiving the perfect shine on your automobile is not easy. Thats where we come in. Each and every car we lay our hands on is treated as delicatley as our own. At RML Auto Detailing, that perfect shine is exactly what we are after. Beginning at paint correction all the way to the caring touch of a hand-wash, we deliver that new car look you are after. To top it all off, we will come to you. Right in your own driveway, your car will transform to brand new.</p>
				<a href="setappointment.php"><div class="btn">Schedule Appointment</div></a>
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-3">
				<img class="img-fluid" src="images/car-wash-icon.png" alt="That's right! We come to you!"/>
			</div>
		</div>
	</div>
</section>

<section>
<?php
	require_once "footer.inc.php";
?>
</section>
