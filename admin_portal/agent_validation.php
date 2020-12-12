
<style>

.btn-style {
    border: 1px solid #fdae5c;
    height: 25px;
    border-radius: 5px;
    background: transparent;
    padding: 5px;
    line-height: 5px;
    font-size: 15px;
    
}
</style>
<?php ob_start();?>
<?php session_start();
if(!isset($_SESSION['username_admin'])) {
    header('Location: index.php');
}
?>
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
                                                <h3>Agent Validation</h3>
                                            </div>
                                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
    
   
<center><h2 style="color:green;">Welcome 
</h2></center>
<table class="table table-striped" style="width: 90%; margin-left: 5%;">
  <thead>
    <tr>
      <th scope="col">Agent Name</th>
      <th scope="col">Agent Address</th>
      <th scope="col">Agent Email</th>
      <th scope="col">Agent Phone No</th>
      <th scope="col">Status</th>
      <th scope="col">Approve</th>
      <th scope="col">Disapprove</th>
     
    </tr>
  </thead>
  <tbody>

  <?php
        include 'includes/db.php';
		$query = "SELECT * FROM agents_reg";
        $result = mysqli_query($con, $query) or die( mysqli_error($con));
        
        if(mysqli_num_rows($result) >=1){
            while ($row =mysqli_fetch_array($result))
		{
			$name= 			$row['agent_name'];
			$address= 		$row['agent_address'];
			$email = 		$row['agent_email'];
            $phone = 		$row['agent_phone'];
            $status = 		$row['status'];
            $id =           $row['id'];
			
		
			
			
			
			
			
			echo "<tr>";
				echo "<td> $name </td>";
                echo "<td> $address </td>";
                echo "<td> $email </td>";
				echo "<td> $phone </td>";
                echo "<td> $status </td>";
                echo "<form action='agent_validation.php' method='POST'>";
				echo "<td> <button class='btn-style' name='approve' value='".$id."'> Approve </button> </td>";
                echo "<td> <button class='btn-style' name='disapprove' value='".$id."'> Disapprove </button> </td>";
                echo "</form>";
			echo"</tr>";
				
		}

        }else {
            echo "<center>"."<h3 style='color:red'>"."Ooops you do not have any property uploaded"."</center>"."</h3>";
        }
		if(isset($_POST['approve'])) {
            $target = $_POST['approve'];
            include 'includes/db.php';
            $queryupdate = "UPDATE agents_reg SET status='approved' WHERE id='$target'";
            $resultupdate = mysqli_query($con, $queryupdate) or die( mysqli_error($con));
        
        if($resultupdate){
            echo "<script type=\"text/javascript\">
						alert(\"Approved\");
						window.location = \"agent_validation.php\"
					</script>";

        }
    }
		if(isset($_POST['disapprove'])) {
            $target = $_POST['disapprove'];
            include 'includes/db.php';
            $queryupdate = "UPDATE agents_reg SET status='not approved' WHERE id='$target'";
            $resultupdate = mysqli_query($con, $queryupdate) or die( mysqli_error($con));
        
        if($resultupdate){
            echo "<script type=\"text/javascript\">
						alert(\"Disapproved\");
						window.location = \"agent_validation.php\"
					</script>";

        }
    }
		
		?>
      
    
    
  </tbody>
</table>
    
    
    


    
 <?php include'footer.php'?>
    

    
    
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