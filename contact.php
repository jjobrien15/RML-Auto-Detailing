<?php 
	$pagename="Contact";
	require_once 'header.inc.php';
?>

<section class="banner contact-banner">
	<?php require_once "nav.inc.php" ?>
	<div class="content">
		<div class="container">
		<div class="row">
			<div class="col-md-6 contact-info">
				<h2>Contact Us</h2>
				<p>You can email us any questions or concerns about RML by using the form on this page.</p>
				<br>
				<div class="row">
				<p>You can also reach us on social media!</p>
				
					<div class="col">
						<a href="#" target="blank"><i class="fab fa-instagram" alt="Instagram"></i> <span>Follow Us<span></a>
					</div>

					<div class="col">
						
						<a href="#" target="blank"><i class="fab fa-facebook-square" alt="Facebook"></i> <span>Follow Us</span></a>
					</div>

				</div>

			</div>
			
			<div class="col-md-6 mx-auto">
				<form method="post" action="email.php">
					<div class="form-group">
						<label for="email-user">Email: </label>
						<input class="form-control" type="text" name="email-user" placeholder="Your Email" />
					</div>
					<div class="form-group">
						<label for="email-sub">Subject: </label>
						<input class="form-control" type="text" name="email-sub" placeholder="Subject" />
					</div>

					<div class="form-group">
						<label for="email-body">Message: </label>
						<textarea class="form-control" type="text" name="email-body" placeholder="Message body..."></textarea>
					</div>
				
				<input class="btn btn-dark" type="submit" value="Send"/>

			</form>
			</div>
		</div>
	</div>

	</div>
</section>

<?php 
	require_once 'footer.inc.php';
?>