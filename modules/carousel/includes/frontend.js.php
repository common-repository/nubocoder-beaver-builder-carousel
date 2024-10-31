(function($) {

	$(function() {

		$('.fl-node-<?php echo esc_js($id); ?> .nubocodeer-bb-carousel').slick({
		  autoplay: <?php echo esc_js($settings->autoplay); ?>,
		  <?php if( $settings->autoplay == 'true' ){ echo 'autoplaySpeed: '.esc_js($settings->autoplay_speed).','; } ?>
		  arrows: <?php echo esc_js($settings->arrows); ?>,
		  dots: <?php echo esc_js($settings->dots); ?>,
		  <?php if( $settings->pause_on_dots_hover == 'true' ){ echo 'pauseOnDotsHover: '.esc_js($settings->pause_on_dots_hover).','; } ?>
		  infinite: <?php echo esc_js($settings->infinite); ?>,
		  pauseOnFocus: <?php echo esc_js($settings->pause_on_focus); ?>,
		  pauseOnHover: <?php echo esc_js($settings->pause_on_hover); ?>,
		  pauseOnDotsHover: <?php echo esc_js($settings->pause_on_dots_hover); ?>,
		  rows: <?php echo esc_js($settings->rows); ?>,
		  slidesPerRow: <?php echo esc_js($settings->slides_per_row); ?>,
		  slidesToShow: <?php echo esc_js($settings->slides_to_show); ?>,
		  slidesToScroll: <?php echo esc_js($settings->slides_to_scroll); ?>,
		  speed: <?php echo esc_js($settings->speed); ?>,
		  accessibility: <?php echo esc_js($settings->accessibility); ?>,
		  adaptiveHeight: <?php echo esc_js($settings->adaptive_height); ?>,
		  centerMode: <?php echo esc_js($settings->center_mode); ?>,
		  <?php if( $settings->center_mode == 'true' ){ echo 'centerPadding: '.esc_js($settings->center_padding).','; } ?>
		  cssEase: '<?php echo esc_js($settings->css_ease); ?>',
		  draggable: <?php echo esc_js($settings->draggable); ?>,
		  fade: <?php echo esc_js($settings->fade); ?>,
		  focusOnSelect: <?php echo esc_js($settings->focus_on_select); ?>,
		  lazyLoad: '<?php echo esc_js($settings->lazy_load); ?>',
		  swipe: <?php echo esc_js($settings->swipe); ?>,
		  variableWidth: <?php echo esc_js($settings->variable_width); ?>,
		  vertical: <?php echo esc_js($settings->vertical); ?>,
		  verticalSwiping: <?php echo esc_js($settings->vertical_swiping); ?>,
		  zIndex: <?php echo esc_js($settings->z_index); ?>,
		  
		  <?php
		  if( $settings->enable_breakpoints == 'true' && count( $settings->breakpoints ) > 0 ){
		  	
			echo 'responsive: [';
			
			foreach( $settings->breakpoints as $breakpoint ){
				?>
				{
					breakpoint: <?php echo esc_js($breakpoint->breakpoint); ?>,
					<?php
					if( $breakpoint->unslick == 'true' ){
						echo 'settings: "unslick",';
					}
					else{
						?>
						settings: {
							autoplay: <?php echo esc_js($breakpoint->autoplay); ?>,
							<?php if( $breakpoint->autoplay == 'true' ){ echo 'autoplaySpeed: '.esc_js($breakpoint->autoplay_speed).','; } ?>
							arrows: <?php echo esc_js($breakpoint->arrows); ?>,
							dots: <?php echo esc_js($breakpoint->dots); ?>,
							infinite: <?php echo esc_js($breakpoint->infinite); ?>,
							rows: <?php echo esc_js($breakpoint->rows); ?>,
							slidesPerRow: <?php echo esc_js($breakpoint->slides_per_row); ?>,
							slidesToShow: <?php echo esc_js($breakpoint->slides_to_show); ?>,
							slidesToScroll: <?php echo esc_js($breakpoint->slides_to_scroll); ?>,
							speed: <?php echo esc_js($breakpoint->speed); ?>,
						}
						<?php
					}
					?>
				},
				<?php
			}
			
			echo ']';
	  	  }
		  ?>
		});

	});

})(jQuery);
