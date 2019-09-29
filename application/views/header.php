<!--
Author: kenny
Author URL: http://koechkenny.com
-->
<!DOCTYPE html>
<html lang="en">
<head>

<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Electronic Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- Custom Theme files -->
<link href="<?php echo base_url();?>/assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/w3.css">
<link href="<?php echo base_url();?>/assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url();?>/assets/css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url();?>/assets/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />

<link href="<?php echo base_url();?>/assets/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="<?php echo base_url();?>/assets/js/jquery.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/jquery.countdown.css" /> <!-- countdown --> 
<!-- //js -->  
<!-- web fonts --> 
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //web fonts -->  
<!-- start-smooth-scrolling -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- //end-smooth-scrolling --> 
</head> 
<body>

<script type="text/javascript" src="<?php echo base_url();?>/assets/js/bootstrap-3.1.1.min.js"></script>
			<script src="<?php echo base_url();?>/assets/js/easyResponsiveTabs.js" type="text/javascript"></script>
			<script type="text/javascript">
				$(document).ready(function () {
					$('#horizontalTab').easyResponsiveTabs({
						type: 'default', //Types: default, vertical, accordion           
						width: 'auto', //auto or any width like 600px
						fit: true   // 100% fit in a container
					});
				});
			</script>
			<div id="OR" class="hidden-xs">OR</div>
		</div>
		<div class="col-md-4 modal_body_right modal_body_right1">
			<div class="row text-center sign-with">
				<div class="col-md-12">
					<h3 class="other-nw">Sign in with</h3>
				</div>
				<div class="col-md-12">
					<ul class="social">
						<li class="social_facebook"><a href="#" class="entypo-facebook"></a></li>
						<li class="social_dribbble"><a href="#" class="entypo-dribbble"></a></li>
						<li class="social_twitter"><a href="#" class="entypo-twitter"></a></li>
						<li class="social_behance"><a href="#" class="entypo-behance"></a></li>
					</ul>
				</div>
			</div>
		</div>
			</div>
	<script>
		$('#myModal88').modal('show');
	</script>  
	<!-- header modal -->
	<!-- header -->
	<div class="header" id="home1">
		<div class="container">
			<div class="w3l_login">
				<a href="#" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
			</div>
			<div class="w3l_logo">
				<h1><a href="<?php echo base_url();?>home">Vulcan inc.<span>Your stores. Your place.</span></a></h1>
			</div>
			<div class="search">
				<input class="search_box" type="checkbox" id="search_box">
				<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
				<div class="search_form">
				<?php echo form_open('search_results')?>
					<?php echo form_input(array('name'=>'search'))?>
					<?php echo form_submit('search_submit','Search')?>
      			<?php echo form_close()?>
				</div>
			</div>
		
		</div>
	</div>
	<!-- //header -->
	<!-- navigation -->
	<div class="navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav">
						<li><a href="<?php echo base_url();?>admin">Admin</a></li>
						<li><a href="<?php echo base_url();?>admin/check_orders">Admin_Check_Orders</a></li>
						<li><a href="<?php echo base_url();?>home">Shop</a></li>  		 	
						 <li><a href="<?php echo base_url();?>cart/view_cart" class="glyphicon glyphicon-shopping-cart" >View Cart</a></li>
						 <li><a href="<?php echo base_url();?>cart/checkout">Checkout</a></li>
					</ul>
				</div>
			</nav>
		</div>
    </div> 