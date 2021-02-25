        <?php if(uri_string() != 'contact'): ?>

		<!-- testimonials -->
        <div class="testimonials">
            <div class="container">
                <h3 class="w3l_header w3_agileits_header">Our <span>Instructors</span></h3>
                <p class="sub_para_agile">Ipsum dolor sit amet consectetur adipisicing elit</p>
                <div class="w3ls_testimonials_grids">
                    <section class="center slider">
                        <div class="agileits_testimonial_grid">
                            <div class="w3l_testimonial_grid">
                                <p>
                                    In eu auctor felis, id eleifend dolor. Integer bibendum dictum erat, 
                                    non laoreet dolor.
                                </p>
                                <h4>Rosy Crisp</h4>
                                <h5>Instructor</h5>
                                <div class="w3l_testimonial_grid_pos">
                                    <img src="images/1.png" alt=" " class="img-responsive" />
                                </div>
                            </div>
                        </div>
                        <div class="agileits_testimonial_grid">
                            <div class="w3l_testimonial_grid">
                                <p>
                                    In eu auctor felis, id eleifend dolor. Integer bibendum dictum erat, 
                                    non laoreet dolor.
                                </p>
                                <h4>Laura Paul</h4>
                                <h5>Instructor</h5>
                                <div class="w3l_testimonial_grid_pos">
                                    <img src="images/2.png" alt=" " class="img-responsive" />
                                </div>
                            </div>
                        </div>
                        <div class="agileits_testimonial_grid">
                            <div class="w3l_testimonial_grid">
                                <p>
                                    In eu auctor felis, id eleifend dolor. Integer bibendum dictum erat, 
                                    non laoreet dolor.
                                </p>
                                <h4>Michael Doe</h4>
                                <h5>Instructor</h5>
                                <div class="w3l_testimonial_grid_pos">
                                    <img src="images/3.png" alt=" " class="img-responsive" />
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!-- //testimonials -->
		
		<?php endif; ?>
        
        <!-- footer -->
        <div class="footer_agile_w3ls">
			<div class="container">
				<div class="agileits_w3layouts_footer_grids">
					<div class="col-md-4 footer-agileits-w3layouts">
						<h3>Our Links</h3>
						<ul>
							<li><a href="<?= base_url() ?>">Home</a></li>
							<li><a href="<?= base_url('about') ?>">About</a></li>
							<li><a href="<?= base_url('events') ?>">Events</a></li>
							<li><a href="<?= base_url('contact') ?>">Contact Us</a></li>
						</ul>
					</div>
					
					<div class="col-md-4 footer-agileits">
						<h3>Specialized</h3>
						<ul>
							<li>Football</li>
							<li>Cricket</li>
							<li>Body Fitness</li>
						</ul>
					</div>

					<div class="col-md-4 footer-w3-agileits">
						<h3>Training Grounds</h3>
						<ul>
							<li>Football</li>
							<li>Cricket</li>
						</ul>
					</div>
					<div class="clearfix"></div>

				</div>
				<div class="agileits_w3layouts_logo logo2">
					<h2><a href="index.html">Panther Sports Academy</a></h2>
					<div class="agileits-social">
						<ul>
							<li><a href="https://www.facebook.com/panthersportsacademytdi" target="_blank"><i class="fa fa-facebook"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="wthree_copy_right">
			<div class="container">
				<p>© 2020 Panther Sports Academy. All rights reserved | Design by <a href="http://varunsharmak2.online/">Varun Sharma</a></p>
			</div>
		</div>
		<!-- //footer -->

		<!-- js -->
		<script type="text/javascript" src="<?= base_url('js/jquery-2.1.4.min.js') ?>"></script>
		<!-- //js -->

		<script src="<?= base_url('js/rgbSlide.min.js') ?>"></script>
		<script>
			$("#exampleSlider").rgbslide();
		</script>
		<!-- <script src="js/mainScript.js"></script> -->
		<!-- carousal -->
		<script src="<?= base_url('js/slick.js') ?>" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			$(document).on('ready', function() {
			$(".center").slick({
				dots: true,
				infinite: true,
				centerMode: true,
				slidesToShow: 2,
				slidesToScroll: 2,
				responsive: [
					{
					breakpoint: 768,
					settings: {
						arrows: true,
						centerMode: false,
						slidesToShow: 2
					}
					},
					{
					breakpoint: 480,
					settings: {
						arrows: true,
						centerMode: false,
						centerPadding: '40px',
						slidesToShow: 1
					}
					}
				]
			});
			});
		</script>
		<!-- //carousal -->
		<!-- flexisel -->
		<script type="text/javascript">
			$(window).load(function() {
				$("#flexiselDemo1").flexisel({
					visibleItems: 4,
					animationSpeed: 1000,
					autoPlay: true,
					autoPlaySpeed: 3000,    		
					pauseOnHover: true,
					enableResponsiveBreakpoints: true,
					responsiveBreakpoints: { 
						portrait: { 
							changePoint:480,
							visibleItems: 1
						}, 
						landscape: { 
							changePoint:640,
							visibleItems:2
						},
						tablet: { 
							changePoint:768,
							visibleItems: 2
						}
					}
				});
				
			});
		</script>
		<script type="text/javascript" src="<?= base_url('js/jquery.flexisel.js') ?>"></script>
		<!-- //flexisel -->
		<!-- gallery-pop-up -->
		<script src="<?= base_url('js/lsb.min.js') ?>"></script>
		<script>
			$(window).load(function() {
				$.fn.lightspeedBox();
			});
		</script>
		<!-- //gallery-pop-up -->
		<!-- flexSlider -->
			<script defer src="<?= base_url('js/jquery.flexslider.js') ?>"></script>
			<script type="text/javascript">
				$(window).load(function(){
                    $('.flexslider').flexslider({
                        animation: "slide",
                        start: function(slider){
                        $('body').removeClass('loading');
                        }
                    });
				});
			</script>
		<!-- //flexSlider -->

		<!-- start-smooth-scrolling -->
		<script type="text/javascript" src="<?= base_url('js/move-top.js') ?>"></script>
		<script type="text/javascript" src="<?= base_url('js/easing.js') ?>"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		<!-- start-smooth-scrolling -->
		<!-- for bootstrap working -->
		<script src="<?= base_url('js/bootstrap.js') ?>"></script>
		<!-- //for bootstrap working -->
		<!-- here stars scrolling icon -->
		<script type="text/javascript">
			$(document).ready(function() {
				$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
	<!-- //here ends scrolling icon -->
	</body>

</html>