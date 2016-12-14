<?php include 'inc/db.php';?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
   	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>2TECH</title>

	<link rel="stylesheet" type="text/css" href="lib/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="lib/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="lib/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="lib/css/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<link rel="stylesheet" type="text/css" href="css/nav.css">

	<script type="text/javascript" src="lib/js/jquery.js"></script>
	<script type="text/javascript" src="lib/js/jquery-ui.js"></script>
	<script type="text/javascript" src="lib/js/angular.js"></script>
	<script type="text/javascript" src="lib/js/angular-ui-router.js"></script>
	<script type="text/javascript" src="lib/js/angular-resource.js"></script>
	<script type="text/javascript" src="lib/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="lib/js/jquery.dataTables.js"></script>
	<script type="text/javascript" src="lib/js/angular-datatables.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
	<script type="text/javascript" src="js/controller/data.js"></script>
	<script type="text/javascript" src="js/directive/directive.js"></script>
	<script type="text/javascript" src="js/filters/filters.js"></script>
	<script type="text/javascript" src="js/service/service.js"></script>
</head>

<body ng-app="app">

	<div class="container-fluid" ui-view></div>

</body>
</html>