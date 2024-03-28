<?php get_header(); 

  // Start the Loop.
  while ( have_posts() ) : the_post(); ?>
<section id="interna-blog">

    <div class="container">

        <!-- Thumbnail -->
        <?php if (has_post_thumbnail($post->ID)) : ?>

        <div class="row">
            <div class="col-sm-12 text-center">
                <?php echo pipe_get_img($post->ID, true, 'medium', 'lg-total'); ?>
            </div>
        </div><br>

        <?php endif; ?>

        <div class="row">
        
            <div class="col-12">

                <div class="small">

                    <?php the_content(); ?>

                </div>
            </div>

        </div>

    </div>
</section>

<?php get_footer(); ?>
 

<?php endwhile;?>


      
