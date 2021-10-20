<!DOCTYPE html>
<html <?php language_attributes();?>>
    <head>
        <meta charset="<?php bloginfo('charset');?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        
        <?php wp_head();?>
    </head>

    <body <?php body_class(); ?>>



        <main id="main">

        
            <header class="main-header">
                <div class="container-fluid">
                    <nav>
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="img-a">
                            <img src="<?php echo get_template_directory_uri() . '/build/images-bundled/logo-primary-01__silhoutte-01.svg' ?>" alt="Padova - Header logo" height="40">
                        </a>


                        
                        <ul>
                            <li>menu item</li>
                            <?php 
                            // wp_nav_menu([
                            //     'menu'            => 'header',
                            //     'theme_location'  => 'header',
                            //     'container'       => '',
                            //     'items_wrap'     => '%3$s',
                            //     'menu_id'         => false,
                            //     'depth'           => 1,
                            //     'fallback_cb'     => 'bs4navwalker::fallback',
                            //     'walker'          => new bs4navwalker()
                            // ]); 
                            ?>  
                        </ul>  



                        <?php // get_template_part('template-parts/language-selector'); ?>
                    </nav>
                </div>
            </header>

            <button type="button" class="fullscreen-toggler" id="fullscreen-toggler">
                <?php get_template_part('template-parts/svg/icon-fullscreen'); ?>
                <?php get_template_part('template-parts/svg/icon-exit-fullscreen'); ?>
            </button>