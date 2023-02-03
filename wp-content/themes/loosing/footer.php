        <!-- PREFOOTER -->

        <section id="prefooter">

            <div>

                <h2>Hey! Just blogged...</h2>

                <?php

                    $news = new WP_Query ( array
                    (
                        'post_type' => 'post',
                        'posts_per_page' => 3
                    ));

                ?>

                <?php if ( $news -> have_posts() ) : ?>

                    <?php while ( $news -> have_posts() ) : $news -> the_post(); ?>

                        <article>

                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <time datetime="<?php the_time ( 'Y-m-d' ); ?>"><?php the_time ( 'd.m.Y' ); ?></time>

                        </article>

                    <?php endwhile; ?>

                <?php else : ?>

                    <span class="error">No hay entadas :(</span>
                    
                <?php endif; ?>

                <div class="buttons">
                    
                    <a href="blog.html" class="button mini">More articles here</a>

                </div>

            </div>

        </section>

        <!-- FOOTER -->

        <footer>

            <?php bloginfo ( 'description' ); ?>

            <ul class="left">

                <li><a href="https://instagram.com" target="_blank">Instagram</a></li>
                <li><a href="https://behance.net" target="_blank">Behancé</a></li>

            </ul>

            <ul class="right">
                
                <li><a href="cookies.html">Terms of use</a></li>
                <li><a href="cookies.html">Cookies</a></li>

            </ul>

        </footer>

        <?php wp_footer(); ?>

    </body>

</html>