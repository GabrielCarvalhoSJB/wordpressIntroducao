<?php get_header(); ?>
<?php get_header('personalizado'); ?>

<div class="container">
<h3>Erro 404</h3>
    <div class="row">
        <div class="col-md-9">
           <?php echo "Ops!! Está página não existe."; ?>
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