<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<div class="container">
	<div class="row-fluid pro-img">
	<img class="visible-desktop" alt=""
				src="<?php echo Yii::app()->theme->baseUrl;?>/img/project.png">
	
	

		<div class="span6 welcome-vitas1 pro-inner">
			<div class="span6 ">

				<span class="ongoing span8 proj" 
					><img
					src="<?php echo Yii::app()->theme->baseUrl;?>/img/hproject2.png"
					class="img-col1  " />
					
					<b>SPRING GARDEN</b>
					 </span>
				

			</div>


			<div class="span6 proj1">

				<p>Our current projects include independent villas in Vadavalli.
					These villas are designed for comfort and are spacious. With a
					prominent location and facilities available nearby, it’s the right

					place to live in! Also, we sell approved plots in Ondipudur at
					reasonable prices.</p>

			</div>

		</div>
	

		<!--  <div class="span12 project_bg">
			<img class="visible-desktop" alt=""
				src="<?php echo Yii::app()->theme->baseUrl;?>/img/project.png">
			<div class=" span6 project_cont">
				<div class="span2 pr-img1">
					<a class="ongoingproject" rel="group"
						href="<?php echo Yii::app()->createAbsoluteUrl('site/gallery')?>"><img
						src="<?php echo Yii::app()->theme->baseUrl;?>/img/hproject2.png" alt="" />
					</a>
					
					<div class="s-spring1">
				<a>SPRING GARDEN</a>
				</div>
				</div>

				<div class="span3 pr-img">
					<p>Our current projects include independent villas in Vadavalli. These villas are designed for 

comfort and are spacious. With a prominent location and facilities available nearby, it’s the right 

place to live in!  Also, we sell approved plots in Ondipudur at reasonable prices.</p>
				</div>-->


		<!-- </div>-->
			<!--   <div class="span3 project_cont1">
                      <p>VITAS is a real estate company specialised in selling plots and independent villas in and 

around Coimbatore.  We are a recognised company having established ourselves firmly in the real 

estate market. VITAS sells approved sites and houses at affordable prices.</p>
                      
                      </div>-->

		 </div>-->

	</div>

</div>


<script
	src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery.flexslider.js"></script>
<script
	src="<?php echo Yii::app()->theme->baseUrl;?>/js/scripts.js"></script>
<script type="text/javascript">

var navigation = responsiveNav("#nav", {
    animate: true,        // Boolean: Use CSS3 transitions, true or false
    transition: 400,      // Integer: Speed of the transition, in milliseconds
    label: "Menu",        // String: Label for the navigation toggle
    insert: "after",      // String: Insert the toggle before or after the navigation
    customToggle: "",     // Selector: Specify the ID of a custom toggle
    openPos: "relative",  // String: Position of the opened nav, relative or static
    jsClass: "js",        // String: 'JS enabled' class which is added to <html> el
    init: function(){},   // Function: Init callback
    open: function(){},   // Function: Open callback
    close: function(){}   // Function: Close callback
  });





</script>

<script type="text/javascript">

          
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});


$(".ongoingproject").click(function() {
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

$(".upcomingproject").click(function() {
	   return true;
	   
    $.fancybox.open([
        {
            href : '<?php echo Yii::app()->theme->baseUrl;?>/img/upcoming1.png',                
           
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
