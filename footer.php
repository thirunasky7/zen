<footer class="ftco-footer ftco-footer-2 ftco-section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-footer-logo">IT<span>solution</span></h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<ul class="ftco-footer-social list-unstyled mt-2">
							<li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4 ml-md-5">
						<h2 class="ftco-heading-2">Explore</h2>
						<ul class="list-unstyled">
							<li><a href="#" class="py-2 d-block">About</a></li>
							<li><a href="#" class="py-2 d-block">Contact</a></li>
							<li><a href="#" class="py-2 d-block">What We Do</a></li>
							<li><a href="#" class="py-2 d-block">Plans &amp; Pricing</a></li>
							<li><a href="#" class="py-2 d-block">Refund Policy</a></li>
							<li><a href="#" class="py-2 d-block">Call Us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Legal</h2>
						<ul class="list-unstyled">
							<li><a href="#" class="py-2 d-block">Join Us</a></li>
							<li><a href="#" class="py-2 d-block">Blog</a></li>
							<li><a href="#" class="py-2 d-block">Privacy &amp; Policy</a></li>
							<li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
							<li><a href="#" class="py-2 d-block">Careers</a></li>
							<li><a href="#" class="py-2 d-block">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Have a Questions?</h2>
						<div class="block-23 mb-3">
							<ul>
								<li><span class="icon fa fa-map marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
								<li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>
								<li><a href="#"><span class="icon fa fa-paper-plane pr-4"></span><span class="text">info@yourdomain.com</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">

					<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					</div>
				</div>
			</div>
		</footer>
		
		

		<!-- loader -->
		<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


		<script src="js/jquery.min.js"></script>
		<script src="js/jquery-migrate-3.0.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/jquery.waypoints.min.js"></script>
		<script src="js/jquery.stellar.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/jquery.animateNumber.min.js"></script>
		<script src="js/scrollax.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
		<script src="js/google-map.js"></script>
		<script src="js/main.js"></script>
		<!-- END nav -->
<script>
    // Mega Menu Toggle Script
    document.addEventListener('DOMContentLoaded', function() {
        const servicesDropdown = document.getElementById('servicesDropdown');
        const megaMenu = document.getElementById('servicesMegaMenu');
        const navbar = document.getElementById('ftco-navbar');
        
        // Calculate and set mega menu width to match navbar
        function updateMegaMenuWidth() {
            if (window.innerWidth > 992) {
                const containerWidth = document.querySelector('.navbar .container').offsetWidth;
                megaMenu.style.width = Math.min(containerWidth, 1200) + 'px';
            } else {
                megaMenu.style.width = '100%';
            }
        }
        
        // Toggle menu on click (mobile only)
        servicesDropdown.addEventListener('click', function(e) {
            if (window.innerWidth <= 992) {
                e.preventDefault();
                e.stopPropagation();
                megaMenu.classList.toggle('active');
            }
        });
        
        // Close menu when clicking outside (mobile only)
        document.addEventListener('click', function(e) {
            if (window.innerWidth <= 992) {
                if (!servicesDropdown.contains(e.target) && !megaMenu.contains(e.target)) {
                    megaMenu.classList.remove('active');
                }
            }
        });
        
        // Handle window resize
        window.addEventListener('resize', function() {
            updateMegaMenuWidth();
            if (window.innerWidth > 992) {
                // Reset any active state from mobile
                megaMenu.classList.remove('active');
            }
        });
        
        // Close mega menu on mobile when clicking a link
        if (window.innerWidth <= 992) {
            megaMenu.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', function() {
                    megaMenu.classList.remove('active');
                });
            });
        }
        
        // Initialize on load
        updateMegaMenuWidth();
        
        // Desktop hover behavior (using CSS only - see CSS rules above)
        if (window.innerWidth > 992) {
            // Prevent default link behavior on desktop hover
            servicesDropdown.addEventListener('click', function(e) {
                e.preventDefault();
            });
            
            // Ensure dropdown stays visible when hovering
            megaMenu.addEventListener('mouseleave', function() {
                // Let CSS handle the hover off
            });
        }
    });
</script>
</body>
</html>