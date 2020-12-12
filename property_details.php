<?php
session_start();
?>
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

         <!-- bradcam_area  -->
        <div class="property_details_banner">
                <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-md-8 col-lg-6">
                                <div class="comfortable_apartment">
                                <?php
                                    include ("includes/db.php");
                                    $id = $_SESSION['propertyID'];
                                    $seletQuery = "SELECT * FROM property WHERE id = '$id'";
                                    $result = mysqli_query($con, $seletQuery);
                                    while($row = mysqli_fetch_array($result)){
                                        $propertyName = $row['property_name'];
                                        $propertyPrice = $row['property_price'];
                                        $numberBedroom = $row['number_bedroom'];
                                        $numberBathroom = $row['number_bathroom'];
                                        $propertyOwn = $row['username'];
                                        $ownPNumber = $row['agent_phone'];
                                        $image1 = $row['image'];
                                        $image2 = $row['image2'];
                                        $propertyDiscription = $row['property_description'];
                                        
                                    }
                                echo'
                                    <h4>'.$propertyName.'</h4>
                                    <p> <img src="img/svg_icon/location.svg" alt=""> '.$propertyOwn.'</p>
                                    <div class="quality_quantity d-flex">
                                        <!--<div class="single_quantity">
                                            <img src="img/svg_icon/color_box.svg" alt="">
                                            <span>1200 Sqft</span>
                                        </div>-->
                                        <div class="single_quantity">
                                            <img src="img/svg_icon/color_bed.svg" alt="">
                                            <span>'.$numberBedroom. ' Bed</span>
                                        </div>
                                        <div class="single_quantity">
                                            <img src="img/svg_icon/color_bath.svg" alt="">
                                            <span>'.$numberBathroom. ' Bath</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-4 col-lg-6">
                                <div class="prise_quantity">
                                    <h4>N'.$propertyPrice.'</h4>
                                    <a href="#">'.$ownPNumber.'</a>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
            <!--/ bradcam_area  -->

    <!-- details  -->
    <div class="property_details">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="property_banner">
                        <div class="property_banner_active owl-carousel">
                            <div class="single_property">
                                <img src="agent_portal/img/uploads/'.$image2.'" alt="">
                            </div>
                            <div class="single_property">
                                <img src="agent_portal/img/uploads/'.$image2.'" alt="">
                            </div>
                            <div class="single_property">
                                <img src="agent_portal/img/uploads/'.$image2.'" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="details_info">
                        <h4>Description</h4>
                       <p>'.$propertyDiscription.'</p>
                       

                    </div>';
                    ?>
                  
                   <!-- <div class="contact_field">
                        <h3>Contact Us</h3>
                        <form action="#">
                                <div class="row">
                                        <div class="col-xl-6 col-md-6">
                                            <input type="text" placeholder="Your Name" >
                                        </div>
                                        <div class="col-xl-6 col-md-6">
                                            <input type="email" placeholder="Email" >
                                        </div>
                                        <div class="col-xl-12">
                                            <input type="number" placeholder="Phone no." >
                                        </div>
                                        <div class="col-xl-12">
                                           <textarea name="" id="" cols="30" rows="10" placeholder="Message" ></textarea>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="send_btn">
                                                <button type="submit" class="send_btn">Send</button>
                                            </div>
                                        </div>
                                    </div>
                        </form>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
    <!-- /details  -->

    <!-- contact_action_area  -->
    <?php include 'call_to_action.php';?>
    <!-- /contact_action_area  -->


    <!-- footer start -->
    <?php include 'footer.php';?>
    <!--/ footer end  -->

    <!-- link that opens popup -->
    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
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
</body>

</html>