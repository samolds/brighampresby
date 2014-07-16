<?php
/**
 * Part Name: Default Footer
 */
?>
<footer id="colophon" class="site-footer" role="contentinfo">

	<div id="footer-widgets" class="full-container">
		<?php dynamic_sidebar( 'sidebar-footer' ) ?>
	</div><!-- #footer-widgets -->

	<?php $site_info_text = apply_filters('vantage_site_info', siteorigin_setting('general_site_info_text') ); if( !empty($site_info_text) ) : ?>
		<div id="site-info">
<!--<p>Find us on <a href="http://www.facebook.com/communitypresbyterian.church.3">Facebook</a>!</p>-->
			<p><a href="http://www.facebook.com/communitypresbyterian.church.3"><img src="http://brighampresby.org/wp-content/uploads/2014/06/facebook.png" alt="Find us on Facebook!" height="30" /></a></p>
			<?php echo wp_kses_post($site_info_text) ?>
		</div><!-- .site-info -->
	<?php endif; ?>
<!--
	<?php echo apply_filters( 'vantage_footer_attribution', '<div id="theme-attribution">' . sprintf( __('A <a href="%s">SiteOrigin</a> Theme', 'vantage'), 'http://siteorigin.com') . '</div>' ) ?>
-->
<br />

</footer><!-- #colophon .site-footer -->