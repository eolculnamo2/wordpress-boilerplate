<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/build/css/page/page.css" rel="stylesheet">
</head>
<body>
<?php get_header() ?>
    <?php 
        if ( have_posts() ) : while ( have_posts() ) : the_post();

            get_template_part( 'content', get_post_format() );

        endwhile; endif; 

        if ( has_nav_menu( 'custom-menu-2' ) ) {

            wp_nav_menu( array( 
                'theme_location' => 'custom-menu-2', 
                'container_class' => 'custom-menu-class' ) ); 
            }
    ?>

    
</body>
<?php get_footer() ?>
</html>