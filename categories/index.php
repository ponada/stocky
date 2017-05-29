<?php require_once "../admin/api/api.php"?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo $info["title"];?></title>
		<meta name="description" content="<?php echo $info["subtitle"];?>">
		<meta name="viewport" content="width=device-width">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="../css/styles.css">
	</head>
	<body>
		<!-- Modal loading img
		============================================= -->
        <?php require '/../admin/views/modal-load.php' ?>
        <!-- #modal end -->
		<!-- Modal sending message
		============================================= -->
        <?php require '/../admin/views/modal-send.php' ?>
		<!-- #modal end -->
		<!-- Header
		============================================= -->
		<header>
			<!-- Primary Navigation
				============================================= -->
			<?php require '/../admin/views/header.php' ?>
			<!-- #navigation end -->
		</header>
		<!-- Wrapper
		============================================= -->
		<div class="wrapper container">
			<div class="row">
                <!-- aside-left
		============================================= -->
                <?php require '/../admin/views/aside-left.php' ?>
				<!-- #aside-left end -->
				<!-- Gallery main
		============================================= -->
                <?php require '/../admin/views/gallery-main.php' ?>
				<!-- #gallery-main end -->
                <!-- aside-left
		============================================= -->
                <?php require '/../admin/views/aside-right.php' ?>
                <!-- #aside-left end -->
			</div>
		</div><!-- #wrapper end -->
		<!-- Footer
			============================================= -->
			<?php require '/../admin/views/footer.php' ?>
		<!-- #footer end -->
