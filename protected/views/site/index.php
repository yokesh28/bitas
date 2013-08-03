<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<!-- Slider -->
<div class="slider">
	<div class="container">

		<div class="row">
			<div class="span12">
				<div class="flexslider">
					<ul class="slides">
						<li><img
							src="<?php echo Yii::app()->theme->baseUrl;?>/img/slider/1.jpg">
						</li>
						<li><img
							src="<?php echo Yii::app()->theme->baseUrl;?>/img/slider/2.jpg">
						</li>
						<li><img
							src="<?php echo Yii::app()->theme->baseUrl;?>/img/slider/3.jpg">
						</li>
						<li><img
							src="<?php echo Yii::app()->theme->baseUrl;?>/img/slider/banner1.jpg">
						</li>

					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- inner part -->

<div class="container" style="margin-bottom: 30px;">
	<div class="row-fluid">
		<div class="span6 welcome-vitas">

			<h2>WELCOME TO VITAS</h2>
			<hr>
			<p>
				VITAS is a real estate company specialised in selling plots and
				independent villas in and around Coimbatore. We are a recognised
				company having established ourselves firmly in the real estate
				market. VITAS sells approved sites and houses at affordable prices.
				<br> <br> Building relationships and acquiring the trust of our
				customers is the reason why we have come this far. Planning to buy a
				plot or a villa, get in touch with the VITAS team and let us help
				you out!.
			</p>
		</div>

		<div class="span6 welcome-vitas ">
			<div class="span6 proj">

				<span class="ongoing span8" 
					><img
					src="<?php echo Yii::app()->theme->baseUrl;?>/img/hproject2.png"
					class="img-col " /> </span>
				<div class="s-spring">
					<a>SPRING GARDEN</a>
				</div>

			</div>


			<div class="span6 proj1">

				<p>Our current projects include independent villas in Vadavalli.
					These villas are designed for comfort and are spacious. With a
					prominent location and facilities available nearby, it’s the right

					place to live in! Also, we sell approved plots in Ondipudur at
					reasonable prices.</p>

			</div>

		</div>
	</div>

</div>






<script
	src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery.flexslider.js"></script>

<script
	src="<?php echo Yii::app()->theme->baseUrl;?>/js/scripts.js"></script>


<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});

	$(".ongoing").click(function() {
	    return true;
	    $.fancybox.open([
	        {
	        	               
	            href : '<?php echo Yii::app()->theme->baseUrl;?>/img/ongoing1.png',               
	            
	        }
	        
	       
	    ], {
	        padding : 0
	    });
	    
	    return false;
	    
	});




	
</script>
<script>
		$(document).ready(function(){
				$('#nav').mobileMenu();
		});
	</script>
		$('#nav').mobileMenu();
		});
	</script>
