<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<div class="container">
	<div class="row-fluid pro-img">







		<div class="span12 project_bg">
			<img class="visible-desktop" alt=""
				src="<?php echo Yii::app()->theme->baseUrl;?>/img/project.png">
			<div class=" span6 project_cont">
				<div class="span5 ">
					<div class="span12 " onclick="location.href='<?php echo $this->createAbsoluteUrl('gallery')?>'">

						<span class=" span10 proj" onclick="location.href='<?php echo $this->createAbsoluteUrl('gallery')?>'"><img
							src="<?php echo Yii::app()->theme->baseUrl;?>/img/hproject2.png"
							class="img-col1  " /> <b class="span10" style="right:-7px;">SPRING GARDEN</b> </span>


					</div>
				</div>

				<div class="span6 pr-img">
					Our current projects include independent villas in Vadavalli.
						These villas are designed for comfort and are spacious. With a
						prominent location and facilities available nearby, it’s the right

						place to live in! Also, we sell approved plots in Ondipudur at
						reasonable prices.
				</div>


			</div>
			

		</div>

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
