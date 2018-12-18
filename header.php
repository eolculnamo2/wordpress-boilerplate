<header>
    <div class="layout">
        <div class="header-flex">
            <div>
                <h1><a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
                <p class="blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
            </div>
            <div>
            <?php
            if ( has_nav_menu( 'custom-menu-1' ) ) {

            wp_nav_menu( array( 
                'theme_location' => 'custom-menu-1', 
                'container_class' => 'custom-menu-class' ) ); 
            }
            ?>
            </div>
        </div>
    </div>
</header>