<div class="container" style="margin-bottom: 30px;">
         <div class="row">
                 
              
              <div class="span3">
             
              <a class="fancybox" rel="" href="<?php echo Yii::app()->theme->baseUrl;?>/img/gallery/gbig.png"><img src="<?php echo Yii::app()->theme->baseUrl;?>/img/gallery/gbig.png" alt="" /></a>
              

              </div>    
              
               
              <div class="span3">
              <a class="fancybox" rel="" href="<?php echo Yii::app()->theme->baseUrl;?>/img/gallery/gbig.png"><img src="<?php echo Yii::app()->theme->baseUrl;?>/img/gallery/gbig.png" alt="" /></a>
         
              
              </div> 
              <div class="span3">
              <a class="fancybox" rel="" href="<?php echo Yii::app()->theme->baseUrl;?>/img/gallery/gbig.png"><img src="<?php echo Yii::app()->theme->baseUrl;?>/img/gallery/gbig.png" alt="" /></a>
         
              
              </div> 
              <div class="span3">
              <a class="fancybox" rel="" href="<?php echo Yii::app()->theme->baseUrl;?>/img/gallery/gbig.png"><img src="<?php echo Yii::app()->theme->baseUrl;?>/img/gallery/gbig.png" alt="" /></a>
         
              
              </div> 
          </div>
          
        <div class="row" style="margin-top: 20px;">
              
              <div class="span3">
              <a class="fancybox" rel="" href="<?php echo Yii::app()->theme->baseUrl;?>/img/gallery/gbig.png"><img src="<?php echo Yii::app()->theme->baseUrl;?>/img/gallery/gbig.png" alt="" /></a>
         
              
              </div> 
              <div class="span3">
              <a class="fancybox" rel="" href="<?php echo Yii::app()->theme->baseUrl;?>/img/gallery/gbig.png"><img src="<?php echo Yii::app()->theme->baseUrl;?>/img/gallery/gbig.png" alt="" /></a>
         
              
              </div> 
              <div class="span3">
              <a class="fancybox" rel="" href="<?php echo Yii::app()->theme->baseUrl;?>/img/gallery/gbig.png"><img src="<?php echo Yii::app()->theme->baseUrl;?>/img/gallery/gbig.png" alt="" /></a>
         
              
              </div> 
              <div class="span3">
              <a class="fancybox" rel="" href="<?php echo Yii::app()->theme->baseUrl;?>/img/gallery/gbig.png"><img src="<?php echo Yii::app()->theme->baseUrl;?>/img/gallery/gbig.png" alt="" /></a>
         
              
              </div> 
           </div>    
              
              
              
              
            
               
           
    </div>
    
    
    
    
    <div class="row">      
       <div class="span6 project_vitas">
        <a class="ongoing" rel="group" href="img/ongoing1.png"><img src="<?php echo Yii::app()->theme->baseUrl;?>/img/ongoing.png" alt="" /></a>
        <a class="ongoing" rel="group" href="img/ongoing1.png"><img src="<?php echo Yii::app()->theme->baseUrl;?>/img/upcoming.png" alt="" /></a>
                  
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
	            href : '<?php echo Yii::app()->theme->baseUrl;?>/img/ongoing1.png',                
	           
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