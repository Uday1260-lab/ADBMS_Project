<?php
include('../users/includes/dbconnection.php'); // Include your database connection file

if (isset($_GET['category'])) {
    $category = $_GET['category'];
    $query = mysqli_query($con, "SELECT ParkingCharge FROM tblcategory WHERE VehicleCat='$category'");
    $result = mysqli_fetch_array($query);
    echo $result['ParkingCharge'];
}
?>
