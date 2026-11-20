<?php /* Static Name: Footer text */ ?>
<div id="footer-text" class="footer-text">
	<?php $myfooter_text = apply_filters( 'cherry_text_translate', of_get_option('footer_text'), 'footer_text' ); ?>
	<?php
	// Année de fin du copyright dynamique : "2004 - 2020" -> "2004 - <année en cours>".
	if ( $myfooter_text ) {
		$myfooter_text = preg_replace( '/((?:19|20)\d{2})(\s*[-–]\s*)(?:19|20)\d{2}/u', '${1}${2}' . wp_date( 'Y' ), $myfooter_text, 1 );
	}
	?>

	<?php if($myfooter_text){?>
		<?php echo $myfooter_text; ?>
	<?php } else { ?>
	
		&copy; <?php echo date ('Y'); ?> <a href="<?php echo home_url(); ?>/privacy-policy/" title="<?php echo theme_locals('privacy_policy'); ?>"><?php echo theme_locals("privacy_policy"); ?></a>
	
	<?php } ?>
	<?php if( is_front_page() ) { ?>
		<More <a rel="nofollow" href="http://www.templatemonster.com/category/life-coach-wordpress-themes/" target="_blank"></a>
	<?php } ?>
</div>