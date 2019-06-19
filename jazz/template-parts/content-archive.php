<?php 
    /*Template Name: Архив фестиваля*/
    get_header();

    $lang = pll_current_language();
?>

<?php 
    $gallery_arr = array('post_type' => 'gallery', 'numberposts' => -1, 'order' => 'DESC', 'tax_query' => array(
        array(
            'taxonomy' => 'gallery-category',
            'field' => 'id', 
            'terms' =>  4
        )
    ));

    $gallery = get_posts($gallery_arr); 

    $gallery_video_array = array('post_type' => 'gallery', 'numberposts' => -1, 'order' => 'DESC', 'tax_query' => array(
        array(
            'taxonomy' => 'gallery-category',
            'field' => 'id', 
            'terms' =>  5 
        )
    ));

    $gallery_video = get_posts($gallery_video_array);
?>

<section class="bg_footer top archive_page">
    <div class="container">
        <h2><?php the_title();?></h2>

        <div class="archive_gallery">

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="archive_photo__tab" data-toggle="tab" href="#archive_photo" role="tab"
                        aria-controls="archive_photo" aria-selected="true">
                        <?php 
                            if($lang == 'ru'){
                                echo 'Фото';
                            }else if($lang == 'en'){
                                echo 'Photo';
                            }else if($lang == 'ua'){
                                echo 'Фото';
                            }
                        ?>
                    
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="archive_video__tab" data-toggle="tab" href="#archive_video" role="tab"
                        aria-controls="archive_video" aria-selected="false">
                        <?php 
                            if($lang == 'ru'){
                                echo 'Видео';
                            }else if($lang == 'en'){
                                echo 'Video';
                            }else if($lang == 'ua'){
                                echo 'Вiдео';
                            }
                            
                        ?>
                    
                    </a>
                </li>
            </ul>

            <div class="tab-content archive_gallery__content" id="myTabContent">
                <div class="tab-pane fade show active" id="archive_photo" role="tabpanel" aria-labelledby="archive_photo__tab">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                           <div class="archive_tabs__photo">
                               <ul class="archive_list">
                                   <li class="archive_tabs__link active_archive_tab">
                                       <?php 
                                            if($lang == 'ru'){
                                                echo 'Все';
                                            }else if($lang == 'en'){
                                                echo 'All';
                                            }else if($lang == 'ua'){
                                                echo 'Всi';
                                            }
                                       
                                       ?>
                                    
                                    </li>

                                   <?php foreach($gallery as $gallery_list){?>
                                    <li class="archive_tabs__link" data-id="<?php echo $gallery_list->ID;?>"><?php echo $gallery_list->post_title;?></li>
     
                                   <?}?>
                               </ul>
                               <div class="archive_tab__text">
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
                                    
                               </div>
                           </div>
                        </div>
                        <div class="col-lg-8 col-md-6">
                            <div class="archive_photo__content">
                                <?php foreach($gallery as $gallery_img){
                                        $images = get_field("gallery_photo", $gallery_img->ID);
                                    ?>
                                    <?php foreach($images as $image){?>
                                            <div class="archive_photo__img">
                                                <a href="<?php echo $image['url'];?>" data-fancybox="images"><img src="<?php echo $image['url'];?>"></a>
                                            </div>
                                        <?}?>
                                <?}?>
                            </div>
                            <div class="main_photo">
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
                            </div>
                        </div>
                    </div>
                </div>




                <div class="tab-pane fade" id="archive_video" role="tabpanel" aria-labelledby="archive_video__tab">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                        <div class="archive_tabs__video">
                               <ul class="archive_list">
                                    <li class="archive_video__link active_archive_tab">

                                    <?php 
                                        if($lang == 'ru'){
                                            echo 'Все';
                                        }else if($lang == 'en'){
                                            echo 'All';
                                        }else if($lang == 'ua'){
                                            echo 'Всi';
                                        }
                                       
                                    ?>

                                    </li>
                                   <?php foreach($gallery_video as $gallery_list){?>
                                    <li class="archive_video__link" data-id="<?php echo $gallery_list->ID;?>"><?php echo $gallery_list->post_title;?></li>
                                    <?}?>
                               </ul>
                               <div class="archive_video__text">
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
                                    
                               </div>
                           </div>
                        </div>
                        <div class="col-lg-8 col-md-6">
                            <div class="archive_video__content">
                                    <?php 
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
                                                        <path d="M21 12.9994L0 25.1237L1.05995e-06 0.875L21 12.9994Z" fill="url(#paint0_linear)"/>
                                                        </g>
                                                        <defs>
                                                        <filter id="filter0_d" x="0" y="0.875" width="29" height="32.2487" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                                                        <feOffset dx="4" dy="4"/>
                                                        <feGaussianBlur stdDeviation="2"/>
                                                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.65 0"/>
                                                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                                                        </filter>
                                                        <linearGradient id="paint0_linear" x1="0" y1="0.875" x2="23.4088" y2="21.327" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#5200FF"/>
                                                        <stop offset="1" stop-color="#DD0077"/>
                                                        </linearGradient>
                                                        </defs>
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                     <?}?>
                                    <?}?>
                            </div>
                            <div class="main_video">
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
                            </div>
                        </div>
                    </div>
                                            
                </div>
            </div>

        </div>
    </div>
    <div class="loader_gallery" style="display:none;"></div>
    
    <?php 
        get_footer();
    ?>
</section>

<script type="text/javascript">
    (function ($) {
        $(function () {
            // ajax send
            $(".archive_tabs__link").click(function () {
                $(".archive_tabs__link").removeClass("active_archive_tab");
                $(this).addClass("active_archive_tab");
                var loader = $(".loader_gallery").clone().show();
                   $(".archive_photo__content").empty().html(loader);
                var p = $(this).data('id');
                $.post(
                    "<?php bloginfo('template_url'); ?>/template-parts/content-gallery-view.php", {
                        post_id:p
                    },
                    function (data) {
                        $(".archive_tab__text").html(data).hide().fadeIn( "slow" ).find('div').remove();
                        $(".archive_photo__content").html(data).hide().fadeIn( "slow" ).find('p, a.show_photo').remove();
                        $(".main_photo").html(data).hide().fadeIn( "slow" ).find('div, p').remove()
                    }
                );
            });
        });

        $(function(){
            $(".archive_video__link").click(function(){
                $(".archive_video__link").removeClass("active_archive_tab");
                $(this).addClass("active_archive_tab");
                var loader = $(".loader_gallery").clone().show();
                $(".archive_video__content").empty().html(loader);

                var p = $(this).data('id');
                $.post(
                    "<?php bloginfo('template_url') ?>/template-parts/content-gallery-video.php", {
                        post_id:p
                    },
                    function (data){
                        $(".archive_video__text").html(data).hide().fadeIn( "slow" ).find('div').remove();
                        $('.archive_video__content').html(data).hide().fadeIn( "slow" ).find('p, a.show_video').remove();
                        $(".main_video").html(data).hide().fadeIn( "slow" ).find('div, p').remove()
                    } 
                ); 
            });
        });

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
                loadPhoto(4);
            });

        /*end show photo*/

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
                loadVideo(4);
            });

        /*end show photo*/ 
        
        if(window.innerWidth > 1025 || window.innerWidth < 415){
            loadPhoto(8);
            loadVideo(6);


        }else if(window.innerWidth < 1025){
            loadPhoto(4);
            loadVideo(4);
        }
    
    })(jQuery)
</script>