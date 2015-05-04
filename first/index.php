<!DOCTYPE html>
<html>
	<head>
        <title>GatorMusic</title>
		<link rel="stylesheet" href="css/jquery.mobile-1.4.5.css">

		<script src="js/jquery-1.11.2.js"></script>
		<script>
		    $(document).on("mobileinit", function(evt) {
		      // Change some settings
		    	$.mobile.defaultPageTransition = "flip";
		    	$.mobile.pageLoadErrorMessage = "Whoops!";
		    	$.mobile.pageLoadErrorMessageTheme = "b";
			});
		</script>
		<script src="js/jquery.mobile-1.4.5.js"></script>
		<link rel="stylesheet" href="css/slicknav.css" />
		<script src="js/jquery.slicknav.js"></script>
		<script type="text/javascript" src="js/responsiveslides.js"></script>
		<link rel="stylesheet" href="css/style-mobile.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script>
			
			$(function(){
			   	$( "[data-role='header'], [data-role='footer']" ).toolbar();
			});	    	
		   	$(function(){
				$('#menu').slicknav({
					prependTo:'#navigation-menu'
				});
			});
			$(function(){
				$('#menu-contact').slicknav({
					prependTo:'#navigation-menu-contact'
				});
			});
			$(function(){
				$('#menu-home').slicknav({
					prependTo:'#navigation-menu-home'
				});
			});
			$(function(){
				$('#menu-about').slicknav({
					prependTo:'#navigation-menu-about'
				});
			});
			$(function(){
				$('#menu-awards').slicknav({
					prependTo:'#navigation-menu-awards'
				});
			});
			$(function(){
				$('#menu-blog').slicknav({
					prependTo:'#navigation-menu-blog'
				});
			});
			$(function(){
				$('#menu-brand').slicknav({
					prependTo:'#navigation-menu-brand'
				});
			});
			$(function(){
				$('#menu-faq').slicknav({
					prependTo:'#navigation-menu-faq'
				});
			});
			$(function(){
				$('#menu-ourteam').slicknav({
					prependTo:'#navigation-menu-ourteam'
				});
			});
			$(function(){
				$('#menu-patientinfo').slicknav({
					prependTo:'#navigation-menu-patientinfo'
				});
			});
			$(function(){
				$('#menu-services').slicknav({
					prependTo:'#navigation-menu-services'
				});
			});
			$(function(){
				$('#menu-patientform').slicknav({
					prependTo:'#navigation-menu-patientform'
				});
			});
			$(function(){
				$('#menu-newbuffalo').slicknav({
					prependTo:'#navigation-menu-newbuffalo'
				});
			});
			$(function () {

		      // Slideshow 4
		      	$("#slider4").responsiveSlides({
			        auto: true,
			        pager: false,
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
		    $(function () {

		      // Slideshow web
		      	$("#slider-web").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: false,
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
    	
	</head>
	<body>
		
		<?php 
			include 'settings.php';
			
			
		?>
		<div id="header-image" data-role="header" data-theme="<?php echo $theme ?>" data-position="fixed">
		    <h1><img src="img/logo.png" alt="LOGO"></h1>
		</div>
		<div data-role="footer" data-theme="<?php echo $theme ?>" data-position="fixed">
            <h1>Powered by <a href="http://www.mobilegrows.com" rel="external">MobileGrows</a> | <a href="http://www.gatormusicsupply.com/" rel="external">Desktop Site</a></h1>

		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<div data-role="page" id="page1" data-theme="<?php echo $theme ?>">
		  

		  <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
		  		<!-- Jssor Slider Begin -->
			  	<div class="callbacks_container">
				    <ul class="rslides" id="slider4">
				      <li>
				        <img src="img/slider-images/1.jpg" alt="">
				        <!-- <p class="caption">This is a caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/2.jpg" alt="">
				        <!-- <p class="caption">This is another caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/3.jpg" alt="">
				        <!-- <p class="caption">The third caption</p> -->
				      </li>
                        <li>
                            <img src="img/slider-images/4.jpg" alt="">
                            <!-- <p class="caption">The third caption</p> -->
                        </li>
                        <li>
                            <img src="img/slider-images/5.jpg" alt="">
                            <!-- <p class="caption">The third caption</p> -->
                        </li>
                        <li>
                            <img src="img/slider-images/6.jpg" alt="">
                            <!-- <p class="caption">The third caption</p> -->
                        </li>
                         <li>
                            <img src="img/slider-images/7.jpg" alt="">
                            <!-- <p class="caption">The third caption</p> -->
                        </li>
                         <li>
                            <img src="img/slider-images/8.jpg" alt="">
                            <!-- <p class="caption">The third caption</p> -->
                        </li>
                         <li>
                            <img src="img/slider-images/9.jpg" alt="">
                            <!-- <p class="caption">The third caption</p> -->
                        </li>
                         <li>
                            <img src="img/slider-images/10.jpg" alt="">
                            <!-- <p class="caption">The third caption</p> -->
                        </li>
                         <li>
                            <img src="img/slider-images/11.jpg" alt="">
                            <!-- <p class="caption">The third caption</p> -->
                        </li>

				    </ul>
			    </div>
			    <!-- Jssor Slider End -->
				<fieldset class="ui-grid-a" data-theme="<?php echo $theme ?>">
					<!-- OVDJE SE UPISUJE BROJ TELEFONA KOJI TREBA POZVATI  -->
					<div class="ui-block-a"><a class="ui-btn ui-icon-phone ui-btn-icon-left buttons-radius" href="tel:<?php echo $telephone ?>">Call US</a></div>
					<!-- ovdje se upisuje grad i adresa iz koje  -->
					<div class="ui-block-b" id="findUS">
						<script>
							var ua = navigator.userAgent;
							if(/Android|webOS|Opera Mini/i.test(navigator.userAgent) ) {
								console.log("Android uslo");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}
							else if(/iPhone|iPad|iPod/i.test(navigator.userAgent)){
								console.log("Iphone ");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"http://maps.google.com/?daddr=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?> ");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}
							else if (ua.indexOf("BlackBerry") >= 0) {

									console.log("Blakberu je prosao ")
									var prostordugme=document.getElementById('findUS');
									var dugme= document.createElement('a');
									dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
									dugme.setAttribute('href',"javascript:blackberry.launch.newMap({'address':{'address1':'<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>'}});");
									dugme.innerHTML="Find US";
									prostordugme.appendChild(dugme);
									}		
							else {
								console.log("nije nigdje uslo default ")
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}

							

							// if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
							// // some code..
							// }

						</script>
						
						

					</div>	   
				</fieldset>
			
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Home</a></div>
				</div>

			<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#about" data-transition="<?php echo $transitionefect ?>">About Us</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#blog" data-transition="<?php echo $transitionefect ?>">Blog</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#brand" data-transition="<?php echo $transitionefect ?>">Brands</a></div>
				</div>
					<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#faq" data-transition="<?php echo $transitionefect ?>">Faq</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#awards" data-transition="<?php echo $transitionefect ?>">Awards</a></div>
				</div>
				 <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-mail ui-btn-icon-left buttons-radius" href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></div>
				</div>

		  </div>
		

		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- page home ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div id="home" data-role="page"  data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-home">
						<ul id="menu-home">
							
							<li><a href="#about" data-transition="<?php echo $transitionefect ?>">About US</a></li>
							<li><a href="#blog" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
							<li><a href="#brand" data-transition="<?php echo $transitionefect ?>">Brands</a></li>
                            <li><a href="#faq" data-transition="<?php echo $transitionefect ?>">Faq</a></li>
                             <li><a href="#awards" data-transition="<?php echo $transitionefect ?>">Awards</a></li>
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
						</ul>
					</section>
                    <h3> Gator Music Musical Instrument Store </h3>
                    <p> Please contact our officiNaples best guitar shop! Sales, rentals, lessons and repairs. Come down and see Dave, Danny and Anthony for all your music needs.</strong> </p>
	<img src="img/logos.png" alt="" style="
    padding-left: 60px;">

					 
					

				</div>

			</div>	
				
				
		</div>
		
	<!-- page home ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
	<!-- page awards ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div id="awards" data-role="page"  data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-awards">
						<ul id="menu-awards">
							<li><a href="#home" data-transition="<?php echo $transitionefect ?>">Home</a></li>
							<li><a href="#about" data-transition="<?php echo $transitionefect ?>">About US</a></li>
							<li><a href="#blog" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
							<li><a href="#brand" data-transition="<?php echo $transitionefect ?>">Brands</a></li>
                            <li><a href="#faq" data-transition="<?php echo $transitionefect ?>">Faq</a></li>
                      
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
						</ul>
					</section>
                   
						<img src="img/slika2.jpg" alt="">
						<img src="img/slika3.jpg" alt="">
						<img src="img/slika5.jpg" alt="">
						<img src="img/slika4.jpg" alt="">

					 
					

				</div>

			</div>	
				
				
		</div>
		
	<!-- page awards end ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
	<!-- page  about us ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
	<div id="about" data-role="page"  data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-about">
						<ul id="menu-about">
							<li><a href="#home" data-transition="<?php echo $transitionefect ?>">Home</a></li>
						
							<li><a href="#blog" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
							<li><a href="#brand" data-transition="<?php echo $transitionefect ?>">Brands</a></li>
                            <li><a href="#faq" data-transition="<?php echo $transitionefect ?>">Faq</a></li>
                            <li><a href="#awards" data-transition="<?php echo $transitionefect ?>">Awards</a></li>
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
						</ul>
					</section>
                    <h3> Gator Music was voted best Music Store by the Naples Daily News again this year! Thanks for all your support!</h3>
                    <h3> <strong>Tip of the day</strong> </h3>
                    <p>Don't forget to bring extra strings and string changing tools to practice and gigs. The one time you forget you will undoubtedly break a string! Likewise for tube amplifiers, never forget to bring back up vacuum tubes, or a backup amplifier.</p>
					 <h3> <strong>Tip of the day</strong> </h3>
 					<p>Every few string changes be sure to use fretboard conditioner such as hydrate or guitar honey on the unfinished parts of your acoustic guitar. The fretboard and bridge will dry out causing loose frets and cracked bridges.</p>
 					 <h3> <strong>Tip of the day</strong> </h3>
 					 <p>If you're going to put your guitar in storage for an extended period of time don't forget to loosen the strings! And an attic in Florida does not qualify as a place to store your instrument.</p>
					<h3>Who We Are In Short</h3>
					<p>Naples best guitar shop! Sales, rentals, lessons and repairs. Come down and see Dave, Danny and Anthony for all your music needs.</p>
					<h3>SEE OUR DETAILS </h3>
					<img src="img/logos.png" alt="" style="padding-left: 60px;">
					<p>We Are Gator Music Store and Supply</p>
					<p>© Copyright MobileGrows.com
						MobileGrows.com</p>
					 
					

				</div>

			</div>	
				
				
		</div>
		<!-- page  about us end ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!-- page brand ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<div id="brand" data-role="page"  data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-brand">
						<ul id="menu-brand">
							<li><a href="#home" data-transition="<?php echo $transitionefect ?>">Home</a></li>
							<li><a href="#about" data-transition="<?php echo $transitionefect ?>">About US</a></li>
								<li><a href="#blog" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
                            <li><a href="#faq" data-transition="<?php echo $transitionefect ?>">Faq</a></li>
                     		 <li><a href="#awards" data-transition="<?php echo $transitionefect ?>">Awards</a></li>
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
						</ul>
					</section>
  <img src="	img/brands.jpg" alt="">
				</div>

			</div>	
				
				
		</div>
<!-- page brand end ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		
	
	<!-- page faq///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div id="faq" data-role="page"  data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-faq">
						<ul id="menu-faq">
							<li><a href="#home" data-transition="<?php echo $transitionefect ?>">Home</a></li>
							<li><a href="#about" data-transition="<?php echo $transitionefect ?>">About US</a></li>
							<li><a href="#blog" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
							<li><a href="#brand" data-transition="<?php echo $transitionefect ?>">Brands</a></li>
                          	 <li><a href="#awards" data-transition="<?php echo $transitionefect ?>">Awards</a></li>
                      
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
						</ul>
					</section>
                   
						<h3>What guitar best fits my playing style?</h3>

					 <p>While many players suggest that small-bodied guitars like 00, 000 and OM’s are more suited to fingerstyle playing, we feel that there is no “correct” guitar for any style player. As an example, Norman Blake flat picks mostly small-bodied guitars; other players fingerpick dreadnaughts. There is no hard and fast rule – it’s about what you like to hear and what feels right to you.</p>
					<h3>What neck width and depth should I choose?</h3>
					<p>	Some people feel a certain nut width or string spacing at the bridge is a requirement for a certain style of playing. The reality is that there is no rule here either – most players have a preference regarding neck width and depth but it is a completely personal issue. Compare, for example, two modern-day flatpicking legends: Clay Hess likes a 1 & 3/4 modified V, while Jack Lawrence prefers a full thickness 1 & 11/16ths. Good players can play anything, but usually find a size and width that works for them.</p>
					<h3>Should I choose mahogany or rosewood?</h3>
					<p>	There are some very definite tonal characteristics that separate these two tone woods. Mahogany is a sweeter, brighter, lighter sounding wood and rosewood is darker and more robust in the bass register and usually has more sustain. We normally encourage people who are strumming and want to provide rhythm support in an ensemble situation to go with rosewood and those who are flatpicking bluegrass leads to choose mahogany – although this also debatable! Again – the determining factor is really what you like to hear.</p>
					<h3>How do differences in bracing affect tone?</h3>
					<p>	There are actually a number of different bracing patterns; the most common types are straight bracing, scalloped bracing and forward-shifted scalloped bracing. The best-known straight-braced guitars in the Martin line are the D-18, D-28 and D-35. 5/16ths” braces impart a brighter tone; 1/4” braces impart a more profound bass response. Scalloping the braces (which is achieved by shaving some of the wood off of the brace) makes the top vibrate more which creates both bass and volume. Shifting the braces slightly toward the soundhole makes the bass response even stronger.</p>
					<h3>s there a difference between models of the same make?</h3>
					<p>In our experience, we feel there is actually very little variation in modern models of the same guitar (i.e. a Martin D-18 Golden Era or a Santa Cruz OM). Some will disagree with this, but we feel builders like Martin, Santa Cruz, Bourgeois, etc., have synergized all the good stuff they have learned over time and build guitars of excellent consistency. Vintage guitars, however, can vary wildly in tone and balance and many supposedly “great” vintage guitars can be very ho-hum (although once again, this is largely a personal preference, not an empirical fact).</p>
					<h3>Why is it important to keep acoustic guitars at the correct humidity level?</h3>
					<p>Incorrect humidity levels can be very damaging to acoustic guitars over time. Humidity levels that are too low will result in the wood in your guitar drying out and becoming brittle. Also, your neck will start to shrink and the frets can start to come loose. Too much humidity can cause the neck or top of the guitar to warp – making the instrument difficult to play, causing poor intonation, or ultimately forcing a neck re-set or a re-top of the guitar.</p>
					<h3>Is it bad to ship guitars in cold weather or on Fridays?</h3>
					<p>When it’s cold, the best thing to do is bring the guitar inside and let it acclimate for 24 hours before you open it – it’s mostly the abrupt climatic change that causes the problem. Our vendors ship us all kinds of guitars on Fridays and we ship many ourselves and we have never had a problem in that regard. Of course, the absolutely safest way to ship a guitar is overnight (because there is less handling), but it’s more expensive.</p>
					<h3>Is one shipping carrier better than another?</h3>
					<p>We have found that all the carriers are about the same – they all do a real good job and hardly ever hurt anything. But occasionally, they do – it’s just the laws of probability. The least expensive method is usually US Postal, but they also have the highest number of guitars damaged in shipment.</p>
					<p>© Copyright MobileGrows.com</p>


				</div>

			</div>	
				
				
		</div>
		
	<!-- page faq end ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
	<!--contact form///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="contactform" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-contact">
							<ul id="menu-contact">
                               <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Home</a></li>
							<li><a href="#about" data-transition="<?php echo $transitionefect ?>">About US</a></li>
							<li><a href="#blog" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
							<li><a href="#brand" data-transition="<?php echo $transitionefect ?>">Brands</a></li>
                            <li><a href="#faq" data-transition="<?php echo $transitionefect ?>">Faq</a></li>
                             <li><a href="#awards" data-transition="<?php echo $transitionefect ?>">Awards</a></li>
							</ul>
					</section>	
					<div>
						<form data-parsley-validate method="post" action="mail.php" data-ajax="false">
							Name: <input type="text" id="naam" name="naam" value="" placeholder="Name" required/>
							E-mail: <input type="email" id="mail" name="mail" value="" placeholder="E-mail" required/>
							Phone Number: <input type="tel" id="telefoon" name="telefoon" value="" placeholder="Phone"/>
							Subject: <input type="text" id="onderwerp" name="onderwerp" value="" placeholder="Subject" required/>
							Message:
							<textarea style="height:100px;" id="bericht" name="bericht" placeholder="Enter your message here..." required></textarea>
							<input type="submit" value="Send" name="submit" class="btn">
						</form>
					</div>
				</div>
			</div>
		
		</div>

		<!--page contact ends///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->



<!--page succes ends here///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="error" data-role="page" >
		
			<div data-role="main" class="ui-content" >	
				<p>The contact form was sent because of an error!</p>
			</div>
		
		</div>
<!--erroor ends here////////////////////////////////////////////////////////////////////////////////////////////////////-->
	
	
		<script type="text/javascript" src="js/responsiveslides.js"></script>    
	
	   
		
	</body>
</html>
