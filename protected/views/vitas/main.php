<?php /* @var $this Controller */ ?>

<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Le styles -->



<link rel="shortcut icon" type="image/x-icon"
	href="<?php echo Yii::app()->theme->baseUrl;?>/img/favicon.ico">
<link rel="stylesheet"
	href="<?php echo Yii::app()->theme->baseUrl;?>/css/font-awesome.css">
<link href="<?php echo Yii::app()->theme->baseUrl;?>/css/bootstrap.css"
	rel="stylesheet">
<link
	href="<?php echo Yii::app()->theme->baseUrl;?>/css/bootstrap-responsive.css"
	rel="stylesheet">
<link rel="stylesheet"
	href="<?php echo Yii::app()->theme->baseUrl;?>/css/flexslider.css">

<link href="<?php echo Yii::app()->theme->baseUrl;?>/css/style.css"
	rel="stylesheet" media="screen">





<!-- Add jQuery library -->
<script src="http://code.jquery.com/jquery.js"></script>
<script
	src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery.mobilemenu.js"></script>
<script
	src="<?php echo Yii::app()->theme->baseUrl;?>/js/bootstrap.min.js"></script>

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript"
	src="<?php echo Yii::app()->theme->baseUrl;?>/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet"
	href="<?php echo Yii::app()->theme->baseUrl;?>/fancybox/source/jquery.fancybox.css?v=2.1.5"
	type="text/css" media="screen" />
<script type="text/javascript"
	src="<?php echo Yii::app()->theme->baseUrl;?>/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet"
	href="<?php echo Yii::app()->theme->baseUrl;?>/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5"
	type="text/css" media="screen" />
<script type="text/javascript"
	src="<?php echo Yii::app()->theme->baseUrl;?>/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript"
	src="<?php echo Yii::app()->theme->baseUrl;?>/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<link rel="stylesheet"
	href="<?php echo Yii::app()->theme->baseUrl;?>/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7"
	type="text/css" media="screen" />
<script type="text/javascript"
	src="<?php echo Yii::app()->theme->baseUrl;?>/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>










<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

<!-- Fav and touch icons -->

<!--   <link rel="shortcut icon" href="../assets/ico/favicon.png">-->

<style type="text/css">
.input-append button.add-on {
	height: inherit !important;
}
</style>



</head>
<body>


	<div class="container">

		<!-- header -->


		<!-- nav header -->




		<div class="navbar  header">
			<div class="navbar-inner">
				<a href="index.php"><img class="brand" alt=""
					src="<?php echo Yii::app()->theme->baseUrl;?>/img/logo.png"> </a>
				<div class="contact-hd hidden-phone">

					<p>
						<img
							src="<?php echo Yii::app()->theme->baseUrl;?>/img/icons/icon-18-phone.png"
							alt="icon">&nbsp;(0422) 4371273, 4212461 &nbsp;&nbsp;<img
							src="<?php echo Yii::app()->theme->baseUrl;?>/img/icons/icon-18-mail.png"
							alt="icon">&nbsp;<a href="">info@vitasinfra.com</a>
					</p>

				</div>
				

				<div class="nav-collapse collapse row-fluid"
					style="position: relative;">
					<ul id="nav" class="nav span10">
						<li class="span2"><a href="<?php echo Yii::app()->createAbsoluteUrl('site/index')?>">Home</a>
						</li>
						<li class="span2"><a href="<?php echo Yii::app()->createAbsoluteUrl('site/project')?>">Project</a>
						</li>
						<li class="span2"><a href="<?php echo Yii::app()->createAbsoluteUrl('site/about')?>">About us</a>
						</li>
					
						<li class="span2"><a href="<?php echo Yii::app()->createAbsoluteUrl('site/media')?>">Media</a>
						</li>
						<li class="span2"><a href="<?php echo Yii::app()->createAbsoluteUrl('site/contact')?>">Contact</a>
						</li>
					</ul>
				</div>

			</div>
		</div>
	</div>




	<?php echo $content; ?>


	<footer id="footer" class="clearfix">
		<div class="container">


			<!--Twitter-->


			<!--End Twitter-->


			<!--spacer here-->
			<div class="spacer-30px"></div>

			<!--row starts-->
			<div class="row foot-pad">

				<!--column one starts-->
				<div class="span5 about-text">
					<h5>About</h5>
					<p>Vitas is a Coimbatore based Real Estate Company selling plots
						and independent budget villas. Having started out small in 2010
						under the guidance of our founder, Sridevi Selvaa, we have come a
						long way by learning and understanding the real estate market.
						Building relationships and acquiring the trust of our customers is
						the reason why we have come this far.</p>

				</div>
				<!--column one ends-->

				<!--column two starts-->
				<div class="span4">

					<h5>Twitter Feeds</h5>
					<div id="twitter">
						<ul class="tweetList"></ul>
					</div>
				</div>
				<!--column two ends-->

				<!--column three starts-->
				<div class="span3">
					<h5 style="margin-left: 23px;">Get in Touch</h5>
					<ul class="list-info">
						<li><img
							src="<?php echo Yii::app()->theme->baseUrl;?>/img/icons/icon-18-address.png"
							alt="icon">&nbsp; 177-178, Raju Naidu Road,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sivanandha
							Colony,<br>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;Coimbatore-600027,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TamilNadu ,<br>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbspIndia.</li>
						<li><img
							src="<?php echo Yii::app()->theme->baseUrl;?>/img/icons/icon-18-phone.png"
							alt="icon">&nbsp;(0422) 4371273, 4212461</li>
						<li><img
							src="<?php echo Yii::app()->theme->baseUrl;?>/img/icons/icon-18-mail.png"
							alt="icon">&nbsp;<a href="info@vitasinfra.com">info@vitasinfra.com</a>
						</li>

					</ul>
				</div>
				<div class="social1 span6">

					<h5 class="social-text">Follow us</h5>
					<ul class="social">
						<li><a href="#" class="mail"></a></li>
						<li><a href="#" class="facebook"></a></li>
						<li><a href="#" class="twitter"></a></li>
					</ul>
					<!--column three ends-->

				</div>
				<!--row ends-->

			</div>
		</div>
	</footer>


	<section id="copyright" class="clearfix">
		<div class="container">
			<div class="row">
				<div class="span12">
					<ul class="copyright-header">
						<li><a href="<?php echo Yii::app()->createAbsoluteUrl('site/index')?>">Home</a>
						</li>
						<li><a href="<?php echo Yii::app()->createAbsoluteUrl('site/project')?>">Project</a>
						</li>
						<li><a href="<?php echo Yii::app()->createAbsoluteUrl('site/about')?>">About us</a>
						</li>
						<!--  <li><a href="<?php echo Yii::app()->createAbsoluteUrl('site/gallery')?>">Gallery</a>
						</li>-->
						<li><a href="<?php echo Yii::app()->createAbsoluteUrl('site/media')?>">Media</a>
						</li>
						<li><a href="<?php echo Yii::app()->createAbsoluteUrl('site/contact')?>">Contact</a>
						</li>
					</ul>

					<!--copyright menu starts-->
					<ul class="copyright-menu">
						<li><a href="#">Terms &amp; Conditions</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li>Designed by <a href="http://s-creative.me">S-Creative</a></li>
					</ul>
					<!--copyright menu ends-->

				</div>
			</div>
		</div>
	</section>
	
       
          
          
         
    
  </body>
</html>
	