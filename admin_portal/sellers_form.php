<!doctype html>
<html class="no-js" lang="zxx">

<?php include'head.php'?>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
   <?php include'header.php'?> 
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area">
            <div class="single_slider single_slider2  d-flex align-items-center property_bg overlay2">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-10 offset-xl-1">
                                <div class="property_wrap">
                                        <div class="slider_text text-center justify-content-center">
                                                <h3>Sell a Property</h3>
                                            </div>
                                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
    <!-- slider_area_end -->
<center>
    
    
    
    
    <div class="container">
        <div class="mt-10">
<div class="col-lg-8 col-md-8"><br>
						<h2 class="mb-30">Property Sales Placement Form</h2>
						<form method="post" action="sellers_form.php" enctype="multipart/form-data">
                            <?php  
//require('PHPMailer/PHPMailerAutoload.php'); 
//require('crediantial.php');
include ("includes/db.php");
	if(isset($_POST["submit"]))
	{	
		 $seller_name = trim(mysqli_real_escape_string($con, $_POST['seller_name']));
		 $seller_type = trim(mysqli_real_escape_string($con, $_POST['seller_type']));
		 $seller_address = trim(mysqli_real_escape_string($con, $_POST['seller_address']));
		 $seller_email = trim(mysqli_real_escape_string($con, $_POST['seller_email']));
		 $property_name = trim(mysqli_real_escape_string($con, $_POST['property_name']));
		 $property_price = trim(mysqli_real_escape_string($con, $_POST['property_price']));
		 $property_location = trim(mysqli_real_escape_string($con, $_POST['property_location']));
		 $seller_phone = trim(mysqli_real_escape_string($con, $_POST['seller_phone']));
		 $property_description = trim(mysqli_real_escape_string($con, $_POST['property_description']));
		 
//Image works
// File upload path
$targetDir = "img/uploads/";
$fileName1 = basename($_FILES["file1"]["name"]);
$fileName2 = basename($_FILES["file2"]["name"]);
$targetFilePath = $targetDir . $fileName1;
$targetFilePath2 = $targetDir . $fileName2;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file1"]["name"]) && !empty($_FILES["file2"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file1"]["tmp_name"], $targetFilePath) && move_uploaded_file($_FILES["file2"]["tmp_name"], $targetFilePath2)){
          
          
           
        }
    }
}
    
//End of Image works		

