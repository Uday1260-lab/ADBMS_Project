<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['vpmsaid']==0)) {
    header('location:logout.php');
} else {
    // For deleting    
    if($_GET['del']){
        $catid=$_GET['del'];
        mysqli_query($con,"delete from tblvehicle where ID ='$catid'");
        echo "<script>alert('Data Deleted');</script>";
        echo "<script>window.location.href='manage-incomingvehicle.php'</script>";
    }
    if($_GET['blacklist']){
        $catid=$_GET['blacklist'];
        mysqli_query($con,"update tblvehicle set blacklist=1 where ID ='$catid'");
        echo "<script>alert('Vehicle Blacklisted');</script>";
        echo "<script>window.location.href='manage-incomingvehicle.php'</script>";
    }
    if($_GET['unblacklist']){
        $catid=$_GET['unblacklist'];
        mysqli_query($con,"update tblvehicle set blacklist=0 where ID ='$catid'");
        echo "<script>alert('Vehicle Removed from Blacklist');</script>";
        echo "<script>window.location.href='manage-incomingvehicle.php'</script>";
    }
?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <title>VPMS - Manage Incoming Vehicle</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
    <!-- Left Panel -->
    <?php include_once('includes/sidebar.php');?>
    <!-- Left Panel -->

    <!-- Right Panel -->
    <?php include_once('includes/header.php');?>

    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Dashboard</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="dashboard.php">Dashboard</a></li>
                                <li><a href="manage-incomingvehicle.php">Manage Vehicle</a></li>
                                <li class="active">Manage Incoming Vehicle</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Non-Blacklisted Vehicles Table -->
                    <div class="card">
                        <div class="card-header bg-success text-white">
                            <strong class="card-title">Non-Blacklisted Vehicles</strong>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>S.NO</th>
                                        <th>Parking Number</th>
                                        <th>Owner Name</th>
                                        <th>Vehicle Reg Number</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $ret=mysqli_query($con,"select * from tblvehicle where Status='' AND blacklist=0");
                                    $cnt=1;
                                    while ($row=mysqli_fetch_array($ret)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $cnt;?></td>
                                        <td><?php echo $row['ParkingNumber'];?></td>
                                        <td><?php echo $row['OwnerName'];?></td>
                                        <td><?php echo $row['RegistrationNumber'];?></td>
                                        <td>
                                            <a href="view-incomingvehicle-detail.php?viewid=<?php echo $row['ID'];?>" class="btn btn-primary btn-sm">View</a> 
                                            <a href="print.php?vid=<?php echo $row['ID'];?>" style="cursor:pointer" target="_blank" class="btn btn-warning btn-sm">Print</a>
                                            <a href="manage-incomingvehicle.php?del=<?php echo $row['ID'];?>" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
                                            <a href="manage-incomingvehicle.php?blacklist=<?php echo $row['ID'];?>" class="btn btn-dark btn-sm" onClick="return confirm('Are you sure you want to Blacklist this vehicle?')">Blacklist</a>
                                        </td>
                                    </tr>
                                    <?php 
                                    $cnt=$cnt+1;
                                    }?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Blacklisted Vehicles Table -->
                    <div class="card mt-4">
                        <div class="card-header bg-danger text-white">
                            <strong class="card-title">Blacklisted Vehicles</strong>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>S.NO</th>
                                        <th>Parking Number</th>
                                        <th>Owner Name</th>
                                        <th>Vehicle Reg Number</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $ret=mysqli_query($con,"select * from tblvehicle where Status='' AND blacklist=1");
                                    $cnt=1;
                                    while ($row=mysqli_fetch_array($ret)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $cnt;?></td>
                                        <td><?php echo $row['ParkingNumber'];?></td>
                                        <td><?php echo $row['OwnerName'];?></td>
                                        <td><?php echo $row['RegistrationNumber'];?></td>
                                        <td>
                                            <a href="view-incomingvehicle-detail.php?viewid=<?php echo $row['ID'];?>" class="btn btn-primary btn-sm">View</a> 
                                            <a href="print.php?vid=<?php echo $row['ID'];?>" style="cursor:pointer" target="_blank" class="btn btn-warning btn-sm">Print</a>
                                            <a href="manage-incomingvehicle.php?del=<?php echo $row['ID'];?>" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
                                            <a href="manage-incomingvehicle.php?unblacklist=<?php echo $row['ID'];?>" class="btn btn-info btn-sm" onClick="return confirm('Are you sure you want to remove from Blacklist?')">Remove Blacklist</a>
                                        </td>
                                    </tr>
                                    <?php 
                                    $cnt=$cnt+1;
                                    }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>
    <?php include_once('includes/footer.php');?>
</div><!-- /#right-panel -->

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
<?php } ?>