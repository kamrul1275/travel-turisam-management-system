<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Travel & Turisam</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->




<style> 

/*-- banner --*/
.banner {
    background: url(images/banner.jpg)no-repeat;
    background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    -moz-background-size: cover;
    min-height: 430px;
}
.banner h1 {
    font-size: 50px;
    margin-bottom: 40px;
    padding: 4em 0 0;
    text-align: center;
    color: #ffffff;
}
.bann-info h2 {
    font-size: 26px;
    margin-bottom: 30px;
    color: #34ad00;
    font-weight: 700;
}
.bann-info {
    padding: 4em 0;
}
.bnr-right input[type="text"] {
    width: 95%;
    color: #9E9E9E;
    outline: none;
    font-size: 14px;
    padding: 10px 10px;
    border: 1px solid #9E9E9E;
    -webkit-appearance: none;
    margin-top: 10px;
}
.date {
    background: url(../images/date-icon.png) no-repeat 95.5% 45% #fff;
    cursor: pointer;
}
.bnr-left input[type="text"] {
    width: 95%;
    color: #9E9E9E;
    outline: none;
    font-size: 14px;
    padding: 10px 10px;
    border: 1px solid #9E9E9E;
    -webkit-appearance: none;
    margin-top: 10px;
}
.ban-top .inputLabel,.ban-bottom  .inputLabel {
    display: block;
    font-weight: 600;
    font-size: 14px;
    margin-bottom: 5px;
	color: #191919;
}
.bann-info1 {
    padding: 8em 5em 0em;
    text-align: center;
}
.bnr-right {
    float: left;
	width:50%;
}
.bnr-left {
    float: left;
	width:50%;
}
.ban-bottom{
    margin-top: 30px;
}
button.seabtn {
    padding: 6px 25px!important;
    font-size: 16px;
	 text-indent: 0;
    padding: 6px 20px;
    color: #fff;
    background-color:#34ad00;
    border: 0;
    border-radius: 2px;
    -webkit-transition: all .2s;
    -moz-transition: all .2s;
    transition: all .2s;
    background-repeat: no-repeat;
    background-position: 96% center;
} 
button.seabtn:focus,button.seabtn:hover{
    background-color:#1f8dd6;
    outline: 0;
}
.sear {
    margin-top: 30px;
}
.bann-info1 h3 {
    font-size: 2.1em;
    font-weight: 700;
    color: #34ad00;
    text-align: center;
    margin-top: 25px;
}
i.fa.fa-columns {
    font-size: 9em;
    color: #1f8dd6;
}
/*-- /banner --*/


</style>

</head>
<body>






<?php include('includes/header.php');?>
<div class="banner">
	<div class="container">
		<!-- <h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">Online Travel & Turisam Management System</h1> -->
	</div>
</div>
<!--- rupes ---->
<div class="container">
	<div class="rupes">
		<div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
			<div class="rup-left">
				<a href="offers.html"><i class="fa fa-usd"></i></a>
			</div>
			<div class="rup-rgt">
				<h3>UP TO TAKA. 50 OFF</h3>
				<h4><a href="offers.html">TRAVEL SMART</a></h4>
				
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
			<div class="rup-left">
				<a href="#"><i class="fa fa-h-square"></i></a>
			</div>
			<div class="rup-rgt">
				<h3>UP TO 70% OFF</h3>
				<h4><a href="#">ON HOTELS ACROSS BANGLADESH</a></h4>
				
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
			<div class="rup-left">
				<a href="#"><i class="fa fa-mobile"></i></a>
			</div>
			<div class="rup-rgt">
				<h3>FLAT TAKA. 50 OFF</h3>
				<h4><a href="#">US Aplication OFFER</a></h4>
			
			</div>
				<div class="clearfix"></div>
		</div>
	
	</div>
</div>
<!--- /rupes ---->




<!---holiday---->
<div class="container">
	<div class="holiday">
	



	
	<h3>Package List</h3>

					
<?php $sql = "SELECT * from tbltourpackages order by rand() limit 4";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>
			<div class="rom-btm">
				<div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
					<img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" class="img-responsive" alt="">
				</div>
				<div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
					<h4>Package Name: <?php echo htmlentities($result->PackageName);?></h4>
					<h6>Package Type : <?php echo htmlentities($result->PackageType);?></h6>
					<p><b>Package Location :</b> <?php echo htmlentities($result->PackageLocation);?></p>
					<p><b>Features</b> <?php echo htmlentities($result->PackageFetures);?></p>
				</div>
				<div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
					<h5>TAKA <?php echo htmlentities($result->PackagePrice);?></h5>
					<a href="package-details.php?pkgid=<?php echo htmlentities($result->PackageId);?>" class="view">Details</a>
				</div>
				<div class="clearfix"></div>
			</div>

<?php }} ?>
			
		
<div><a href="package-list.php" class="view">View More Packages</a></div>
</div>
			<div class="clearfix"></div>
	</div>


<!--- routes ---->
<div class="routes">
	<div class="container">
		<div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
			<div class="rou-left">
				<a href="#"><i class="glyphicon glyphicon-list-alt"></i></a>
			</div>
			<div class="rou-rgt wow fadeInDown animated" data-wow-delay=".5s">
				<h3>800</h3>
				<p>Car Booking</p>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="col-md-4 routes-left">
			<div class="rou-left">
				<a href="#"><i class="fa fa-user"></i></a>
			</div>
			<div class="rou-rgt">
				<h3>1900</h3>
				<p>Regestered users</p>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
			<div class="rou-left">
				<a href="#"><i class="fa fa-ticket"></i></a>
			</div>
			<div class="rou-rgt">
				<h3>7,00+</h3>
				<p>Booking Hotel</p>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>			
<!-- //write us -->
</body>
</html>