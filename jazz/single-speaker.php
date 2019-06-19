<?php 
    get_header();
?>
<?php 
    $member_front_image = get_field("member_preview_img");
    $lang = pll_current_language();
?>

<section class="bg_footer single_mebmer">
    <div class="container">
        <div class="single_member__back back_btn">
            <?php 
                if($lang == 'ru'){?>
                <a href="<?php echo home_url();?>/speaker/">
                    <svg width="39" height="15" viewBox="0 0 39 15" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0.796799 8.07166C0.406275 7.68114 0.406274 7.04797 0.796799 6.65745L7.16076 0.293486C7.55128 -0.0970389 8.18445 -0.0970389 8.57497 0.293486C8.9655 0.684011 8.9655 1.31718 8.57497 1.7077L4.4181 5.86457L37.5001 5.86456C38.3285 5.86456 39.0001 6.53613 39.0001 7.36456C39.0001 8.19299 38.3285 8.86456 37.5001 8.86456L4.41814 8.86457L8.57497 13.0214C8.9655 13.4119 8.9655 14.0451 8.57497 14.4356C8.18445 14.8261 7.55128 14.8261 7.16076 14.4356L0.796799 8.07166Z"
                            fill="url(#paint0_linear)" />
                        <defs>
                            <linearGradient id="paint0_linear" x1="39.0001" y1="7.86422" x2="3.18239" y2="7.15437"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#5200FF" />
                                <stop stop-color="#7B00D7" />
                                <stop offset="1" stop-color="#DD0077" />
                            </linearGradient>
                        </defs>
                    </svg> Назад
                </a>
            <?}else if($lang == 'en'){?>
                <a href="/en/speaker/">
                    <svg width="39" height="15" viewBox="0 0 39 15" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0.796799 8.07166C0.406275 7.68114 0.406274 7.04797 0.796799 6.65745L7.16076 0.293486C7.55128 -0.0970389 8.18445 -0.0970389 8.57497 0.293486C8.9655 0.684011 8.9655 1.31718 8.57497 1.7077L4.4181 5.86457L37.5001 5.86456C38.3285 5.86456 39.0001 6.53613 39.0001 7.36456C39.0001 8.19299 38.3285 8.86456 37.5001 8.86456L4.41814 8.86457L8.57497 13.0214C8.9655 13.4119 8.9655 14.0451 8.57497 14.4356C8.18445 14.8261 7.55128 14.8261 7.16076 14.4356L0.796799 8.07166Z"
                            fill="url(#paint0_linear)" />
                        <defs>
                            <linearGradient id="paint0_linear" x1="39.0001" y1="7.86422" x2="3.18239" y2="7.15437"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#5200FF" />
                                <stop stop-color="#7B00D7" />
                                <stop offset="1" stop-color="#DD0077" />
                            </linearGradient>
                        </defs>
                    </svg> Back
                </a>
            <?}else if($lang == 'ua'){?>
                <a href="/ua/speaker/">
                    <svg width="39" height="15" viewBox="0 0 39 15" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0.796799 8.07166C0.406275 7.68114 0.406274 7.04797 0.796799 6.65745L7.16076 0.293486C7.55128 -0.0970389 8.18445 -0.0970389 8.57497 0.293486C8.9655 0.684011 8.9655 1.31718 8.57497 1.7077L4.4181 5.86457L37.5001 5.86456C38.3285 5.86456 39.0001 6.53613 39.0001 7.36456C39.0001 8.19299 38.3285 8.86456 37.5001 8.86456L4.41814 8.86457L8.57497 13.0214C8.9655 13.4119 8.9655 14.0451 8.57497 14.4356C8.18445 14.8261 7.55128 14.8261 7.16076 14.4356L0.796799 8.07166Z"
                            fill="url(#paint0_linear)" />
                        <defs>
                            <linearGradient id="paint0_linear" x1="39.0001" y1="7.86422" x2="3.18239" y2="7.15437"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#5200FF" />
                                <stop stop-color="#7B00D7" />
                                <stop offset="1" stop-color="#DD0077" />
                            </linearGradient>
                        </defs>
                    </svg> Назад
                </a>
            <?}?>
        </div>
        <div class="single_member__title">
            <h2 class="title_page"><?php the_title();?></h2>
        </div>

        <div class="single_member__main">
            <div class="single_member__sidebar">
                <div class="sidebar_mob_img">
                    <img src="<?php echo $member_front_image['url'];?>" alt="<?php echo $member_front_image['alt'];?>">
                </div>
                <div class="sidebar_mobile__box">
                <div class="member_sidebar__gallery">
                    <p><?php the_field("members_gallery_title");?></p>
                    <?php 
                        $gallery_arr = get_field("members_gallery_photo");
                        if(!empty($gallery_arr)){
                        foreach ($gallery_arr as $gallery) {?>
                             <div class="sidebar_gallery__item">
                                <a href="<?php echo $gallery['url'];?>" data-fancybox="images"><img src="<?php echo $gallery['url'];?>" alt="<?php echo $gallery['alt'];?>"></a>
                            </div>
                        <?}?>
                        <?}else{
                            echo 'Need new content';
                        }?>
                        
                        <?php 
                            $youtube_preview = get_field("members_gallery_youtube");
                        ?>
                        <?php if($youtube_preview){?>
                        <div class="sidebar_gallery__item sidebar_youtube">
                            <a data-fancybox href="<?php the_field("members_gallery_video");?>">
                                <img src="<?php echo $youtube_preview['url'];?>" alt="<?php echo $youtube_preview['alt'];?>">
                                <div class="sidebar_play">
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
                </div>
                <div class="sidebar_mobile__item">
                    <?php
                        $fb = get_field("member_social_fb");
                        $inst = get_field("member_social_inst");
                        $youtube = get_field("member_social_youtube");
                        $twitter = get_field("member_social_twitter");
                        $site = get_field("member_site_link");
                    ?>
                    <?php if(!empty($fb) ||  !empty($inst) || !empty($youtube) || !empty($twitter) || !empty($site)){?>
                        <p class="single_member__official">
                            <?php if($lang == 'ru'){
                                echo 'Официальные страницы';
                            }else if($lang == 'en'){
                                echo 'Official pages';
                            }else if($lang == 'ua'){
                                echo 'Офіційні сторінки';
                            }
                            ?>
                        
                        </p>
                    <?}?>
                    <div class="single_member__social">

                        <ul>
                            <?php if($youtube){?>
                            <li><a href="<?php echo $youtube;?>" target="_blank">
                                <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.9693 0.875H4.03068C2.08074 0.875 0.5 2.44883 0.5 4.39024V9.33678C0.5 11.2782 2.08074 12.852 4.03068 12.852H13.9693C15.9193 12.852 17.5 11.2782 17.5 9.33678V4.39024C17.5 2.44883 15.9193 0.875 13.9693 0.875ZM11.5815 7.10418L6.93292 9.31159C6.80905 9.37041 6.66597 9.28049 6.66597 9.14388V4.59107C6.66597 4.45251 6.81281 4.3627 6.93694 4.42534L11.5856 6.77073C11.7238 6.84045 11.7214 7.0378 11.5815 7.10418Z" fill="#F61C0D"/>
                                </svg>
                                </a>
                            </li>
                            <?}?>
                            <?php if($twitter){?>
                            <li><a href="<?php echo $twitter;?>" target="_blank">
                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.7455 1.91454C15.39 2.06731 15.021 2.18784 14.6423 2.27509C15.0596 1.89084 15.3733 1.41021 15.5503 0.873744C15.6008 0.720593 15.4292 0.588159 15.2865 0.670159C14.7597 0.972985 14.1922 1.20016 13.5999 1.34545C13.5655 1.35388 13.5301 1.35815 13.4945 1.35815C13.3866 1.35815 13.2817 1.31932 13.1992 1.24885C12.5689 0.710536 11.7584 0.414062 10.9168 0.414062C10.5526 0.414062 10.185 0.46907 9.82398 0.577573C8.7055 0.913781 7.84249 1.80793 7.57172 2.9111C7.47014 3.32489 7.44264 3.73905 7.48992 4.14206C7.49534 4.18838 7.47275 4.2207 7.45883 4.23586C7.43437 4.26244 7.39969 4.27767 7.36368 4.27767C7.35966 4.27767 7.35553 4.27748 7.35143 4.27711C4.90311 4.05666 2.69532 2.91352 1.13474 1.05831C1.05516 0.963684 0.902553 0.975291 0.839123 1.08073C0.533521 1.58884 0.372021 2.16999 0.372021 2.76135C0.372021 3.66764 0.747723 4.52171 1.40032 5.14433C1.12588 5.08127 0.860266 4.98196 0.61353 4.84915C0.494161 4.78488 0.347289 4.86748 0.345612 4.9998C0.328526 6.34615 1.14188 7.54414 2.3603 8.08359C2.33577 8.08416 2.31123 8.08442 2.28665 8.08442C2.09352 8.08442 1.89796 8.06635 1.70549 8.0307C1.57106 8.00582 1.45813 8.12941 1.49987 8.25572C1.89535 9.45231 2.95844 10.3343 4.23062 10.5346C3.17479 11.2215 1.94524 11.5838 0.66553 11.5838L0.266578 11.5836C0.143659 11.5836 0.0396982 11.6612 0.00837342 11.7766C-0.0224832 11.8903 0.0343539 12.0101 0.139173 12.0692C1.5812 12.8826 3.22605 13.3124 4.8966 13.3124C6.35887 13.3124 7.72671 13.0312 8.96214 12.4766C10.0947 11.9681 11.0955 11.2413 11.9368 10.3163C12.7205 9.45462 13.3334 8.45991 13.7583 7.35983C14.1633 6.31121 14.3774 5.19231 14.3774 4.12407V4.07318C14.3773 3.90166 14.4574 3.74026 14.597 3.6304C15.127 3.2134 15.5885 2.72253 15.9686 2.17143C16.069 2.02592 15.9107 1.84354 15.7455 1.91454Z" fill="#247AB2"/>
                                </svg>
                            </a>
                            </li>
                            <?}?>
                            <?php if($inst){?>
                            <li>
                                <a href="<?php echo $inst;?>" target="_blank">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.82932 0.954102H4.17068C1.87096 0.954102 0 2.67783 0 4.79659V10.01C0 12.1287 1.87096 13.8524 4.17068 13.8524H9.82932C12.129 13.8524 14 12.1287 14 10.01V4.79659C14 2.67783 12.129 0.954102 9.82932 0.954102ZM12.5916 10.01C12.5916 11.4155 11.3549 12.5549 9.82932 12.5549H4.17068C2.64513 12.5549 1.4084 11.4155 1.4084 10.01V4.79659C1.4084 3.39106 2.64513 2.25167 4.17068 2.25167H9.82932C11.3549 2.25167 12.5916 3.39106 12.5916 4.79659V10.01Z" fill="url(#paint0_linear)"/>
                                    <path d="M6.9998 4.06738C5.00324 4.06738 3.37891 5.5639 3.37891 7.40334C3.37891 9.24278 5.00324 10.7393 6.9998 10.7393C8.99637 10.7393 10.6207 9.2428 10.6207 7.40334C10.6207 5.56388 8.99637 4.06738 6.9998 4.06738ZM6.9998 9.44177C5.77786 9.44177 4.7873 8.52915 4.7873 7.40336C4.7873 6.27757 5.77789 5.36496 6.9998 5.36496C8.22174 5.36496 9.2123 6.27757 9.2123 7.40336C9.2123 8.52913 8.22171 9.44177 6.9998 9.44177Z" fill="url(#paint1_linear)"/>
                                    <path d="M10.6274 4.89169C11.1066 4.89169 11.4951 4.53381 11.4951 4.09233C11.4951 3.65086 11.1066 3.29297 10.6274 3.29297C10.1482 3.29297 9.75977 3.65086 9.75977 4.09233C9.75977 4.53381 10.1482 4.89169 10.6274 4.89169Z" fill="url(#paint2_linear)"/>
                                    <defs>
                                    <linearGradient id="paint0_linear" x1="7" y1="13.8149" x2="7" y2="1.05429" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#E09B3D"/>
                                    <stop offset="0.3" stop-color="#C74C4D"/>
                                    <stop offset="0.6" stop-color="#C21975"/>
                                    <stop offset="1" stop-color="#7024C4"/>
                                    </linearGradient>
                                    <linearGradient id="paint1_linear" x1="6.9998" y1="13.815" x2="6.9998" y2="1.05436" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#E09B3D"/>
                                    <stop offset="0.3" stop-color="#C74C4D"/>
                                    <stop offset="0.6" stop-color="#C21975"/>
                                    <stop offset="1" stop-color="#7024C4"/>
                                    </linearGradient>
                                    <linearGradient id="paint2_linear" x1="10.6274" y1="13.8148" x2="10.6274" y2="1.05429" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#E09B3D"/>
                                    <stop offset="0.3" stop-color="#C74C4D"/>
                                    <stop offset="0.6" stop-color="#C21975"/>
                                    <stop offset="1" stop-color="#7024C4"/>
                                    </linearGradient>
                                    </defs>
                                </svg>
                                </a>
                            </li>
                            <?}?>
                            <?php if($fb){?>
                            <li>
                                <a href="<?php echo $fb;?>" target="_blank">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.1127 0.954102H1.88644C0.844607 0.954102 0 1.73221 0 2.69209V12.1138C0 13.0736 0.844572 13.8517 1.88644 13.8517H6.93L6.93859 9.24282H5.63893C5.47003 9.24282 5.33294 9.117 5.33229 8.96139L5.32606 7.47574C5.32541 7.31928 5.4629 7.19213 5.63273 7.19213H6.93003V5.75662C6.93003 4.09072 8.03436 3.18363 9.64738 3.18363H10.971C11.1403 3.18363 11.2777 3.31012 11.2777 3.46617V4.71887C11.2777 4.87486 11.1404 5.00132 10.9712 5.00141L10.1589 5.00176C9.28166 5.00176 9.1118 5.3858 9.1118 5.9494V7.19216H11.0393C11.223 7.19216 11.3655 7.33992 11.3438 7.50796L11.1527 8.9936C11.1344 9.13577 11.0036 9.24289 10.8482 9.24289H9.1204L9.1118 13.8518H12.1128C13.1546 13.8518 13.9992 13.0737 13.9992 12.1138V2.69209C13.9992 1.73221 13.1546 0.954102 12.1127 0.954102Z" fill="#475993"/>
                                    </svg>
                                            
                                </a>
                            </li>
                            <?}?>
                        </ul>
                    </div>

                    <div class="single_member__site">
                        <p><?php the_field("member_site_title");?></p>
                        <a href="<?php the_field("member_site_link");?>"><?php the_field("member_site_link");?></a>
                    </div>
                </div>
                </div>
            </div>
            <div class="single_member__content">
                <div class="member_content__img">
                    <?php 
                        $member_preview_img = get_field("member_preview_img");
                    ?>
                    <img src="<?php echo $member_preview_img['url'];?>" alt="<?php echo $member_preview_img['alt'];?>">
                </div>
                <?php the_field("member_textedition");?>
            </div>
        </div>
    </div>

<div class="member_posts">
    <?php
        if( get_adjacent_post(false, '', true) ) { 
            if($lang == 'ru'){
                previous_post_link('%link', 'Предыдущий');
            }else if($lang == 'en'){
                previous_post_link('%link', 'Previous');
            }else if($lang == 'ua'){
                previous_post_link('%link', 'Попередній');
            }
        }
        else { 
            $first = new WP_Query('posts_per_page=1&order=DESC&post_type=speaker');
            $first->the_post();

            if($lang == 'ru'){
                echo '<a href="' . get_permalink() . '">Предыдущий</a>';
            }else if($lang == 'en'){
                echo '<a href="' . get_permalink() . '">Previous</a>';
            }else if($lang == 'ua'){
                echo '<a href="' . get_permalink() . '">Попередній</a>';
            }

            wp_reset_postdata();
        }; 
        
        if( get_adjacent_post(false, '', false) ) { 
            if($lang == 'ru'){
                echo next_post_link('%link', 'Следующий');
            }else if($lang == 'en'){
                echo next_post_link('%link', 'Next');
            }else if($lang == 'ua'){
                echo next_post_link('%link', 'Наступний');
            }
            
        }
        else { 
            $last = new WP_Query('posts_per_page=1&order=ASC&post_type=speaker');
            $last->the_post();
        
            if($lang == 'ru'){
                echo '<a href="' . get_permalink() . '">Следующий</a>';
            }else if($lang == 'en'){
                echo '<a href="' . get_permalink() . '">Next</a>';
            }else if($lang == 'ua'){
                echo '<a href="' . get_permalink() . '">Наступний</a>';
            }
        
            wp_reset_postdata();
        };

    ?>
</div>


    <?php 
        get_footer();    
    ?>
</section>