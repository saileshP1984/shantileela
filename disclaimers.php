<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!--><html class="no-js" lang="en"><!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>ShantiLeela Realty | Disclaimers</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	
	
	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="css/base.css"/>
	<link rel="stylesheet" href="css/skeleton.css"/>
	<link rel="stylesheet" href="css/layout.css"/>
	<link rel="stylesheet" href="css/font-awesome.css" />
	<link rel="stylesheet" href="css/settings.css" />	
	<link rel="stylesheet" href="css/jquery.fancybox.css" />
	<link rel="stylesheet" href="css/flat_filled_styles.css"><!--SVG Animation Styles-->
	<link rel="stylesheet" href="css/retina.css"/>
	

		
	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.png">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">
	
	<style>
		#link-work .cl-effect-5 a
		{
			font-size: 30px;
		}
		
		.container .one-third.column
		{
			height: 400px;
		}
		
		#about-what-we-do
		{
			padding-bottom: 0px;
		}
		
		.container .nine.columns
		{
			width: 700px;
		}
		
		.video-section-2  p
		{
			text-align: justify;
		}
		
		.nav-info
		{
			padding: 0px;
			float: right;
		}
		
		.nav-info li
		{
			display: inline-block;
			margin-right: 20px;
			margin-top: 10px;
		}
		
		.nav-info li a
		{
			color: #4a4949;
			font-size: 12px;
		}
		
		#topbar-wrap {
			position: fixed;
			padding-bottom: 10px;
			width: 100%;
			z-index: 500;
			top: 0;
			left: 0;
		}
		
		.less-padding{
			padding-top: 10px !important;
		}
		
		.header-text h1
		{
			position: relative;
			padding-bottom: 20px;
		}
		
		.header-text p
		{
			padding-top: 20px;
			text-align: left;
		}
		
		#about {
			
			padding-top: 10.9em;
			
		};
	</style>
	
</head>
<body class="royal_loader">	
	<!-- Primary Page Layout
	================================================== -->

			<div id="topbar-wrap" class="menu-back cbp-af-header">
				
				<div class="sixteen columns">
					<ul class="nav-info">
						<li> <i class="icon-phone"></i> <a href="#">022 67002700</a> </li>
						<li> <i class="icon-envelope"></i> <a href="#">info@shantileela.in</a> </li>
						<li><a href ="shantilella-profile.pdf" target="_blank"><u>Download Company Profile</u></a></li> 
					</ul>
				</div>
				
			</div>
		
			<div id="menu-wrap" class="menu-back cbp-af-header">
				
					<div class="sixteen columns">
						<div class="logo"><img src="images/logos/logo-1.png" alt=""/></div>
						<ul class="slimmenu">
							<li> 
								<a class="scroll" href="index.html">Home</a>
							</li>
							<li>
								<a class="scroll" href="index.html">Projects</a>
							</li>
							<li>
								<a class="scroll" href="index.html">Company</a>
							</li>
							<li>
								<a class="scroll" href="index.html">Re Development</a>
							</li>
							
							<li> 
								<a class="scroll" href="index.html">Testimonials</a>
							</li>
							<li>
								<a class="scroll" href="index.html">Contact</a>
							</li>
						</ul>
					</div>
				
			</div>
			
						
			<div id="about">
				<div class="container">
					<div class="sixteen columns" data-scrollreveal="enter top and move 150px over 1s">
						
						
						<div class="header-text">
							<h1>Disclaimers</h1>
							<hr>
							<p style="text-transform: none;">This webpage/website does not constitute an offer and/or acceptance and/or contract and/or agreement and/or transaction and/or any intention thereof, of any nature whatsoever.</p>
							<p style="text-transform: none;">All specifications, drawings, amenities,facilities, parameters etc shown in this website are subject to change as per the approval from respective authorities. The final discretion remains with the developers.</p>
							<p style="text-transform: none;">All dimensions mentioned in the drawings may vary/differ due to construction exigencies. Actual product may vary/differ from what is indicated herein.</p>
							<p style="text-transform: none;">The photographs contained herein may be stock/standard photography used for the purpose and have been taken at a location other than the Onella project site and are used to indicate a conceptual lifestyle.</p>
							<p style="text-transform: none;">No representation or warranty is made or intended as to the accuracy or completeness of information herein or as to its suitability or adequacy for any purpose.</p>
						</div>
						
					</div>
					
				</div>
			</div>
			
			
			
			<div id="footer">
				<a class="scroll" href="#home"><div class="back-top">&#xf102;</div></a>	
				<div class="container">
					<div class="sixteen columns">
						<p><small>Copyright &copy; 2017 ShantiLeela Realty. All Rights Reserved | <a href="disclaimers.php">Disclaimers</a></small></p>
					</div>
				</div>	
			</div>



	
	<!-- JAVASCRIPT
    ================================================== -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
      $(function () {
        // sticky footer
        (function () {
          var
            $window = $(window),
            $body   = $(document.body),
            $footer = $("#footer"),
            condition = false,
            resizing  = false,
            interval  = 500
            ;

          function positionFooter() {
            if (resizing) {
              setTimeout(function(){
                if(resizing == false) {
                  positionFooter();
                }
              }, interval);
              return true;
            }
            var
              footer_position = $footer.css('position'),
              body_height   = $body.height(),
              window_height = $window.height(),
              footer_height = $footer.outerHeight();

            if (footer_position == 'absolute') {
              condition = body_height + footer_height < window_height
            }
            else {
              condition = body_height < window_height
            }

            if (condition) {
              $footer.css('position', 'absolute').css('bottom', 0);
            }
            else {
              $footer.css('position', 'relative');
            }

            resizing = setTimeout(function () {
              resizing = false;
            }, interval);

            return true;
          }

          $window.bind("load", function () {
            positionFooter()
          });

          $window.resize(positionFooter);

        }());
      });
    </script>
