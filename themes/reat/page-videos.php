<?php get_header(); ?>
<br><br>
<main id="page">
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-content text-center">
                         <?php
                            $videos_home = get_afc_by_page_slug('todos_os_videos', 'home_config', 'videos');
                            echo do_shortcode($videos_home);     
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<br><br>
<?php get_footer(); ?>