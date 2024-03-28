<?php get_header(); 

  // Start the Loop.
  while ( have_posts() ) : the_post(); ?>
<section id="interna-blog" class="page-produtos">

    <div class="container">

        <div class="row">
        
            <div class="col-12">

                <div class="small text-center">

                    <?php the_content(); ?>

                </div>
            </div>

        </div>

    </div>
</section>

<?php get_footer(); ?>
 

<?php endwhile;?>


      
