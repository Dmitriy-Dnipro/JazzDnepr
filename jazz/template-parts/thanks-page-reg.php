<?php 
    /*Template Name: Страница благодраности регистрации*/
    get_header();

    $lang = pll_current_language();
?>

<section class="thanks_page">
    <div class="container">
        <div class="thanks_block">
            <div class="thanks_icon">
                <svg width="120" height="120" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M35.4 48.6L27 57L54 84L114 24L105.6 15.6L54 67.2L35.4 48.6ZM108 60C108 86.4 86.4 108 60 108C33.6 108 12 86.4 12 60C12 33.6 33.6 12 60 12C64.8 12 69 12.6 73.2 13.8L82.8002 4.2C75.6 1.8 67.8 0 60 0C27 0 0 27 0 60C0 93 27 120 60 120C93 120 120 93 120 60H108Z" fill="#0088EE"/>
                </svg>
            </div>
            <div class="thanks_text">
                <?php if($lang == 'ru'){?>
                    <p>Спасибо за Вашу регистрацию</p>
                    <p></p>
                    <p>На указанный e-mail было отправлено письмо с электронным билетом. Электронный билет необходимо будет предъявить на входе на фестиваль  в распечатанном или электронном виде. Не забудьте проверить папку СПАМ, если подтверждения о регистрации нет в папке Входящие.</p>
                <?}else if($lang == 'en'){?>
                    <p>Thank you for your registration</p>
                    <p></p>
                    <p>A letter with a ticket was sent to your e-mail address. A ticket needs to be presented at the entrance to the festival in printed or electronic form. Do not forget to check your SPAM folder if you don’t have a confirmation e-mail in your Inbox.</p>
                <?}else if($lang == 'ua'){?>
                    <p>Дякуємо за Вашу реєстрацію</p>
                    <p></p>
                    <p>На вказаний e-mail було відправлено лист з електронний квиток. Квиток необхідно буде пред'явити на вході на фестиваль в роздрукованому або електронному вигляді. Не забудьте перевірити папку СПАМ, якщо підтвердження про реєстрацію немає в папці Вхідні.</p>
                <?}?>
            </div>
        </div>
    </div>
</section>

<?php 
    get_footer();
?>