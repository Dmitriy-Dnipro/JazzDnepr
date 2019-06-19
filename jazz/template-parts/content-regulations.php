<?php 
    /*Template Name: Правила фестиваля*/
    get_header();
?>


<section class="bg_footer top">
    <div class="regulations_content">
        <div class="container">
            <h2><?php the_title();?></h2>
        <div class="regulations_text">
            <?php 
            the_post();
            the_content();
            ?>
        </div>
        </div>
    </div>

<?php 
    get_footer();
?>
</section>