<script type="text/javascript" src="js/modernizr.custom.js"></script>	 
<script type="text/javascript" src="js/royal_preloader.min.js"></script>
<script type="text/javascript">
(function($) { "use strict";
            Royal_Preloader.config({
                mode:           'text', // 'number', "text" or "logo"
                text:           'SHANTILEELA REALTY',
                timeout:        0,
                showInfo:       true,
                opacity:        1,
                background:     ['#FFFFFF']
            });
})(jQuery);
</script>

<script type="text/javascript" src="js/classie.js"></script>
<script type="text/javascript" src="js/cbpAnimatedHeader.min.js"></script>
<script type="text/javascript" src="js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript">
(function($) { "use strict";
				var revapi;

				jQuery(document).ready(function() {

					   revapi = jQuery('.tp-banner').revolution(
						{
							delay:5000,
							startwidth:2000,
							startheight:500,
							soloArrowRightVOffset:50,
							soloArrowLeftVOffset:50,
							hideThumbs:0,
							onHoverStop:"off",
							navigationType: "none",
							fullWidth:"off",
							fullScreen:"on",
							fullScreenOffsetContainer: ""
						});

				});	//ready
})(jQuery);

</script>
<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.js"></script> 
<script type="text/javascript" src="js/jquery.fitvids.js"></script>
<script type="text/javascript" src="js/tiltSlider.js"></script>
<script>
(function($) { "use strict";
	new TiltSlider( document.getElementById( 'slideshow' ) );
})(jQuery);
</script>
<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="js/jquery.localscroll-1.2.7-min.js"></script>
<script type="text/javascript" src="js/jquery.scrollTo-1.4.2-min.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
<script type="text/javascript" src="js/svg_inject_flat_icons_filled.js"></script><!--Inject SVG and Toggle CSS Styles-->
<script type="text/javascript" src="js/contact.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="js/plugins.js"></script>
<script type="text/javascript" src="js/template.js"></script>  	  
<!-- End Document
================================================== -->
</body>
</html>