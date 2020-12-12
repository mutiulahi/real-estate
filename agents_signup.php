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
                                                <h3>Agents' Registration</h3>
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
						<h2 class="mb-30">Agent Registration</h2>
						<form method="post" action="agents_signup.php">
                            <?php  
//require('PHPMailer/PHPMailerAutoload.php'); 
//require('crediantial.php');
include ("includes/db.php");
	if(isset($_POST["submit"]))
	{	
		 $agent_name = trim(mysqli_real_escape_string($con, $_POST['agent_name']));
		 $agent_office = trim(mysqli_real_escape_string($con, $_POST['agent_office']));
		 $agent_email = trim(mysqli_real_escape_string($con, $_POST['agent_email']));
		 $agent_phone = trim(mysqli_real_escape_string($con, $_POST['agent_phone']));
		 $agent_username = trim(mysqli_real_escape_string($con, $_POST['agent_username']));
         $agent_password = trim(mysqli_real_escape_string($con, $_POST['agent_password']));
         $agent_password2 = trim(mysqli_real_escape_string($con, $_POST['agent_password2']));
		 
		$sql = "SELECT * FROM agents_reg where agent_username='$agent_username' or agent_email='$agent_email' ";
		$result = mysqli_query($con, $sql);
		
		//mysqli_num_row is counting table row
		$count = mysqli_num_rows($result);

// If user already exist
if($count>=1) {
					echo "<script type=\"text/javascript\">
						alert(\"Agent already exist.\");
						window.location = \"index.php\"
					</script>";
}
//check password match
else if($agent_password != $agent_password2){
    echo "<script type=\"text/javascript\">
						alert(\"Pasword not matching.\");
						window.location = \"index.php\"
					</script>";

}


else{

$result="INSERT INTO agents_reg (agent_name, agent_address, agent_email, agent_phone, agent_username,agent_password) VALUES ('$agent_name','$agent_office','$agent_email', '$agent_phone', '$agent_username', '$agent_password')";
   if(mysqli_query($con, $result)) {
	//$output = '<div>Thanks for registering with us.</div>';
	/**$mail = new PHPMailer;
	$mail->isSMTP();
	// $mail->SMTPDebug = 2;
	$mail->SMTPSecure = 'ssl';
	$mail->SMTPAuth = true;
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 465;
	$mail->Username = EMAIL;
	$mail->Password = PASS;
	$mail->setFrom('example@gmail.com');
	$mail->addAddress($email, $username);
	$mail->Subject = 'Hello from PHPMailer!';
	$mail->isHTML(true);
	$mail->Body = $output;

	//send the message, check for errors
	if (!$mail->send()) {
		echo "<script type=\"text/javascript\">
						alert(\"Message not sent.\");
						window.location = \"index.php\"
					</script>";

		echo 'Mailer Error: ' . $mail->ErrorInfo;
	}**/
      echo "<script type=\"text/javascript\">
						alert(\"Registration Successful.\");
						window.location = \"index.php\"
					</script>";
} else {
	echo "<script type=\"text/javascript\">
						alert(\"Error in Registration .\");
						window.location = \"index.php\"
					</script>";
  }
	}
}
	   
?>
    
							<div class="mt-10">
								<input type="text" name="agent_name" placeholder="Full Name/Company Name"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Full Name/Company Name'" required
									class="form-controls">
                                
                                
							</div>
							<div class="mt-10">
								
                              <div class="mt-10">
								<textarea class="single-textarea form-controlText" name="agent_office" placeholder="Agent Office Address" onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'Agent Office Address'" required></textarea>
							</div>
                                
							</div>
							<div class="mt-10">
								<input type="email" name="agent_email" placeholder="Agent's Email"
									onfocus="this.placeholder = 'Agent's Email'" onblur="this.placeholder = 'Agent's Email'" required
									class="form-controls">
							</div>
                            <div class="mt-10">
								<input type="text" name="agent_phone" placeholder="Agent's Phone Number"
									onfocus="this.placeholder = 'Agent's Email'" onblur="this.placeholder = 'Agent's Phone Number'" required
									class="form-controls">
							</div>
                            <div class="mt-10">
								<input type="text" name="agent_username" placeholder="Agent's username"
									onfocus="this.placeholder = 'Agent's Username'" onblur="this.placeholder = 'Agent's username'" required
									class="form-controls">
							</div>
                            
                            <div class="mt-10">
								<input type="text" name="agent_password" placeholder="Agent's Password"
									onfocus="this.placeholder = 'Agent's Password'" onblur="this.placeholder = 'Agent  Password Repeat'" required
									class="form-controls">
							</div>
                            <div class="mt-10">
								<input type="text" name="agent_password2" placeholder="Agent's Password Repeat"
									onfocus="this.placeholder = 'Agent Password Repeat'" onblur="this.placeholder = 'Agent  Password Repeat'" required
									class="form-controls">
							</div><br>
                            
							<div class="button-group-area mt-40">
				
				<div class="footer_widget">
<button type="submit" name="submit" class="btn btn-design col-md-4">Register</button>
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