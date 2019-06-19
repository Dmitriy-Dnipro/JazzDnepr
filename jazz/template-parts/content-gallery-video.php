<?php 
    require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');
    $post_id = htmlspecialchars(trim($_POST['post_id']));
    $lang = pll_current_language();
?>

<?php if($post_id == ''){?>
<!-- Получаем все посты -->
<?php 
        $gallery_video_array = array('post_type' => 'gallery', 'numberposts' => -1, 'order' => 'DESC', 'tax_query' => array(
            array(
                'taxonomy' => 'gallery-category',
                'field' => 'id', 
                'terms' =>  5 
                )
            ));

        $gallery_video = get_posts($gallery_video_array);

        //Проходимся по ним в цикле
        foreach($gallery_video as $gallery_video){
            $video_youtube = get_field("gallery_video_yotube", $gallery_video->ID);
        ?>
        <?php foreach($video_youtube as $video){?>
            <div class="archive_video__item">
                <a href="<?php echo $video['gallery_video_yotube_link'];?>" data-fancybox>
                    <img src="<?php echo $video['gallery_video_yotube_image']['url']?>">
                    <div class="archive_video__play">
                        <svg width="29" height="34" viewBox="0 0 29 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_d)">
                                <path d="M21 12.9994L0 25.1237L1.05995e-06 0.875L21 12.9994Z" fill="url(#paint0_linear)" />
                            </g>
                            <defs>
                                <filter id="filter0_d" x="0" y="0.875" width="29" height="32.2487" filterUnits="userSpaceOnUse"
                                    color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                                    <feOffset dx="4" dy="4" />
                                    <feGaussianBlur stdDeviation="2" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.65 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape" />
                                </filter>
                                <linearGradient id="paint0_linear" x1="0" y1="0.875" x2="23.4088" y2="21.327"
                                    gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#5200FF" />
                                    <stop offset="1" stop-color="#DD0077" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                </a>
            </div>

            <?}?>
        <?}?>
        <a href="" class="show_video">
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
    <!-- Получаем описание категории -->
    <?php
        $category = get_the_terms(319, 'gallery-category');
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
  
<?php
    $video_gallery = get_field("gallery_video_yotube", $post_id);
   
    foreach($video_gallery as $video){?>
        <div class="archive_video__item">
                <a href="<?php echo $video['gallery_video_yotube_link'];?>" data-fancybox>
                    <img src="<?php echo $video['gallery_video_yotube_image']['url']?>">
                    <div class="archive_video__play">
                        <svg width="29" height="34" viewBox="0 0 29 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_d)">
                                <path d="M21 12.9994L0 25.1237L1.05995e-06 0.875L21 12.9994Z" fill="url(#paint0_linear)" />
                            </g>
                            <defs>
                                <filter id="filter0_d" x="0" y="0.875" width="29" height="32.2487" filterUnits="userSpaceOnUse"
                                    color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                                    <feOffset dx="4" dy="4" />
                                    <feGaussianBlur stdDeviation="2" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.65 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape" />
                                </filter>
                                <linearGradient id="paint0_linear" x1="0" y1="0.875" x2="23.4088" y2="21.327"
                                    gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#5200FF" />
                                    <stop offset="1" stop-color="#DD0077" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                </a>
        </div>

    <?}?>

    <!-- получаем описание одного поста -->

    <p class="text">
        <?php 
            if($lang == 'ru'){
                the_field("gallery_video_descr", $post_id);
            }else if($lang == 'en'){
                the_field("gallery_video_descr_en", $post_id);  
            }else if($lang == 'ua'){
                the_field("gallery_video_descr_ua", $post_id);
            }
  
        ?>
    </p>
    <a href="" class="show_video">
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

        /*show video*/
        function loadVideo(count){
                var video = $('.archive_video__item');
                video.filter(':hidden').slice(0, count).fadeIn();
                var v_video = video.filter(':visible').length;
                if(video.length == v_video){
                    $('.show_video').hide();
                }
            }

            $('.show_video').on('click', function(e){
                e.preventDefault();
                loadVideo(2);
            });

        if(window.innerWidth > 1025 || window.innerWidth < 415){
            loadVideo(4);
        }else if(window.innerWidth < 1025){
            loadVideo(2);
        }
        /*end show photo*/ 

    })(jQuery)