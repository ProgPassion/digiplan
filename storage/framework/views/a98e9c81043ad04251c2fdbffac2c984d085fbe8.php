<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
	<style type="text/css">
		body {
			color: #f3f3f3;
		}
		.title {
			color: #000;
		}
		.main-wrapper {
			margin-top: 30px;
			background-color: #222;  
		}
		.home-btn-wrapper {
			width: 25%;
			float: left;
		}
		.title-wrapper {
			width: 75%;
			float: right;
		}
		.hr-white {
			border-top: 1px solid #fff;
		}
		.hotels-desc-padding {
			padding: 6px 12px;
		}
		.hotel-desc-wrapper {
			position: relative;
			margin-right: 20%;
			padding: 5px 10px;
			border: 5px solid grey;
			overflow: hidden;
		}
		.img-container {
			width: 70%;
			float: left;
		} 
		.img-container > img {
			width: 100%;
		}
		.hotel-detail-info {
			position: absolute;
			bottom: 20px;
			right: 0;
			width: 30%;
			float: right;
			padding: 10px 20px;
		}
		.main-hotel-detail {
			width: 40%;
			margin-left: 30%;
			background: #e5e5e5;
			overflow: hidden;
			display: inline-block;
		}
		.main-hotel-detail > img {
			display: block;
			width: 100%;
		}
		.main-hotel-detail-label {
			width: 50%;
			float: left;
			padding: 10px 20px;
			font-size: 16px;
			font-weight: bold;
		}
		.main-hotel-detail-data {
			width: 50%;
			float: right;
			padding: 10px 20px;
			font-size: 16px;
		}
	</style>
	<title><?php echo $__env->yieldContent("title"); ?></title>
</head>
<body class="bg-danger">
	<div class="container rounded-lg bg-white mt-5 mb-3 pr-5 pt-2 pb-2">
		<div class="home-btn-wrapper">
			<h1><a class="btn btn-light btn-block btn-lg" href="/home">Home</a></h1>
		</div>
		<div class="title-wrapper">
			<h1 class="title text-right">Digiplan</h1>
		</div>
	</div>
	<div class="container main-wrapper rounded-lg p-5">
		<?php echo $__env->yieldContent("content"); ?>
	</div>


	<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
</body>
</html>