$result="INSERT INTO sellers (seller_name, seller_type, seller_address, seller_email, property_name,property_price,location,seller_phone,property_description, image1, image2)VALUES ('$seller_name','$seller_type','$seller_address', '$seller_email', '$property_name', '$property_price','$property_location','$seller_phone','$property_description', '$fileName1', '$fileName2')";
   if(mysqli_query($con, $result)) {
       

       echo "<script type=\"text/javascript\">
						alert(\"Thanks your property sales application has been successfully logged. Our admin will call you for verification and inspection.\");
						window.location = \"index.php\"
					</script>";
	
	}
      
 else {
	echo  "<script type=\"text/javascript\">
						alert(\"Error executing query.\");
						window.location = \"index.php\"
					</script>".mysqli_error($con);
  }
	}

	   
?>
    
							<div class="mt-10">
								<input type="text" name="seller_name" placeholder="Full Name of Seller/Company Name"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Full Name of Seller/Company Name'" required
									class="single-input">
                                
                                
							</div>
                            <div class="input-group-icon mt-10">
								<div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
								<div class="form-select" id="default-select">
											<select name ="seller_type">
												<option value="#">Owner/Agent</option>
									<option value="Agent">Agent for property</option>
									<option value="Owner">Owner of property</option>
									
									</select>
								</div>
							</div>
							<div class="mt-10">
								
                              <div class="mt-10">
								<textarea class="single-textarea" name="seller_address" placeholder="Seller/Agent Office Address" onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'Seller/Agent Office Address'" required></textarea>
							</div>
                                
							</div>
							<div class="mt-10">
								<input type="email" name="seller_email" placeholder="Agent/Seller's Email"
									onfocus="this.placeholder = 'Agent/Seller Email'" onblur="this.placeholder = 'Agent/seller Email'" required
									class="single-input">
							</div>
                          
                            <div class="mt-10">
								<input type="text" name="property_name" placeholder="Enter property Name e.g 2 Plots of land at Bodija, Ibadan"
									onfocus="this.placeholder = 'Enter property Name e.g 2 Plots of land at Bodija, Ibadan'" onblur="this.placeholder = 'Enter property Name e.g 2 Plots of land at Bodija, Ibadan'" required
									class="single-input">
							</div>
                            <div class="mt-10">
								<input type="text" name="property_price" placeholder="Enter property Price e.g N2,000,000"
									onfocus="this.placeholder = 'e.g N2,000,000'" onblur="this.placeholder = 'e.g N2,000,000'" required
									class="single-input">
							</div>
                            
                             <div class="input-group-icon mt-10">
								<div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
								<div class="form-select" id="default-select">
											<select name ="property_location">
												<option value="#">Location of Property</option>
									<option value="Oyo">Oyo State</option>
									<option value="Ogun">Ogun</option>
									
									</select>
								</div>
							</div>
                            
                            <div class="mt-10">
								<input type="text" name="seller_phone" placeholder="Your Phone Number"
									onfocus="this.placeholder = 'Enter Phone Number'" onblur="this.placeholder = 'Agent's Phone Number'" required
									class="single-input">
							</div>
                            <div class="mt-10">
								
                              <div class="mt-10">
								<textarea class="single-textarea" name="property_description" placeholder="Give description of property" onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'Give description'" required></textarea>
							</div>
                                
							</div>
                            Upload 1st Photo of the property
                            <div class="mt-10">
                                
								<input type="file" name="file1" placeholder="Your Phone Number"
									onfocus="this.placeholder = ''" onblur="this.placeholder = ''" 
									class="single-input"> 
							</div>
                            Upload 2nd Photo of the property
                             <div class="mt-10">
								<input type="file" name="file2" placeholder="Your Phone Number"
									onfocus="this.placeholder = 'Enter Phone Number'" onblur="this.placeholder = 'Agent's Phone Number'" 
									class="single-input">
							</div>
                            
                            
                            <br>
                            
							<div class="button-group-area mt-40">
				
				<div class="footer_widget">
<button type="submit" name="submit">Apply for Property Sale Placement</button>
</div>
				
</div><br>
</form>
</div>
</div>
    </div>
    
    
    
    </center>
   <?php //include'front_properties.php'?>

    <!-- contact_action_area  -->
    <?php include'call_to_action.php'?>
    <!-- /contact_action_area  -->


    <!-- footer start -->
    <?php include'footer.php'?>
    <!--/ footer end  -->

    <!-- link that opens popup -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>

    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script>
    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- <script src="js/vendor/jquery-1.12.4.min.js"></script> -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <!-- <script src="js/gijgo.min.js"></script> -->
    <script src="js/slick.min.js"></script>
   

    
    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>


    <script src="js/main.js"></script>
    <script>
        function collision($div1, $div2) {
            var x1 = $div1.offset().left;
            var w1 = 40;
            var r1 = x1 + w1;
            var x2 = $div2.offset().left;
            var w2 = 40;
            var r2 = x2 + w2;

            if (r1 < x2 || x1 > r2)
                return false;
            return true;
        }
        // Fetch Url value 
        var getQueryString = function (parameter) {
            var href = window.location.href;
            var reg = new RegExp('[?&]' + parameter + '=([^&#]*)', 'i');
            var string = reg.exec(href);
            return string ? string[1] : null;
        };
        // End url 
        // // slider call
        $('#slider').slider({
            range: true,
            min: 20,
            max: 200,
            step: 1,
            values: [getQueryString('minval') ? getQueryString('minval') : 20, getQueryString('maxval') ?
                getQueryString('maxval') :200
            ],

            slide: function (event, ui) {

                $('.ui-slider-handle:eq(0) .price-range-min').html( ui.values[0] + 'K');
                $('.ui-slider-handle:eq(1) .price-range-max').html( ui.values[1] + 'K');
                $('.price-range-both').html('<i>K' + ui.values[0] + ' - </i>K' + ui.values[1]);

                // get values of min and max
                $("#minval").val(ui.values[0]);
                $("#maxval").val(ui.values[1]);

                if (ui.values[0] == ui.values[1]) {
                    $('.price-range-both i').css('display', 'none');
                } else {
                    $('.price-range-both i').css('display', 'inline');
                }

                if (collision($('.price-range-min'), $('.price-range-max')) == true) {
                    $('.price-range-min, .price-range-max').css('opacity', '0');
                    $('.price-range-both').css('display', 'block');
                } else {
                    $('.price-range-min, .price-range-max').css('opacity', '1');
                    $('.price-range-both').css('display', 'none');
                }

            }
        });

        $('.ui-slider-range').append('<span class="price-range-both value"><i>' + $('#slider').slider('values', 0) +
            ' - </i>' + $('#slider').slider('values', 1) + '</span>');

        $('.ui-slider-handle:eq(0)').append('<span class="price-range-min value">' + $('#slider').slider('values', 0) +
            'k</span>');

        $('.ui-slider-handle:eq(1)').append('<span class="price-range-max value">' + $('#slider').slider('values', 1) +
            'k</span>');
    </script>
</body>

</html>