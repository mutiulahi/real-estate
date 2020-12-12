<?php
session_start();
 if(isset($_POST['propertyDetail'])) {
    $_SESSION['propertyID'] = $_POST['propertyDetail'];
    echo  $_SESSION['propertyID'].',';
  header("Location:property_details.php");
}

?>