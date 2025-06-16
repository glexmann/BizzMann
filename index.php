<?php include 'sitevars.php'; ?>
<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
<head>
	<title><?php echo "$pageTitle2"; ?></title>
<?php include_once("include/meta.php"); ?>
	<!-- Link External CSS & JS Files HERE -->
	<link type="text/css" rel="stylesheet" href="http://www.GlexMann.Com/domainfiles/css/style.css"><!-- CSS Style for full site -->
	<link type="text/css" rel="stylesheet" href="http://www.GlexMann.Com/domainfiles/css/domainlogos.css"><!-- CSS Style for Domain Logos -->
	<script src="script/jQueryTools.js"></script><!-- JS for Accordian -->
	<script type="text/javascript" src="script/crawler.js"></script>
	<!-- Additional CSS Style if any, HERE -->
	<style type="text/css">
		body		{background:url('<?php echo "$bodyImage"; ?>') no-repeat center center fixed #181840; -webkit-background-size:cover; -moz-background-size:cover; -o-background-size:cover; background-size:cover; }
	</style>
</head>
<?php flush(); ?>
<body>
<?php include_once("include/domainticker.php"); ?>
<?php include_once("include/fixedsocial.php"); ?>
<?php include_once("include/welcome.php"); ?>
<?php include_once("include/heading.php"); ?>
<?php include_once("include/construction.php"); ?>
<?php include_once("include/forsale.php"); ?>
<?php include_once("include/facts.php"); ?>
<?php include_once("include/stats.php"); ?>
<?php include_once("include/portfolio.php"); ?>
<!--// === === === === === === === === === === === === //-->
<!--// STARTS HERE //-->
<!--// ENDS HERE //-->
<!--// === === === === === === === === === === === === //-->
<?php include_once("include/domainlogos.php"); ?>
<?php include_once("include/jointventure.php"); ?>
<?php include_once("include/domainworld.php"); ?>
<?php include_once("include/domainnews.php"); ?>
<?php include_once("include/connectwithus.php"); ?>
<?php include_once("include/terms.php"); ?>
<?php include_once("include/domainterms.php"); ?>
<?php include_once("include/bottomads.php"); ?>
<?php include_once("include/keywords.php"); ?>
<!--// === === === === === === === === === === === === //-->
<!--/// ALL SCRIPTS START Here at the BOTTOM ///-->
<?php include_once("include/google.php"); ?>
<?php include_once("include/addthis.php"); ?>
</body>
</html>