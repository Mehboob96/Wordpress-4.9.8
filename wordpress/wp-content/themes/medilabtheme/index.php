<?php

get_header();

?>
<?php if(is_home()){ ?>
<div class="banner" id="home">
		<div class="wrapper">
			<section class="banner-info">
				<!-- <div class="banner_logo"><img src="#" alt="MediLab Logo"></div> -->
				<h2><a href="#" title="Medilab">Medilab <sup class="plus">+</sup></a></h2>
				<h3>HealthCare At Your Desk!!</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime eveniet voluptatum mollitia, dolor iure?</p>
				<a href="#" title="Make an Appointment">Make an Appointment.</a>
			</section>
			<div class="down-arrow">
				<a href="#services" title="Go Down"><img src="<?php echo get_theme_file_uri('assets/images/icon/white-down-arrow.png'); ?>" alt="Down Arrow"></a>
				<!-- <a href="#" title=""><i class="down-icon"> &gt; </i></a> -->
			</div>
		</div>
	</div>
<?php } ?>

	<main>
		<section class="service" id="services">
			<div class="wrapper cf">
				<div class="our-service">
					<h2>Our Service</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, deserunt libero perferendis asperiores adipisci, numquam! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, architecto.</p>
				</div>

				<ul class="services">
					<li>
						<figure>
							<img src="<?php echo get_theme_file_uri('assets/images/icon/24-support.png'); ?>" alt="24 Hour Support">
						</figure>
						<span class="service-heading">24 Hour Support</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, nemo fugit quibusdam, nesciunt deserunt deleniti.</p>
					</li>
					<li>
						<figure>
							<img src="<?php echo get_theme_file_uri('assets/images/icon/medical-counseling.png'); ?>" alt="Medical Counseling">
						</figure>
						<span class="service-heading">Medical Counseling</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus maxime nihil obcaecati ab voluptatem neque?</p>
					</li>
					<li>
						<figure>
							<img src="<?php echo get_theme_file_uri('assets/images/icon/emergency-service.png'); ?>" alt="Emergency Services">
						</figure>
						<span class="service-heading">Emergency Services</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium exercitationem, itaque! Veniam aut, atque veritatis.</p>
					</li>
					<li>
						<figure>
							<img src="<?php echo get_theme_file_uri('assets/images/icon/premium-healthcare.png'); ?>" alt="Premium Healthcare">
						</figure>
						<span class="service-heading">Premium Healthcare</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos natus similique, minima magni nisi, distinctio!</p>
					</li>
				</ul>
			</div>
		</section>

		<!-- Emergency Section -->
		<ul class="emergency" id="emergency">
			<li>
				<article>
					<h3>Emergency Case</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias iusto debitis earum at, dolores, ex dolor fugit. Hic quo, in.</p>
					<a href="#" title="Read More">Read More</a>
				</article>
			</li>
			<li>
				<article>
					<h3>Emergency Case</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias iusto debitis earum at, dolores, ex dolor fugit. Hic quo, in.</p>
					<a href="#" title="Read More">Read More</a>
				</article>
			</li>
			<li>
				<div>
					<h3>Opening Hours</h3>
					<table>
						<tr>
							<td>Monday - Friday</td>
							<td>8.00 - 17.00</td>
						</tr>
						<tr>
							<td>Saturday</td>
							<td>9.30 - 17.30</td>
						</tr>
						<tr>
							<td>Sunday</td>
							<td>9.30 - 15.00</td>
						</tr>
					</table>
				</div>
			</li>
		</ul>

		<section class="articles" id="articles">
			<div class="wrapper cf">
				<div class="main-article">
					<h2>The Medilap Ultimate Dream</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur ex quasi, temporibus, earum inventore omnis.</p>
					<a href="#" title="Know more">Know more..</a>
				</div>
				<ul class="sub-articles">
					<li>
						<a href="#" title="Sub Article 1">
							<article class="cf">
								<figure>
									<img src="<?php echo get_theme_file_uri('assets/images/icon/right-arrow-in-circular-button.png'); ?>" alt="sub_article_1">
								</figure>
								<div class="right-article">
									<h3>It's Something important you want to know.</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At architecto voluptates voluptatem modi quae nesciunt mollitia quibusdam soluta eveniet officia?</p>
								</div>
							</article>
						</a>
					</li>
					<li>
						<a href="#" title="Sub Article 2">
							<article>
								<figure><img src="<?php echo get_theme_file_uri('assets/images/icon/right-arrow-in-circular-button.png'); ?>" alt="sub_article_2"></figure>
								<div class="right-article">
									<h3>It's Something important you want to know.</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At architecto voluptates voluptatem modi quae nesciunt mollitia quibusdam soluta eveniet officia?</p>
								</div>
							</article>
						</a>
					</li>
				</ul>
			</div>
		</section>

		<section class="doctors">
			<div class="wrapper">
				<h2>Meet Our Doctors!</h2>
				<ul class="doctor-cards">
					<li>
						<figure>
							<img src="https://via.placeholder.com/200x250" alt="Jessica Wally">
						</figure>
						<span class="name">Jessica Wally</span>
						<span class="role">Doctor</span>
						<ul class="doctors-social">
							<li><a href="#" title="Facebook"><img src="<?php echo get_theme_file_uri('assets/images/icon/facebook-logo.png'); ?>" alt="facebook logo"></a></li>
							<li><a href="#" title="Twitter"><img src="<?php echo get_theme_file_uri('assets/images/icon/twitter-logo-silhouette.png'); ?>" alt="twitter logo"></a></li>
							<li><a href="#" title="Google Plus"><img src="<?php echo get_theme_file_uri('assets/images/icon/google-plus.png'); ?>" alt="goolgle plus logo"></a></li>
						</ul>
					</li>
					<li>
						<figure>
							<img src="https://via.placeholder.com/200x250" alt="Iai Donas">
						</figure>
						<span class="name">Iai Donas</span>
						<span class="role">Doctor</span>
						<ul class="doctors-social">
							<li><a href="#" title="Facebook"><img src="<?php echo get_theme_file_uri('assets/images/icon/facebook-logo.png'); ?>" alt="facebook logo"></a></li>
							<li><a href="#" title="Twitter"><img src="<?php echo get_theme_file_uri('assets/images/icon/twitter-logo-silhouette.png'); ?>" alt="twitter logo"></a></li>
							<li><a href="#" title="Google Plus"><img src="<?php echo get_theme_file_uri('assets/images/icon/google-plus.png" alt="goolgle plus logo'); ?>"></a></li>
						</ul>
					</li>
					<li>
						<figure>
							<img src="https://via.placeholder.com/200x250" alt="Amanda Denly">
						</figure>
						<span class="name">Amanda Denly</span>
						<span class="role">Doctor</span>
						<ul class="doctors-social">
							<li><a href="#" title="Facebook"><img src="<?php echo get_theme_file_uri('assets/images/icon/facebook-logo.png'); ?>" alt="facebook logo"></a></li>
							<li><a href="#" title="Twitter"><img src="<?php echo get_theme_file_uri('assets/images/icon/twitter-logo-silhouette.png'); ?>" alt="twitter logo"></a>
							</li>
							<li><a href="#" title="Google Plus"><img src="<?php echo get_theme_file_uri('assets/images/icon/google-plus.png'); ?>" alt="goolgle plus logo"></a>
							</li>
						</ul>
					</li>
					<li>
						<figure>
							<img src="https://via.placeholder.com/200x250" alt="Jason Davis">
						</figure>
						<span class="name">Jason Davis</span>
						<span class="role">Doctor</span>
						<ul class="doctors-social">
							<li><a href="#" title="Facebook"><img src="<?php echo get_theme_file_uri('assets/images/icon/facebook-logo.png'); ?>" alt="facebook logo"></a></li>
							<li><a href="#" title="Twitter"><img src="<?php echo get_theme_file_uri('assets/images/icon/twitter-logo-silhouette.png'); ?>" alt="twitter logo"></a></li>
							<li><a href="#" title="Google Plus"><img src="<?php echo get_theme_file_uri('assets/images/icon/google-plus.png'); ?>" alt="goolgle plus logo"></a></li>
						</ul>
					</li>
				</ul>
			</div>
		</section>

		<section class="testimonial" id="testimonial">
			<div class="wrapper">
				<h2>See What Patients are Saying</h2>
				<ul class="testimonial-list">
					<li>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum eius maxime, fugiat cupiditate non asperiores repellendus corporis sint eos similique!</p>
						<div class="testimonial-author cf">
							<figure>
								<img src="<?php echo get_theme_file_uri('assets/images/chris.jpeg'); ?>" alt="Alex Texas">
							</figure>
							<span class="firstname">Alex</span>
							<span>Texas</span>
						</div>
					</li>
					<li>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum eius maxime, fugiat cupiditate non asperiores repellendus corporis sint eos similique!</p>
						<div class="testimonial-author cf">
							<figure>
								<img src="<?php echo get_theme_file_uri('assets/images/chris.jpeg'); ?>" alt="Alex Texas">
							</figure>
							<span class="firstname">Alex</span>
							<span>Texas</span>
						</div>
					</li>
					<li>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum eius maxime, fugiat cupiditate non asperiores repellendus corporis sint eos similique!</p>
						<div class="testimonial-author cf">
							<figure>
								<img src="<?php echo get_theme_file_uri('assets/images/chris.jpeg'); ?>" alt="Alex Texas">
							</figure>
							<span class="firstname">Alex</span>
							<span>Texas</span>
						</div>
					</li>
				</ul>
			</div>
		</section>

		<section class="about" id="about">
			<div class="wrapper cf">
				<h2> <span>&lt;&lt;</span> A Few Words About Us <span>&gt;&gt;</span></h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates ratione impedit minus a eius reiciendis totam provident doloribus magnam eum, maxime natus quisquam, dolorum possimus cum error quia beatae. Quaerat!
				<span>-- Medilap Healthcare</span>
			</p>
			</div>
		</section>

		<section class="contact-us" id="contact">
			<div class="wrapper cf">
				<h2>Contact Us</h2>
				<div class="contact-info">
					<h3>Contact Info</h3>
					<span class="cf">
						<i><img src="<?php echo get_theme_file_uri('assets/images/icon/maps-and-flags.png'); ?>" alt="location icon"></i>
						<span>321 Awesome Street New York, Ny 17002</span>
					</span>
					<span class="cf">
						<i><img src="<?php echo get_theme_file_uri('assets/images/icon/message-closed-envelope.png'); ?>" alt="mail icon"></i>
						<span>info@companyemail.com</span>
					</span>
					<span class="cf">
						<i><img src="<?php echo get_theme_file_uri('assets/images/icon/phone-receiver.png'); ?>" alt="phone icon"></i>
						<span>+1 800 123 1234</span>
					</span>
				</div>

				<div class="contact-form">
					<h3>Have any Query! or Book an Appointment</h3>
					<form action="#" method="post">
						<input type="text" name="name" placeholder="Your Name">
						<input type="email" name="email_id" placeholder="Your Email">
						<input type="text" name="subject" placeholder="Subject">
						<textarea placeholder="Message" rows="6"></textarea>
						<input type="submit" name="submit" value="Send Message">
					</form>
				</div>
			</div>
		</section>
	</main>

<?php

get_footer();

?>