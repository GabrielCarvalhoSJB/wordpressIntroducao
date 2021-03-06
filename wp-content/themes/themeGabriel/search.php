<?php get_header(); ?>
<?php get_header('personalizado'); ?>

<div class="container">
<h3>Resultados da Pesquisa : <?php echo get_search_query();?></h3>
    <div class="row">
        <div class="col-md-6">
            <?php
            if (have_posts()) :
                echo '<ul class="media-list">';
                while (have_posts()) : the_post();
                    $image = '';
                    if (has_post_thumbnail()) {
                        $image = sprintf(
                            '<div class="media-left>"<a href="%s">%s</a></div>',
                            get_the_permalink(),
                            get_the_post_thumbnail()
                        );
                    }

                    $body = sprintf(
                        '<div class="media-body"><h3 class="media-heading"><a href="%s">%s</a></h3><p>%s</p></div>',
                        get_the_permalink(),
                        get_the_title(),
                        get_the_content('Continue lendo...')
                    );

                    printf(
                        '<li class="media">%s%s</li>',
                        $image,
                        $body,
                    );
                endwhile;
                echo "</ul>";
            else :
                echo "<p>Não temos posts</p>";
            endif;
            ?>
        </div>
        <div class="col-md-3">
            <?php get_sidebar(); ?>
        </div>
        <div class="col-md-3">
            <?php get_sidebar('personalizado'); ?>
        </div>
    </div>

</div>


<?php get_footer('personalizado'); ?>
<?php get_footer(); ?>