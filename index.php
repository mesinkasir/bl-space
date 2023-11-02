<!DOCTYPE html>
<html lang="<?php echo Theme::lang() ?>">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-site-verification" content="lO3pNP7czUCL3XA6pca2iX1eKo91FdnRZ5ikLWKxrrc" />
<?php echo Theme::metaTagTitle(); ?>
<?php echo Theme::metaTagDescription(); ?>
<?php echo Theme::favicon('img/favicon.png'); ?>
<?php echo Theme::css('css/bs.css'); ?>
<?php Theme::plugins('siteHead'); ?>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6422989243541464"
     crossorigin="anonymous"></script>
<?php echo Theme::css('css/space.css'); ?>
</head>
<body>
<?php include(THEME_DIR_PHP.'dev.php'); ?>
<div class="container mt-3 mb-3">
<?php Theme::plugins('siteBodyBegin'); ?>
<?php include(THEME_DIR_PHP.'navbar.php'); ?>
<?php
		if ($WHERE_AM_I == 'home') {
			include(THEME_DIR_PHP.'home.php');
		} else {
			include(THEME_DIR_PHP.'page.php');
		}
	?>
<?php include(THEME_DIR_PHP.'footer.php'); ?>
<?php Theme::plugins('siteBodyEnd'); ?>
</div>
<?php echo Theme::jquery(); ?>
</body>
</html>
