<?php require_once 'api/utils.php' ?>
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

        <?php
        $email = $_POST["email"];
        $password = $_POST["password"];
        if( isset($email, $password)){
            $access = validateUser($email, $password);
            if ($access["status"]){
                require 'views/admin_panel.php';
                createCategory("deti");
            }else{
                require 'views/admin_form.php';
            }
        }else {
            require 'views/admin_form.php';
        }
        ?>

	<script
		src="https://code.jquery.com/jquery-3.2.1.min.js"
		integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
		crossorigin="anonymous">
    </script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="../script/admin.js"></script>
	</body>
</html>
