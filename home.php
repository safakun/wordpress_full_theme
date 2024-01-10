<?php get_header(); ?>

<?php if(have_posts()): while (have_posts()) : the_post(); ?>
							<div class="col-sm-4">

									<div class="card">
										<img src="/assets/images/portfolio/p1.jpg" alt="portfolio image"/>
										<h1 class="text-center">
											<a href="<?php echo get_the_permalink(); ?>">
											<?php the_title(); ?>
										
											</a></h1>
										<p><?php the_excerpt(); ?></p>
										<span><?php the_time( 'j F Y' ); ?></span>
										<span><?php the_author(); ?></span>
									
									</div><!-- /.item -->
</div>
			<?php endwhile; else: ?>
				Записей нет
			<?php endif; ?> 

            <?php get_footer(); ?>