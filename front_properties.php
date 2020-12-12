<style>
    .btn-property{
        font-size: 16px;
        color: #001D38;
        font-weight: 500;
        margin-bottom: 0;
        margin-bottom: 8px;
        margin-left: -10px;
        border: none;
        background-color: transparent;
    }
    .btn-property:hover{
        cursor: pointer;
        color: #FDAE5C;
        -webkit-transition: 0.5s;
  -moz-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
    }
</style>
<div class="popular_property">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-40 text-center">
                        <h3>Recent Properties</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                include ("includes/db.php");
                $propertyName = array();
                $propertyType = array();
                $image = array();
                $propertyOwn = array();
                $propertyPrice = array();
                $numberBedroom = array();
                $numberBathroom = array();
                $numberBathroom = array();
              
                $seletQuery = "SELECT * FROM property";
                $result = mysqli_query($con, $seletQuery);
                while($row = mysqli_fetch_array($result)){
                    $propertyName[] = $row['property_name'];
                    $propertyType[] = $row['property_type'];
                    $propertyPrice[] = $row['property_price'];
                    $numberBedroom[] = $row['number_bedroom'];
                    $numberBathroom[] = $row['number_bathroom'];
                    $propertyOwn[] = $row['username'];
                    $image[] = $row['image2'];
                    $id[] = $row['id'];
                    

                }
                $proNameSize = sizeof($propertyName);
                for ($t=1; $t<=6; $t++) {
                    echo' <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="single_property">
                            <div class="property_thumb">
                                <div class="property_tag" id="tag'.$t.'">'.$propertyType[$proNameSize-$t].'
                                </div>
                                <img src="agent_portal/img/uploads/'.$image[$proNameSize-$t].'" alt="">
                            </div>
                            <div class="property_content">
                                <div class="main_pro">
                                            <form action="part_to_propertyDetail.php" method="POST">
                                                <button class="btn-property" name="propertyDetail" value="'.$id[$proNameSize-$t].'">'.$propertyName[$proNameSize-$t].'</button>
                                            </form>
                                        <div class="mark_pro">
                                            <img src="img/svg_icon/location.svg" alt="">
                                            <span>'.$propertyOwn[$proNameSize-$t].'</span>
                                        </div>
                                        <span class="amount">From N'.$propertyPrice[$proNameSize-$t].'k</span>
                                </div>
                            </div>
                            <div class="footer_pro">
                                    <ul>
                                        
                                        <li>
                                            <div class="single_info_doc">
                                                <img src="img/svg_icon/bed.svg" alt="">
                                                <span>'.$numberBedroom[$proNameSize-$t].' Bed</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single_info_doc">
                                                <img src="img/svg_icon/bath.svg" alt="">
                                                <span>'.$numberBathroom[$proNameSize-$t].' Bath</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                        </div>
                    </div>';
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