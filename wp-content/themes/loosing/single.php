<?php get_header(); the_post(); ?>

    <!-- MAIN -->

    <main>

        <!-- BLOG POST -->

        <article>

            <header>

                <a class="button mini" href="<?php echo home_url ( '/blog/' ); ?>">Blog stuff</a>
                <h1><?php the_title(); ?></h1>
                <time datetime="<?php the_time ( 'Y-m-d' ); ?>"><?php the_time ( 'd.m.Y' ); ?></time>

            </header>

            <div>

                <div class="content">

                    <?php the_content(); ?>

                </div>

                <aside>

                    <figure id="post-thumbnail">

                    <?php the_post_thumbnail(); ?>


                        <div class="previous-next">

                            <a class="previous" href="blog-the-usgs-collection-not-at-moma.html"><img src="<?php bloginfo(template__url);?>/images/icon-arrow-left-right.svg/" alt="Previous Post"></a>
                            <a class="next" href="blog-the-usgs-collection-not-at-moma.html"><img src="<?php bloginfo(template__url);?>images/icon-arrow-right.svg" alt="Next Post"></a>
                        
                        </div>
                    
                    </figure>

                    <div class="widget widget-recent-entries">

                        <h4>Different articles</h4>

                        <ul>
                            <li><a href="blog-the-usgs-collection-not-at-moma.html">Celebrating the best of the best of Unsplash</a> <time datetime="2022-10-16">16.10.2022</time></li>
                            <li><a href="blog-the-usgs-collection-not-at-moma.html">Andy Warhol's exhibition is a Superpop whatever</a> <time datetime="2022-09-08">08.09.2022</time></li>
                        </ul>

                    </div>

                    <div class="widget widget-random">

                        <h4>Different authors</h4>

                        <ul>
                            <li><a href="https://behance.net/" target="_blank">Some article published on a very cool and really well curated blog</a> <time datetime="2022-09-22">22.09.2022</time></li>
                            <li><a href="https://behance.net/" target="_blank">Random writing off this site</a> <time datetime="2022-08-16">16.08.2022</time></li>
                            <li><a href="https://behance.net/" target="_blank">Lorem ipsum is always handy when you need to random</a> <time datetime="2022-07-14">14.07.2022</time></li>
                        </ul>

                    </div>

                </aside>

            </div>

            <div class="buttons">
                
                <a href="<?php echo home_url(); ?>" class="button">Enough reading! Pics!</a>
                <a href="<?php echo home_url ( '/blog/' ); ?>" class="button mini">Wanna read more</a>

            </div>

        </article>

    </main>

<?php get_footer(); ?>