<!doctype html>
<html class="no-js" lang="zxx">
<?php session_start(); ?>
<?php include'head.php'?>

<body>
    

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
                                                <h3>Search property</h3>
                                            </div>
                                            <div class="property_form">
                                            <form action="Property.php" method="POST">
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <div class="form_wrap d-flex">
                                                                    <div class="single-field max_width ">
                                                                            <label for="#">Location</label>
                                                                            <select class="wide"  name="property_location">
                                                                                <option value="">state</option>
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
                                                                        <div class="single-field max_width ">
                                                                            <label for="#">Property type</label>
                                                                            <select class="wide" name="property_type">
                                                                                <option value="">type</option>
                                                                                <option value="land sale">Land Sale</option>
                                                                                <option value="land rent">Land Rent</option>
                                                                                <option value="land lease">Land Lease</option>
                                                                                <option value="house sale">House Sale</option>
                                                                                <option value="house rent">House Rent</option>
                                                                                <option value="house lease">House Lease</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="single-field max_width ">
                                                                            <label for="#">Property use</label>
                                                                            <select class="wide" name="property_use">
                                                                                <option value="">use</option>
                                                                                <option value="commercial">Commercial</option>
                                                                                <option value="residential">Residential</option>
                                                                                <option value="agriculture">Agriculture</option>
                                                                            </select>
                                                                        </div>
                                                                    <div class="single-field min_width ">
                                                                            <label for="#">Property price</label>
                                                                            <select class="wide" name="property_price">
                                                                                <option value="0">price</option>
                                                                                <option value="100000">50k - 100k</option>
                                                                                <option value="200000">100k - 200k</option>
                                                                                <option value="500000">200k - 500k</option>
                                                                                <option value="1000000">500k - 1m</option>
                                                                                <option value="2000000">1.5m - 2m</option>
                                                                                <option value="3000000">2.5m - 3m</option>
                                                                                <option value="5000000">3.5m - 5m</option>
                                                                                <option value="10000000">5m - 10m</option>
                                                                                <option value="20000000">10m - 20m</option>
                                                                                <option value="30000000">20m - 30m</option>
                                                                                <option value="50000000">30m - 50m</option>
                                                                                <option value="100000000">50m - 100m</option>
                                                                                <option value="200000000">100m - 200m</option>
                                                                                <option value="500000000">200m - 500m</option>
                                                                                <option value="1000000000">500m - 1b</option>
                                                                            </select>
                                                                        </div>
                                                                        
                                                                        <div class="single-field min_width ">
                                                                            <label for="#">Bed Room</label>
                                                                            <select class="wide" name="number_bedroom">
                                                                                    <option value="">01</option>
                                                                                    <option value="1">01</option>
                                                                                    <option value="2">02</option>
                                                                                    <option value="3">03</option>
                                                                                    <option value="4">04</option>
                                                                                    <option value="5">05</option>
                                                                                    <option value="6">06</option>
                                                                                    <option value="7">07</option>
                                                                                    <option value="8">08</option>
                                                                                    <option value="9">09</option>
                                                                                    <option value="10">10</option>
                                                                                    <option value="more than 10">more</option>
                                                                            </select>
                                                                        </div>
                                                                    <div class="single-field min_width ">
                                                                            <label for="#">Bath Room</label>
                                                                            <select class="wide" name="number_bathroom">
                                                                                    <option value="">01</option>
                                                                                    <option value="1">01</option>
                                                                                    <option value="2">02</option>
                                                                                    <option value="3">03</option>
                                                                                    <option value="4">04</option>
                                                                                    <option value="5">05</option>
                                                                                    <option value="6">06</option>
                                                                                    <option value="7">07</option>
                                                                                    <option value="8">08</option>
                                                                                    <option value="9">09</option>
                                                                                    <option value="10">10</option>
                                                                                    <option value="more than 10">more</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="serach_icon" name="submit">
                                                                        <button name="submit"><i class="ti-search"></i></button>
                                                                                
                                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
    <!-- slider_area_end -->
    <div class="popular_property">
        <div class="container">
            <div class="row">
                
                    <?php
                    if(isset($_POST['submit'])){
                        include ("includes/db.php");
                        //search keys
                        $Number_Bedroom = $_POST['number_bedroom'];
                        $Number_Bathroom = $_POST['number_bathroom'];
                        $Property_Location = $_POST['property_location'];
                        $Property_Type = $_POST['property_type'];
                        $Property_Price =$_POST['property_price'];
                        $Property_Use =$_POST['property_use'];
                        
                        if($Property_Price == 0){
                            $half = "nothing";
                        }
                        else {
                            $half = $Property_Price/2;

                        }
                        if(empty($Property_Location) && empty($Property_Type) && empty($Number_Bathroom) &&
                        empty($Number_Bedroom) && empty($Property_Price) &&  empty($Property_Use)) {
                            echo "<script type=\"text/javascript\">
						alert(\"Please select property type or location or  to seach\");
						window.location = \"Property.php\"
					</script>";
                        }
                        // search for bed and bath only
                        elseif(!empty($Number_Bathroom) && !empty($Number_Bedroom)) {
                            $propertyName = array();
                            $propertyType = array();
                            $image = array();
                            $propertyOwn = array();
                            $numberBedroom = array();
                            $numberBathroom = array();
                            $PropertyUse = array();
                            $propertyPrice = array();
                            
                            
                            $seletQuery = "SELECT * FROM property WHERE number_bedroom LIKE '$Number_Bedroom'
                            and number_bathroom LIKE '$Number_Bathroom'";
                        include ("search.php");
               
                            }
                            //for bath only
                        elseif(!empty($Number_Bathroom)) {
                            $propertyName = array();
                            $propertyType = array();
                            $image = array();
                            $propertyOwn = array();
                            $numberBedroom = array();
                            $numberBathroom = array();
                            $PropertyUse = array();
                            $propertyPrice = array();
                            
                            
                            $seletQuery = "SELECT * FROM property WHERE number_bathroom LIKE '$Number_Bathroom'";
                        include ("search.php");
               
                            }
                            //for bed only
                        elseif(!empty($Number_Bedroom)) {
                            $propertyName = array();
                            $propertyType = array();
                            $image = array();
                            $propertyOwn = array();
                            $numberBedroom = array();
                            $numberBathroom = array();
                            $PropertyUse = array();
                            $propertyPrice = array();
                            
                            
                            $seletQuery = "SELECT * FROM property WHERE number_bedroom LIKE '$Number_Bedroom'";
                        include ("search.php");
               
                            }
                            // for location only
                        elseif(!empty($Property_Location) && empty($Property_Type) && empty($Property_Price) && empty($Property_Use)) {
                            $propertyName = array();
                            $propertyType = array();
                            $image = array();
                            $propertyOwn = array();
                            $numberBedroom = array();
                            $numberBathroom = array();
                            $PropertyUse = array();
                            $propertyPrice = array();
                            
                            
                            $seletQuery = "SELECT * FROM property WHERE property_location LIKE '$Property_Location' ";
                        include ("search.php");
               
                            }
                        // search for type only
                        elseif(empty($Property_Location) && !empty($Property_Type) && empty($Property_Price) && empty($Property_Use)) {
                            $propertyName = array();
                            $propertyType = array();
                            $image = array();
                            $propertyOwn = array();
                            $numberBedroom = array();
                            $numberBathroom = array();
                            $PropertyUse = array();
                            $propertyPrice = array();
                            
                            
                            $seletQuery = "SELECT * FROM property WHERE property_type LIKE '$Property_Type' ";
                        include ("search.php");
               
                            }
                        // search for price only
                        elseif(empty($Property_Location) && empty($Property_Type) && !empty($Property_Price) && empty($Property_Use)) {
                                $propertyName = array();
                                $propertyType = array();
                                $image = array();
                                $propertyOwn = array();
                                $numberBedroom = array();
                                $numberBathroom = array();
                                $PropertyUse = array();
                                $propertyPrice = array();
                                
                                
                                $seletQuery = "SELECT * FROM property WHERE property_price >='$half' and property_price <='$Property_Price' ";
                            include ("search.php");
                   
                                }
                        // search for use only
                        elseif(empty($Property_Location) && empty($Property_Type) && empty($Property_Price) && !empty($Property_Use)) {
                                $propertyName = array();
                                $propertyType = array();
                                $image = array();
                                $propertyOwn = array();
                                $numberBedroom = array();
                                $numberBathroom = array();
                                $PropertyUse = array();
                                $propertyPrice = array();
                                
                                
                                $seletQuery = "SELECT * FROM property WHERE property_use LIKE '$Property_Use' ";
                            include ("search.php");
                   
                                }
                        // search for location and type only
                        elseif(!empty($Property_Location) && !empty($Property_Type) && empty($Property_Price) && empty($Property_Use)) {
                                $propertyName = array();
                                $propertyType = array();
                                $image = array();
                                $propertyOwn = array();
                                $numberBedroom = array();
                                $numberBathroom = array();
                                $PropertyUse = array();
                                $propertyPrice = array();
                                
                                
                                $seletQuery = "SELECT * FROM property WHERE property_location LIKE '$Property_Location' and property_type LIKE '$Property_Type' ";
                            include ("search.php");
                   
                                }
                        // search for location and price only
                        elseif(!empty($Property_Location) && empty($Property_Type) && !empty($Property_Price) && empty($Property_Use)) {
                                $propertyName = array();
                                $propertyType = array();
                                $image = array();
                                $propertyOwn = array();
                                $numberBedroom = array();
                                $numberBathroom = array();
                                $PropertyUse = array();
                                $propertyPrice = array();
                                
                                
                                $seletQuery = "SELECT * FROM property WHERE property_location LIKE '$Property_Location' and property_price >='$half' and property_price <='$Property_Price' ";
                            include ("search.php");
                   
                                }
                        // search for location and use only
                        elseif(!empty($Property_Location) && empty($Property_Type) && empty($Property_Price) && !empty($Property_Use)) {
                                $propertyName = array();
                                $propertyType = array();
                                $image = array();
                                $propertyOwn = array();
                                $numberBedroom = array();
                                $numberBathroom = array();
                                $PropertyUse = array();
                                $propertyPrice = array();
                                
                                
                                $seletQuery = "SELECT * FROM property WHERE property_location LIKE '$Property_Location' and property_use LIKE '$Property_Use' ";
                            include ("search.php");
                   
                                }
                        // search for location , type and price only
                        elseif(!empty($Property_Location) && !empty($Property_Type) && !empty($Property_Price) && empty($Property_Use)) {
                                $propertyName = array();
                                $propertyType = array();
                                $image = array();
                                $propertyOwn = array();
                                $numberBedroom = array();
                                $numberBathroom = array();
                                $PropertyUse = array();
                                $propertyPrice = array();
                                
                                
                                $seletQuery = "SELECT * FROM property WHERE property_location LIKE '$Property_Location' and property_type LIKE '$Property_Type' and property_price >='$half' and property_price <='$Property_Price' ";
                            include ("search.php");
                   
                                }
                        // search for location , type and use only
                        elseif(!empty($Property_Location) && !empty($Property_Type) && empty($Property_Price) && !empty($Property_Use)) {
                                $propertyName = array();
                                $propertyType = array();
                                $image = array();
                                $propertyOwn = array();
                                $numberBedroom = array();
                                $numberBathroom = array();
                                $PropertyUse = array();
                                $propertyPrice = array();
                                
                                
                                $seletQuery = "SELECT * FROM property WHERE property_location LIKE '$Property_Location' and property_type LIKE '$Property_Type' and property_use LIKE '$Property_Use' ";
                            include ("search.php");
                   
                                }
                        // search for location , use and price only
                        elseif(!empty($Property_Location) && !empty($Property_Type) && empty($Property_Price) && !empty($Property_Use)) {
                                $propertyName = array();
                                $propertyType = array();
                                $image = array();
                                $propertyOwn = array();
                                $numberBedroom = array();
                                $numberBathroom = array();
                                $PropertyUse = array();
                                $propertyPrice = array();
                                
                                
                                $seletQuery = "SELECT * FROM property WHERE property_location LIKE '$Property_Location' and property_price >='$half' and property_price <='$Property_Price' and property_use LIKE '$Property_Use' ";
                            include ("search.php");
                   
                                }
                        // search for use , price, location, type     
                        elseif(empty($Number_Bathroom) && empty($Number_Bedroom)) {
                            $propertyName = array();
                            $propertyType = array();
                            $image = array();
                            $propertyOwn = array();
                            $numberBedroom = array();
                            $numberBathroom = array();
                            $PropertyUse = array();
                            $propertyPrice = array();
                            
                            
                            $seletQuery = "SELECT * FROM property WHERE property_location LIKE '$Property_Location' 
                        and property_type LIKE '$Property_Type' and property_price >='$half' and property_price <='$Property_Price'  and property_use LIKE '$Property_Use'";
                        include ("search.php");
               
                            }
                        //search using all
                        elseif(!empty($Property_Location) && !empty($Property_Type) && !empty($Number_Bathroom) &&
                         !empty($Number_Bedroom) && !empty($Property_Price) &&  !empty($Property_Use)) {

                        $propertyName = array();
                        $propertyType = array();
                        $image = array();
                        $propertyOwn = array();
                        $propertyPrice = array();
                        $numberBedroom = array();
                        $numberBathroom = array();

                        $seletQuery = "SELECT * FROM property WHERE property_location LIKE '$Property_Location' 
                        and property_type LIKE '$Property_Type' and number_bedroom LIKE '$Number_Bedroom'
                        and number_bathroom LIKE '$Number_Bathroom' and property_price >='$half' and property_price <='$Property_Price'  and property_use LIKE '$Property_Use'";
                        include ("search.php");
           
                        }
                        
                        
                        

                        
                }
                             
                          
                        
                ?>
               
                </div>
               <div class="row">
                <div class="col-xl-12">
                    <div class="more_property_btn text-center">
                        <a href="#" class="boxed-btn3-line">More Properties</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- contact_action_area  -->
    <?php include'call_to_action.php'?>
    <!-- /contact_action_area  -->


    <!-- footer start -->
    <?php include'footer.php'?>
    <!--/ footer end  -->

    <!-- link that opens popup -->
    
    <script>
    var count, name;
    for (count=1; count>0; count++)
    {
            name = "tag"+count;
            var red = document.getElementById(name);
        if (red.innerHTML.match("land lease") || red.innerHTML.match("land rent") || red.innerHTML.match("house rent") )
        {
            red.style.backgroundColor = "red";
        }
    }

</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>

    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script>
    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- <script src="js/owl.carousel.min.js"></script> -->
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
    <script src="js/gijgo.min.js"></script>
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