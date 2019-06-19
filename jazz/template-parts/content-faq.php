<?php 
/*Template Name: Часто задаваемые вопросы*/
    get_header();
?>


<section class="bg_footer top faq_page">
    <div class="faq_block">
        <div class="container">
            <h2><?php the_title();?></h2>
            <div class="accardion_box">

            <?php 
                $question_block = get_field("faq_question_block");
                foreach($question_block as $question){?>

                    <div class="card_box">
                        <div class="card_line__box">
                            <span></span>
                        </div>
                        <div class="card_item">
                            <div class="card_box__title">
                                <p><?php echo $question['faq_question'];?></p>
                            </div>
                            <div class="card_body">
                                <p><?php echo $question['faq_answer'];?></p>
                            </div>
                        </div>
                    </div>
                <?}?>


            </div>
            <?php 
        get_footer();
    ?>
</section>