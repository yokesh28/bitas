<!DOCTYPE html>
<html>
  <head>
     
    <meta charset="utf-8">
    <title>Vitas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
     <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link href="css/bootstrap.css" rel="stylesheet">        
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="css/flexslider.css">
    
    <link href="css/style.css" rel="stylesheet" media="screen">
    
    
    <!-- Add jQuery library -->
<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
    <script src="js/bootstrap.min.js"></script> 
 <style type="text/css">
    .input-append button.add-on { 
        height: inherit !important;
    }
</style>
      
       
       
  </head>
  <body>
    
    
    <div class="container">
    
    <!-- header -->
   <?php include 'header.php';?>
   
   <section id="header-btm" class="clearfix">
        <div class="container">
            <div class="row">
                <div class="span12 contact-header">  
                <h2>Enquiry</h2>        
      <p>
                        Please fill out following form to request a demo of the <span class="color">Vitas</span>
                        Loyalty platform:</p>
         </div>           
            </div>
        </div>
    </section>
   
   
  
          
                        
                        <form>
       <div class="container contact_bg">
            <div class="row">
                <!--main content starts-->
                <div class="main-content span6">
                    
                    
                    <fieldset>
                        <p>
                            <label>
                                Full Name :</label>
                            <input name="name" type="text" id="ContentPlaceHolder1_fullName" required="">
                        </p>
                        <p>
                            <label>
                                Company Name :</label>
                            <input name="companyname" type="text" id="ContentPlaceHolder1_company" required="">
                        </p>
                        <p>
                            <label>
                                Telephone Number :</label>
                            <input name="phone" type="text" id="ContentPlaceHolder1_phone" required="">
                        </p>
                        <p>
                            <label>
                                Email Address :</label>
                            <input name="email" type="text" id="ContentPlaceHolder1_email" required="">
                        </p>
                        <p>
                            <label>
                                Referred By :</label>
                            <select name="referred" id="ContentPlaceHolder1_referredBy" >
	<option value="Article">Article</option>
	<option value="College">College</option>
	<option value="Print Ad">Print Ad</option>
	<option value="Trade Show">Trade Show</option>
	<option value="Event">Event</option>
	<option value="Web Search">Web Search</option>
	<option value="Other">Other</option>

</select>
                        </p>
                        <p>
                            <label>
                                Message :</label>
                            
                            <textarea name="msg" rows="4" cols="20" id="ContentPlaceHolder1_message" required=""></textarea>
                        </p>
                        
                        
                        <p>
                            <input type="submit" name="send" value="Send Message" id="ContentPlaceHolder1_btnSend" class="submit">
                        </p>
                        <div class="clearfix">
                        </div>
                        <div id="result">
                        </div>
                    </fieldset>
                    
                </div>
                <!--main content ends-->
                <!--sidebar starts-->
                <div class="sidebar span4 contact">
                    <div class="spacer-40px">
                    </div>
                    <h5>
                        Enquiry</h5>
                    <a href="#" class="color">info@vitasinfra.com</a>
                    
                    <div class="spacer-20px">
                    </div>
                    <h5>
                        Call us</h5>
                    <a class="color">(0422)4371273,4212461</a>
                    <div class="spacer-20px">
                    </div>
                    <h5>
                       Address</h5>
                      
                    <p>
                        <b>VITAS INFRA DEVOLPERS PVT.LTD.</b><br>
                         177-178,Raju Naidu Road<br>Sivanandha Colony,Coimbatore-27.
                    </p>
                 
                </div>
                <!--sidebar ends-->
            </div>
        </div>
       
       </form>
       
                    
           <!-- inner part -->
           
     
                 
              
              
          
        
              
           
            
               
           
    </div>
           
      
         
                
           
           
           
           
           
                    
       <!-- footer --> 
       <?php include 'footer.php';?>
 

      
      
         <script src="js/scripts.js"></script>  
         
          <script>
		$(document).ready(function(){
				$('#nav').mobileMenu();
		});
	</script> 
    
  </body>
</html>
    
