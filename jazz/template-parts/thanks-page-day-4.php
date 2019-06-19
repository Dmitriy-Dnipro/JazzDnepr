<?php 
    /*Template Name: Страница благодраности 4 день*/
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
                    <p>Спасибо за Вашу регистрацию!</p>
                    <p></p>
                    <p>Для получения уникального билета, предоставляющего возможность посетить 21.07.2019 фан-зону фестиваля перейдите пожалуйста по ссылке <a href="https://tickets.karabas.com/PublicApi/TicketWidgetSvg.aspx?__uid=M1ctJ1VdzNqOZI1v0kh0RA&event=1614861813&c=eee&priceRange=1&lang=ru&replaceFlags=1&noredirect=1" target="_blank">регистрация 21.07.2019</a></p>
                    <p>Внимание! После авторизации на сайте Karabas по этой ссылке стоимость билета - <span>0</span> грн.</p>
                <?}else if($lang == 'en'){?>
                    <p>Thank you for your registration!</p>
                    <p></p>
                    <p>To get the unique ticket that allows you to visit the fan-zone on 21.07, please, follow the link <a href="https://tickets.karabas.com/PublicApi/TicketWidgetSvg.aspx?__uid=M1ctJ1VdzNqOZI1v0kh0RA&event=1614861813&c=eee&priceRange=1&lang=ru&replaceFlags=1&noredirect=1" target="_blank">register 21.07.2019</a></p>
                    <p>Attention! After authorization on the site Karabas at this link ticket price - <span>0</span> UAH.</p>
                <?}else if($lang == 'ua'){?>
                    <p>Дякуємо за Вашу реєстрацію!</p>
                    <p></p>
                    <p>Для отримання унікального квитка, який надає можливість відвідати 21.07.2019 фан-зону фестивалю перейдіть будь ласка за посиланням <a href="https://tickets.karabas.com/PublicApi/TicketWidgetSvg.aspx?__uid=M1ctJ1VdzNqOZI1v0kh0RA&event=1614861813&c=eee&priceRange=1&lang=ru&replaceFlags=1&noredirect=1" target="_blank">реєстрація 21.07.2019</a></p>
                    <p>Увага! Після авторизації на сайті Karabas за цим посиланням вартість квитка - <span>0</span> грн.</p>
                <?}?>
            </div>
        </div>
    </div>
</section>

<?php 
    get_footer();
?>