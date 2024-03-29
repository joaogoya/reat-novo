<nav class="navbar navbar-expand-lg navbar-dark bg-primary">

    <div class="container">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto">
                <?php get_template_part('includes/template-parts/menu/loophome'); ?>
            </ul>

            <?php require('searchform.php'); ?>
        </div>
    </div>

</nav>