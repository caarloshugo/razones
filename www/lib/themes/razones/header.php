<!DOCTYPE html>
<html lang="<?php print get("webLang"); ?>">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title><?php print $this->getTitle() . $user["name"];?></title>
		<link href="<?php print $this->themePath; ?>/css/style.css" rel="stylesheet">
		<script language="javascript" src ="<?php print $this->themePath; ?>/js/jquery.js"></script>
		<script language="javascript" src ="<?php print $this->themePath; ?>/js/functions.js"></script>
		<?php print $this->getCSS(); ?>
	</head>

	<body>
		<div id="container">
			<div id="header">
				<h1>
					Segundo Seminario Internacional sobre la relaci&oacute;n 
					entre los derechos humanos y los recursos y las pol&iacute;ticas p&uacute;blicas, 
					las decisiones judiciales y la implementaci&oacute;n de las reformas legislativas
				</h1>
			</div>

			<a class="home twitter" href="http://twitter.com/FundarMexico" title="Fundar Twitter">
				<img src="<?php print $this->themePath; ?>/css/images/twitter.png" alt="Fundar Twitter" />
			</a>
			<a class="home facebook" href="http://www.facebook.com/FundarMexico" title="Fundar Facebook">
				<img src="<?php print $this->themePath; ?>/css/images/facebook.png" alt="Fundar Facebook" />
			</a>
			<a class="home youtube" href="http://www.youtube.com/fundarac" title="Fundar Youtube">
				<img src="<?php print $this->themePath; ?>/css/images/youtube.png" alt="Fundar Youtube" />
			</a>			
			
		
