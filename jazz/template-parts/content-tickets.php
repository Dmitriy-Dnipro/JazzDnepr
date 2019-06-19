<?php 
    /*Template Name: Страница билетов*/
    get_header();

    $lang = pll_current_language();
?>


<?php
  $main_banner = get_field("first_screen_image");

  if($lang == 'ru'){
    $orderVideo_1 = get_field("video_order_1", 5);
    $orderVideo_2 = get_field("video_order_2", 5);
    $orderVideo_3 = get_field("video_order_3", 5);
    $orderPhoto_1 = get_field("photo_order_1", 5);
    $orderPhoto_2 = get_field("photo_order_2", 5);
    $orderPhoto_3 = get_field("photo_order_3", 5);
  }else if($lang == 'en'){
    $orderVideo_1 = get_field("video_order_1", 606);
    $orderVideo_2 = get_field("video_order_2", 606);
    $orderVideo_3 = get_field("video_order_3", 606);
    $orderPhoto_1 = get_field("photo_order_1", 606);
    $orderPhoto_2 = get_field("photo_order_2", 606);
    $orderPhoto_3 = get_field("photo_order_3", 606);
  }else if($lang == 'ua'){
    $orderVideo_1 = get_field("video_order_1", 608);
    $orderVideo_2 = get_field("video_order_2", 608);
    $orderVideo_3 = get_field("video_order_3", 608);
    $orderPhoto_1 = get_field("photo_order_1", 608);
    $orderPhoto_2 = get_field("photo_order_2", 608);
    $orderPhoto_3 = get_field("photo_order_3", 608);
  }

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
</style>

<section class="bg_footer top ticket_page">

<div class="ticke_block">
    <div class="container">
        <h2><?php the_title();?></h2>
        <div class="ticket_box">
            <!-- <div class="ticket_item">
                <div class="ticket_item__title">
                    <p><?php the_field("ticket_fun_title");?></p>
                    <p><?php the_field("ticket_fun_subtitle");?></p>
                    <div class="ticket_item_title__layer"></div>
                </div>
                <div class="ticket_item__list">
                    <?php the_field("ticket_fun_list");?>
                </div> 
                <div class="btn_jazz">
                    <a href="<?php the_field("ticket_fun_btn_link");?>" data-toggle="modal" data-target="#reg_ticket"><?php the_field("ticket_fun_btn_name");?></a>
                </div>  
            </div> -->

            <div class="ticket_item">
                <div class="ticket_item__title">
                    <p><?php the_field("ticket_tribune_title");?></p>
                    <p><?php the_field("ticket_tribune_subtitle");?></p>
                    <div class="ticket_item_title__layer"></div>
                </div>
                <div class="ticket_item__list">
                    <?php the_field("ticket_tribune_list");?>
                </div> 
                <div class="btn_jazz">
                    <a href="javascript:void(0);" data-toggle="modal" data-target="#buy_ticket"><?php the_field("ticket_tribune_btn_name");?></a>
                </div>  
            </div>

        <?php 
          if($lang == 'en'){?>
              <div class="ticket_item">
                <div class="ticket_item__title">
                    <p>Camping</p>
                    <p>tent is not included in the price</p>
                    <div class="ticket_item_title__layer"></div>
                </div>
                <div class="ticket_item__list">
                    <ul>
                      <li>resting at nature during 3 days</li>
                      <li>entrance to the fanzone</li>
                      <li>use of the camping  infrastructure and facilities </li>
                      <li>security services are included</li>
                    </ul>
                </div> 
                <div class="btn_jazz">
                    <a href="https://dnipro.karabas.com/jazz-dnepr-1" target="_blank">buy</a>
                </div>  
            </div>
          <?}if($lang == 'ru'){?>
            <div class="ticket_item">
                <div class="ticket_item__title">
                    <p>Кемпинг</p>
                    <p>палатка в стоимость не входит</p>
                    <div class="ticket_item_title__layer"></div>
                </div>
                <div class="ticket_item__list">
                    <ul>
                      <li>отдых на природе 3 дня</li>
                      <li>посещение фанзоны включено</li>
                      <li>пользование инфраструктурой кемпинга</li>
                      <li>услуги охраны территории</li>
                    </ul>
                </div> 
                <div class="btn_jazz">
                    <a href="https://dnipro.karabas.com/jazz-dnepr-1" target="_blank">Купить</a>
                </div>  
            </div>
          <?}if($lang == 'ua'){?>
            <div class="ticket_item">
                <div class="ticket_item__title">
                    <p>Кемпінг</p>
                    <p>намет у вартiсть не входить</p>
                    <div class="ticket_item_title__layer"></div>
                </div>
                <div class="ticket_item__list">
                    <ul>
                      <li>вiдпочинок на природi 3 днi</li>
                      <li>вiдвiдування фанзони</li>
                      <li>користування iнфраструктурою кемпiнга</li>
                      <li>послуги охорони територiï</li>
                    </ul>
                </div> 
                <div class="btn_jazz">
                    <a href="https://dnipro.karabas.com/jazz-dnepr-1" target="_blank">Придбати</a>
                </div>  
            </div>
          <?}?>
        </div>
    </div>
