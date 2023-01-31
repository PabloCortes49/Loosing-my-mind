<!doctype html>

<html <?php language_attributes(); ?>>

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#000CFF">

       

        <link rel="stylesheet" href="<?php bloginfo ( 'stylesheet_url' ); ?>">

        <?php wp_head(); ?>

    </head>

    <body <?php body_class(); ?>>

        <!-- HEADER -->

        <header class="site-header">

            <div>

                <h1>                    
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php bloginfo ( 'template_url' ); ?>/images/logo-loosing-my-mind.svg" alt="<?php bloginfo ( 'name' ); ?>">
                    </a>                
                </h1>

                <nav>

                    <ul>
                        <li  class="you-are-here"><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="#">Shop</a></li>
                    </ul>

                </nav>

            </div>

        </header>