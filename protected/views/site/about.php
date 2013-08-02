<div class="container">
            <div class="row">
                
                  <div class="span12 about_bg">
                 <img class="visible-desktop" alt="" src="<?php echo Yii::app()->theme->baseUrl;?>/img/about.png">
                     <div class="about_cont span8">
                      <h3>About Us</h3>
                      <p>
	Vitas is a Coimbatore based Real Estate Company selling plots and independent budget 

villas. Having started out small in 2010 under the guidance of our founder, Sridevi Selvaa, we have 

come a long way by learning and understanding the real estate market. Building relationships and 

acquiring the trust of our customers is the reason why we have come this far.

Known for its pleasant climate and friendly people, Coimbatore has been sought out by 

many people to settle down. VITAS owns plots and independent villas in and around Coimbatore for 

people who intend to settle down in this beautiful city!

We help in providing the best possible solution to our clients at the most optimum price. We 

own plots and independent houses in Ondipudur and Vadavalli respectively. 

So the next time you want to buy a plot or an independent villa, think VITAS.</p>
                      </div>
                 </div> 
                 
               </div>  
                 
              </div>      
              
              
              
              
              <div class="row">      
       <div class="span6 project_vitas">
        <a class="ongoing" rel="group" href="<?php echo Yii::app()->theme->baseUrl;?>/img/ongoing1.png"><img src="<?php echo Yii::app()->theme->baseUrl;?>/img/project1.png" alt="" /></a>
        
                  
          </div>   
       </div>   
       
       
       
       <script src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery.flexslider.js"></script>   
         <script src="<?php echo Yii::app()->theme->baseUrl;?>/js/scripts.js"></script>  
         
            <script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
$(".ongoing").click(function() {
	    
	    $.fancybox.open([
	        {
	        	href : '/themes/vitas/img/ongoing1.png',                
	            href : '/themes/vitas/img/upcoming1.png',            
	           
	        }
	        
	       
	    ], {
	        padding : 0
	    });
	    
	    return false;
	    
	});

$(".upcoming").click(function() {
	    
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
