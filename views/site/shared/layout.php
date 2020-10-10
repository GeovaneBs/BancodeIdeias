<?php
	$url = $this->helpers['URLHelper']->getURL();
	$location = $this->helpers['URLHelper']->getLocation();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="keywords" content="HTML, CSS, JavaScript, PHP">
		<meta name="description" content="Descrição do site">
		<meta name="author" content="Code Universe">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="robots" content="index, follow">
		<title>Título do Site</title>
		<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/assets/libs/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/assets/libs/fontawesome/css/all.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/assets/css/site/layout.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/assets/css/site/home.css">
	</head>
	<body>

		<header>
			<?php require 'header.php'; ?>
		</header>

		<main>
			<?php require $file; ?>
		</main>

		<footer>
			<?php require 'footer.php'; ?>
		</footer>

	</body>
</html>