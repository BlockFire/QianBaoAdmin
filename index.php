<!DOCTYPE HTML>
<html><head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
		<title>Home</title>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		 <!-- Custom Theme files -->
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
		 <!---- start-smoth-scrolling---->
		<!----webfonts--->
		<link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
		<!---//webfonts--->
		<!----start-top-nav-script---->
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
		<!----//End-top-nav-script---->
	</head>
	<body>
		<!----- start-header---->
			<div id="home" class="header">
					<div class="top-header">
						<div class="container">
						<div class="logo">
							<a href="index.html"><img src="images/logo.png" alt=""></a>

						</div>
						<!----start-top-nav---->
						 <nav class="top-nav">
							<ul class="top-nav">
								<li class="active"><a href="#home" class="scroll">登陆 </a></li>
								<li><a href="#features" class="scroll">当前人员</a></li>
								<li><a href="#gallery" class="scroll">实验室介绍</a></li>
								<li><a href="#video" class="scroll">项目介绍</a></li>
								<li><a href="#price" class="scroll">实验室成员</a></li>
								<!---注释
								<li><a href="#testimonial" class="scroll">Testimonials</a></li>
								<li><a href="#download" class="scroll">Download</a></li>
								<li><a href="#contact" class="scroll">Contact</a></li>
								---->
							</ul>
							<!--<a href="#" id="pull"><img src="images/menu-icon.png" title="menu" /></a>-->
						</nav>
						<div class="clearfix"> </div>
					</div>
				</div>
<!--- banner Slider starts Here --->
	  			<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			<!----//End-slider-script---->
			<!-- Slideshow 4 -->
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
<!--当前人员-->
		<div id="features" class="Featuers">
					<div class="container">
						<div class="gallery-head">
							<h2>当前在线人员:</h2>
						</div>
						      <div class="section group">
								<div class="col-md-3 gallery-box">
										<div id="nivo-lightbox-demo"> <p> <a href="images/pop1.png"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"></a> </p></div>     
									  	<img src="images/p1.png" alt="">
									  	<div class="para_s">
									  		<p>Screen shot#3</p>
									  	</div>
							    </div>
								<div class="col-md-3 gallery-box">
								  	    <div id="nivo-lightbox-demo"> <p> <a href="images/pop2.png" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"></a> </p></div>     
									  	<img src="images/p2.png" alt="">
									  	 <div class="para_s">
									  		<p>Screen shot#3</p>
									  	</div>
							     </div>
								 <div class="col-md-3 gallery-box">
								  		<div id="nivo-lightbox-demo"> <p> <a href="images/pop3.png" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"></a> </p></div>     
									  	<img src="images/p3.png" alt="">
									  	<div class="para_s">
									  		<p>Screen shot#3</p>
									  	</div>
								</div>
							<div class="col-md-3 gallery-box">
								  		<div id="nivo-lightbox-demo"> <p> <a href="images/pop4.png" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"></a> </p></div>     
									  	<img src="images/p4.png" alt="">
									  	<div class="para_s">
									  		<p>Screen shot#3</p>
									  	</div>
								</div>
								<center><a><p>More...</p></a></center>
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
										<!--
										<div id="nivo-lightbox-demo"> <p> <a href="images/pop1.png"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover1"> </span></a> </p></div>     
									  	<img src="images/p1.png" alt="">
									  	<div class="para_s">
									  		<p>Screen shot#3</p>
									  	</div>
									  	-->
									  	<div style="height:280px;background-color:#DEDEDE"></div>
									  	
							    </div>
								<div class="col-md-3 gallery-box">
								  	    <div id="nivo-lightbox-demo"> <p> <a href="images/pop2.png" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover1"> </span></a> </p></div>     
									  	<img src="images/p2.png" alt="">
									  	 <div class="para_s">
									  		<p>Screen shot#3</p>
									  	</div>
							     </div>
								 <div class="col-md-3 gallery-box">
								  		<div id="nivo-lightbox-demo"> <p> <a href="images/pop3.png" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo">  <span class="rollover1"> </span></a> </p></div>     
									  	<img src="images/p3.png" alt="">
									  	<div class="para_s">
									  		<p>Screen shot#3</p>
									  	</div>
								</div>
							<div class="col-md-3 gallery-box">
								  		<div id="nivo-lightbox-demo"> <p> <a href="images/pop4.png" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo">  <span class="rollover1"> </span></a> </p></div>     
									  	<img src="images/p4.png" alt="">
									  	<div class="para_s">
									  		<p>Screen shot#3</p>
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
	<!--//End-Gallery--->
	<!--video-start-->
		 <div id="video" class="Video">
				<div class="container">
				<div class="video-head">
					<a class="play-icon popup-with-zoom-anim" href="#small-dialog4"><span> </span></a><br />
				<h3>Watch the best Technology in<span> Action</span></h3>
				<p>Eum cu tantas legere complectitur, hinc utamur ea eam. Eum patrioque mnesarchum eu, diam erant convenire et vis.Eum patrioque mnesarchum eu, diam erant convenire et vis Et essent evertitur sea, vis cu ubique referrentur, sed eu dicant expetendis.</p>
				</div>
				<!--beanner-info-->
				<!--video-->
				<div id="small-dialog4" class="mfp-hide">
					<iframe src="//player.vimeo.com/video/33790882"  frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
				</div>
				<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
				 <script type="text/javascript" src="js/modernizr.custom.53451.js"></script> 
				 <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
				 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>								  
				</div>
			</div>
