<?php


//ob_start();

session_start();




if (!isset($_SESSION['username']))

{
header("Location:../index.php");

}

?>
<?php session_start();?>
<!doctype html>
<html class="no-js" lang="zxx">

<?php include'head.php'?>
<?php include'includes/db.php'?>

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
                                                <h3>Agents' Upload Property</h3>
                                            </div>
                                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
    <!-- slider_area_end -->
<center>
<center><h2 style="color:green;">Welcome 
<?php 
$username = $_SESSION['username'];
echo $username;
$query="SELECT agent_name FROM agents_reg WHERE agent_username ='$username'";
$result =mysqli_query($con, $query);
while($row =mysqli_fetch_array($result))
	{
        $db_name =$row['agent_name'];
echo " (".$db_name.")";}
?></h2></center>
    
    
    
    <div class="container">
        <div class="mt-10">
<div class="col-lg-8 col-md-8"><br>
                        <h2 class="mb-30">Property Upload form</h2>
                        <p><u><b>Fill the form below to upload the property to the database</u></b></p>
						<form method="post" action="upload.php" enctype="multipart/form-data">
                            <?php  
//require('PHPMailer/PHPMailerAutoload.php'); 
//require('crediantial.php');
include ("includes/db.php");
	if(isset($_POST["submit"]))
	{	
		 $property_name = trim(mysqli_real_escape_string($con, $_POST['property_name']));
         $property_type = trim(mysqli_real_escape_string($con, $_POST['property_type']));
         $property_use = trim(mysqli_real_escape_string($con, $_POST['property_use']));
         
		 $property_location = trim(mysqli_real_escape_string($con, $_POST['property_location']));
         $property_price = trim(mysqli_real_escape_string($con, $_POST['property_price']));
        

		 $agent_phone = trim(mysqli_real_escape_string($con, $_POST['agent_phone']));
         $property_description = trim(mysqli_real_escape_string($con, $_POST['property_description']));
         
         $number_bedroom = trim(mysqli_real_escape_string($con, $_POST['number_bedroom']));
         $number_bathroom = trim(mysqli_real_escape_string($con, $_POST['number_bathroom']));
		
		
		 
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
    $allowTypes = array('jpg','png','jpeg','gif');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file1"]["tmp_name"], $targetFilePath) && move_uploaded_file($_FILES["file2"]["tmp_name"], $targetFilePath2)){
          
          
           
        }
    }
}
    
//End of Image works		

$result="INSERT INTO property (property_name, property_type, property_use, property_location, property_price, agent_phone,property_description, image, image2, username, number_bedroom, number_bathroom)VALUES 
('$property_name','$property_type', '$property_use','$property_location', '$property_price', '$agent_phone', '$property_description', '$fileName1', '$fileName2','$username', '$number_bedroom', '$number_bathroom')";
   if(mysqli_query($con, $result)) {
       

       echo "<script type=\"text/javascript\">
						alert(\"Dear respected agent, thank you for uploading.\");
						window.location = \"index.php\"
					</script>";
	
	}
      
 else {
	echo  "<p style='color:red;'>"."Error Reported"." ".mysqli_error($con);
  }
	}

	   
