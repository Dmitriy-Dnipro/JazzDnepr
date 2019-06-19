<?php

/*Template Name: Главная страница*/

 get_header();
?>

<?php
  $main_banner = get_field("first_screen_image");
  $orderVideo_1 = get_field("video_order_1");
  $orderVideo_2 = get_field("video_order_2");
  $orderVideo_3 = get_field("video_order_3");

  $orderPhoto_1 = get_field("photo_order_1");
  $orderPhoto_2 = get_field("photo_order_2");
  $orderPhoto_3 = get_field("photo_order_3");

  $lang = pll_current_language();

  $check_timers = get_field("home_check_timers");
?>

<style>

  .home_archive .archive_video__content .nav-tabs .nav-link:nth-child(1){
    order: <?php echo $orderVideo_1;?>;
  }
  .home_archive .archive_video__content .nav-tabs .nav-link:nth-child(2){
    order: <?php echo $orderVideo_2;?>;
  }
  .home_archive .archive_video__content .nav-tabs .nav-link:nth-child(3){
    order: <?php echo $orderVideo_3;?>;
  }

  .home_archive .archive_photo__content .nav-tabs .nav-link:nth-child(1){
    order: <?php echo $orderPhoto_1;?>;
  }
  .home_archive .archive_photo__content .nav-tabs .nav-link:nth-child(2){
    order: <?php echo $orderPhoto_2;?>;
  }
  .home_archive .archive_photo__content .nav-tabs .nav-link:nth-child(3){
    order: <?php echo $orderPhoto_3;?>;
  }


  @media screen and (max-width: 768px){
  .main_banner{
     background-image: url('<?php echo $main_banner['url'];?>');
  }
}
</style>

<section class="main_banner">
    <div class="main_video">
        <?php 
          $video_banner = get_field("first_screen_video");
        ?>

        <div id="playButton" class="button" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="600" data-aos-duration="2000">
                <svg version="1.1"  class="but hidden" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                  viewBox="0 0 52.026 52.026" style="enable-background:new 0 0 52.026 52.026;" xml:space="preserve">
                  <g>
                    <path d="M28.404,3.413c-0.976-0.552-2.131-0.534-3.09,0.044c-0.046,0.027-0.09,0.059-0.13,0.093L11.634,15.013H1
                      c-0.553,0-1,0.447-1,1v19c0,0.266,0.105,0.52,0.293,0.707S0.734,36.013,1,36.013l10.61-0.005l13.543,12.44
                      c0.05,0.046,0.104,0.086,0.161,0.12c0.492,0.297,1.037,0.446,1.582,0.446c0.517-0.001,1.033-0.134,1.508-0.402
                      C29.403,48.048,30,47.018,30,45.857V6.169C30,5.008,29.403,3.978,28.404,3.413z M28,45.857c0,0.431-0.217,0.81-0.579,1.015
                      c-0.155,0.087-0.548,0.255-1,0.026L13,34.569v-4.556c0-0.553-0.447-1-1-1s-1,0.447-1,1v3.996l-9,0.004v-17h9v4c0,0.553,0.447,1,1,1
                      s1-0.447,1-1v-4.536l13.405-11.34c0.461-0.242,0.86-0.07,1.016,0.018C27.783,5.36,28,5.739,28,6.169V45.857z"/>
                    <path d="M38.797,7.066c-0.523-0.177-1.091,0.103-1.269,0.626c-0.177,0.522,0.103,1.091,0.626,1.269
                      c7.101,2.411,11.872,9.063,11.872,16.553c0,7.483-4.762,14.136-11.849,16.554c-0.522,0.178-0.802,0.746-0.623,1.27
                      c0.142,0.415,0.53,0.677,0.946,0.677c0.107,0,0.216-0.017,0.323-0.054c7.896-2.693,13.202-10.106,13.202-18.446
                      C52.026,17.166,46.71,9.753,38.797,7.066z"/>
                    <path d="M43.026,25.513c0-5.972-4.009-11.302-9.749-12.962c-0.533-0.151-1.084,0.152-1.238,0.684
                      c-0.153,0.53,0.152,1.085,0.684,1.238c4.889,1.413,8.304,5.953,8.304,11.04s-3.415,9.627-8.304,11.04
                      c-0.531,0.153-0.837,0.708-0.684,1.238c0.127,0.438,0.526,0.723,0.961,0.723c0.092,0,0.185-0.013,0.277-0.039
                      C39.018,36.815,43.026,31.485,43.026,25.513z"/>
                  </g>
                </svg>
                <svg version="1.1"  class="but" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                  viewBox="0 0 52.026 52.026" style="enable-background:new 0 0 52.026 52.026;" xml:space="preserve">
                  <g>
                    <path d="M28.404,3.413c-0.976-0.552-2.131-0.534-3.09,0.044c-0.046,0.027-0.09,0.059-0.13,0.093L11.634,15.013H1
                      c-0.553,0-1,0.447-1,1v19c0,0.266,0.105,0.52,0.293,0.707S0.734,36.013,1,36.013l10.61-0.005l13.543,12.44
                      c0.05,0.046,0.104,0.086,0.161,0.12c0.492,0.297,1.037,0.446,1.582,0.446c0.517-0.001,1.033-0.134,1.508-0.402
                      C29.403,48.048,30,47.018,30,45.857V6.169C30,5.008,29.403,3.978,28.404,3.413z M28,45.857c0,0.431-0.217,0.81-0.579,1.015
                      c-0.155,0.087-0.548,0.255-1,0.026L13,34.569v-4.556c0-0.553-0.447-1-1-1s-1,0.447-1,1v3.996l-9,0.004v-17h9v4c0,0.553,0.447,1,1,1
                      s1-0.447,1-1v-4.536l13.405-11.34c0.461-0.242,0.86-0.07,1.016,0.018C27.783,5.36,28,5.739,28,6.169V45.857z"/>
                      <path d="M46.414,26l7.293-7.293c0.391-0.391,0.391-1.023,0-1.414s-1.023-0.391-1.414,0L45,24.586l-7.293-7.293
                      c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414L43.586,26l-7.293,7.293c-0.391,0.391-0.391,1.023,0,1.414
                      C36.488,34.902,36.744,35,37,35s0.512-0.098,0.707-0.293L45,27.414l7.293,7.293C52.488,34.902,52.744,35,53,35
                      s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414L46.414,26z"></path>
                  </g>
                </svg>
          </div>

        <video autoplay="" muted="" loop="loop" id="video_jazz">
            <source src="<?php echo $video_banner['url'];?>" type="video/mp4">
        </video>
      </div>
      <div class="main_overlay"></div>
    <div class="container">
      <div class="banner_subtitle" data-aos="zoom-in" data-aos-duration="2000">
        <p><?php the_field("first_screen_subtitle");?></p>
        <h1><?php the_field("first_screen_title");?></h1>
      </div>
      <div class="banner_date" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="400" data-aos-duration="2000">
        <div class="banner_date__month">
          <p><?php the_field("first_screen_days");?></p>
          <p><?php echo the_field("first_screen_month");?></p>
        </div>
        <div class="banner_date__year">
          <p><?php the_field("first_screen_year");?></p>
        </div>
      </div>
      <div class="banner_btn__buy"  data-aos="fade-up" data-aos-easing="ease" data-aos-delay="600" data-aos-duration="2000">
        

        <?php 
          $check = get_field("home_check_timers", 5);
          if($check){
        ?>
          <a href="#countdown_block" class="go_countdown"><?php the_field("first_screen_btn_name");?></a>
        <?}else{?>
          <a href="<?php the_field("first_screen_btn_link");?>"><?php the_field("first_screen_btn_name");?></a>
        <?}?>
      </div>
      <div class="banner_arrow__down">
        <a href="#about" class="arrow_down">
          <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M7.29289 19.7047C7.68342 20.0952 8.31658 20.0952 8.70711 19.7047L15.0711 13.3407C15.4616 12.9502 15.4616 12.317 15.0711 11.9265C14.6805 11.536 14.0474 11.536 13.6569 11.9265L8 17.5833L2.34315 11.9265C1.95262 11.536 1.31946 11.536 0.928933 11.9265C0.538408 12.317 0.538408 12.9502 0.928933 13.3407L7.29289 19.7047ZM7 0.997559L7 18.9976L9 18.9976L9 0.997559L7 0.997559Z"
              fill="#61B5F2" />
          </svg>
        </a>
      </div>
    </div>
    <div class="wave_box">
      <div class="wave">
      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 150" preserveAspectRatio="none"><path d="M0.00,49.98 C189.33,243.25 228.83,-26.14 423.53,84.38 L513.82,154.44 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg>
      </div>
    </div>