</div>

<div class="home_archive ticket_archive">
    <h2>
      <?php 
        if($lang == 'ru'){
          echo 'Как это было';
        }else if($lang == 'en'){
          echo 'How it was';
        }else if($lang == 'ru'){
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
                    role="tab" aria-controls="photo-2018" aria-selected="true">
                    <?php 
                        if($lang == 'ru'){
                          the_field("photo_year_1", 5);
                        }else if($lang == 'en'){
                          the_field("photo_year_1", 606);
                        }else if($lang == 'ua'){
                          the_field("photo_year_1", 608);
                        }
                    ?>
                  </a>
                  <a class="nav-item nav-link <?php if($orderPhoto_2 == 1 ){echo 'active';}?>" id="photo-2017-tab" data-toggle="tab" href="#photo-2017" role="tab"
                    aria-controls="photo-2017" aria-selected="false">
                    <?php 
                      if($lang == 'ru'){
                        the_field("photo_year_2", 5);
                      }else if($lang == 'en'){
                        the_field("photo_year_2", 606);
                      }else if($lang == 'ua'){
                        the_field("photo_year_2", 608);
                      }
                    ?>
                  </a>
                  <a class="nav-item nav-link <?php if($orderPhoto_3 == 1 ){echo 'active';}?>" id="photo-2016-tab" data-toggle="tab" href="#photo-2016" role="tab"
                    aria-controls="photo-2016" aria-selected="false">
                    <?php
                      if($lang == 'ru'){
                        the_field("photo_year_3", 5);
                      }else if($lang == 'en'){
                        the_field("photo_year_3", 606);
                      }else if($lang == 'ua'){
                        the_field("photo_year_3", 608);
                      }
                     ?>
                    </a>
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
                                  if($lang == 'ru'){
                                    $gallery_1 = get_field("photo_gallery_1", 5);
                                  }else if($lang == 'en'){
                                    $gallery_1 = get_field("photo_gallery_1", 606);
                                  }else if($lang == 'ua'){
                                    $gallery_1 = get_field("photo_gallery_1", 608);
                                  }

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
                              <?php 
                                if($lang == 'ru'){
                                  the_field("photo_year_1", 5);
                                }else if($lang == 'en'){
                                  the_field("photo_year_1", 606);
                                }else if($lang == 'ua'){
                                  the_field("photo_year_1", 608);
                                }

                              ?>
                            </h5>
                              <p>
                              <?php
                                  if($lang == 'ru'){
                                    the_field("photo_text_1", 5);
                                  }else if($lang == 'en'){
                                    the_field("photo_text_1", 606);
                                  }else if($lang == 'ua'){
                                    the_field("photo_text_1", 608);
                                  }
                                
                              ?>
                              </p>
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
                                  if($lang == 'ru'){
                                    $gallery_2 = get_field("photo_gallery_2", 5);
                                  }else if($lang == 'en'){
                                    $gallery_2 = get_field("photo_gallery_2", 606);
                                  }else if($lang == 'ua'){
                                    $gallery_2 = get_field("photo_gallery_2", 608);
                                  }
                                  

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
                                  <?php 
                                    if($lang == 'ru'){
                                      the_field("photo_year_2", 5);
                                    }else if($lang == 'en'){
                                      the_field("photo_year_2", 606);
                                    }else if($lang == 'ua'){
                                      the_field("photo_year_2", 608);
                                    }
                                    ?>
                                </h5>
                                <p>
                                  <?php
                                    if($lang == 'ru'){
                                      the_field("photo_text_2", 5);
                                    }else if($lang == 'en'){
                                      the_field("photo_text_2", 606);
                                    }else if($lang == 'ua'){
                                      the_field("photo_text_2", 608);
                                    }
                                  ?>
                                </p>
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
                                  if($lang == 'ru'){
                                    $gallery_3 = get_field("photo_gallery_3", 5);
                                  }else if($lang == 'en'){
                                    $gallery_3 = get_field("photo_gallery_3", 606);
                                  }else if($lang == 'ua'){
                                    $gallery_3 = get_field("photo_gallery_3", 608);
                                  }

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
                                  <?php 
                                    if($lang == 'ru'){
                                      the_field("photo_year_3", 5);
                                    }else if($lang == 'en'){
                                      the_field("photo_year_3", 606);
                                    }else if($lang == 'ua'){
                                      the_field("photo_year_3", 608);
                                    }
                                  ?>
                                </h5>
                                  <p>
                                    <?php 
                                    if($lang == 'ru'){
                                      the_field("photo_text_3", 5);
                                    }else if($lang == 'en'){
                                      the_field("photo_text_3", 606);
                                    }else if($lang == 'ua'){
                                      the_field("photo_text_3", 608);
                                    }
                                    ?>
                                </p>
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
                    role="tab" aria-controls="video-2018" aria-selected="true">
                    <?php 
                      if($lang == 'ru'){
                        the_field("video_year_1", 5);
                      }else if($lang == 'en'){
                        the_field("video_year_1", 606);
                      }else if($lang == 'ua'){
                        the_field("video_year_1", 608);
                      }
                      
                    ?>
                  </a>
                  <a class="nav-item nav-link <?php if($orderVideo_2 == 1 ){echo 'active';}?>" id="video-2017-tab" data-toggle="tab" href="#video-2017" role="tab"
                    aria-controls="video-2017" aria-selected="false">
                    <?php 
                      if($lang == 'ru'){
                        the_field("video_year_2", 5);
                      }else if($lang == 'en'){
                        the_field("video_year_2", 606);
                      }else if($lang == 'ua'){
                        the_field("video_year_2", 608);
                      }
                    ?>
                  </a>
                  <a class="nav-item nav-link <?php if($orderVideo_3 == 1){echo 'active';}?>" id="video-2016-tab" data-toggle="tab" href="#video-2016" role="tab"
                    aria-controls="video-2016" aria-selected="false">
                    <?php 
                      if($lang == 'ru'){
                        the_field("video_year_3", 5);
                      }else if($lang == 'en'){
                        the_field("video_year_3", 606);
                      }else if($lang == 'ua'){
                        the_field("video_year_3", 608);
                      }
                    ?>
                    </a>
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
                                    $video_image_1 = get_field("video_preview_1", 5);
                                  ?>
                                  <a href="<?php the_field("video_1", 5);?>" data-fancybox>
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
                                  <?php 
                                  the_field("video_year_1", 5);
                                  ?>
                                </h5>
                                <p>
                                  <?php 
                                    if($lang == 'ru'){
                                      the_field("video_text_1", 5);
                                    }else if($lang == 'en'){
                                      the_field("video_text_1", 606);
                                    }else if($lang == 'ua'){
                                      the_field("video_text_1", 608);
                                    }
                                  ?>
                                </p>
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
                                      $video_image_2 = get_field("video_preview_2", 5);
                                    ?>
                                    <a href="<?php the_field("video_2", 5);?>" data-fancybox>
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
                                  <?php the_field("video_year_2", 5);?>
                                </h5>
                                <p>
                                  <?php 
                                    if($lang == 'ru'){
                                      the_field("video_text_2", 5);
                                    }else if($lang == 'en'){
                                      the_field("video_text_2", 606);
                                    }else if($lang == 'ua'){
                                      the_field("video_text_2", 608);
                                    }
                                  ?>
                              </p>
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
                                    $video_image_3 = get_field("video_preview_3", 5);
                                  ?>
                                  <a href="<?php the_field("video_3", 5);?>" data-fancybox>
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
                                  <?php the_field("video_year_3", 5);?>
                                </h5>
                                <p>
                                  <?php 
                                    if($lang == 'ru'){
                                      the_field("video_text_3", 5);
                                    }else if($lang == 'en'){
                                      the_field("video_text_3", 606);
                                    }else if($lang == 'ua'){
                                      the_field("video_text_3", 608);
                                    }
                                  
                                  ?>
                                </p>

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
                      <a href="<?php the_field("ticket_tribune_btn_link");?>" target="_blank"><?php the_field("ticket_tribune_btn_name");?></a>
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
                      <a href="<?php the_field("ticket_tribune_btn_link2");?>" target="_blank"><?php the_field("ticket_tribune_btn_name");?></a>
                    </div>
                </div>
          </div>
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
                            echo 'реєстрація';
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
                            echo 'реєстрація';
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


