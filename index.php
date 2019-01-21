<?php get_header(); ?>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-8">
          
          <!-- Start the Loop. -->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <hr>
                    <h2><?php the_title(); ?></h2>
					<p class="date-author">Posted: <?php the_date(); ?> by <?php the_author(); ?></p>
                    <p><?php the_content(); ?></p>
                    
					<?php endwhile; ?> 

					<?php else : ?>
                
                    <p><?php _e( 'Sorry, no posts matched your critera.' ); ?></p>
                    
                <?php endif; ?>
				<hr>

			</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>