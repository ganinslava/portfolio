<?php get_header(); ?>

	<section id="blog" class="section">
		<div class="container">
			<div class="row">
				<section id="blog-posts" class="col-sm-8">
					<article class="card">
						<div class="card-content">
							<h1>Recipes</h1>

							<?php

							$query                  =  new WP_Query(array(
								'post_type'         => 'recipe',
								'posts_per_page'    => 3,
								'orderby'           => 'rand'
							));

							if( $query->have_posts() ){
								while( $query->have_posts() ) {
									$query->the_post();

									?>
									<a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a></br>
									<?php

									wp_reset_postdata();
								}

							}

							?>

						</div>
					</article>


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