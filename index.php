<?php require_once "admin/api/api.php"?>
<!DOCTYPE html>
		<meta charset="utf-8">
		<title><?php echo $info["title"];?></title>
		<meta name="description" content="<?php echo $info["subtitle"];?>">
		<meta name="viewport" content="width=device-width">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="css/styles.css">
	</head>
	<body>
        <!-- Modal loading img
        ============================================= -->
        <?php require 'admin/views/modal-load.php' ?>
        <!-- #modal end -->
        <!-- Modal sending message
        ============================================= -->
        <?php require 'admin/views/modal-send.php' ?>
        <!-- #modal end -->
        <!-- Header
        ============================================= -->
		<header class="header">
			<!-- Primary Navigation
				============================================= -->
            <?php require 'admin/views/header.php' ?>
			<!-- #navigation end -->
			<div class="header-wrap">
				<div class="header-wrap-top white container">
					<h1>БЕСПЛАТНЫЙ ФОТОСТОК</h1>
					<h4><?php echo $info["subtitle"];?></h4>
					<ul class="categories">
						<li><a href="#">Категория1</a></li>
						<li><a href="#">Категория2</a></li>
						<li><a href="#">Категория3</a></li>
						<li><a href="#">Категория4</a></li>
						<li><a href="#">Категория5</a></li>
					</ul>
				</div>
				<!-- Loading image
				============================================= -->
				<div class="header-wrap-bottom white container" id="loadImg">
					<h3>Загрузить свое изображение на сайт:</h3>
					<form method="post" enctype="multipart/form-data">
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
						<input type="submit" class="btn btn-primary" id="loadBtn" value="Загрузить">
					</form>
				</div><!-- #loading image end -->
			</div>
		</header><!-- #header end -->
		<div class="wrapper">
		<!-- Gallery
		============================================= -->
			<div class="gallery container">
				<div class="row clearfix">
					<div class="col col-sm-3  col-xs-6">
						<img class="gallery-item" src="img/gallery/cat.jpg" alt="">
					</div>
					<div class="col col-sm-3  col-xs-6">
						<img class="gallery-item" src="img/gallery/bear.jpg" alt="">
					</div>
					<div class="col col-sm-3  col-xs-6">
						<img class="gallery-item" src="img/gallery/belka.jpg" alt="">
					</div>
					<div class="col col-sm-3  col-xs-6">
						<img class="gallery-item" src="img/gallery/funnyanimal.jpg" alt="">
					</div>
				</div>
				<div class="row clearfix">
					<div class="col col-sm-3  col-xs-6">
						<img class="gallery-item" src="img/gallery/child1.jpg" alt="">
					</div>
					<div class="col col-sm-3  col-xs-6">
						<img class="gallery-item" src="img/gallery/child2.jpg" alt="">
					</div>
					<div class="col col-sm-3  col-xs-6">
						<img class="gallery-item" src="img/gallery/child3.jpg" alt="">
					</div>
					<div class="col col-sm-3  col-xs-6">
						<img class="gallery-item" src="img/gallery/child4.jpg" alt="">
					</div>
				</div>
				<div class="discover-photos btn-primary text-center">
					<a href="#" class="">БОЛЬШЕ ИЗОБРАЖЕНИЙ</a>
				</div>
			</div><!-- #gallery end -->
			<!-- Send a message
			============================================= -->
			<div class="send white text-center">
				<div class="send_container ">
					<div class="container">
						<h3>Написать нам:</h3>
						<form id="sendMessage" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" name="email" class="form-control" id="email" placeholder="Email">
							</div>
							<div class="form-group">
								<label for="message">Сообщение</label>
								<textarea type="text" name="message"  rows="5" id="message" class="form-control" placeholder="Текст"></textarea>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-primary" id="sendBtn" value="Отправить">
							</div>
						</form>
					</div>
				</div>
			</div><!-- #sending message end -->
		</div>
		<!-- Footer
			============================================= -->
            <?php require 'admin/views/footer.php' ?>
		<!-- #footer end -->
