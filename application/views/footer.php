	<!-- //newsletter -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-3 w3_footer_grid">
					<h3>Contact</h3>
					<p>Company Address</p>
					<ul class="address">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>281 Kericho<span>Kericho-Kenya</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="">abigaelchebet@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+254 703567799</li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Information</h3>
					<ul class="info"> 
						<li><a href="">About Us</a></li>
						<li><a href="">Contact Us</a></li>
						<li><a href="">FAQ's</a></li>
					</ul>
				</div>

				<div class="col-md-3 w3_footer_grid">
					<h3>Find Us</h3>
					<ul class="info"> 
						<li><a href="">Shop With Us</a></li>
					</ul>
					<h4>Follow Us</h4>
					<div class="agileits_social_button">
						<ul>
							<li><a href="" class="facebook"> </a></li>
							<li><a href="" class="twitter"> </a></li>
							<li><a href="" class="google"> </a></li>
							<li><a href="" class="pinterest"> </a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-copy">
			<div class="footer-copy1">
				<div class="footer-copy-pos">
					<a href="#home1" class="scroll"><img src="<?php echo base_url();?>/assets/images/arrow.png" alt=" " class="img-responsive" /></a>
				</div>
			</div>
			<div class="container">
				<p>&copy; 2019 Electronic Store. All rights reserved | Designed by <a href="">abigaelchebet</a></p>
			</div>
		</div>
	</div>
	<!-- //footer --> 
	<!-- cart-js -->
	<script src="<?php echo base_url();?>/assets/js/minicart.js"></script>
	<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) { 
        		}
        	}
        });
    </script>  
	<!-- //cart-js -->   
</body>
</html>