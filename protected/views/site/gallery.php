<div class="container gallery" >
	<div class="row">

<?php foreach($model as $data):?>
		<div class="span3">

			<a class="fancybox" rel=""
				href="/img/<?php echo $data->image ?>"><img
				src="/img/thumbs/<?php echo 'asdf_'.$data->image ?>" title=<?php echo $data->title ?>
				alt="" /> </a>
		</div>
<?php endforeach;?>

	</div>




	<div class="row">
		<div class="span6 project_vitas">
			<a class="ongoing" rel="group" href="img/ongoing1.png"><img
				src="<?php echo Yii::app()->theme->baseUrl;?>/img/project1.png" class="img-thumbnail"
				alt="" /> </a>


		</div>
	</div>
</div>
	<script
		src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery.flexslider.js"></script>
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