<!--video-ends-->
 <div id="price" class="pricing-plans">
					 <div class="container">
					 	<div class="price-head">
					 		<h3>Choose your price</h3>
					 		<p>Summarise what your product all about</p>
					 	</div>
						<div class="pricing-grids">
						<div class="col-md-4 pricing-grid1">
							<div class="price-value">
									<h3><a href="#"> Basic Package</a></h3>
							</div>
							<div class="price-number1">
								<h4><span>20</span><lable>$</lable></h4>
							</div>
							<div class="price-bg">
							<ul>
								<li><a href="#">Vestibulum erat </a></li>
								<li><a href="#">Accumsan posuere</a></li>
								<li><a href="#">Vehicula dignissim </a></li>
							</ul>
							<div class="cart1">
								<a class="popup-with-zoom-anim" href="#small-dialog">Purchase</a>
							</div>
							</div>
						</div>
						<div class="col-md-4 pricing-grid2">
							<div class="price-value">
								<h3><a href="#">Professional Package</a></h3>
							</div>
							<div class="price-number2">
								<h4><span>25</span><lable>$</lable></h4>
							</div>
							
							<div class="price-bg">
							<ul>
								<li><a href="#">Accumsan posuere</a></li>
								<li><a href="#">Vestibulum erat </a></li>
								<li><a href="#">Accumsan posuere</a></li>
								<li><a href="#">Vehicula dignissim </a></li>
							</ul>
							<div class="cart2">
								<a class="popup-with-zoom-anim" href="#small-dialog">Purchase</a>
							</div>
							</div>
						</div>
						<div class="col-md-4 pricing-grid3">
							<div class="price-value">
								<h3><a href="#">Advanced Package</a></h3>
							</div>
							<div class="price-number3">
								<h4><span>30</span><lable>$</lable></h4>
							</div>
							<div class="price-bg">
							<ul>
								<li><a href="#">Vestibulum erat </a></li>
								<li><a href="#">Accumsan posuere</a></li>
								<li><a href="#">Vehicula dignissim </a></li>
							</ul>
							<div class="cart3">
								<a class="popup-with-zoom-anim" href="#small-dialog">Purchase</a>
							</div>
							</div>
						</div>
							<div class="clearfix"> </div>
							<!-----pop-up-grid---->
								 <div id="small-dialog" class="mfp-hide">
									<div class="pop_up">
									 	<div class="payment-online-form-left">
											<form>
												<h4><span class="shipping"> </span>Shipping</h4>
												<ul>
													<li><input class="text-box-dark" type="text" value="Frist Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Frist Name';}"></li>
													<li><input class="text-box-dark" type="text" value="Last Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}"></li>
												</ul>
												<ul>
													<li><input class="text-box-dark" type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}"></li>
													<li><input class="text-box-dark" type="text" value="Company Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Company Name';}"></li>
												</ul>
												<ul>
													<li><input class="text-box-dark" type="text" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}"></li>
													<li><input class="text-box-dark" type="text" value="Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address';}"></li>
													<div class="clear"> </div>
												</ul>
												<div class="clearfix"> </div>
											<ul class="payment-type">
												<h4><span class="payment"> </span> Payments</h4>
												<li><span class="col_checkbox">
													<input id="3" class="css-checkbox1" type="checkbox">
													<label for="3" name="demo_lbl_1" class="css-label1"> </label>
													<a class="visa" href="#"> </a>
													</span>
													
												</li>
												<li>
													<span class="col_checkbox">
														<input id="4" class="css-checkbox2" type="checkbox">
														<label for="4" name="demo_lbl_2" class="css-label2"> </label>
														<a class="paypal" href="#"> </a>
													</span>
												</li>
												<div class="clearfix"> </div>
											</ul>
												<ul>
													<li><input class="text-box-dark" type="text" value="Card Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Card Number';}"></li>
													<li><input class="text-box-dark" type="text" value="Name on card" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name on card';}"></li>
													<div class="clear"> </div>
												</ul>
												<ul>
													<li><input class="text-box-light hasDatepicker" type="text" id="datepicker" value="Expiration Date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Expiration Date';}"><em class="pay-date"> </em></li>
													<li><input class="text-box-dark" type="text" value="Security Code" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Security Code';}"></li>
													<div class="clear"> </div>
												</ul>
												<ul class="payment-sendbtns">
													<li><input type="reset" value="Cancel"></li>
													<li><input type="submit" value="Process order"></li>
												</ul>
												<div class="clearfix"> </div>
											</form>
										</div>
						  			</div>
								</div>
								<!-----pop-up-grid---->
							</div>
						<div class="clearfix"> </div>
					</div>
				
				</div>
	<!----End-pricingplans---->
	<div id="testimonial" class="Testimonials">
		<div class="container">
			<!---- testmonials ---->
			<h3>Testimonials</h3>
				<div class="test-monials">
				<!----sreen-gallery-cursual---->
						<div class="sreen-gallery-cursual">
							 <!-- requried-jsfiles-for owl -->
							<link href="css/owl.carousel.css" rel="stylesheet">
							    <script src="js/owl.carousel.js"></script>
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo").owlCarousel({
							        items : 1,
							        lazyLoad : true,
							        autoPlay : true,
							        navigation : false,
							        navigationText :  false,
							        pagination : true,
							      });
							    });
							    </script>
							 <!-- //requried-jsfiles-for owl -->
							 <!-- start content_slider -->
						       <div id="owl-demo" class="owl-carousel">
					                <div class="item">
					                		<div class="col-md-3 testmonial-img">
						                		<img src="images/slide1.png" class="img-responsive" alt=""/>
					                		</div>
					                		<div class="col-md-9 testmonial-text">
						                		<p>Lorem ipsum dolor sit amet, offendit volutpat sea ex, at omnium scripta pro, at omnium scripta pro, ei mea oratio malorum forensibus. ei mea oratio malorum forensibus. Sed ei omnes laoreet posidonium ei mea oratio malorum forensibus.</p>
						                		<h4>John Doe</h4>
						                		<h5>from some company</h5>
					                		</div>
					                		<div class="clearfix"> </div>
					                </div>
					                 <div class="item">
					                		<div class="col-md-3 testmonial-img">
						                		<img src="images/slide2.png" class="img-responsive" alt=""/>
					                		</div>
					                		<div class="col-md-9 testmonial-text">
						                		<p>Lorem ipsum dolor sit amet, offendit volutpat sea ex, at omnium scripta pro, ei mea oratio malorum forensibus. at omnium scripta pro, ei mea oratio malorum forensibus. Sed ei omnes laoreet posidonium ei mea oratio malorum forensibus.</p>
						                		<h4>John Doe</h4>
						                		<h5>from some company</h5>
					                		</div>
					                		<div class="clearfix"> </div>
					                </div>
					                 <div class="item">
					                	<div class="col-md-3 testmonial-img">
						                		<img src="images/slide3.png" class="img-responsive" alt=""/>
					                		</div>
					                		<div class="col-md-9 testmonial-text">
						                		<p>Lorem ipsum dolor sit amet, offendit volutpat sea ex, at omnium scripta pro at omnium scripta pro, ei mea oratio malorum forensibus. ei mea oratio malorum forensibus. Sed ei omnes laoreet posidonium ei mea oratio malorum forensibus.</p>
						                		<h4>John Doe</h4>
						                		<h5>from some company</h5>
					                		</div>
					                		<div class="clearfix"> </div>
					                </div>
				              </div>
						<!--//sreen-gallery-cursual---->
					</div>
				</div>
			</div>
		</div>
		<!---- testmonials ---->
		<div id="download" class="Download">
			<div class="container">
				<div class="download-head">
					<h3>Do you Like this app?</h3>

			 		<a class="dow-btn" href="#">Download</a>
			 	</div>
			 </div>
	 	</div>
		<div id="contact" class="Contact">
			<div class="contact-map">
				<iframe src="http://developer.baidu.com/map/jsdemo/demo/a1_1.htm" frameborder="0" style="border:0"></iframe>
				<div class="contact-form">
					<div class="contact-head">
						<h4>Contact</h4>
					 </div>
					<form> 
					     <input type="text" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
						 <input type="text" class="text" value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}">
						<input type="text" class="text" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}">
						<textarea value="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
						<div class="clearfix"> </div>
						<div class="sub-button">
							<input name="submit" type="submit" value="Send ">
						</div>
					</form>
				</div>
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