</section>

  <section class="home_about__jazz" id="about" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="2000">
    <h2><?php the_field("two_screen_title");?> - <span><?php the_field("two_screen_subtitle");?></span></h2>
    <div class="container">
      <div class="about_jazz__box">
      
      <?php 
        $jazz_cart = get_field("two_screen_list");

        foreach($jazz_cart as $cart){
          if(!empty($cart)){ 
        ?>
        <div class="jazz_box__cart">
          <div class="cart_img">
            <img src="<?php echo $cart['two_screen_list_img']['url'];?>" alt="<?php echo $cart['two_screen_list_img']['alt'];?>" />
          </div>
          <p><?php echo $cart['two_screen_list_title'];?></p>
          <div class="jazz_cart__text">
            <p>
              <?php echo $cart['two_screen_list_text'];?>
            </p>
          </div>
          <div class="cart_show__text">
            <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="38" y="1" width="37" height="37" rx="18.5" transform="rotate(90 38 1)" stroke="#61B5F2" />
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M12.0001 15.6249C12.0001 15.4474 12.0751 15.2718 12.222 15.1474C12.4845 14.9249 12.8789 14.9581 13.1026 15.2212L19.5001 22.7818L25.8976 15.2212C26.1214 14.9581 26.5157 14.9249 26.7789 15.1474C27.0426 15.3712 27.0745 15.7649 26.8526 16.0287L19.9776 24.1537C19.8582 24.2943 19.6839 24.3749 19.5001 24.3749C19.3164 24.3749 19.142 24.2943 19.0226 24.1537L12.1476 16.0287C12.0489 15.9112 12.0001 15.7674 12.0001 15.6249Z"
                fill="#61B5F2" />
            </svg>
          </div>
        </div>
        <?}?>
        <?}?>
       
      </div>
      
      <a href="" class="jazz_cart__more">
          <?php 
            if($lang == 'ru'){
              echo 'смотреть еще';
            }else if($lang == 'en'){
              echo 'Show more';
            }else if($lang == 'ua'){
              echo 'Дивитися ще';
            }
          ?>
            <svg width="17" height="11" viewBox="0 0 17 11" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.00012 1.62493C1.00012 1.44743 1.07512 1.27181 1.22199 1.14743C1.48449 0.924935 1.87887 0.95806 2.10262 1.22118L8.50012 8.78181L14.8976 1.22119C15.1214 0.95806 15.5157 0.924935 15.7789 1.14744C16.0426 1.37119 16.0745 1.76494 15.8526 2.02869L8.97761 10.1537C8.85824 10.2943 8.68387 10.3749 8.50011 10.3749C8.31636 10.3749 8.14199 10.2943 8.02262 10.1537L1.14762 2.02868C1.04887 1.91118 1.00012 1.76743 1.00012 1.62493Z" fill="#61B5F2"/>
            <path d="M1.00012 1.62493C1.00012 1.44743 1.07512 1.27181 1.22199 1.14743C1.48449 0.924935 1.87887 0.95806 2.10262 1.22118L8.50012 8.78181L14.8976 1.22119C15.1214 0.95806 15.5157 0.924935 15.7789 1.14744C16.0426 1.37119 16.0745 1.76494 15.8526 2.02869L8.97761 10.1537C8.85824 10.2943 8.68386 10.3749 8.50011 10.3749C8.31636 10.3749 8.14199 10.2943 8.02262 10.1537L1.14762 2.02868C1.04887 1.91118 1.00012 1.76743 1.00012 1.62493" stroke="url(#paint0_linear)"/>
            <defs>
            <linearGradient id="paint0_linear" x1="16" y1="1" x2="7.68628" y2="14.1853" gradientUnits="userSpaceOnUse">
            <stop stop-color="#5200FF"/>
            <stop offset="1" stop-color="#DD0077"/>
            </linearGradient>
            </defs>
            </svg>
      </a>
    <div class="about_musician__notes">
        <img src="<?php echo get_template_directory_uri();?>/images/notes/about_3.png" alt="">
        <img src="<?php echo get_template_directory_uri();?>/images/notes/about_2.png" alt="">
        <img src="<?php echo get_template_directory_uri();?>/images/notes/about_3.png" alt="">
        <img src="<?php echo get_template_directory_uri();?>/images/notes/about_4.png" alt="">
        <img src="<?php echo get_template_directory_uri();?>/images/notes/about_5.png" alt="">
        <img src="<?php echo get_template_directory_uri();?>/images/notes/about_6.png" alt="">
    </div>
    </div>
  </section>

  <section class="home_participants">
    <h2 class="home_participants__title">
      <?php 
        if($lang == 'ru'){
          echo 'Участники';
        }else if($lang == 'en'){
          echo 'Participants';
        }else if($lang == 'ua'){
          echo 'Учасники';
        }
      ?>
    </h2>
    <div class="home_participants__container">
    <div class="top-wave"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 150" preserveAspectRatio="none"><path d="M0.00,49.98 C149.99,150.00 350.88,-49.98 500.00,49.98 L500.00,0.00 L0.00,0.00 Z" style="stroke: none;"></path></svg></div>
    <div class="bottom-wave" ><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 150" preserveAspectRatio="none"><path d="M0.00,49.98 C149.99,150.00 350.85,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none;"></path></svg></div>

      <div class="container">
        <div class="participants_box">

        <?php 
          $membersArr = array('post_type' => 'speaker', 'numberposts' => -1, 'order' => 'ASC');
          $members = get_posts($membersArr);

          foreach ($members as $member) {
            $check_home = get_field("member_check", $member->ID);
            if($check_home){ ?>

          <div class="participants_box__cart" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="2000">
          <a href="<?php echo get_post_permalink($member->ID);?>">
            <div class="participants_box__cart_img">
              <img src="<?php echo get_the_post_thumbnail_url($member->ID);?>">
              <div class="participants_box__cart_overlay">
              </div>
              <div class="line_1">
                <i></i>
              </div>
              <div class="line_2">
                <i></i>
              </div>
              <div class="line_3">
                <i></i>
              </div>
              <div class="line_4">
                <i></i>
              </div>
            </div>
          </a>
            <div class="participants_cart__title">
              <p><?php echo $member->post_title;?></p>
            </div>

            <div class="participants_cart__country">
              <p><?php the_field("member_country", $member->ID);?></p>
            </div>
            <div class="participants_cart__social">
              <?php 
                $fb = get_field("member_social_fb", $member->ID);
                $inst = get_field("member_social_inst", $member->ID);
                $youtube = get_field("member_social_youtube", $member->ID);

              ?>
              <ul>
                <?php if($fb){?>
                <li>
                  <a href="<?php echo $fb;?>" target="_blank">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect x="1.02195" y="0.9" width="21.6" height="21.6" rx="2.7"  stroke-width="1.8"/>
                      <path d="M15.2956 13.5694V21.818H12.1592V13.5694H9.12183V10.4319H12.1592V8.26473C12.1592 5.68773 14.2368 3.60028 16.8138 3.60028H18.8886V6.73778H16.8138C15.9547 6.73778 15.2956 7.39691 15.2956 8.25593V10.4319H18.9392L18.4225 13.5694H15.2956Z"/>
                    </svg>
                  </a>
                </li>
                <?}?>
                <?php if($inst){?>
                <li>
                  <a href="<?php echo $inst;?>" target="_blank">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect x="1.42148" y="0.9" width="21.6" height="21.6" rx="2.7"  stroke-width="1.8"/>
                      <circle cx="12.2219" cy="11.7004" r="5.4"  stroke-width="1.8"/>
                      <circle cx="19.4215" cy="4.50059" r="0.9"/>
                    </svg>
                  </a>
                </li>
                <?}?>
                <?php if($youtube){?>
                <li>
                  <a href="<?php echo $youtube;?>" target="_blank">
                  <svg width="21" height="24" viewBox="0 0 21 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.416 17.1163H16.1319L16.1379 16.3704C16.1379 16.0389 16.4101 15.7677 16.7426 15.7677H16.8245C17.1578 15.7677 17.4308 16.0389 17.4308 16.3704L17.416 17.1163ZM12.5993 15.5178C12.2735 15.5178 12.007 15.7368 12.007 16.0048V19.6326C12.007 19.9001 12.2735 20.1185 12.5993 20.1185C12.9263 20.1185 13.1931 19.9001 13.1931 19.6326V16.0048C13.1931 15.7365 12.9263 15.5178 12.5993 15.5178ZM20.4219 13.4885V20.39C20.4219 22.0454 18.9864 23.4 17.2317 23.4H4.11234C2.35707 23.4 0.921875 22.0454 0.921875 20.39V13.4885C0.921875 11.8331 2.35707 10.4783 4.11234 10.4783H17.2317C18.9864 10.4783 20.4219 11.8331 20.4219 13.4885ZM4.98749 21.1393L4.98645 13.8694L6.61276 13.87V12.7928L2.27751 12.7863V13.8453L3.63082 13.8492V21.1393H4.98749ZM9.8625 14.9523H8.5066V18.8344C8.5066 19.396 8.54066 19.6768 8.50452 19.7759C8.39428 20.0769 7.89872 20.3967 7.70553 19.8084C7.67277 19.7054 7.70164 19.3947 7.70112 18.8612L7.69566 14.9523H6.3473L6.35146 18.7998C6.3525 19.3895 6.33819 19.8292 6.35613 20.0294C6.38915 20.3822 6.37746 20.7935 6.7048 21.0285C7.31476 21.4679 8.48397 20.963 8.77647 20.3349L8.77388 21.1364L9.86275 21.1377L9.8625 14.9523ZM14.2001 19.3978L14.1972 16.1668C14.1962 14.9354 13.275 14.1981 12.0247 15.1944L12.0301 12.7923L10.6758 12.7943L10.6693 21.0857L11.7831 21.0696L11.8845 20.5533C13.3075 21.8587 14.2022 20.9641 14.2001 19.3978ZM18.4435 18.9696L17.4269 18.9751C17.4264 19.0154 17.4249 19.0619 17.4243 19.1126V19.6799C17.4243 19.9836 17.1734 20.2309 16.8687 20.2309H16.6696C16.3643 20.2309 16.1134 19.9836 16.1134 19.6799V19.617V18.993V18.1878H18.4415V17.3116C18.4415 16.6712 18.4251 16.0311 18.372 15.665C18.2054 14.507 16.5799 14.3231 15.7588 14.9159C15.5011 15.1011 15.3043 15.3488 15.1899 15.6816C15.0745 16.0147 15.017 16.4697 15.017 17.0477V18.9743C15.0175 22.177 18.9076 21.7243 18.4435 18.9696ZM13.2285 8.51032C13.2984 8.68036 13.4071 8.81816 13.5545 8.92216C13.7001 9.0246 13.8863 9.07608 14.1093 9.07608C14.3049 9.07608 14.478 9.0233 14.6288 8.91436C14.7791 8.80594 14.9057 8.64396 15.0092 8.4279L14.9835 8.95986H16.4948V2.5324H15.3051V7.5348C15.3051 7.80572 15.082 8.0275 14.8093 8.0275C14.5381 8.0275 14.3142 7.80572 14.3142 7.5348V2.5324H13.0725V6.86764C13.0725 7.41988 13.0826 7.78804 13.099 7.97472C13.1159 8.1601 13.1585 8.33794 13.2285 8.51032ZM8.64829 4.8802C8.64829 4.26322 8.69977 3.78144 8.80195 3.43408C8.90491 3.08802 9.08978 2.80982 9.35757 2.6C9.62459 2.38914 9.9665 2.28358 10.3822 2.28358C10.7319 2.28358 11.0315 2.35222 11.2816 2.48664C11.533 2.62184 11.727 2.79734 11.8614 3.01392C11.9984 3.23128 12.0915 3.45462 12.1411 3.68316C12.1918 3.91482 12.2168 4.26426 12.2168 4.73564V6.36116C12.2168 6.95734 12.1929 7.39596 12.1463 7.67442C12.1003 7.95366 12.0015 8.21262 11.8484 8.45546C11.6976 8.6957 11.5028 8.87536 11.2668 8.99002C11.0281 9.10572 10.7551 9.1624 10.4467 9.1624C10.1022 9.1624 9.81205 9.11482 9.57285 9.0155C9.33287 8.9167 9.1475 8.76772 9.01542 8.56986C8.88204 8.37174 8.78818 8.13046 8.7315 7.84914C8.67456 7.56808 8.64752 7.14532 8.64752 6.5819L8.64829 4.8802ZM9.83208 7.4334C9.83208 7.7974 10.103 8.09458 10.4329 8.09458C10.7631 8.09458 11.033 7.7974 11.033 7.4334V4.0118C11.033 3.64832 10.7631 3.35114 10.4329 3.35114C10.103 3.35114 9.83208 3.64832 9.83208 4.0118V7.4334ZM5.6492 9.1611H7.07504L7.0766 4.2315L8.7614 0.00858H7.20192L6.30621 3.14522L5.39778 0H3.85441L5.64686 4.23384L5.6492 9.1611Z"/>
                  </svg>
                  </a>
                </li>
                <?}?>
              </ul>
            </div>
          </div>
        <?}?>
        <?}?>


        </div>
        <div class="participants_cart_show-more btn_jazz participants-show">
          
          <?php if($lang == 'ru'){?>
            <a href="<?php echo home_url();?>/speaker/">Смотреть еще</a>
          <?}else if($lang == 'en'){?>
            <a href="/en/speaker">Show more</a>
          <?}else if($lang == 'ua'){?>
            <a href="/ua/speaker">Дивитися ще</a>
          <?}?>

        </div>

        <div class="participants_musician">
          <img src="<?php echo get_template_directory_uri();?>/images/notes/about_4.png" alt="">
          <img src="<?php echo get_template_directory_uri();?>/images/notes/about_5.png" alt="">
          <img src="<?php echo get_template_directory_uri();?>/images/notes/about_7.png" alt="">
        </div>
      </div>
    </div>
    </div>
  </section>

  <?php 
    if($check_timers){?>

  <section class="home_countdown home_buy__ticket" id="countdown_block">
    <?php 
      if($lang == 'ru'){
        $day = 'Дней';
        $hours = 'Часов';
        $min = 'Минут';
        $sec = 'Секунд';
      }else if($lang == 'en'){
        $day = 'Days';
        $hours = 'Hours';
        $min = 'Minutes';
        $sec = 'Seconds';
      }else if($lang == 'ua'){
        $day = 'Днів';
        $hours = 'Годин';
        $min = 'Хвилин';
        $sec = 'Cекунд';
      }
      
    ?>
    <h2><?php the_field("home_date_title");?></h2>
    <p><?php the_field("home_date_subtitle");?></p>
    <div class="container">
      <div class="start_countdown" 
        data-start="<?php the_field("home_date_start");?>" 
        data-days="<?php echo $day;?>"
        data-hours="<?php echo $hours;?>"
        data-min="<?php echo $min;?>"
        data-sec="<?php echo $sec;?>"
      >
      </div>
     </div>            

  </section>
  <?}else{?>

  <section class="home_buy__ticket">
    <h2><?php the_field("home_date_title");?></h2>
    <p><?php the_field("home_buy_ticket_subtitle");?></p>
    <div class="container">
      <div class="home_ticket__box">

        <!-- <div class="home_ticket__cart" data-aos="fade-up"
          data-aos-anchor-placement="top-center">
          <p>
            <?php if($lang == 'ru'){
              the_field("ticket_fun_title", 416);
            }else if($lang == 'en'){
              the_field("ticket_fun_title", 668);
            }else if($lang == 'ua'){
              the_field("ticket_fun_title", 670);
            }
            
          ?>
          </p>
          <p>
            <?php 
              if($lang == 'ru'){
                echo 'Посещение фан-зоны фестиваля<br> 20 и 21 июля';
              }else if($lang == 'en'){
                echo 'Entrance to the fanzone of festival on<br>July 20 and 21';
              }else if($lang == 'ua'){
                echo 'Відвідування фан-зони фестивалю<br>20 та 21 липня';
              }
            ?>
          </p>
          <p>
            <?php 
              if($lang == 'ru'){
                echo 'Бесплатно';
              }else if($lang == 'en'){
                echo 'For free';
              }else if($lang == 'ua'){
                echo 'Безкоштовно';
              }
            ?>
            
          </p>

          <div class="btn_jazz" id="ticket_reg"><a href="#" data-toggle="modal" data-target="#reg_ticket">
            <?php 
              if($lang == 'ru'){
                the_field("ticket_fun_btn_name", 416);
              }else if($lang == 'en'){
                the_field("ticket_fun_btn_name", 668);
              }else if($lang == 'ua'){
                the_field("ticket_fun_btn_name", 670);
              }
            ?>
          </a>
        </div>
        </div> -->
        
       
        <div class="home_ticket__cart" data-aos="fade-up"
          data-aos-anchor-placement="top-center">
          <p>
            <?php
              if($lang == 'ru'){
                the_field("ticket_tribune_title", 416);
              }else if($lang == 'en'){
                the_field("ticket_tribune_title", 668);
              }else if($lang == 'ua'){
                the_field("ticket_tribune_title", 670);
              }
            ?>
          </p>
          <p>
            <?php 
              if($lang == 'ru'){
                echo 'Посещение фестиваля 20 и 21 июля<br><span>С МЕСТОМ НА ТРИБУНЕ</span>';
              }else if($lang == 'en'){
                echo 'Attending the festival on July 20 and 21<br><span>WITH A FIXED SEAT ON THE PODIUM</span>';
              }else if($lang == 'ua'){
                echo 'Відвідування фестивалю 20 та 21 липня<br><span>З МІСЦЕМ НА ТРИБУНI</span>';
              }
            
            ?>
            
          </p>
          <div class="btn_jazz" id="ticket_cart__btn"><a href="javascript:void(0);" data-toggle="modal" data-target="#buy_ticket">
            <?php if($lang == 'ru'){
                  the_field("ticket_tribune_btn_name", 416);
                }else if($lang == 'en'){
                  the_field("ticket_tribune_btn_name", 668);
                }else if($lang == 'ua'){
                  the_field("ticket_tribune_btn_name", 670);
                }
            ?>
          </a>
        </div>
       </div>

       <?php if($lang == 'ru'){?>
          <div class="home_ticket__cart" data-aos="fade-up"
            data-aos-anchor-placement="top-center" data-aos-delay="400">
            <p>КЕМПИНГ</p>
            <p>Место в палаточном городке, посещение<br> фан-зоны <span>ВКЛЮЧЕНО.</span><br>
              Палатка в стоимость не входит</p>
              <br>
                <div class="btn_jazz">
                  <a href="https://dnipro.karabas.com/jazz-dnepr-1" target="_blank">Купить</a>
                </div>
          </div>
        <?}else if($lang == 'ua'){?>
          <div class="home_ticket__cart" data-aos="fade-up"
            data-aos-anchor-placement="top-center" data-aos-delay="400">
            <p>КЕМПІНГ</p>
            <p>Місце в наметовому містечку, відвідування фан-зони <span>ВКЛЮЧЕНО</span>.<br> Намет у вартість не входить</p>
              <br>
                <div class="btn_jazz">
                  <a href="https://dnipro.karabas.com/jazz-dnepr-1" target="_blank">Придбати</a>
                </div>
          </div>
         <?}else if($lang == 'en'){?>
          <div class="home_ticket__cart" data-aos="fade-up"
            data-aos-anchor-placement="top-center" data-aos-delay="400">
            <p>CAMPING</p>
            <p>Place in the tent city, entrance to the <span>FANZONE</span>. <br>Tent is not included in the price</p>
              <br>
              <br>
                <div class="btn_jazz">
                  <a href="https://dnipro.karabas.com/jazz-dnepr-1" target="_blank">Buy</a>
                </div>
          </div>
          <?}?>

      </div>
      <div class="ticket_musician">
          <img src="<?php echo get_template_directory_uri();?>/images/notes/about_7.png" alt="">
          <img src="<?php echo get_template_directory_uri();?>/images/notes/about_8.png" alt="">
          <img src="<?php echo get_template_directory_uri();?>/images/notes/about_9.png" alt="">
          <img src="<?php echo get_template_directory_uri();?>/images/notes/about_5.png" alt="">
          <img src="<?php echo get_template_directory_uri();?>/images/notes/about_8.png" alt="">
      </div>
    </div>
  </section>
  <?}?>

