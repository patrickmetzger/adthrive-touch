		<?php do_action( 'wptouch_body_bottom' ); ?>

		<?php get_template_part( 'footer-top' ); ?>
		
		<div class="<?php wptouch_footer_classes(); ?>">
			<?php wptouch_footer(); ?>
		</div>
		
		<?php if ( !is_front_page() ) { ?>
			<a href="#" class="back-to-top"><?php _e( 'Back to top', 'wptouch-pro' ); ?></a>
		<?php } ?>

		<?php do_action( 'wptouch_language_insert' ); ?>

		<?php get_template_part( 'switch-link' ); ?>
	
	</div><!-- page wrapper -->
<script>
    jQuery.noConflict();
        (function( $ ) {
        $(document).ready(function() {
            $(".comments").fancybox({
                maxWidth	: 320,
                maxHeight	: 300,
                fitToView	: true,
                width		: '70%',
                height		: '70%',
                autoSize	: false,
                closeClick	: false,
                openEffect	: 'none',
                closeEffect	: 'none'
            });
        });
    })(jQuery);
</script>
</body>
</html>
