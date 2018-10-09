<!DOCTYPE HTML>
<html><head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
		<title>Home</title>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
		 <!-- Custom Theme files -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
		 <!---- start-smoth-scrolling---->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
			});
		</script>
	</head>
	<body>
			<div id="home" class="header">
					<div class="top-header">
						<div class="container">
						<div class="logo">
							<a href="index.html"><img src="images/logo.png" alt=""></a>

						</div>
						 <nav class="top-nav">
							<ul class="top-nav">
								<li class="active"><a href="#home" class="scroll">登陆 </a></li>
								<li><a href="#features" class="scroll">当前人员</a></li>
								<li><a href="#gallery" class="scroll">实验室介绍</a></li>
								<li><a href="#video" class="scroll">项目介绍</a></li>
								<li><a href="#price" class="scroll">实验室成员</a></li>
							</ul>
						</nav>
						<div class="clearfix"> </div>
					</div>
				</div>
			    <div  id="top" class="callbacks_container">
			      <ul class="rslides" id="slider4">
			        <li>
			          <div class="slider-top">
			          		
	          				<ul class="button">
								<li><a href="#">登入</a></li>
								<li><a href="#">登出</a></li>
							</ul>
			        </li>
			      </ul>
			    </div>
			    <div class="clearfix"> </div>
		</div>
		<!----- //End-slider---->
		<!--
			 <div id="features" class="Features">
					<div class="container">
						<div class="feature-grids">
					 	<div class="col-md-3 feature-grid">
					 		<i class="icon1"> </i>
					 	</div>
					 	<div class="col-md-3 feature-grid">
					 		<i class="icon2"> </i>
					 	</div>
					 	<div class="col-md-3 feature-grid">
					 		<i class="icon3"> </i>
					 	</div>
					 	<div class="col-md-3 feature-grid">
					 		<i class="icon4"> </i>
					 	</div>
				 				<div class="clearfix"> </div>
				 		</div>
					</div>
				</div>
				-->
					<!----- //End-features---->
					<div id="gallery" class="Gallery">
					<div class="container">
						<div class="gallery-head">
							<h3>项目介绍</h3>
						</div>
						      <div class="section group">
								<div class="col-md-3 gallery-box">
									  	<div style="height:140px;width:140px:background-color:#DEDEDE"></div>
							    </div>
								<div class="col-md-3 gallery-box">
								  	    <div style="height:140px;width:140px:background-color:#DEDEDE"></div>
							     </div>
								 <div class="col-md-3 gallery-box">
								  		<div style="height:140px;width:140px:background-color:#DEDEDE"></div>
								</div>
								<div class="col-md-3 gallery-box">
								  		<div style="height:140px;width:140px:background-color:blue"></div>
								</div>
								</div>
							<div class="clearfix"> </div>
						</div>
				   <script type="text/javascript" src="js/nivo-lightbox.min.js"></script>
				<script type="text/javascript">
				$(document).ready(function(){
				    $('#nivo-lightbox-demo a').nivoLightbox({ effect: 'fade' });
				});
				</script>
		</div>
	</div>
	
						<div id="gallery" class="Gallery">
					<div class="container">
						<div class="gallery-head">
							<h3>当前人员</h3>
						</div>
						      <div class="section group">
								<div class="col-md-3 gallery-box">
									  	<div style="height:140px;width:140px:background-color:#DEDEDE"></div>
							    </div>
								<div class="col-md-3 gallery-box">
								  	    <div style="height:140px;width:140px:background-color:#DEDEDE"></div>
							     </div>
								 <div class="col-md-3 gallery-box">
								  		<div style="height:140px;width:140px:background-color:#DEDEDE"></div>
								</div>
								<div class="col-md-3 gallery-box">
								  		<div style="height:140px;width:140px:background-color:blue"></div>
								</div>
								</div>
							<div class="clearfix"> </div>
						</div>
				   <script type="text/javascript" src="js/nivo-lightbox.min.js"></script>
				<script type="text/javascript">
				$(document).ready(function(){
				    $('#nivo-lightbox-demo a').nivoLightbox({ effect: 'fade' });
				});
				</script>
		</div>
	</div>
		<!----- /start-footer---->
				<div class="footer">
						<div class="container">
							<div class="footer-content">
									change by linc
							</div>	
						</div>	
						<div class="clearfix"> </div>  							
					</div>
					<!----- //End-footer---->
				<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
					<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


</body>
</html>