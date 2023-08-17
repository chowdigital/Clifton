<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cloudsdale_Theme
 */

?>

	<footer>
		<div class="footer bg-craft blue-overlay row">
			<div class="col-12 footer-logo text-center">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/logos/Clifton_primary.png" alt="Cifton Logo" style>
			</div>
			<div class="col-12">
				<div class="container">
					<div class="row">
						<div class="col-12 col-sm-6 mb-5">
							<div class="form">
							<h3>Join the Club</h3>

								<div class="form-floating mb-3">
									<input type="email" class="form-control" id="floatingInput" placeholder="name">
									<label class="craft-text" for="floatingInput">Name</label>
								</div>
				
								<div class="form-floating mb-3">
									<input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
									<label class="craft-text" for="floatingInput">Email address</label>
								</div>
					
						
					
								<div>
									<a href="<?php echo get_permalink() ?>"><button type="button" class="btn btn-light">join us</button></a>
								</div>
							</div>
						</div>
						<div class="col-12 col-xs-6 col-sm-3 offset-xl-2 col-xl-2 mb-5">
							<ul>
								<li><h5>Opening Times</h5></li>
								<li>Monday</li>
								<li>Tuesday</li>
								<li>Wednesday</li>
								<li>thursday</li>
								<li>Friday</li>
								<li>Saturday</li>
								<li>Sunday</li>
							</ul>
						</div>
						<div class="col-12 col-xs-6 col-sm-3 col-xl-2 mb-5">
							<ul>
								<li><h5>Contact</h5></li>
								<li>Email</li>
								<li>Phone</li>
								<li>Address</li>
								<li>Careers</li>
								<li>Privicy</li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>

 <!-- Cloudsdale -->
 <div class="text-center" style="background: #000;"> 
    <a  href="https://cloudsdale.co.uk/">   <img class="m-2" src="https://cloudsdale.co.uk/wp-content/themes/Cloudsdale_2.0/assets/img/cloudsdale_logo.svg" alt="Cloudsdale" style="height:20px">
  </div></a>
  </div>

	</footer> 
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
