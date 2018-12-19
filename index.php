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
            <div class="left-side"></div>
            <div>
                <?php 
                    if ( have_posts() ) : while ( have_posts() ) : the_post();
                        get_template_part( 'content', get_post_format() );
                    endwhile; endif; 
                ?>
            </div>
            <div class="right-menu">
                <h3 class="menu-title">Recommended Reads</h3>
                <h3 class="menu-link">Business and Professionalism</h3>
                <img src="http://localhost:3000/wordpress/wp-content/uploads/2018/12/business-min-1.jpeg)" alt="business">
                <h3 class="menu-link">Tech and Coding</h3>
                <img src="http://localhost:3000/wordpress/wp-content/uploads/2018/12/tech-min.jpeg" alt="tech">
                <h3 class="menu-link">Self Improvement and Spirituality</h3>
                <img src="http://localhost:3000/wordpress/wp-content/uploads/2018/12/selfimprovement-min.jpeg" alt="spirtuality">
            </div>
        </div>
    </div>
</body>
<?php get_footer(); ?>
<script src="<?php echo get_bloginfo('template_directory'); ?>/build/js/script.js"></script>
</html>