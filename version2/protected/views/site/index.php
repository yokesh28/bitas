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
	<div class="row">
		<div class="span6 welcome-vitas">

			<h2>WELCOME TO VITAS</h2>
			<hr>
			<p>Vitas is a Coimbatore based Real Estate Company selling plots and
				independent budget villas. Having started out small in 2010 under
				the guidance of our founder, Sridevi Selvaa, we have come a long way
				by learning and understanding the real estate market. Building
				relationships and acquiring the trust of our customers is the reason
				why we have come this far. Known for its pleasant climate and
				friendly people, Coimbatore has been sought out by many people to
				settle down. VITAS owns plots and independent villas in and around
				Coimbatore for people who intend to settle down in this beautiful
				city! We help in providing the best possible solution to our clients
				at the most optimum price. We own plots and independent houses in
				Ondipudur and Vadavalli respectively. So the next time you want to
				buy a plot or an independent villa, think VITAS.</p>
		</div>


		<div class="span3">

			<a class="ongoing" rel="group"
				href="<?php echo Yii::app()->theme->baseUrl;?>/img/ongoing1.png"><img
				src="<?php echo Yii::app()->theme->baseUrl;?>/img/on1.png" alt="" />
			</a>


		</div>


		<div class="span3">
			<a class="upcoming" rel="group"
				href="<?php echo Yii::app()->theme->baseUrl;?>/img/upcoming1.png"><img
				src="<?php echo Yii::app()->theme->baseUrl;?>/img/up1.png" alt="" />
			</a>


		</div>
	</div>

</div>






<script
	src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery.flexslider.js"></script>

<script
	src="<?php echo Yii::app()->theme->baseUrl;?>/js/scripts.js"></script>
