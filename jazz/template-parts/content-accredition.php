<?php
    /*Template Name: Страница аккредитаций*/
    get_header();
    $lang = pll_current_language();
?>

<section class="bg_footer top">  
    <div class="accreditation_page">
        <div class="container">
            <div class="accred_box">
                <div class="accred_sidebar">
                    <div class="accred_photo__box">
                        <?php 
                            $accr_gallery = get_field("accr_gallery");
                            foreach ($accr_gallery as $gallery) {?>
                                <div class="accred_photo__item">
                                    <a href="<?php echo $gallery['url'];?>" data-fancybox="images"><img src="<?php echo $gallery['url'];?>" alt="<?php echo $gallery['alt'];?>"></a>
                                </div>
                            <?}?>
                    </div>
                </div>
                <div class="accred_main">
                    <h2><?php the_title();?>:</h2>
                    <?php the_field("accr_text");?>
                    <div class="sharing_social">
                        <p>
                            <?php 
                                if($lang == 'ru'){
                                    echo 'Поделиться:';
                                }else if($lang == 'en'){
                                    echo 'Share:';
                                }else if($lang == 'ua'){
                                    echo 'Поділитися:';
                                }
                            ?>
                        </p>
                        <?php echo do_shortcode('[addtoany buttons="facebook,twitter"]');?>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <?php
        get_footer();
    ?>
</section>