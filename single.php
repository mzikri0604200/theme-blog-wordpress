<!DOCTYPE html>
<html lang="en"> 
<head>
    <!-- <title>Blog Site Template</title> -->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">
    <meta name="author" content="https://youtube.com/FollowAndrew">    
    <link rel="shortcut icon" href="./wp-content/themes/blog/images/logo.png"> 
    
	<?php	
		wp_head();
	?>

</head> 

<body>
	<?php
		get_header();
	?>
		
		<article class="content px-3 py-5 p-md-5">
	    <?php
				if( have_posts() ){
					while(have_posts() ){
						the_post();
						get_template_part( 'template-parts/content', 'article' );
					}
				}
			?>
	  </article>

	<?php
		get_footer();
	?>
	

