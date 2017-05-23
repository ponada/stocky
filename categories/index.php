<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Бесплатный фотосток</title>
		<meta name="description" content="Более 100 000 бесплатных фотографий и картинок">
		<meta name="viewport" content="width=device-width">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="../css/styles.css">
	</head>
	<body>
		<!-- Modal loading img
		============================================= -->
		<div class="modal fade" id="loadImg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Загрузить изображение</h4>
					</div>
					<div class="modal-body">
					<form id="loadImg" method="post" enctype="multipart/form-data">
						<div class="file-upload">
							<input type="file" class="btn" name="picture">
						</div>
						<select class="form-control">
							<option>Категория1</option>
							<option>Категория2</option>
							<option>Категория3</option>
							<option>Категория4</option>
							<option>Категория5</option>
						</select>
						<input type="text" name="title" id="imgTitle" class="form-control" placeholder="Описание">
					</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
						<button type="button" class="btn btn-primary" id="loadBtn">Загрузить</button>
					</div>
				</div>
			</div>
		</div><!-- #modal end -->
		<!-- Modal sending message
		============================================= -->
		<div class="modal fade" id="sendMessage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Написать нам</h4>
					</div>
					<div class="modal-body">
					<form id="sendMessageForm" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" name="email" class="form-control" id="email" placeholder="Email">
						</div>
						<div class="form-group">
							<label for="message">Сообщение</label>
							<textarea type="text" name="message"  rows="5" id="message" class="form-control" placeholder="Текст"></textarea>
						</div>
					</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
						<button type="button" class="btn btn-primary" id="sendBtn">Отправить</button>
					</div>
				</div>
			</div>
		</div><!-- #modal end -->
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
		<div class="wrapper">
			<div class="row">
				<div class="left col-xs-3">
					<div class="left_container">
						<div class="left_nav">
							<ul class="list-group submenu">
								<li class="list-group-item"><a href="#">Категория1</a></li>
								<li class="list-group-item"><a href="#">Категория2</a></li>
								<li class="list-group-item"><a href="#">Категория3</a></li>
								<li class="list-group-item"><a href="#">Категория4</a></li>
								<li class="list-group-item"><a href="#">Категория5</a></li>
							</ul>
						</div>
						<div class="left_banner">
							<img src="../img/banners/banner1.jpg" alt="..." class="img-thumbnail">
						</div>
					</div>
				</div>
				<!-- Gallery
		============================================= -->
				<div class="gallery col-xs-6">
					<div class="row clearfix">
						<div class="col col-xs-12">
							<img class="gallery-item" src="../img/gallery/belka.jpg" alt="">
						</div>
					</div>
					<div class="row clearfix">
						<div class="col col-xs-12">
							<img class="gallery-item" src="../img/gallery/bear.jpg" alt="">
						</div>
					</div>
					<div class="row clearfix">
						<div class="col col-xs-12">
							<img class="gallery-item" src="../img/gallery/child1.jpg" alt="">
						</div>
					</div>
					<div class="row clearfix">
						<div class="col col-xs-12">
							<img class="gallery-item" src="../img/gallery/child2.jpg" alt="">
						</div>
					</div>
				</div><!-- #gallery end -->
				<div class="right col-xs-3">
					<div class="right_container">
						<div class="right_btns">
							<div class="btn btn-primary" data-toggle="modal" data-target="#loadImg">
								<span class="glyphicon glyphicon-picture aria-hidden="true"></span>
								<span>Загрузить изображение</span>
							</div>
							<div class="btn btn-primary" data-toggle="modal" data-target="#sendMessage">
								<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
								<span>Написать нам</span>
							</div>
						</div>
						<div class="right_banner">
							<img src="../img/banners/banner2.jpg" alt="..." class="img-thumbnail">
						</div>
					</div>
				</div>
			</div>
		</div><!-- #wrapper end -->
		<!-- Footer
			============================================= -->
			<?php require '/../admin/views/header.php' ?>
		<!-- #footer end -->
	<script
		src="https://code.jquery.com/jquery-3.2.1.min.js"
		integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
		crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="../script/common.js"></script>
	</body>
</html>