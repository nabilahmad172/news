

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Online Newspaper</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php include '_partial/topheader.php';?>

	

<!-- menu -->
<?php include '_partial/menu.php';?>
<!-- end menu -->
	<?php
	if(isset($_GET['route'])){
		$page=$_GET['route'].".php";

		if(file_exists($page)){
			include_once $page;
		}else{
			include '_partial/404.php';
		}
	}else{
			include '_partial/mainContent.php';
		}
	?>
<!-- footer -->
<?php include '_partial/footer.php';?>
<!-- end footer -->

<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/dropdown.js"></script> 

</body>
</html>