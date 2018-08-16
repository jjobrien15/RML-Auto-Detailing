<?php
	$pagename="Services";
	require_once 'header.inc.php';
?>
<section class="banner services-banner">

	<?php require_once "nav.inc.php"; ?>

	<div class="content">
		<div class="col-md-10 mx-auto">
			<h2>What We Do</h2>
			<p>When it comes to cars, we at RML Auto Detaling know how delicate the process of cleaning a car can be. From the classics and luxury, to sports cars and your everyday driver, we can handle it all and will take every measure neccesary to make sure your car looks brand new. Scroll below to find a package that best suits your detailing needs.</p>
		</div>
	</div>

</section>

<section class="services">
	<div class="row">
		<div class="col-md-6" id="packages">
			<h2>Packages</h2>
			<p>Our package deals are the best bang for your buck! With our hand picked packages, we are able to bring you car from grime to shine! Check out our packages to the right, choose your favorite, and <a href="contact.php" style="text-decoration: none">contact us</a> to schedule an appointment!</p>
		</div>
		<div class="col-md-4 mx-auto">

			<div id="int-accord">

				<div class="card">

					<a class="serv" data-toggle="collapse" data-target="#int-serv1" aria-exapnded="true" aria-controls="int-serv1">
						<div class="card-header" id="int-serv1-heading">
							<h4>
								Shampoo
							</h4>
						</div>
					</a>

					<div id="int-serv1" class="collapse show" aria-labelledby="int-serv1-heading" data-parent="#int-accord">

						<div class="card-body">
							<p>Shampooing</p>
							<strong class="float-right">&dollar; 50</strong>
						</div>

					</div>

				</div><!-- End Card -->

				<div class="card">

					<a class="serv" data-toggle="collapse" data-target="#int-serv2" aria-exapnded="true" aria-controls="int-serv2">

						<div class="card-header" id="int-serv2-heading">
							<h4>
								Title here
							</h4>
						</div>

					</a>

					<div id="int-serv2" class="collapse" aria-labelledby="int-serv2-heading" data-parent="#int-accord">

						<div class="card-body">
							<p>Whatever else we need should go here</p>
						</div>

					</div>

				</div><!-- End Card -->

				<div class="card">

					<a class="serv" data-toggle="collapse" data-target="#int-serv3" aria-exapnded="true" aria-controls="int-serv3">

						<div class="card-header" id="int-serv3-heading">
							<h4>
								Title here
							</h4>
						</div>

					</a>

					<div id="int-serv3" class="collapse" aria-labelledby="int-serv3-heading" data-parent="#int-accord">

						<div class="card-body">
							<p>Whatever else we need should go here</p>
						</div>

					</div>

				</div><!-- End Card -->

			</div>

		</div>
	</div><!-- End Row -->

	<div class="row">

		<div class="col-md-6">
			<h2>Individual Services</h2>
			<p>The exterior is the wow factor. We strive for that like new shine everytime. Check out some of our exterior packages!</p>
		</div>

		<div class="col-md-4 mx-auto">

			<div id="ext-accord">

				<div class="card">

					<a class="serv" data-toggle="collapse" data-target="#ext-serv1" aria-exapnded="true" aria-controls="ext-serv1">

						<div class="card-header" id="ext-serv1-heading">
							<h4>
								New Title here
							</h4>
						</div>

					</a>

					<div id="ext-serv1" class="collapse show" aria-labelledby="ext-serv1-1heading" data-parent="#ext-accord">

						<div class="card-body">
							<p>Whatever else we need should go here</p>
						</div>

					</div>

				</div>

			</div>

		</div>
	</div><!-- End Row -->

		<div class="row">

		<div class="col-md-6">
			<h2>Other Services</h2>
			<p>The exterior is the wow factor. We strive for that like new shine everytime. Check out some of our exterior packages!</p>
		</div>

		<div class="col-md-4 mx-auto">

			<div id="pack-accord">

				<div class="card">

					<a class="serv" data-toggle="collapse" data-target="#pack-serv1" aria-exapnded="true" aria-controls="pack-serv1">

						<div class="card-header" id="pack-serv1-heading">
							<h4>
								Another Title
							</h4>
						</div>

					</a>

					<div id="pack-serv1" class="collapse show" aria-labelledby="pack-serv1-1heading" data-parent="#pack-accord">

						<div class="card-body">
							<p>Whatever else we need should go here</p>
						</div>

					</div>

				</div>

			</div>

		</div>
	</div><!-- End Row -->


	</div>
</section>


<?php
	require_once 'footer.inc.php';
?>
