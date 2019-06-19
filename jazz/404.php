<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Jazz
 */

get_header();
$lang = pll_current_language();
?>

<section class="page_404">
	<div class="container">
		<p>404</p>
		<p>
			<?php 
				if($lang == 'ru'){
					echo 'Страница не найдена';
				}else if($lang == 'en'){
					echo 'Page not found';
				}else if($lang){
					echo 'Сторінку не знайдено';
				}
			?>
		</p>
	</div>
</section>

<?php
get_footer();
