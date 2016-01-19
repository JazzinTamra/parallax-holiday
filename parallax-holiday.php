<?php
///**
// * Created by PhpStorm.
// * User: Tamra
// * Date: 1/12/2016
// * Time: 5:22 PM
// */
//
///**
// * Get the relative path.
// * @see https://raw.githubusercontent.com/kingscreations/farm-to-you/master/php/lib/_header.php FarmToYou Header
// **/
//
//// include the appropriate number of dirname() functions
//// on line 8 to correctly resolve your directory's path
//require_once((__DIR__) . "/root-path.php");
//$CURRENT_DEPTH = substr_count($CURRENT_DIR, "/");
//$ROOT_DEPTH = substr_count($ROOT_PATH, "/");
//$DEPTH_DIFFERENCE = $CURRENT_DEPTH - $ROOT_DEPTH;
//$PREFIX = str_repeat("../", $DEPTH_DIFFERENCE);
//?>

<?php
//grab current directory
$CURRENT_DIR = __DIR__;
/*set page title here*/
$PAGE_TITLE = "Parallax Holiday";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- optional theme -->
		<link type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>

		<!--Font Awesome-->
		<link type="text/css" rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />

		<!--Open Font-->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>

		<!-- My CSS style sheet -->
		<!--		<link type="text/css" href="--><?php //echo $PREFIX;?><!--css/style.css" rel="stylesheet">-->
		<link rel="stylesheet" href="css/style.css">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]-->
		<script type="text/javascript" src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script type="text/javascript" src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) NECESSARY FOR SIMPLE LIGHT BOX -->
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script type="text/javascript" src="<?php echo $PREFIX;?>js/simple-lightbox.min.js"></script>

		<script src="<?php echo $PREFIX;?>js/custom-scripts.js"></script>

		<title><?php echo $PAGE_TITLE; ?></title>

	</head>
	<body>
		<?php //require_once("php/header.php");?>
		<main>
			<section id="water" datatype="background" data-speed="10">
				<article id="waterArticle">I am absolute positioned</article>
			</section>
			<section id="ship" datatype="background" data-speed="10">
				<article id="shipArticle">Simple Parallax Scroll</article>
			</section>
		</main>

	</body>

</html>
