<!DOCTYPE HTML>
<html lang="en">  
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <title><?php echo wp_get_document_title(); ?><?php bloginfo('name'); ?> </title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <?php wp_head(); ?>
  </head>
  <body>
  	<header class="page-header">
      <div class="container">
    		<section class="top-header clearfix">
    			<div class="header-logo">
    				<a href="/">
    					<img src="<?php bloginfo('template_url'); ?>/img/header-logo.png" alt="logo">
    				</a>
    			</div>
          <nav class="header-menu">
            <?php wp_nav_menu(array('menu'=>'top-menu', 'menu_class' => 'top-menu')); ?>
          <!-- Функция wp_nav_menu отобразит меню с именем «top-menu» и классом «top-menu» -->
          </nav>
          <form class="searchform" method="GET" name="search" action="<?php echo home_url('/'); ?>"> <!-- Возвращает УРЛ главной страницы сайта -->
      		  <input class="input" type="text" name="s" value="<?php echo get_search_query(); ?>" placeholder="<?php echo _('Search'); ?>">
            <button class="button-form" type="submit"><?php echo _('GO'); ?></button>
          </form>
        </section>
    		<section class="middle-header">
          <img src="<?php bloginfo('template_url'); ?>/img/header-tl.png" alt="tagline">
          <p><?php echo _('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed<br> do eiusmod tempor incidid'); ?></p>
    		  <a href="http://www.travel.ru/register/" class="register"><?php echo _('To register'); ?></a>
        </section>
      </div>
  	</header>








