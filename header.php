<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title><?php global $page, $paged; wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
	<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
	<?php wp_head(); ?>
	<link href="https://fonts.googleapis.com/css?family=Lato:700" rel="stylesheet">   
</head>


<body>

	<header>
		<div class="inline left"> <!--logo-->
			<img alt="logo" id="logopadding" height="200px"/>
		</div>

		<div class="float right" id="topbox"> <!--Right of logo-->
			<div id="socialghost"> <!--Social media handle-->
				<a href="https://www.facebook.com/HarvestHouseBuffalo/" class="float social"><img src="images/FB.png"/></a>
			</div>

			<div class="address left"> <!--Address-->
				<p>1782 Seneca Street</p>
				<p>Buffalo, NY 14210</p>
				<p>(716) 825-0929</p>
			</div>
		</div>
		<nav>
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
		</nav>

		<div class="background">
			<div class="quote float">
			</div>
		</div>


	</header>
