<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <title><?php bloginfo() ?></title>
	<?php wp_head() ?>
    </head>
    <body <?php body_class() ?>>
	<nav><?php bloginfo() ?></nav>
	<?php if(have_posts()){
	    while(have_posts()){
		the_post();
	?>
	    <h1><?php the_title() ?></h1>
	    
	    <?php 
	} }?>
	
	<?php wp_footer(); ?>
    </body>
</html>