<section class="home_schedule">
    <h2>
      <?php 
        if($lang == 'ru'){
          echo 'Расписание';
        }else if($lang == 'en'){
          echo 'Programme';
        }else if($lang == 'ua'){
          echo 'Розклад';
        }
      ?>
      
    </h2>
    <div class="top-wave"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 150" preserveAspectRatio="none"><path d="M0.00,49.98 C149.99,150.00 350.88,-49.98 500.00,49.98 L500.00,0.00 L0.00,0.00 Z" style="stroke: none;"></path></svg></div>
    <div class="bottom-wave"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 150" preserveAspectRatio="none"><path d="M0.00,49.98 C149.99,150.00 350.85,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none;"></path></svg></div>
    <?php 
      $days_arr = array('post_type' => 'days', 'numberposts' => -1, 'order' => 'ASC');
      $get_days = get_posts($days_arr);

    ?>
    <div class="container">
      <div class="home_schedule__box">
        <ul class="nav nav-tabs" id="days_tab" role="tablist">
          <?php
            $count = 0;
            foreach ($get_days as $days) {
              $count++;
            ?>
            <li class="nav-item">
              <a class="nav-link <?php if($count == 1){echo 'active';}?>" id="day_<?php echo $days->ID;?>" data-toggle="tab" href="#tab_<?php echo $days->ID;?>" role="tab" aria-controls="tab_<?php echo $days->ID;?>"
                aria-selected="true"><?php echo $days->post_title;?></a>
            </li>
          <?}?>
   
          <li class="nav-item">
            <a class="nav-link" id="home_map" data-toggle="tab" href="#h_map" role="tab" aria-controls="h_map"
              aria-selected="false">
              <?php 
                if($lang == 'ru'){
                  echo 'Карта фестиваля';
                }else if($lang == 'en'){
                  echo 'Festival map';
                }else if($lang == 'ua'){
                  echo 'Карта фестивалю';
                }
              ?>
            </a>
          </li>

        </ul>

        <div class="tab-content" id="myTabContent">
          <?php 
            $counts = 0;
            foreach ($get_days as $day_content) {
              $day_text = get_field("schedule_reg", $day_content->ID);
              $counts++;
            ?>

          <div class="tab-pane fade <?php if($counts == 1){echo 'show active';}?> schedule_days" id="tab_<?php echo $day_content->ID;?>" role="tabpanel" aria-labelledby="day_<?php echo $day_content->ID;?>">

            <div class="schedule_days__cart near">
              <p>
                <?php 
                  if($lang == 'ru'){
                    echo 'cкоро';
                  }else if($lang == 'en'){
                    echo 'soon';
                  }else if($lang == 'ua'){
                    echo 'скоро';
                  }
                ?>
              </p>
              <!-- <div class="schedule_day">
                <h4><?php the_field("schedule_month", $day_content->ID);?></h4>
                <p><?php the_field("schedule_day", $day_content->ID);?></p>
                <p><?php the_field("schedule_location", $day_content->ID);?></p>
              </div>
              <div class="schedule_time__box">
                <?php for($i = 0; $i <= 2; $i++){?>
                <div class="time_cart">
                  <div class="time_box__hours">
                    <p><?php echo $day_text[$i]['reg_time'];?></p>
                  </div>
                  <div class="time_box__description">
                    <h5><?php echo $day_text[$i]['reg_name'];?></h5>
                    <p><?php echo $day_text[$i]['reg_text'];?></p>
                  </div>
                </div>
                <?}?>

                <div class="btn_jazz">
                  <a href="<?php echo home_url();?>/event-days">подробнее</a>
                </div>
              </div> -->

            </div>
          </div>
        <?}?>

          
          <div class="tab-pane fade schedule_days" id="h_map" role="tabpanel" aria-labelledby="home_map">
            <div class="schedule_days__cart">
              
              <div class="schedule_day">

                <h4>
                  <?php 
                    if($lang == 'ru'){
                      the_field("event_day_map_day", 178);
                    }else if($lang == 'en'){
                      the_field("event_day_map_day", 610);
                    }else if($lang == 'ua'){
                      the_field("event_day_map_day", 612);
                    }
                  ?>
                </h4>
                <p>
                  <?php 
                    if($lang == 'ru'){
                      the_field("event_day_map_week", 178);
                    }else if($lang == 'en'){
                      the_field("event_day_map_week", 610);
                    }else if($lang == 'ua'){
                      the_field("event_day_map_week", 612);
                    }
                  ?>
                </p>
                <p>
                  <?php 
                    if($lang == 'ru'){
                      the_field("event_day_map_loc", 178);
                    }else if($lang == 'en'){
                      the_field("event_day_map_loc", 610);
                    }else if($lang == 'ua'){
                      the_field("event_day_map_loc", 612);
                    }
                  ?>
                </p>

              </div>
              <div class="schedule_time__box">

                <div class="time_cart">
                  <div class="time_cart__map">
                    <?php
                      if($lang == 'ru'){
                        $map_img = get_field("event_day_map_image", 178);
                      }else if($lang == 'en'){
                        $map_img = get_field("event_day_map_image", 610);
                      }else if($lang == 'ua'){
                        $map_img = get_field("event_day_map_image", 612);
                      }
                    ?>
                    <a href="<?php echo $map_img['url'];?>" data-fancybox="images">
                      <img src="<?php echo $map_img['url'];?>" alt="<?php echo $map_img['alt'];?>">
                    </a>
                  </div>
                </div>

                <div class="btn_jazz">
                  <!-- <a href="<?php echo home_url();?>/event-days">подробнее</a> -->
                  <a href="javascript:void(0);"><?php 
                    if($lang == 'ru'){
                      echo 'Подробнее';
                    }else if($lang == 'en'){
                      echo 'Read more';
                    }else if($lang == 'ua'){
                      echo 'Детальніше';
                    }
                  ?></a>
                </div>

              </div>
              
            </div>
          </div>
        </div>
      </div>
      <div class="musician_schedule">
          <img src="<?php echo get_template_directory_uri();?>/images/notes/about_9.png" alt="">
          <img src="<?php echo get_template_directory_uri();?>/images/notes/about_9.png" alt="">
          <img src="<?php echo get_template_directory_uri();?>/images/notes/about_5.png" alt="">
          <img src="<?php echo get_template_directory_uri();?>/images/notes/about_8.png" alt="">
      </div>
    </div>
