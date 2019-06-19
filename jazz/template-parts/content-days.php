<?php 

/*Template Name: Дни меропрития*/

    get_header();
    $lang = pll_current_language();
?>

<section class="bg_footer event_days single_mebmer">
    <div class="event_days__title">
        <h2>
            <?php 
                if($lang == 'ru'){
                    the_field("event_day_title", 178);
                }else if($lang == 'en'){
                    the_field("event_day_title", 610);
                }else if($lang == 'ua'){
                    the_field("event_day_title", 612);
                }
            ?>
        </h2>
    </div>
    <div class="event_days__box">
        <div class="container">
            <!-- 1-й день -->
            <?php
                $days_arr = array('post_type' => 'days', 'numberposts' => -1, 'order' => 'ASC' );
                $days = get_posts($days_arr);

                foreach ($days as $day) {?>

                <div class="event_box__item">
                    <div class="event_box__day">
                        <p><?php echo $day->post_title;?></p>
                        <p><?php the_field("schedule_day", $day->ID);?></p>
                    </div>

                    <div class="event_box__month">
                        <p><?php the_field("schedule_month", $day->ID);?></p>
                        <p><?php the_field("schedule_location", $day->ID);?></p>
                    </div>

                    <div class="events_schedule">
                        <?php 
                            $schedule_reg = get_field("schedule_reg", $day->ID);
                            if(!empty($schedule_reg)){
                            foreach ($schedule_reg as $reg) {?>
      
                            <div class="events_schedule__block">
                                <div class="schedule_box__time">
                                    <p><?php echo $reg['reg_time'];?></p>
                                </div>

                                <div class="schedule_box__text">
                                    <p><?php echo $reg['reg_name'];?></p>
                                    <p><?php echo $reg['reg_text'];?></p>
                                </div>
                            </div>
                         <?}?>
                        <?}?>
                    </div>
                    <div class="events_box__ticket">
                        <?php 
                            $check_register = get_field("schedule_check_register", $day->ID);
                            $check_map = get_field("schedule_check_map", $day->ID);
                            if($check_register){?>
                                <div class="btn_jazz">
                                    <a href="<?php the_field("schedule_reg_link", $day->ID);?>">
                                    <?php 
                                        if($lang == 'ru'){
                                            echo 'Билеты';
                                        }else if($lang == 'en'){
                                            echo 'Tickets';
                                        }else if($lang == 'ua'){
                                            echo 'Квитки';
                                        }
                                    ?>
                                </a>
                                </div>
                           <?}else{?>
                                <p>
                                    <?php 
                                        if($lang == 'ru'){
                                            echo 'Без регистрации';
                                        }else if($lang == 'en'){
                                            echo 'Without registering';
                                        }else if($lang == 'ua'){
                                            echo 'Без реєстрації';
                                        }
                                    ?>
                                </p>
                            <?}?>
                            <?php if($check_map){?>
                                <a href="<?php the_field("schedule_map" ,$day->ID);?>" class="events_map" target="_blank">
                                <?php 
                                    if($lang == 'ru'){
                                        echo 'Cмотреть карту';
                                    }else if($lang == 'en'){
                                        echo 'View map';
                                    }else if($lang == 'ua'){
                                        echo 'Дивитися карту';
                                    }
                                ?>
                                
                                </a>
                            <?}else{?>
                                <a href="#event_map" class="events_map slow_btn">
                                <?php
                                    if($lang == 'ru'){
                                        echo 'Cмотреть карту';
                                    }else if($lang == 'en'){
                                        echo 'View map';
                                    }else if($lang == 'ua'){
                                        echo 'Дивитися карту';
                                    }
                                ?> 
                                </a>
                            <?}?>
                    </div>
                </div>
               <?}?>
        </div>
    </div>

    <div class="event_days__map" id="event_map">
        <div class="container">
            <?php 
                if($lang == 'ru'){
                    $event_map = get_field("event_day_map_image", 178);
                }else if($lang == 'en'){
                    $event_map = get_field("event_day_map_image", 610);
                }else if($lang == 'ua'){
                    $event_map = get_field("event_day_map_image", 612);
                }
            ?>
            <h3>
                <?php 
                    if($lang == 'ru'){
                        the_field("event_day_map_title", 178);
                    }else if($lang == 'en'){
                        the_field("event_day_map_title", 610);
                    }else if($lang == 'ua'){
                        the_field("event_day_map_title", 612);
                    }
                ?>
            </h3>
            <div class="days_map">
                <a href="<?php echo $event_map['url'];?>" data-fancybox="images">
                    <img src="<?php echo $event_map['url'];?>" alt="<?php echo $event_map['alt'];?>">
                </a>
            </div>
        </div>
    </div>
    <?php
    get_footer();
    ?>
</section>