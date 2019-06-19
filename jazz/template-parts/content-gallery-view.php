<?php 

    require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');
    $post_id = htmlspecialchars(trim($_POST['post_id']));

    $lang = pll_current_language();

?>


<?php if($post_id == ''){?>
    <!-- Получаем всем посты -->
    <?php 

        $gallery_arr = array('post_type' => 'gallery', 'numberposts' => -1, 'order' => 'DESC', 'tax_query' => array(
                array(
                    'taxonomy' => 'gallery-category',
                    'field' => 'id', 
                    'terms' =>  4
                )
            ));
            $gallery = get_posts($gallery_arr);
        
    // проходимся по ним в цикле
        foreach ($gallery as $val) {
            $images = get_field("gallery_photo", $val->ID);
        ?>

    <!-- получаем все изображения поста -->
        <?php foreach($images as $i){?>
            <div class="archive_photo__img">
                <a href="<?php echo $i['url'];?>" data-fancybox="images"><img src="<?php echo $i['url'];?>" alt=""></a>
            </div>
        <?}?>
        <?}?>
        <a href="" class="show_photo">
            <?php 
                if($lang == 'ru'){
                    echo 'Смотреть еще';
                }else if($lang == 'en'){
                    echo 'Show more';
                }else if($lang == 'ua'){
                    echo 'Дивитися ще';
                }
            
            ?>
        </a>
        <!-- получаем описание категории -->

        <?php
            $category = get_the_terms(287, 'gallery-category');
                foreach($category as $descr){

                    $taxonomy = $descr->taxonomy;
                    $term_id = $descr->term_id;

                    $c_descr_en = get_field("tax_descr_en", $taxonomy . '_' . $term_id);
                    $c_descr_ua = get_field("tax_descr_ua", $taxonomy . '_' . $term_id);
                ?>
                <p>
                    <?php 
                        if($lang == 'ru'){
                            echo $descr->description;
                        }else if($lang == 'en'){
                            echo $c_descr_en;
                        }else if($lang == 'ua'){
                            echo $c_descr_ua;
                        }
                    ?>
            </p>
        <?}?>

    <?}else{?>
    <!-- получаем изображения одного поста -->
<?php
    $image_gallery = get_field("gallery_photo", $post_id);
   
    foreach($image_gallery as $image){?>
        <div class="archive_photo__img">
            <a href="<?php echo $image['url'];?>" data-fancybox="images"><img src="<?php echo $image['url'];?>" alt=""></a>
        </div>
    <?}?>

    <!-- получаем описание одного поста -->

    <p class="text">
        <?php 
            if($lang == 'ru'){
                the_field("gallery_text", $post_id);
            }else if($lang == 'en'){
                the_field("gallery_text_en", $post_id);
            }else if($lang == 'ua'){
                the_field("gallery_text_ru", $post_id);
            }
        ?>
    </p>

    <a href="" class="show_photo">
        <?php 
            if($lang == 'ru'){
                 echo 'Смотреть еще';
            }else if($lang == 'en'){
                echo 'Show more';
            }else if($lang == 'ua'){
                echo 'Дивитися ще';
            }
        ?>
    </a>
<?}?>

<script type="text/javascript">
    (function ($) {
        /*show photo*/
            function loadPhoto(count){
            var photo = $('.archive_photo__img');
            photo.filter(':hidden').slice(0, count).fadeIn();
            var vPhoto = photo.filter(':visible').length;
            if(photo.length == vPhoto){
                $('.show_photo').hide();
            }
        }

        $('.show_photo').on('click', function(e){
            e.preventDefault();
            loadPhoto(2);
        });

        if(window.innerWidth > 1025 || window.innerWidth < 415){
            loadPhoto(4);
        }else if(window.innerWidth < 1025){
            loadPhoto(2);
        }

    /*end show photo*/ 
    })(jQuery)

</script>