<?php get_header(); ?>

<section id="blog" class="section">
    <div class="container">
        <div class="row">
            <section id="blog-posts" class="col-sm-8">

                <?php

                if( have_posts() ){
                    while( have_posts() ) {
                        the_post();

                        ?>

                        <article class="card">
                            <?php
                            if( has_post_thumbnail() ){
                                ?>
                                <div class="card-image">
                                    <?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
                                </div>
                            <?php
                            }
                            ?>
                            <div class="card-content">
                                <h3>
                                    <span class="date"><?php the_time( 'd M' ); ?></span>
                                    <a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a>
                                </h3>
                                <div class="card-info">
                                    <span class="time">Posted at <?php the_time( 'g:i a' ); ?></span>
                                    <span class="tag"><?php the_category(','); ?></span>
                                    <span class="post-author">by <a href="<?php the_author_link(); ?>"><?php the_author(); ?></a></span>
                                </div>
                                <p class="post-excerpt"><?php the_excerpt(); ?></p>
                            </div>
                            <div class="card-action">
                                <a href="<?php the_permalink(); ?>" type="button" class="btn btn-sm btn-primary rippler rippler-default">Read More</a>
                            </div>
                        </article>

                        <?php
                    }

                }

                ?>

                <nav class="text-center">
                    <ul class="pagination">
                        <li>
                            <?php previous_posts_link( '<i class="fa fa-chevron-left"></i>' ); ?>
                        </li>
                        <li>
                            <?php next_posts_link( '<i class="fa fa-chevron-right"></i>' ); ?>
                        </li>
                    </ul>
                </nav>

            </section>
            <aside id="sidebar" class="col-sm-4">
                <?php get_sidebar(); ?>
            </aside>

        </div>
    </div>
</section>

<?php get_footer(); ?>