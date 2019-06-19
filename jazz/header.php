<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Jazz
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>


	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-138453043-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-138453043-1');
	</script>

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-5NWNFFJ');</script>
	<!-- End Google Tag Manager -->


	<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '2592010834159661');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=2592010834159661&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

</head>

<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5NWNFFJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<?php
	$lang = pll_current_language();
?>

<script>
jQuery(window).load(function () { 
    if( jQuery('.wpcf7').length ){ 
        jQuery('.grecaptcha-badge').addClass('hide');
    }
});
</script>
<!-- <div id="preloader">
	<div class="loader"></div>
</div> -->

<?php 
	    $check_time = get_field("home_check_timers", 5);
?>

<?php if($check_time){?>
		<style>
			.footer_menu .footer_nav .menu-item-534{
				display: none;
			}

			.footer_menu .footer_nav .menu-item-672{
				display: none;
			}
			.footer_menu .footer_nav .menu-item-691{
				display: none;
			}
		</style>
<?}else{?>
	<style>
			.footer_menu .footer_nav .menu-item-534{
				display: block;
			}

			.footer_menu .footer_nav .menu-item-672{
				display: block;
			}
			.footer_menu .footer_nav .menu-item-691{
				display: block;
			}
		</style>
<?}?>


	<header class="header_main">
		<div class="container menu_container">
			<div class="header_box">
				<div class="header_logo">
					<!-- <?php if(is_front_page()){
                       $logo_img = '';
                       if($custom_logo_id = get_theme_mod('custom_logo')){
                        $logo_img = wp_get_attachment_image( $custom_logo_id, 'full', false, array(
                            'class'    => 'custom-logo',
                            'itemprop' => 'logo',
                        ) );

                        echo $logo_img;
                       } 
                    }else{
                        the_custom_logo( $blog_id ); 
                    }
                	?> -->
									<?php 
										if(is_front_page()){?>
											<img src="<?php echo get_template_directory_uri()?>/images/logo.svg" alt="logo">
										<?}else{?>
											<a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri()?>/images/logo.svg" alt="logo"></a>
										<?}?>
				</div>
				<div class="header_social">
					<ul>
						<li>
							<a href="<?php the_field("contacts_social_fb", 229);?>" target="_blank">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect x="1.02195" y="0.9" width="21.6" height="21.6" rx="2.7" stroke="#2C4984" stroke-width="1.8"/>
									<path d="M15.2956 13.5694V21.818H12.1592V13.5694H9.12183V10.4319H12.1592V8.26473C12.1592 5.68773 14.2368 3.60028 16.8138 3.60028H18.8886V6.73778H16.8138C15.9547 6.73778 15.2956 7.39691 15.2956 8.25593V10.4319H18.9392L18.4225 13.5694H15.2956Z" fill="#2C4984"/>
								</svg>
							</a>
						</li>
						<li>
							<a href="<?php the_field("contacts_social_inst", 229);?>" target="_blank">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect x="1.42148" y="0.9" width="21.6" height="21.6" rx="2.7" stroke="#2C4984" stroke-width="1.8"/>
									<circle cx="12.2219" cy="11.7004" r="5.4" stroke="#2C4984" stroke-width="1.8"/>
									<circle cx="19.4215" cy="4.50059" r="0.9" fill="#2C4984"/>
								</svg>
								</a>
						</li>
						<li>
							<a href="<?php the_field("contacts_social_youtube", 229);?>" target="_blank">
								<svg width="21" height="24" viewBox="0 0 21 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M17.416 17.1163H16.1319L16.1379 16.3704C16.1379 16.0389 16.4101 15.7677 16.7426 15.7677H16.8245C17.1578 15.7677 17.4308 16.0389 17.4308 16.3704L17.416 17.1163ZM12.5993 15.5178C12.2735 15.5178 12.007 15.7368 12.007 16.0048V19.6326C12.007 19.9001 12.2735 20.1185 12.5993 20.1185C12.9263 20.1185 13.1931 19.9001 13.1931 19.6326V16.0048C13.1931 15.7365 12.9263 15.5178 12.5993 15.5178ZM20.4219 13.4885V20.39C20.4219 22.0454 18.9864 23.4 17.2317 23.4H4.11234C2.35707 23.4 0.921875 22.0454 0.921875 20.39V13.4885C0.921875 11.8331 2.35707 10.4783 4.11234 10.4783H17.2317C18.9864 10.4783 20.4219 11.8331 20.4219 13.4885ZM4.98749 21.1393L4.98645 13.8694L6.61276 13.87V12.7928L2.27751 12.7863V13.8453L3.63082 13.8492V21.1393H4.98749ZM9.8625 14.9523H8.5066V18.8344C8.5066 19.396 8.54066 19.6768 8.50452 19.7759C8.39428 20.0769 7.89872 20.3967 7.70553 19.8084C7.67277 19.7054 7.70164 19.3947 7.70112 18.8612L7.69566 14.9523H6.3473L6.35146 18.7998C6.3525 19.3895 6.33819 19.8292 6.35613 20.0294C6.38915 20.3822 6.37746 20.7935 6.7048 21.0285C7.31476 21.4679 8.48397 20.963 8.77647 20.3349L8.77388 21.1364L9.86275 21.1377L9.8625 14.9523ZM14.2001 19.3978L14.1972 16.1668C14.1962 14.9354 13.275 14.1981 12.0247 15.1944L12.0301 12.7923L10.6758 12.7943L10.6693 21.0857L11.7831 21.0696L11.8845 20.5533C13.3075 21.8587 14.2022 20.9641 14.2001 19.3978ZM18.4435 18.9696L17.4269 18.9751C17.4264 19.0154 17.4249 19.0619 17.4243 19.1126V19.6799C17.4243 19.9836 17.1734 20.2309 16.8687 20.2309H16.6696C16.3643 20.2309 16.1134 19.9836 16.1134 19.6799V19.617V18.993V18.1878H18.4415V17.3116C18.4415 16.6712 18.4251 16.0311 18.372 15.665C18.2054 14.507 16.5799 14.3231 15.7588 14.9159C15.5011 15.1011 15.3043 15.3488 15.1899 15.6816C15.0745 16.0147 15.017 16.4697 15.017 17.0477V18.9743C15.0175 22.177 18.9076 21.7243 18.4435 18.9696ZM13.2285 8.51032C13.2984 8.68036 13.4071 8.81816 13.5545 8.92216C13.7001 9.0246 13.8863 9.07608 14.1093 9.07608C14.3049 9.07608 14.478 9.0233 14.6288 8.91436C14.7791 8.80594 14.9057 8.64396 15.0092 8.4279L14.9835 8.95986H16.4948V2.5324H15.3051V7.5348C15.3051 7.80572 15.082 8.0275 14.8093 8.0275C14.5381 8.0275 14.3142 7.80572 14.3142 7.5348V2.5324H13.0725V6.86764C13.0725 7.41988 13.0826 7.78804 13.099 7.97472C13.1159 8.1601 13.1585 8.33794 13.2285 8.51032ZM8.64829 4.8802C8.64829 4.26322 8.69977 3.78144 8.80195 3.43408C8.90491 3.08802 9.08978 2.80982 9.35757 2.6C9.62459 2.38914 9.9665 2.28358 10.3822 2.28358C10.7319 2.28358 11.0315 2.35222 11.2816 2.48664C11.533 2.62184 11.727 2.79734 11.8614 3.01392C11.9984 3.23128 12.0915 3.45462 12.1411 3.68316C12.1918 3.91482 12.2168 4.26426 12.2168 4.73564V6.36116C12.2168 6.95734 12.1929 7.39596 12.1463 7.67442C12.1003 7.95366 12.0015 8.21262 11.8484 8.45546C11.6976 8.6957 11.5028 8.87536 11.2668 8.99002C11.0281 9.10572 10.7551 9.1624 10.4467 9.1624C10.1022 9.1624 9.81205 9.11482 9.57285 9.0155C9.33287 8.9167 9.1475 8.76772 9.01542 8.56986C8.88204 8.37174 8.78818 8.13046 8.7315 7.84914C8.67456 7.56808 8.64752 7.14532 8.64752 6.5819L8.64829 4.8802ZM9.83208 7.4334C9.83208 7.7974 10.103 8.09458 10.4329 8.09458C10.7631 8.09458 11.033 7.7974 11.033 7.4334V4.0118C11.033 3.64832 10.7631 3.35114 10.4329 3.35114C10.103 3.35114 9.83208 3.64832 9.83208 4.0118V7.4334ZM5.6492 9.1611H7.07504L7.0766 4.2315L8.7614 0.00858H7.20192L6.30621 3.14522L5.39778 0H3.85441L5.64686 4.23384L5.6492 9.1611Z" fill="#2C4984"/>
								</svg>
							</a>
						</li>
					</ul>
				</div>
				<div class="header_fast__menu">
					<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'header' ) ); ?>
				</div>
				<div class="header_btn__buy">
					<?php if($check_time){?>
						<a href="#countdown_block" class="go_countdown">
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
						<?}else{?>
							<?if($lang == 'ru'){?>
								<a href="<?php echo home_url();?>/tickets/">Билеты</a>
							<?}else if($lang == 'en'){?>
								<a href="/en/tikckets/">Tickets</a>
							<?}else if($lang == 'ua'){?>
								<a href="/ua/kvitki/">Квитки</a>
							<?}?>
						<?}?>
				</div>

				<div class="header_lang__menu">
					<li><a href="#"><?php echo $lang;?>
						</a>
						<ul>
								<?php pll_the_languages(array('hide_current'=> 1));?>
						</ul>
					</li>

				</div>
				<div class="header_burger__menu">
					<div class="burger_box">
						<span></span>
					</div>

					<div id="main_menu"> 
					<div class="main_menu__ticket header_btn__buy">
					<?php if($check_time){?>
							<a href="#countdown_block" class="go_countdown">
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
							<?}else{?>
								<?if($lang == 'ru'){?>
									<a href="<?php echo home_url();?>/tickets/">Билеты</a>
								<?}else if($lang == 'en'){?>
									<a href="/en/tikckets/">Tickets</a>
								<?}else if($lang == 'ua'){?>
									<a href="/ua/kvitki/">Квитки</a>
								<?}?>
							<?}?>
						</div>
					  <div class="main_menu__block">
						<div class="main_menu">
							<?php wp_nav_menu( array( 'container_class' => 'main-menu', 'theme_location' => 'main' ) ); ?>
						</div>

						<div class="lang_menu">

							<ul>
								<?php pll_the_languages(); ?>
							</ul>
							
							<ul class="lang_social">
                  <li>
                    <a href="<?php the_field("contacts_social_fb", 229);?>" target="_blank">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect x="1.02195" y="0.9" width="21.6" height="21.6" rx="2.7" stroke="#2C4984" stroke-width="1.8"/>
												<path d="M15.2956 13.5694V21.818H12.1592V13.5694H9.12183V10.4319H12.1592V8.26473C12.1592 5.68773 14.2368 3.60028 16.8138 3.60028H18.8886V6.73778H16.8138C15.9547 6.73778 15.2956 7.39691 15.2956 8.25593V10.4319H18.9392L18.4225 13.5694H15.2956Z"/>
											</svg>
                    </a>
                  </li>
                  <li>
										<a href="<?php the_field("contacts_social_inst", 229);?>" target="_blank">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect x="1.42148" y="0.9" width="21.6" height="21.6" rx="2.7" stroke="#2C4984" stroke-width="1.8"/>
												<circle cx="12.2219" cy="11.7004" r="5.4" stroke="#2C4984" stroke-width="1.8"/>
												<circle cx="19.4215" cy="4.50059" r="0.9"/>
											</svg>
                    </a>
                  </li>
                  <li>
                    <a href="<?php the_field("contacts_social_youtube", 229);?>" target="_blank">
											<svg width="21" height="24" viewBox="0 0 21 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M17.416 17.1163H16.1319L16.1379 16.3704C16.1379 16.0389 16.4101 15.7677 16.7426 15.7677H16.8245C17.1578 15.7677 17.4308 16.0389 17.4308 16.3704L17.416 17.1163ZM12.5993 15.5178C12.2735 15.5178 12.007 15.7368 12.007 16.0048V19.6326C12.007 19.9001 12.2735 20.1185 12.5993 20.1185C12.9263 20.1185 13.1931 19.9001 13.1931 19.6326V16.0048C13.1931 15.7365 12.9263 15.5178 12.5993 15.5178ZM20.4219 13.4885V20.39C20.4219 22.0454 18.9864 23.4 17.2317 23.4H4.11234C2.35707 23.4 0.921875 22.0454 0.921875 20.39V13.4885C0.921875 11.8331 2.35707 10.4783 4.11234 10.4783H17.2317C18.9864 10.4783 20.4219 11.8331 20.4219 13.4885ZM4.98749 21.1393L4.98645 13.8694L6.61276 13.87V12.7928L2.27751 12.7863V13.8453L3.63082 13.8492V21.1393H4.98749ZM9.8625 14.9523H8.5066V18.8344C8.5066 19.396 8.54066 19.6768 8.50452 19.7759C8.39428 20.0769 7.89872 20.3967 7.70553 19.8084C7.67277 19.7054 7.70164 19.3947 7.70112 18.8612L7.69566 14.9523H6.3473L6.35146 18.7998C6.3525 19.3895 6.33819 19.8292 6.35613 20.0294C6.38915 20.3822 6.37746 20.7935 6.7048 21.0285C7.31476 21.4679 8.48397 20.963 8.77647 20.3349L8.77388 21.1364L9.86275 21.1377L9.8625 14.9523ZM14.2001 19.3978L14.1972 16.1668C14.1962 14.9354 13.275 14.1981 12.0247 15.1944L12.0301 12.7923L10.6758 12.7943L10.6693 21.0857L11.7831 21.0696L11.8845 20.5533C13.3075 21.8587 14.2022 20.9641 14.2001 19.3978ZM18.4435 18.9696L17.4269 18.9751C17.4264 19.0154 17.4249 19.0619 17.4243 19.1126V19.6799C17.4243 19.9836 17.1734 20.2309 16.8687 20.2309H16.6696C16.3643 20.2309 16.1134 19.9836 16.1134 19.6799V19.617V18.993V18.1878H18.4415V17.3116C18.4415 16.6712 18.4251 16.0311 18.372 15.665C18.2054 14.507 16.5799 14.3231 15.7588 14.9159C15.5011 15.1011 15.3043 15.3488 15.1899 15.6816C15.0745 16.0147 15.017 16.4697 15.017 17.0477V18.9743C15.0175 22.177 18.9076 21.7243 18.4435 18.9696ZM13.2285 8.51032C13.2984 8.68036 13.4071 8.81816 13.5545 8.92216C13.7001 9.0246 13.8863 9.07608 14.1093 9.07608C14.3049 9.07608 14.478 9.0233 14.6288 8.91436C14.7791 8.80594 14.9057 8.64396 15.0092 8.4279L14.9835 8.95986H16.4948V2.5324H15.3051V7.5348C15.3051 7.80572 15.082 8.0275 14.8093 8.0275C14.5381 8.0275 14.3142 7.80572 14.3142 7.5348V2.5324H13.0725V6.86764C13.0725 7.41988 13.0826 7.78804 13.099 7.97472C13.1159 8.1601 13.1585 8.33794 13.2285 8.51032ZM8.64829 4.8802C8.64829 4.26322 8.69977 3.78144 8.80195 3.43408C8.90491 3.08802 9.08978 2.80982 9.35757 2.6C9.62459 2.38914 9.9665 2.28358 10.3822 2.28358C10.7319 2.28358 11.0315 2.35222 11.2816 2.48664C11.533 2.62184 11.727 2.79734 11.8614 3.01392C11.9984 3.23128 12.0915 3.45462 12.1411 3.68316C12.1918 3.91482 12.2168 4.26426 12.2168 4.73564V6.36116C12.2168 6.95734 12.1929 7.39596 12.1463 7.67442C12.1003 7.95366 12.0015 8.21262 11.8484 8.45546C11.6976 8.6957 11.5028 8.87536 11.2668 8.99002C11.0281 9.10572 10.7551 9.1624 10.4467 9.1624C10.1022 9.1624 9.81205 9.11482 9.57285 9.0155C9.33287 8.9167 9.1475 8.76772 9.01542 8.56986C8.88204 8.37174 8.78818 8.13046 8.7315 7.84914C8.67456 7.56808 8.64752 7.14532 8.64752 6.5819L8.64829 4.8802ZM9.83208 7.4334C9.83208 7.7974 10.103 8.09458 10.4329 8.09458C10.7631 8.09458 11.033 7.7974 11.033 7.4334V4.0118C11.033 3.64832 10.7631 3.35114 10.4329 3.35114C10.103 3.35114 9.83208 3.64832 9.83208 4.0118V7.4334ZM5.6492 9.1611H7.07504L7.0766 4.2315L8.7614 0.00858H7.20192L6.30621 3.14522L5.39778 0H3.85441L5.64686 4.23384L5.6492 9.1611Z"/>
											</svg>
                    </a>
                  </li>
              </ul>
										
						</div>
					</div>
					</div>
				 </div>
				 
			</div>
		</div>
	</header>