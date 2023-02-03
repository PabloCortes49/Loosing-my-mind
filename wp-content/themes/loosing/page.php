<?php get_header(); the_post(); ?>

    <!-- MAIN -->

    <main>

        <!-- PAGE -->

        <section id="secondary-page">

            <header>

                <h1><?php the_title(); ?></h1>

            </header>

            <div>

                <div class="content">

                    <?php the_content(); ?>

                </div>

                <aside>

                    <div class="widget widget-menu">

                        <h4>Some useful links</h4>

                        <ul>
                            <li><a href="cookies.html">Legal stuff</a></li>
                            <li><a href="cookies.html">Cookies</a></li>
                            <li><a href="cookies.html">Random link</a></li>
                            <li><a href="cookies.html">Interesting one</a></li>
                        </ul>

                    </div>

                    <div class="widget widget-recent-entries">

                        <h4>Good reads</h4>

                        <ul>
                            <li><a href="blog-the-usgs-collection-not-at-moma.html">The USGS collection not at MoMA</a> <time datetime="2022-11-25">25.11.2022</time></li>
                            <li><a href="blog-the-usgs-collection-not-at-moma.html">Celebrating the best of the best of Unsplash</a> <time datetime="2022-10-16">16.10.2022</time></li>
                            <li><a href="blog-the-usgs-collection-not-at-moma.html">Andy Warhol's exhibition is a Superpop whatever</a> <time datetime="2022-09-08">08.09.2022</time></li>
                        </ul>

                    </div>

                </aside>

            </div>

            <div class="buttons">
                
                <a href="<?php echo home_url(); ?>" class="button">This is boooring! Pics!</a>
                <a href="<?php echo home_url ( '/about/' ); ?>" class="button mini">Wanna meet you</a>

            </div>

        </section>

    </main>

<?php get_footer(); ?>