</section>

  <section class="home_archive">
    <h2>
      <?php
        if($lang == 'ru'){
          echo 'Как это было';
        }else if($lang == 'en'){
          echo 'How it was';
        }else if($lang == 'ua'){
          echo 'Як це було';
        }
      ?>
    </h2>
    <div class="container">
      <div class="home_archive__box">
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="photo" role="tabpanel" aria-labelledby="nav-photo">
            <!-- Вложенный таб -->
            <div class="archive_photo__content">
              <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <a class="nav-item nav-link <?php if($orderPhoto_1 == 1 ){echo 'active';}?> home_arch" id="photo-2018-tab" data-toggle="tab" href="#photo-2018"
                    role="tab" aria-controls="photo-2018" aria-selected="true"><?php echo the_field("photo_year_1");?></a>
                  <a class="nav-item nav-link <?php if($orderPhoto_2 == 1 ){echo 'active';}?>" id="photo-2017-tab" data-toggle="tab" href="#photo-2017" role="tab"
                    aria-controls="photo-2017" aria-selected="false"><?php echo the_field("photo_year_2");?></a>
                  <a class="nav-item nav-link <?php if($orderPhoto_3 == 1 ){echo 'active';}?>" id="photo-2016-tab" data-toggle="tab" href="#photo-2016" role="tab"
                    aria-controls="photo-2016" aria-selected="false"><?php echo the_field("photo_year_3");?></a>
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade <?php if($orderPhoto_1 == 1 ){echo 'active show';}?>" id="photo-2018" role="tabpanel" aria-labelledby="photo-2018-tab">

                  <div class="photo_content__box">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="photo_content__slider">
                            <div class="photo_content__slide">
                                <?php
                                  $gallery_1 = get_field("photo_gallery_1");
                                  foreach ($gallery_1 as $photo_1) {?>
                                    <div class="archive_slide_img">
                                      <img src="<?php echo $photo_1['url'];?>" alt="<?php echo $photo_1['alt'];?>">
                                    </div>
                                 <?}?>
                            </div>
                            <div class="photo_content__slide_nav">
                              <?php for($i = 0; $i < count($gallery_1); $i++){?>
                                <p><?php echo $i+1;?></p>

                              <?}?>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="photo_content__text">
                            <h5>
                              <?php echo the_field("photo_year_1");?>
                            </h5>
                              <p><?php the_field("photo_text_1");?></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

                <div class="tab-pane fade <?php if($orderPhoto_2 == 1 ){echo 'active show';}?>" id="photo-2017" role="tabpanel" aria-labelledby="photo-2017-tab">

                    <div class="photo_content__box">
                        <div class="container">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="photo_content__slider">
                                <div class="photo_content__slide">
                                <?php
                                  $gallery_2 = get_field("photo_gallery_2");
                                  foreach ($gallery_2 as $photo_2) {?>
                                  <div class="archive_slide_img">
                                    <img src="<?php echo $photo_2['url'];?>" alt="<?php echo $photo_2['alt'];?>">
                                  </div>
                                 <?}?>
                                </div>
                                <div class="photo_content__slide_nav">
                                <?php for($i = 0; $i < count($gallery_2); $i++){?>
                                  <p><?php echo $i+1;?></p>
                                <?}?>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="photo_content__text">
                                <h5>
                                  <?php echo the_field("photo_year_2");?>
                                </h5>
                                <p><?php the_field("photo_text_2");?></p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>


                </div>
                <div class="tab-pane fade <?php if($orderPhoto_3 == 1 ){echo 'active show';}?>" id="photo-2016" role="tabpanel" aria-labelledby="photo-2016-tab">

                    <div class="photo_content__box">
                        <div class="container">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="photo_content__slider">
                                <div class="photo_content__slide">
                                <?php
                                  $gallery_3 = get_field("photo_gallery_3");
                                  foreach ($gallery_3 as $photo_3) {?>
                                  <div class="archive_slide_img">
                                    <img src="<?php echo $photo_3['url'];?>" alt="<?php echo $photo_3['alt'];?>">
                                  </div>
                                 <?}?>
                                </div>
                                <div class="photo_content__slide_nav">
                                  <?php for($i = 0; $i < count($gallery_3); $i++){?>
                                    <p><?php echo $i+1;?></p>
                                  <?}?>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="photo_content__text">
                                <h5>
                                  <?php echo the_field("photo_year_3");?>
                                </h5>
                                  <p><?php the_field("photo_text_3");?></p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                </div>
              </div>
            </div>
            <!-- энд -->

          </div>
          <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="nav-video">
            <!-- Вложенный таб -->
            <div class="archive_video__content">
              <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">

                  <a class="nav-item nav-link <?php if($orderVideo_1 == 1 ){echo 'active';}?>" id="photo-2018-tab" data-toggle="tab" href="#video-2018"
                    role="tab" aria-controls="video-2018" aria-selected="true"><?php echo the_field("video_year_1");?></a>
                  <a class="nav-item nav-link <?php if($orderVideo_2 == 1 ){echo 'active';}?>" id="video-2017-tab" data-toggle="tab" href="#video-2017" role="tab"
                    aria-controls="video-2017" aria-selected="false"><?php echo the_field("video_year_2");?></a>
                  <a class="nav-item nav-link <?php if($orderVideo_3 == 1){echo 'active';}?>" id="video-2016-tab" data-toggle="tab" href="#video-2016" role="tab"
                    aria-controls="video-2016" aria-selected="false"><?php echo the_field("video_year_3");?></a>
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade <?php if($orderVideo_1 == 1 ){echo 'active show';}?>" id="video-2018" role="tabpanel" aria-labelledby="video-2018-tab">

                    <div class="photo_content__box">
                        <div class="container">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="video_content__box">
                                <div class="video_content__item">
                                  <?php 
                                    $video_image_1 = get_field("video_preview_1");
                                  ?>
                                  <a href="<?php the_field("video_1");?>" data-fancybox>
                                  <img src="<?php echo $video_image_1['url'];?>" alt="video">

                                  <div class="archive_video__play">
                                    <svg width="29" height="34" viewBox="0 0 29 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g filter="url(#play_1_d)">
                                         <path d="M21 12.9994L0 25.1237L1.05995e-06 0.875L21 12.9994Z" fill="url(#play_1)"></path>
                                        </g>
                                        <defs>
                                          <filter id="play_1_d" x="0" y="0.875" width="29" height="32.2487" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix>
                                            <feOffset dx="4" dy="4"></feOffset>
                                            <feGaussianBlur stdDeviation="2"></feGaussianBlur>
                                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.65 0"></feColorMatrix>
                                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"></feBlend>
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"></feBlend>
                                          </filter>
                                          <linearGradient id="play_1" x1="0" y1="0.875" x2="23.4088" y2="21.327" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#5200FF"></stop>
                                            <stop offset="1" stop-color="#DD0077"></stop>
                                          </linearGradient>
                                        </defs>
                                      </svg>
                                  </div>
                                  </a>
                                </div>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="photo_content__text">
                                <h5>
                                  <?php the_field("video_year_1");?>
                                </h5>
                                <p><?php the_field("video_text_1");?></p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                
                </div>
                <div class="tab-pane fade <?php if($orderVideo_2 == 1 ){echo 'active show';}?>" id="video-2017" role="tabpanel" aria-labelledby="video-2017-tab">
                    <div class="photo_content__box">
                        <div class="container">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="video_content__box">
                                <div class="video_content__item">
                                  <?php 
                                      $video_image_2 = get_field("video_preview_2");
                                    ?>
                                    <a href="<?php the_field("video_2");?>" data-fancybox>
                                      <img src="<?php echo $video_image_2['url'];?>" alt="video">

                                      <div class="archive_video__play">
                                        <svg width="29" height="34" viewBox="0 0 29 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#play_2_d)">
                                            <path d="M21 12.9994L0 25.1237L1.05995e-06 0.875L21 12.9994Z" fill="url(#play_2)"></path>
                                            </g>
                                            <defs>
                                              <filter id="play_2_d" x="0" y="0.875" width="29" height="32.2487" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix>
                                                <feOffset dx="4" dy="4"></feOffset>
                                                <feGaussianBlur stdDeviation="2"></feGaussianBlur>
                                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.65 0"></feColorMatrix>
                                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"></feBlend>
                                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"></feBlend>
                                              </filter>
                                              <linearGradient id="play_2" x1="0" y1="0.875" x2="23.4088" y2="21.327" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#5200FF"></stop>
                                                <stop offset="1" stop-color="#DD0077"></stop>
                                              </linearGradient>
                                            </defs>
                                          </svg>
                                    </a>
                                  </div>

                                </div>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="photo_content__text">
                                <h5>
                                  <?php the_field("video_year_2");?>
                                </h5>
                                <p><?php the_field("video_text_2");?></p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="tab-pane fade <?php if($orderVideo_3 == 1 ){echo 'active show';}?>" id="video-2016" role="tabpanel" aria-labelledby="video-2016-tab">
                    <div class="photo_content__box">
                        <div class="container">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="video_content__box">
                                <div class="video_content__item">
                                  <?php 
                                    $video_image_3 = get_field("video_preview_3");
                                  ?>
                                  <a href="<?php the_field("video_3");?>" data-fancybox>
                                    <img src="<?php echo $video_image_3['url'];?>" alt="video">

                                    <div class="archive_video__play">
                                      <svg width="29" height="34" viewBox="0 0 29 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <g filter="url(#play_3_d)">
                                          <path d="M21 12.9994L0 25.1237L1.05995e-06 0.875L21 12.9994Z" fill="url(#play_3)"></path>
                                          </g>
                                          <defs>
                                            <filter id="play_3_d" x="0" y="0.875" width="29" height="32.2487" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                              <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                              <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix>
                                              <feOffset dx="4" dy="4"></feOffset>
                                              <feGaussianBlur stdDeviation="2"></feGaussianBlur>
                                              <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.65 0"></feColorMatrix>
                                              <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"></feBlend>
                                              <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"></feBlend>
                                            </filter>
                                            <linearGradient id="play_3" x1="0" y1="0.875" x2="23.4088" y2="21.327" gradientUnits="userSpaceOnUse">
                                              <stop stop-color="#5200FF"></stop>
                                              <stop offset="1" stop-color="#DD0077"></stop>
                                            </linearGradient>
                                          </defs>
                                        </svg>
                                    </div>
                                  </a>
                                </div>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="photo_content__text">
                                <h5>
                                  <?php the_field("video_year_3");?>
                                </h5>
                                <p><?php the_field("video_text_3");?></p>

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
              </div>
            </div>
            <!-- энд -->
          </div>
        </div>

        <nav>
          <div class="nav nav-tabs nav_mobile" id="nav-tab" role="tablist">
            <a class="nav-item nav-link nav_arch" id="nav-video" data-toggle="tab" href="#video" role="tab"
              aria-controls="nav-video" aria-selected="false">
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
            <a class="nav-item nav-link active nav_arch" id="nav-photo" data-toggle="tab" href="#photo" role="tab"
              aria-controls="nav-photo" aria-selected="true">
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

          </div>
        </nav>

      </div>
 
      <div class="btn_jazz">
        <?php 
          if($lang == 'ru'){?>
            <a href="/archive-festival/">Смотреть еще</a>
          <?}else if($lang == 'en'){?>
            <a href="/en/festival-archive">Show more</a>
          <?}else if($lang == 'ua'){?>
            <a href="/ua/arhiv-festivalyu">Дивитися ще</a>
          <?}?>
      </div>
    </div>
  </section>

  <section class="home_social_block">
    <h2>
      <?php 
        if($lang == 'ru'){
          echo 'Присоединяйтесь';
        }else if($lang == 'en'){
          echo 'Join in';
        }else if($lang == 'ua'){
          echo 'Приєднуйтесь';
        }
      ?>
    </h2>
    <ul>
        <li>
          <a href="<?php the_field("contacts_social_fb", 229);?>" target="_blank">
            <svg viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M21.6841 0.505005H3.31638C1.76619 0.505005 0.505005 1.76619 0.505005 3.31638V21.6841C0.505005 23.2343 1.76619 24.4954 3.31638 24.4954H21.6841C23.2343 24.4954 24.4954 23.2343 24.4954 21.6841V3.31638C24.4954 1.76619 23.2343 0.505005 21.6841 0.505005ZM22.6212 21.6841C22.6212 22.2008 22.2008 22.6212 21.6841 22.6212H16.3424V14.9836H19.2377L19.7161 12.0785H16.3424V10.0637C16.3424 9.26831 16.9527 8.65801 17.7481 8.65801H19.6692V5.75291H17.7481C15.3621 5.75291 13.4384 7.68574 13.4384 10.0718V12.0785H10.626V14.9836H13.4384V22.6212H3.31638C2.79965 22.6212 2.37926 22.2008 2.37926 21.6841V3.31638C2.37926 2.79965 2.79965 2.37926 3.31638 2.37926H21.6841C22.2008 2.37926 22.6212 2.79965 22.6212 3.31638V21.6841Z"></path>
              <path d="M16.3424 22.6212H15.8424V23.1212H16.3424V22.6212ZM16.3424 14.9836V14.4836H15.8424V14.9836H16.3424ZM19.2377 14.9836V15.4836H19.6621L19.7311 15.0649L19.2377 14.9836ZM19.7161 12.0785L20.2095 12.1598L20.3052 11.5785H19.7161V12.0785ZM16.3424 12.0785H15.8424V12.5785H16.3424V12.0785ZM19.6692 8.65801V9.15801H20.1692V8.65801H19.6692ZM19.6692 5.75291H20.1692V5.25291H19.6692V5.75291ZM13.4384 12.0785V12.5785H13.9384V12.0785H13.4384ZM10.626 12.0785V11.5785H10.126V12.0785H10.626ZM10.626 14.9836H10.126V15.4836H10.626V14.9836ZM13.4384 14.9836H13.9384V14.4836H13.4384V14.9836ZM13.4384 22.6212V23.1212H13.9384V22.6212H13.4384ZM21.6841 0.00500488H3.31638V1.005H21.6841V0.00500488ZM3.31638 0.00500488C1.49005 0.00500488 0.00500488 1.49005 0.00500488 3.31638H1.005C1.005 2.04233 2.04233 1.005 3.31638 1.005V0.00500488ZM0.00500488 3.31638V21.6841H1.005V3.31638H0.00500488ZM0.00500488 21.6841C0.00500488 23.5104 1.49005 24.9954 3.31638 24.9954V23.9954C2.04233 23.9954 1.005 22.9581 1.005 21.6841H0.00500488ZM3.31638 24.9954H21.6841V23.9954H3.31638V24.9954ZM21.6841 24.9954C23.5104 24.9954 24.9954 23.5104 24.9954 21.6841H23.9954C23.9954 22.9581 22.9581 23.9954 21.6841 23.9954V24.9954ZM24.9954 21.6841V3.31638H23.9954V21.6841H24.9954ZM24.9954 3.31638C24.9954 1.49005 23.5104 0.00500488 21.6841 0.00500488V1.005C22.9581 1.005 23.9954 2.04233 23.9954 3.31638H24.9954ZM22.1212 21.6841C22.1212 21.9247 21.9247 22.1212 21.6841 22.1212V23.1212C22.4769 23.1212 23.1212 22.4769 23.1212 21.6841H22.1212ZM21.6841 22.1212H16.3424V23.1212H21.6841V22.1212ZM16.8424 22.6212V14.9836H15.8424V22.6212H16.8424ZM16.3424 15.4836H19.2377V14.4836H16.3424V15.4836ZM19.7311 15.0649L20.2095 12.1598L19.2227 11.9973L18.7443 14.9024L19.7311 15.0649ZM19.7161 11.5785H16.3424V12.5785H19.7161V11.5785ZM16.8424 12.0785V10.0637H15.8424V12.0785H16.8424ZM16.8424 10.0637C16.8424 9.54445 17.2289 9.15801 17.7481 9.15801V8.15801C16.6766 8.15801 15.8424 8.99217 15.8424 10.0637H16.8424ZM17.7481 9.15801H19.6692V8.15801H17.7481V9.15801ZM20.1692 8.65801V5.75291H19.1692V8.65801H20.1692ZM19.6692 5.25291H17.7481V6.25291H19.6692V5.25291ZM17.7481 5.25291C15.0845 5.25291 12.9384 7.41098 12.9384 10.0718H13.9384C13.9384 7.9605 15.6396 6.25291 17.7481 6.25291V5.25291ZM12.9384 10.0718V12.0785H13.9384V10.0718H12.9384ZM13.4384 11.5785H10.626V12.5785H13.4384V11.5785ZM10.126 12.0785V14.9836H11.126V12.0785H10.126ZM10.626 15.4836H13.4384V14.4836H10.626V15.4836ZM12.9384 14.9836V22.6212H13.9384V14.9836H12.9384ZM13.4384 22.1212H3.31638V23.1212H13.4384V22.1212ZM3.31638 22.1212C3.0758 22.1212 2.87926 21.9247 2.87926 21.6841H1.87926C1.87926 22.4769 2.52351 23.1212 3.31638 23.1212V22.1212ZM2.87926 21.6841V3.31638H1.87926V21.6841H2.87926ZM2.87926 3.31638C2.87926 3.0758 3.0758 2.87926 3.31638 2.87926V1.87926C2.52351 1.87926 1.87926 2.52351 1.87926 3.31638H2.87926ZM3.31638 2.87926H21.6841V1.87926H3.31638V2.87926ZM21.6841 2.87926C21.9247 2.87926 22.1212 3.0758 22.1212 3.31638H23.1212C23.1212 2.52351 22.4769 1.87926 21.6841 1.87926V2.87926ZM22.1212 3.31638V21.6841H23.1212V3.31638H22.1212Z"></path>
            </svg>
          </a>
        </li>
        <li>
          <a href="<?php the_field("contacts_social_inst", 229);?>" target="_blank">
            <svg viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M19.4719 7.58145C20.3004 7.58145 20.9719 6.90988 20.9719 6.08145C20.9719 5.25302 20.3004 4.58145 19.4719 4.58145C18.6435 4.58145 17.9719 5.25302 17.9719 6.08145C17.9719 6.90988 18.6435 7.58145 19.4719 7.58145Z"></path>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M6.74536 12.5C6.74536 15.9469 9.54849 18.75 12.9954 18.75C16.4422 18.75 19.2454 15.9469 19.2454 12.5C19.2454 9.05312 16.4422 6.25 12.9954 6.25C9.54849 6.25 6.74536 9.05312 6.74536 12.5ZM9.87036 12.5C9.87036 10.7766 11.2719 9.375 12.9954 9.375C14.7188 9.375 16.1204 10.7766 16.1204 12.5C16.1204 14.2234 14.7188 15.625 12.9954 15.625C11.2719 15.625 9.87036 14.2234 9.87036 12.5Z"></path>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M6.74536 25H19.2454C22.4579 25 25.4954 21.9625 25.4954 18.75V6.25C25.4954 3.0375 22.4579 0 19.2454 0H6.74536C3.53286 0 0.495361 3.0375 0.495361 6.25V18.75C0.495361 21.9625 3.53286 25 6.74536 25ZM3.62036 6.25C3.62036 4.78906 5.28442 3.125 6.74536 3.125H19.2454C20.7063 3.125 22.3704 4.78906 22.3704 6.25V18.75C22.3704 20.2109 20.7063 21.875 19.2454 21.875H6.74536C5.2563 21.875 3.62036 20.2391 3.62036 18.75V6.25Z"></path></svg></a>
        </li>
        <li>
          <a href="<?php the_field("contacts_social_youtube", 229);?>" target="_blank">
            <svg viewBox="0 0 22 25" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18.1173 18.2867H16.7454L16.7518 17.4897C16.7518 17.1356 17.0426 16.8458 17.3979 16.8458H17.4854C17.8415 16.8458 18.1331 17.1356 18.1331 17.4897L18.1173 18.2867ZM12.9712 16.5789C12.6231 16.5789 12.3384 16.8128 12.3384 17.0992V20.975C12.3384 21.2608 12.6231 21.4942 12.9712 21.4942C13.3206 21.4942 13.6056 21.2608 13.6056 20.975V17.0992C13.6056 16.8125 13.3206 16.5789 12.9712 16.5789ZM21.3287 14.4108V21.7842C21.3287 23.5528 19.7951 25 17.9204 25H3.90397C2.02869 25 0.495361 23.5528 0.495361 21.7842V14.4108C0.495361 12.6422 2.02869 11.1947 3.90397 11.1947H17.9204C19.7951 11.1947 21.3287 12.6422 21.3287 14.4108ZM4.83897 22.5847L4.83786 14.8178L6.57536 14.8183V13.6675L1.94369 13.6606V14.7919L3.38953 14.7961V22.5847H4.83897ZM10.0473 15.9747H8.5987V20.1222C8.5987 20.7222 8.63508 21.0222 8.59647 21.1281C8.4787 21.4497 7.94925 21.7914 7.74286 21.1628C7.70786 21.0528 7.7387 20.7208 7.73814 20.1508L7.73231 15.9747H6.29175L6.29619 20.0853C6.29731 20.7153 6.28203 21.185 6.30119 21.3989C6.33647 21.7758 6.32397 22.2153 6.6737 22.4664C7.32536 22.9358 8.57453 22.3964 8.88703 21.7253L8.88425 22.5817L10.0476 22.5831L10.0473 15.9747ZM14.6815 20.7242L14.6784 17.2722C14.6773 15.9567 13.6931 15.1689 12.3573 16.2333L12.3631 13.6669L10.9162 13.6692L10.9093 22.5275L12.0992 22.5103L12.2076 21.9586C13.7279 23.3533 14.6837 22.3975 14.6815 20.7242ZM19.2151 20.2667L18.129 20.2725C18.1284 20.3156 18.1268 20.3653 18.1262 20.4194V21.0256C18.1262 21.35 17.8581 21.6142 17.5326 21.6142H17.3198C16.9937 21.6142 16.7256 21.35 16.7256 21.0256V20.9583V20.2917V19.4314H19.2129V18.4953C19.2129 17.8111 19.1954 17.1272 19.1387 16.7361C18.9606 15.4989 17.224 15.3025 16.3468 15.9358C16.0715 16.1336 15.8612 16.3983 15.739 16.7539C15.6156 17.1097 15.5543 17.5958 15.5543 18.2133V20.2717C15.5548 23.6933 19.7109 23.2097 19.2151 20.2667ZM13.6434 9.09222C13.7181 9.27389 13.8343 9.42111 13.9918 9.53222C14.1473 9.64167 14.3462 9.69667 14.5845 9.69667C14.7934 9.69667 14.9784 9.64028 15.1395 9.52389C15.3001 9.40806 15.4354 9.235 15.5459 9.00417L15.5184 9.5725H17.1331V2.70556H15.862V8.05C15.862 8.33945 15.6237 8.57639 15.3323 8.57639C15.0426 8.57639 14.8034 8.33945 14.8034 8.05V2.70556H13.4768V7.33722C13.4768 7.92722 13.4876 8.32056 13.5051 8.52C13.5231 8.71806 13.5687 8.90806 13.6434 9.09222ZM8.75008 5.21389C8.75008 4.55472 8.80508 4.04 8.91425 3.66889C9.02425 3.29917 9.22175 3.00194 9.50786 2.77778C9.79314 2.5525 10.1584 2.43972 10.6026 2.43972C10.9762 2.43972 11.2962 2.51306 11.5634 2.65667C11.832 2.80111 12.0393 2.98861 12.1829 3.22C12.3293 3.45222 12.4287 3.69083 12.4818 3.935C12.5359 4.1825 12.5626 4.55583 12.5626 5.05944V6.79611C12.5626 7.43306 12.537 7.90167 12.4873 8.19917C12.4381 8.4975 12.3326 8.77417 12.169 9.03361C12.0079 9.29028 11.7998 9.48222 11.5476 9.60472C11.2926 9.72833 11.0009 9.78889 10.6715 9.78889C10.3034 9.78889 9.99342 9.73806 9.73786 9.63194C9.48147 9.52639 9.28342 9.36722 9.14231 9.15583C8.99981 8.94417 8.89953 8.68639 8.83897 8.38583C8.77814 8.08556 8.74925 7.63389 8.74925 7.03194L8.75008 5.21389ZM10.0148 7.94167C10.0148 8.33056 10.3043 8.64806 10.6568 8.64806C11.0095 8.64806 11.2979 8.33056 11.2979 7.94167V4.28611C11.2979 3.89778 11.0095 3.58028 10.6568 3.58028C10.3043 3.58028 10.0148 3.89778 10.0148 4.28611V7.94167ZM5.54592 9.7875H7.06925L7.07092 4.52083L8.87092 0.00916667H7.20481L6.24786 3.36028L5.27731 0H3.62842L5.54342 4.52333L5.54592 9.7875Z"></path>
            </svg>
          </a>
        </li>
    </ul>
  </section>

<?php 
  $org = get_field("seven_screen_image");
  $partners = get_field("eight_screen_partners");
  $media_partners = get_field("nine_screen_image");
?>

<section class="bg_footer">
    <div class="musician_footer">
      <img src="<?php echo get_template_directory_uri();?>/images/notes/about_7.png" alt="">
      <img src="<?php echo get_template_directory_uri();?>/images/notes/about_4.png" alt="">
      <img src="<?php echo get_template_directory_uri();?>/images/notes/about_8.png" alt="">
      <img src="<?php echo get_template_directory_uri();?>/images/notes/about_9.png" alt="">
      <img src="<?php echo get_template_directory_uri();?>/images/notes/about_7.png" alt="">
      <img src="<?php echo get_template_directory_uri();?>/images/notes/about_5.png" alt="">
    </div>
    <div class="home_organizer__block">
        <h2><?php the_field("seven_screen_title");?></h2>
        <div class="container">
            <a href="<?php the_field("seven_screen_link");?>" target="_blank"><img src="<?php echo $org['url'];?>" alt="<?php echo $org['url'];?>"></a>
        </div>
    </div>
      

    <div class="home_partners__block">
        <h2><?php the_field("eight_screen_title");?></h2>
        <div class="container">
            <div class="partners_box__slider">
 
              <?php 

                foreach($partners as $partner){
                  if(!empty($partner['eight_screen_partners_title'])){
                ?>
                  <div class="partners_box__item">
                      <a href="<?php echo $partner['eight_screen_partners_link'];?>" rel="nofollow" target="_blank">
                        <div class="partners_box__img">
                            <img src="<?php echo $partner['eight_screen_partners_title']['url'];?>" alt="<?php echo $partner['eight_screen_partners_title']['alt'];?>">
                        </div>
                        <p><?php echo $partner['eight_screen_partners_text'];?></p>
                      </a>
                  </div>
                  <?}?>
              <?}?>


            </div>
            <div class="partners_box__nav">
              <?php 
                $count = 0;
              
                  for($i = 0; $i < count($partners); $i++){
                    if($i % 2 == 0){
                      $count++;
                ?>
                <p><?php echo $count;?></p>
                <?}?>
              <?}?>
            </div>
        </div>
    </div>

    <div class="home_media__block">
        <h2><?php the_field("nine_screen_title");?></h2>
        <div class="container">
            <div class="media_box__slider">
                <?php foreach($media_partners as $media){
                  if(!empty($media)){                    
                ?>

                <div class="media_box__item">
                    <div class="media_box__img">
                        <img src="<?php echo $media['url'];?>" alt="<?php echo $media['alt'];?>">
                    </div>
                </div>
              <?}?>
              <?}?>

            </div>
            <div class="media_box__nav">
              <?php
                $count_media = 0;
                for($j = 0; $j < count($media_partners); $j++){
                   if($j % 2 == 0){
                     $count_media++;
                   ?>
                   <p><?php echo $count_media;?></p>
                <?}?>
              <?}?>
            </div>
            <div class="btn_jazz">
                <a href="#" data-toggle="modal" data-target="#modal_partners"><?php the_field("nine_screen_btn_name");?></a>
            </div>
            <div class="media_download">
               <?php
                 $document = get_field("nine_screen_link_file");
               ?>
                <a href="<?php echo $document['url'];?>" download=""><?php the_field("nine_screen_link_name");?></a>
            </div>
        </div>
    </div>


<?php
get_footer();
?>

</section>

<!-- modal block -->

<div class="modal fade" id="buy_ticket" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h3>
          <?php 
            if($lang == 'ru'){
              echo 'Зрительный зал';
            }else if($lang == 'en'){
              echo 'Seats on a podium';
            }else if($lang == 'ua'){
              echo 'Глядацький зал';
            }
          ?>

        </h3>
          <div class="buy_ticket__box">
                <div class="ticket_box__item">
                    <p>
                      <?php 
                        if($lang == 'ru'){
                          echo '20 июля';
                        }else if($lang == 'en'){
                          echo '20 July';
                        }else if($lang == 'ua'){
                          echo '20 липня';
                        }
                      ?>

                    </p>
                    <div class="btn_jazz">
                      <a href="<?php the_field("ticket_tribune_btn_link", 416);?>" target="_blank">
                      <?php
                        if($lang == 'ru'){
                          the_field("ticket_tribune_btn_name", 416);
                        }else if($lang == 'en'){
                          the_field("ticket_tribune_btn_name", 668);
                        }else if($lang == 'ua'){
                          the_field("ticket_tribune_btn_name", 670);
                        }
                        
                      
                      ?>
                    </a>
                    </div>
                </div>
                <div class="ticket_box__item">
                    <p>
                      <?php 
                        if($lang == 'ru'){
                          echo '21 июля';
                        }else if($lang == 'en'){
                          echo '21 July';
                        }else if($lang == 'ua'){
                          echo '21 липня';
                        }
                      
                      ?>
                    
                    </p>
                    <div class="btn_jazz">
                      <a href="<?php the_field("ticket_tribune_btn_link2", 416);?>" target="_blank">
                        <?php
                          if($lang == 'ru'){
                            the_field("ticket_tribune_btn_name", 416);
                          }else if($lang == 'en'){
                            the_field("ticket_tribune_btn_name", 668);
                          }else if($lang == 'ua'){
                            the_field("ticket_tribune_btn_name", 670);
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


<!-- Modal -->
<div class="modal fade modal_partners" id="modal_partners" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php 
            if($lang == 'ru'){
              echo do_shortcode('[contact-form-7 id="563" title="Форма Стать партнером"]');
            }else if($lang == 'en'){
              echo do_shortcode('[contact-form-7 id="819" title="Форма Стать партнером - (EN)"]');
            }else if($lang == 'ua'){
              echo do_shortcode('[contact-form-7 id="820" title="Форма Стать партнером - (UA)"]');
            }
        ?>
      </div>

    </div>
  </div>
</div>

<!-- register modal -->
<div class="modal fade" id="reg_ticket" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h3>
          <?php 
            if($lang == 'ru'){
              echo 'Фан-зона';
            }else if($lang == 'en'){
              echo 'Fan zone';
            }else if($lang == 'ua'){
              echo 'Фан-зона';
            }
        
          ?>
        </h3>
          <div class="buy_ticket__box">
                <div class="ticket_box__item">
                    <p>
                      <?php 
                        if($lang == 'ru'){
                          echo '20 июля';
                        }else if($lang == 'en'){
                          echo '20 July';
                        }else if($lang == 'ua'){
                          echo '20 липня';
                        }
                      ?>
                    </p>
                    <div class="btn_jazz reg_btn">
                      <a href="" data-toggle="modal" data-target="#modal_reg_1">
                        <?php 
                          if($lang == 'ru'){
                            echo 'Зарегистрироваться';
                          }else if($lang == 'ua'){
                            echo 'Зареєструватися';
                          }else if($lang == 'en'){
                            echo 'register';
                          }
                        ?>

                      </a>
                    </div>
                </div>
                <div class="ticket_box__item">
                    <p>
                      <?php 
                        if($lang == 'ru'){
                          echo '21 июля';
                        }else if($lang == 'en'){
                          echo '21 July';
                        }else if($lang == 'ua'){
                          echo '21 липня';
                        }
                      ?>
                    </p>
                    <div class="btn_jazz reg_btn">
                      <a  href="" data-toggle="modal" data-target="#modal_reg_2">
                      <?php 
                          if($lang == 'ru'){
                            echo 'Зарегистрироваться';
                          }else if($lang == 'ua'){
                            echo 'Зареєструватися';
                          }else if($lang == 'en'){
                            echo 'register';
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

<!-- end register modal -->


<!-- 1-st form -->
<div class="modal fade modal_partners" id="modal_reg_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php 
            if($lang == 'ru'){
              echo do_shortcode('[contact-form-7 id="925" title="Форма Регистрации - 3 день"]');
            }else if($lang == 'en'){
              echo do_shortcode('[contact-form-7 id="929" title="Форма Регистрации - 3 день - (EN)"]');
            }else if($lang == 'ua'){
              echo do_shortcode('[contact-form-7 id="930" title="Форма Регистрации - 3 день - (UA)"]');
            }
        ?>
      </div>

    </div>
  </div>
</div>
<!-- end 1-st form -->

<!-- 2 form -->
<div class="modal fade modal_partners" id="modal_reg_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php 
            if($lang == 'ru'){
              echo do_shortcode('[contact-form-7 id="1157" title="Форма Регистрации - 4 день"]');
            }else if($lang == 'en'){
              echo do_shortcode('[contact-form-7 id="1160" title="Форма Регистрации - 4 день - (EN)"]');
            }else if($lang == 'ua'){
              echo do_shortcode('[contact-form-7 id="1161" title="Форма Регистрации - 4 день - (UA)"]');
            }
        ?>
      </div>

    </div>
  </div>
</div>
<!-- end 2 form -->

<!-- end modal -->
