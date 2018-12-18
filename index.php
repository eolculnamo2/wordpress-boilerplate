<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/build/css/blog/blog.css" rel="stylesheet">
</head>
<body>
<?php get_header(); ?>
    <div class="blog-wrap">
        <h1 class="blog-title"><?php the_title(); ?></h1>
        <div class="blog-layout">
            <div>
                <?php 
                    if ( have_posts() ) : while ( have_posts() ) : the_post();
                        get_template_part( 'content', get_post_format() );
                    endwhile; endif; 
                ?>
            </div>
            <div class="right-menu">
            Test
            </div>
        </div>
    </div>
</body>
<?php get_footer(); ?>
<script src="<?php echo get_bloginfo('template_directory'); ?>/build/js/script.js"></script>
</html>