?>
    
							<div class="mt-10">
								<input type="text" name="property_name" placeholder="Enter property name here e.g A room and parlour self contain"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter property name here e.g A room and parlour self contain'" required
									class="form-controls">
                                
                                
							</div>
                            <div class="input-group-icon mt-10">
								<div class="form-select" id="default-select">
								<select name ="property_type" class="form-controls">
									<option>Enter property type</option>
									<option value="Land Sale">Land Sale</option>
                                    <option value="Land Rent">Land Rent</option>
                                    <option value="Land Lease">Land Lease</option>
                                    <option value="House Sale">House Sale</option>
                                    <option value="House Rent">House Rent</option>
                                    <option value="House Lease">House Lease</option>	
								</select>
								</div>
							</div>
                            

                            <div class="input-group-icon mt-10">
								
								<div class="form-select" id="default-select">
								<select name ="property_use" class="form-controls">
									<option>Enter property use</option>
									<option value="commercial">Commercial</option>
                                    <option value="residential">Residential</option>
                                    <option value="agriculture">Agriculture</option>
                                    
									
								</select>
								</div>
							</div>
							
                            
                            <div class="input-group-icon mt-10">
								
								<div class="form-select" id="default-select">
											<select name ="property_location" class="form-controls">
                                    <option value="#">Location</option>
									<option value="Abuja FCT">Abuja FCT</option>
              <option value="Abia">Abia</option>
              <option value="Adamawa">Adamawa</option>
              <option value="Akwa Ibom">Akwa Ibom</option>
              <option value="Anambra">Anambra</option>
              <option value="Bauchi">Bauchi</option>
              <option value="Bayelsa">Bayelsa</option>
              <option value="Benue">Benue</option>
              <option value="Borno">Borno</option>
              <option value="Cross River">Cross River</option>
              <option value="Delta">Delta</option>
              <option value="Ebonyi">Ebonyi</option>
              <option value="Edo">Edo</option>
              <option value="Ekiti">Ekiti</option>
              <option value="Enugu">Enugu</option>
              <option value="Gombe">Gombe</option>
              <option value="Imo">Imo</option>
              <option value="Jigawa">Jigawa</option>
              <option value="Kaduna">Kaduna</option>
              <option value="Kano">Kano</option>
              <option value="Katsina">Katsina</option>
              <option value="Kebbi">Kebbi</option>
              <option value="Kogi">Kogi</option>
              <option value="Kwara">Kwara</option>
              <option value="Lagos">Lagos</option>
              <option value="Nassarawa">Nassarawa</option>
              <option value="Niger">Niger</option>
              <option value="Ogun">Ogun</option>
              <option value="Ondo">Ondo</option>
              <option value="Osun">Osun</option>
              <option value="Oyo">Oyo</option>
              <option value="Plateau">Plateau</option>
              <option value="Rivers">Rivers</option>
              <option value="Sokoto">Sokoto</option>
              <option value="Taraba">Taraba</option>
              <option value="Yobe">Yobe</option>
              <option value="Zamfara">Zamfara</option>
     <option value="Outside Nigeria">Outside Nigeria</option>
									
									</select>
								</div>
							</div>

                            <div class="input-group-icon mt-10">
								
								<div class="form-select" id="default-select">
								<select name ="number_bedroom" class="form-controls">
									<option>Enter number of bedroom</option>
									<option value="1">1 bedroom</option>
                                    <option value="2">2 bedroom</option>
                                    <option value="3">3 bedroom</option>
                                    <option value="4">4 bedroom</option>
                                    <option value="5">5 bedroom</option>
                                    <option value="6">6 bedroom</option>
                                    <option value="7">7 bedroom</option>
                                    <option value="8">8 bedroom</option>
                                    <option value="9">9 bedroom</option>
                                    <option value="10">10 bedroom</option>
                                    <option value="more than 10">more than 10 bedroom</option>
                                    
									
								</select>
								</div>
							</div>


                            <div class="input-group-icon mt-10">
								
								<div class="form-select" id="default-select">
								<select name ="number_bathroom" class="form-controls">
									<option>Enter number of bathroom</option>
									<option value="1">1 bathroom</option>
                                    <option value="2">2 bathroom</option>
                                    <option value="3">3 bathroom</option>
                                    <option value="4">4 bathroom</option>
                                    <option value="5">5 bathroom</option>
                                    <option value="6">6 bathroom</option>
                                    <option value="7">7 bathroom</option>
                                    <option value="8">8 bathroom</option>
                                    <option value="9">9 bathroom</option>
                                    <option value="10">10 bathroom</option>
                                    <option value="more than 10">more than 10 bathroom</option>
                                    
									
								</select>
								</div>
							</div>
                                
                            

							<div class="mt-10">
								<input type="text" name="property_price" placeholder="Enter property price here. e.g N120,000"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter property price here. e.g N120,000'" required
									class="form-controls">
							</div>
							
                            <div class="mt-10">
								<input type="text" name="agent_phone" placeholder="Your Phone Number"
									onfocus="this.placeholder = 'Enter Phone Number'" onblur="this.placeholder = 'Agent's Phone Number'" required
									class="form-controls">
							</div>
                            <div class="mt-10">
								
                              <div class="mt-10">
								<textarea class="form-controlText" name="property_description" placeholder="Give description of property" onfocus="this.placeholder = 'Describe the property e.g 2Bedroom flat with 3 baths'"
									onblur="this.placeholder = 'Briefly describe the property'"  required  ></textarea>
							</div>
                                
							</div>
                            Upload 1st Photo of the property
                            <div class="mt-10">
                                
								<input type="file" name="file1" placeholder="Your Phone Number"
									onfocus="this.placeholder = ''" onblur="this.placeholder = ''" 
									class="form-controls"> 
							</div>
                            Upload 2nd Photo of the property
                             <div class="mt-10">
								<input type="file" name="file2" placeholder="Your Phone Number"
									onfocus="this.placeholder = 'Enter Phone Number'" onblur="this.placeholder = 'Agent's Phone Number'" 
									class="form-controls">
							</div>
                            
                            
                            <br>
                            
							<div class="button-group-area mt-40">
				
				<div class="footer_widget">
<button type="submit" name="submit" class="btn btn-design">Upload Property</button>
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