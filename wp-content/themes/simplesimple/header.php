<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/images/favicon.ico">
		<link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>" media="screen">
		<link href="http://fonts.googleapis.com/css?family=Josefin+Sans:400,600,700" rel="stylesheet">
		<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
		<?php wp_head(); ?>
	</head>
	<body>
		<div id="container">
			<!-- header -->
			<div id="header" class="clearfix">
				<div class="alignleft">
					<h1 id="logo">
						<a href="<?php echo home_url('/') ?>"><span><?php bloginfo('name'); ?></span></a>
					</h1>
					<p id="description"><?php echo bloginfo('description'); ?></p>
				</div>
				
				<div class="alignright">
					<?php get_search_form(); ?>
				</div>
				<!-- Navigation -->
				<?php wp_nav_menu( array ( 'theme_location' => 'header-navi' ) ); ?>

				<!-- /Navigation -->
			</div>
			<!-- /header -->