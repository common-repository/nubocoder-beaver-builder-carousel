<?php

/**
 * This is an example module with only the basic
 * setup necessary to get it working.
 *
 * @class FLBasicExampleModule
 */
class Nubocoder_Bb_Carousel_Module_Carousel extends FLBuilderModule {

	/** 
	 * Constructor function for the module. You must pass the
	 * name, description, dir and url in an array to the parent class.
	 *
	 * @method __construct
	 */  
	public function __construct()
	{
		parent::__construct(array(
			'name'          => __('Carousel', 'nubocoder-bb-carousel'),
			'description'   => __('Highly customizable carousel for Beaver Builder using Slick Carousel. ', 'nubocoder-bb-carousel'),
			'category'		=> __('NuboCoder', 'nubocoder-bb-carousel'),
			'dir'           => NUBOCODER_BB_CAROUSEL_DIR . 'modules/carousel/',
			'url'           => NUBOCODER_BB_CAROUSEL_DIR . 'modules/carousel/',
			'editor_export' => true, // Defaults to true and can be omitted.
			'enabled'       => true, // Defaults to true and can be omitted.
		));
		
		/** 
		 * Use these methods to enqueue css and js already
		 * registered or to register and enqueue your own.
		 */
		$this->add_css('slick-carousel', NUBOCODER_BB_CAROUSEL_URL. '/modules/carousel/css/slick.css');
		$this->add_css('slick-carousel-theme', NUBOCODER_BB_CAROUSEL_URL . '/modules/carousel/css/slick-theme.css');
		$this->add_js('slick-carousel', NUBOCODER_BB_CAROUSEL_URL . '/modules/carousel/js/slick.min.js', array('jquery'), '1.8.1', true);
		
	}
}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('Nubocoder_Bb_Carousel_Module_Carousel', array(
	'general'       => array( // Tab
		'title'         => __('General', 'nubocoder-bb-carousel'), // Tab title
		'sections'      => array( // Tab Sections
			'main'			=> array(
				'title'         => __('Main', 'nubocoder-bb-carousel'),
				'fields'		=> array(
					'autoplay' => array(
					  'type'          => 'select',
					  'label'         => __( 'Autoplay', 'nubocoder-bb-carousel' ),
					  'description'   => __( 'Enables Autoplay.', 'nubocoder-bb-carousel' ),
					  'default'       => 'false',
					  'options'       => array(
						'true'      => __( 'Enable', 'nubocoder-bb-carousel' ),
						'false'      => __( 'Disable', 'nubocoder-bb-carousel' )
					  ),
					  'toggle'        => array(
						  'true'      => array(
							'fields'        => array( 'autoplay_speed' ),
						  ),
					  )
					),
					'autoplay_speed' => array(
					  'type'          => 'unit',
					  'label'         => __( 'Autoplay Speed', 'nubocoder-bb-carousel' ),
					  'description'   => __( 'milliseconds.', 'nubocoder-bb-carousel' ),
					  'default'       => '3000',
					),
					'arrows' => array(
					  'type'          => 'select',
					  'label'         => __( 'Arrows', 'nubocoder-bb-carousel' ),
					  'description'   => __( 'Prev/Next Arrows.', 'nubocoder-bb-carousel' ),
					  'default'       => 'true',
					  'options'       => array(
						'true'      => __( 'Enable', 'nubocoder-bb-carousel' ),
						'false'      => __( 'Disable', 'nubocoder-bb-carousel' )
					  ),
					),
					'dots' => array(
					  'type'          => 'select',
					  'label'         => __( 'Dots', 'nubocoder-bb-carousel' ),
					  'description'   => __( 'Show dot indicators.', 'nubocoder-bb-carousel' ),
					  'default'       => 'false',
					  'options'       => array(
						'true'      => __( 'Enable', 'nubocoder-bb-carousel' ),
						'false'      => __( 'Disable', 'nubocoder-bb-carousel' )
					  ),
					  'toggle'        => array(
							  'true'      => array(
								'fields'        => array( 'pause_on_dots_hover' ),
							  ),
						)
					),
					'infinite' => array(
					  'type'          => 'select',
					  'label'         => __( 'Infinite', 'nubocoder-bb-carousel' ),
					  'description'   => __( 'Infinite loop sliding.', 'nubocoder-bb-carousel' ),
					  'default'       => 'true',
					  'options'       => array(
						'true'      => __( 'Enable', 'nubocoder-bb-carousel' ),
						'false'      => __( 'Disable', 'nubocoder-bb-carousel' )
					  ),
					),
					'pause_on_focus' => array(
					  'type'          => 'select',
					  'label'         => __( 'Pause On Focus', 'nubocoder-bb-carousel' ),
					  'description'   => __( 'Pause Autoplay On Focus.', 'nubocoder-bb-carousel' ),
					  'default'       => 'true',
					  'options'       => array(
						'true'      => __( 'Enable', 'nubocoder-bb-carousel' ),
						'false'      => __( 'Disable', 'nubocoder-bb-carousel' )
					  ),
					),
					'pause_on_hover' => array(
					  'type'          => 'select',
					  'label'         => __( 'Pause On Hover', 'nubocoder-bb-carousel' ),
					  'description'   => __( 'Pause Autoplay On Hover.', 'nubocoder-bb-carousel' ),
					  'default'       => 'true',
					  'options'       => array(
						'true'      => __( 'Enable', 'nubocoder-bb-carousel' ),
						'false'      => __( 'Disable', 'nubocoder-bb-carousel' )
					  ),
					),
					'pause_on_dots_hover' => array(
					  'type'          => 'select',
					  'label'         => __( 'Pause On Dots Hover', 'nubocoder-bb-carousel' ),
					  'description'   => __( 'Pause Autoplay when a dot is hovered.', 'nubocoder-bb-carousel' ),
					  'default'       => 'false',
					  'options'       => array(
						'true'      => __( 'Enable', 'nubocoder-bb-carousel' ),
						'false'      => __( 'Disable', 'nubocoder-bb-carousel' )
					  ),
					),
					'rows' => array(
					  'type'          => 'unit',
					  'label'         => __( 'Rows', 'nubocoder-bb-carousel' ),
					  'description'   => __( 'Setting this to more than 1 initializes grid mode. Use slidesPerRow to set how many slides should be in each row.', 'nubocoder-bb-carousel' ),
					  'default'       => '1',
					),
					'slides_per_row' => array(
					  'type'          => 'unit',
					  'label'         => __( 'Slides Per Row', 'nubocoder-bb-carousel' ),
					  'description'   => __( 'With grid mode intialized via the rows option, this sets how many slides are in each grid row.', 'nubocoder-bb-carousel' ),
					  'default'       => '1',
					),
					'slides_to_show' => array(
					  'type'          => 'unit',
					  'label'         => __( 'Slides To Show', 'nubocoder-bb-carousel' ),
					  'description'   => __( '# of slides to show.', 'nubocoder-bb-carousel' ),
					  'default'       => '1',
					),
					'slides_to_scroll' => array(
					  'type'          => 'unit',
					  'label'         => __( 'Slides To Scroll', 'nubocoder-bb-carousel' ),
					  'description'   => __( '# of slides to scroll.', 'nubocoder-bb-carousel' ),
					  'default'       => '1',
					),
					'speed' => array(
					  'type'          => 'unit',
					  'label'         => __( 'Speed', 'nubocoder-bb-carousel' ),
					  'description'   => __( 'Slide/Fade animation speed (ms).', 'nubocoder-bb-carousel' ),
					  'default'       => '300',
					),
				)
			),
			'general'       => array( // Section
				'title'         => __('Additional', 'nubocoder-bb-carousel'), // Section Title
				'fields'        => array( // Section Fields
					'accessibility' => array(
					  'type'          => 'select',
					  'label'         => __( 'Accessibility', 'nubocoder-bb-carousel' ),
					  'description'   => __( 'Enables tabbing and arrow key navigation.', 'nubocoder-bb-carousel' ),
					  'default'       => 'true',
					  'options'       => array(
						'true'      => __( 'Enable', 'nubocoder-bb-carousel' ),
						'false'      => __( 'Disable', 'nubocoder-bb-carousel' )
					  ),
					),
					'adaptive_height' => array(
					  'type'          => 'select',
					  'label'         => __( 'Adaptive Height', 'nubocoder-bb-carousel' ),
					  'description'   => __( 'Enables adaptive height for single slide horizontal carousels.', 'nubocoder-bb-carousel' ),
					  'default'       => 'false',
					  'options'       => array(
						'true'      => __( 'Enable', 'nubocoder-bb-carousel' ),
						'false'      => __( 'Disable', 'nubocoder-bb-carousel' )
					  ),
					),
					'center_mode' => array(
					  'type'          => 'select',
					  'label'         => __( 'Center Mode', 'nubocoder-bb-carousel' ),
					  'description'   => __( 'Enables centered view with partial prev/next slides. Use with odd numbered slidesToShow counts.', 'nubocoder-bb-carousel' ),
					  'default'       => 'false',
					  'options'       => array(
						'true'      => __( 'Enable', 'nubocoder-bb-carousel' ),
						'false'      => __( 'Disable', 'nubocoder-bb-carousel' )
					  ),
					  'toggle'        => array(
							'true'      => array(
							  'fields'        => array( 'center_padding' ),
							),
					  )
					),
					'center_padding' => array(
					  'type'          => 'unit',
					  'label'         => __( 'Center Padding', 'nubocoder-bb-carousel' ),
					  'description'   => __( 'Side padding when in center mode (px or %)', 'nubocoder-bb-carousel' ),
					  'units'          => array( 'px', '%' ),
					  'default'       => '50',
					),
					'css_ease' => array(
					  'type'          => 'select',
					  'label'         => __( 'CSS Ease', 'nubocoder-bb-carousel' ),
					  'description'   => __( 'CSS3 Animation Easing.', 'nubocoder-bb-carousel' ),
					  'default'       => 'ease',
					  'options'       => array(
						'linear'      	=> __( 'linear', 'nubocoder-bb-carousel' ),
						'ease'      	=> __( 'ease', 'nubocoder-bb-carousel' ),
						'ease-in'      	=> __( 'ease-in', 'nubocoder-bb-carousel' ),
						'ease-out'      => __( 'ease-out', 'nubocoder-bb-carousel' ),
						'ease-in-out'   => __( 'ease-in-out', 'nubocoder-bb-carousel' ),
						'step-start'    => __( 'step-start', 'nubocoder-bb-carousel' ),
						'step-end'      => __( 'step-end', 'nubocoder-bb-carousel' )
					  ),
					),
					'draggable' => array(
					  'type'          => 'select',
					  'label'         => __( 'Draggable', 'nubocoder-bb-carousel' ),
					  'description'   => __( 'Enable mouse dragging.', 'nubocoder-bb-carousel' ),
					  'default'       => 'false',
					  'options'       => array(
						'true'      => __( 'Enable', 'nubocoder-bb-carousel' ),
						'false'      => __( 'Disable', 'nubocoder-bb-carousel' )
					  ),
					),
					'fade' => array(
					  'type'          => 'select',
					  'label'         => __( 'Dade', 'nubocoder-bb-carousel' ),
					  'description'   => __( 'Enable fade.', 'nubocoder-bb-carousel' ),
					  'default'       => 'false',
					  'options'       => array(
						'true'      => __( 'Enable', 'nubocoder-bb-carousel' ),
						'false'      => __( 'Disable', 'nubocoder-bb-carousel' )
					  ),
					),
					'focus_on_select' => array(
					  'type'          => 'select',
					  'label'         => __( 'Focus On Select', 'nubocoder-bb-carousel' ),
					  'description'   => __( 'Enable focus on selected element (click).', 'nubocoder-bb-carousel' ),
					  'default'       => 'false',
					  'options'       => array(
						'true'      => __( 'Enable', 'nubocoder-bb-carousel' ),
						'false'      => __( 'Disable', 'nubocoder-bb-carousel' )
					  ),
					),
					'lazy_load' => array(
					  'type'          => 'select',
					  'label'         => __( 'Lazy Load', 'nubocoder-bb-carousel' ),
					  'description'   => __( 'Set lazy loading technique. Accepts \'ondemand\' or \'progressive\'', 'nubocoder-bb-carousel' ),
					  'default'       => 'ondemand',
					  'options'       => array(
						'ondemand'      => __( 'ondemand', 'nubocoder-bb-carousel' ),
						'progressive'      => __( 'progressive', 'nubocoder-bb-carousel' )
					  ),
					),
					'swipe' => array(
					  'type'          => 'select',
					  'label'         => __( 'Swipe', 'nubocoder-bb-carousel' ),
					  'description'   => __( 'Enable swiping.', 'nubocoder-bb-carousel' ),
					  'default'       => 'true',
					  'options'       => array(
						'true'      => __( 'Enable', 'nubocoder-bb-carousel' ),
						'false'      => __( 'Disable', 'nubocoder-bb-carousel' )
					  ),
					),
					'variable_width' => array(
					  'type'          => 'select',
					  'label'         => __( 'Variable Width', 'nubocoder-bb-carousel' ),
					  'description'   => __( 'Variable width slides.', 'nubocoder-bb-carousel' ),
					  'default'       => 'false',
					  'options'       => array(
						'true'      => __( 'Enable', 'nubocoder-bb-carousel' ),
						'false'      => __( 'Disable', 'nubocoder-bb-carousel' )
					  ),
					),
					'vertical' => array(
					  'type'          => 'select',
					  'label'         => __( 'Vertical', 'nubocoder-bb-carousel' ),
					  'description'   => __( 'Vertical slide mode.', 'nubocoder-bb-carousel' ),
					  'default'       => 'false',
					  'options'       => array(
						'true'      => __( 'Enable', 'nubocoder-bb-carousel' ),
						'false'      => __( 'Disable', 'nubocoder-bb-carousel' )
					  ),
					),
					'vertical_swiping' => array(
					  'type'          => 'select',
					  'label'         => __( 'Vertical Swiping', 'nubocoder-bb-carousel' ),
					  'description'   => __( 'Vertical swipe mode.', 'nubocoder-bb-carousel' ),
					  'default'       => 'false',
					  'options'       => array(
						'true'      => __( 'Enable', 'nubocoder-bb-carousel' ),
						'false'      => __( 'Disable', 'nubocoder-bb-carousel' )
					  ),
					),
					'z_index' => array(
					  'type'          => 'unit',
					  'label'         => __( 'Z Index', 'nubocoder-bb-carousel' ),
					  'description'   => __( 'Set the zIndex values for slides, useful for IE9 and lower.', 'nubocoder-bb-carousel' ),
					  'default'       => '1000',
					),
				)
			),
		)
	),
	'responsive' => array(
		'title'		=> __('Responsive', 'nubocoder-bb-carousel'),
		'sections'	=> array(
			'general'	=> array(
				'title'	=> '',
				'fields'	=> array(
					'enable_breakpoints' => array(
					  'type'          => 'select',
					  'label'         => __( 'Enable', 'nubocoder-bb-carousel' ),
					  'description'   => __( 'Enable breakpoints functionallity.', 'nubocoder-bb-carousel' ),
					  'default'       => 'false',
					  'options'       => array(
						'true'      => __( 'True', 'nubocoder-bb-carousel' ),
						'false'      => __( 'False', 'nubocoder-bb-carousel' )
					  ),
					  'toggle'        => array(
						  'true'      => array(
							'fields'      => array( 'breakpoints' ),
						  ),
					  )
					),
					'breakpoints' => array(
						'type'         => 'form',
						'label'        => __( 'Breakpoint', 'nubocoder-bb-carousel' ),
						'form'         => 'nubocoder_bb_carousel_breakpoint_item', // ID from registered form below
						'preview_text' => 'label', // Name of a field to use for the preview text
						'multiple'     => true,
					),
				)		
			),
		),
	),
	'items'		=> array(
		'title'		=> __('Items', 'nubocoder-bb-carousel'),
		'sections'	=> array(
			'general'	=> array(
				'title'	=> '',
				'fields'	=> array(
					'items_type' => array(
					  'type'          => 'select',
					  'label'         => __( 'Items Type', 'nubocoder-bb-carousel' ),
					  'description'   => __( 'You can define the items here or select a shortcode created by you that will populate the carousel.', 'nubocoder-bb-carousel' ),
					  'default'       => 'default',
					  'options'       => array(
						'default'      => __( 'Default', 'nubocoder-bb-carousel' ),
						'shortcode'    => __( 'Shortcode', 'nubocoder-bb-carousel' )
					  ),
					  'toggle'        => array(
						  'default'      => array(
							'fields'      => array( 'items' ),
						  ),
						  'shortcode'      => array(
							  'fields'      => array( 'shortcode' ),
						  ),
					  )
					),
					'items' => array(
						'type'         => 'form',
						'label'        => __( 'Item', 'nubocoder-bb-carousel' ),
						'form'         => 'nubocoder_bb_carousel_item', // ID from registered form below
						'preview_text' => 'label', // Name of a field to use for the preview text
						'multiple'     => true,
					),
					'shortcode' => array(
					  'type'          => 'text',
					  'label'         => __( 'Shortcode', 'nubocoder-bb-carousel' ),
					  'default'       => '',
					  'description'	  => __( 'Custom shortcode that will populate the carousel.', 'nubocoder-bb-carousel' ),
					),
				)		
			),
		),
	),
));

/**
 * Register the responsive settings form.
 */
FLBuilder::register_settings_form('nubocoder_bb_carousel_breakpoint_item', array(
	'title' => __( 'Responsive Setup', 'nubocoder-bb-carousel' ),
	'tabs'  => array(
		'general' => array( // Tab
			'title'    => __( 'General', 'nubocoder-bb-carousel' ), // Tab title
			'sections' => array( // Tab Sections
				'general'    => array(
					'title'  => '',
					'fields' => array(
						'label' => array(
							'type'  => 'text',
							'label' => __( 'Label', 'nubocoder-bb-carousel' ),
						),
					),
				),
				'main'		=> array(
					'title'		=> __( 'Main', 'nubocoder-bb-carousel' ),
					'fields'	=> array(
						'breakpoint' => array(
						  'type'          => 'unit',
						  'label'         => __( 'Browser Width', 'nubocoder-bb-carousel' ),
						  'description'   => __( 'px', 'nubocoder-bb-carousel' ),
						  'default'       => '1200',
						),
						'unslick' => array(
						  'type'          => 'select',
						  'label'         => __( 'Unslick', 'nubocoder-bb-carousel' ),
						  'description'   => __( 'Disables the carousel at the given breakpoint.', 'nubocoder-bb-carousel' ),
						  'default'       => 'false',
						  'options'       => array(
							'true'      => __( 'True', 'nubocoder-bb-carousel' ),
							'false'      => __( 'False', 'nubocoder-bb-carousel' )
						  ),
						  'toggle'        => array(
							  'false'      => array(
								'sections'      => array( 'setup' ),
							  ),
						  )
						),
					),
				),
				'setup'    => array(
					'title'  => __( 'Setup', 'nubocoder-bb-carousel' ),
					'fields' => array(
						'autoplay' => array(
						  'type'          => 'select',
						  'label'         => __( 'Autoplay', 'nubocoder-bb-carousel' ),
						  'description'   => __( 'Enables Autoplay.', 'nubocoder-bb-carousel' ),
						  'default'       => 'false',
						  'options'       => array(
							'true'      => __( 'Enable', 'nubocoder-bb-carousel' ),
							'false'      => __( 'Disable', 'nubocoder-bb-carousel' )
						  ),
						  'toggle'        => array(
							  'true'      => array(
								'fields'        => array( 'autoplay_speed' ),
							  ),
						  )
						),
						'autoplay_speed' => array(
						  'type'          => 'unit',
						  'label'         => __( 'Autoplay Speed', 'nubocoder-bb-carousel' ),
						  'description'   => __( 'milliseconds.', 'nubocoder-bb-carousel' ),
						  'default'       => '3000',
						),
						'arrows' => array(
						  'type'          => 'select',
						  'label'         => __( 'Arrows', 'nubocoder-bb-carousel' ),
						  'description'   => __( 'Prev/Next Arrows.', 'nubocoder-bb-carousel' ),
						  'default'       => 'true',
						  'options'       => array(
							'true'      => __( 'Enable', 'nubocoder-bb-carousel' ),
							'false'      => __( 'Disable', 'nubocoder-bb-carousel' )
						  ),
						),
						'dots' => array(
						  'type'          => 'select',
						  'label'         => __( 'Dots', 'nubocoder-bb-carousel' ),
						  'description'   => __( 'Show dot indicators.', 'nubocoder-bb-carousel' ),
						  'default'       => 'false',
						  'options'       => array(
							'true'      => __( 'Enable', 'nubocoder-bb-carousel' ),
							'false'      => __( 'Disable', 'nubocoder-bb-carousel' )
						  ),
						),
						'infinite' => array(
						  'type'          => 'select',
						  'label'         => __( 'Infinite', 'nubocoder-bb-carousel' ),
						  'description'   => __( 'Infinite loop sliding.', 'nubocoder-bb-carousel' ),
						  'default'       => 'true',
						  'options'       => array(
							'true'      => __( 'Enable', 'nubocoder-bb-carousel' ),
							'false'      => __( 'Disable', 'nubocoder-bb-carousel' )
						  ),
						),
						'rows' => array(
						  'type'          => 'unit',
						  'label'         => __( 'Rows', 'nubocoder-bb-carousel' ),
						  'description'   => __( 'Setting this to more than 1 initializes grid mode. Use slidesPerRow to set how many slides should be in each row.', 'nubocoder-bb-carousel' ),
						  'default'       => '1',
						),
						'slides_per_row' => array(
						  'type'          => 'unit',
						  'label'         => __( 'Slides Per Row', 'nubocoder-bb-carousel' ),
						  'description'   => __( 'With grid mode intialized via the rows option, this sets how many slides are in each grid row.', 'nubocoder-bb-carousel' ),
						  'default'       => '1',
						),
						'slides_to_show' => array(
						  'type'          => 'unit',
						  'label'         => __( 'Slides To Show', 'nubocoder-bb-carousel' ),
						  'description'   => __( '# of slides to show.', 'nubocoder-bb-carousel' ),
						  'default'       => '1',
						),
						'slides_to_scroll' => array(
						  'type'          => 'unit',
						  'label'         => __( 'Slides To Scroll', 'nubocoder-bb-carousel' ),
						  'description'   => __( '# of slides to scroll.', 'nubocoder-bb-carousel' ),
						  'default'       => '1',
						),
						'speed' => array(
						  'type'          => 'unit',
						  'label'         => __( 'Speed', 'nubocoder-bb-carousel' ),
						  'description'   => __( 'Slide/Fade animation speed (ms).', 'nubocoder-bb-carousel' ),
						  'default'       => '300',
						),
					),
				),
			),
		),
	),
));

/**
 * Register the carousel items form.
 */
FLBuilder::register_settings_form('nubocoder_bb_carousel_item', array(
	'title'	=> __( 'Items', 'nubocoder-bb-carousel' ),
	'tabs'	=> array(
		'general'	=> array(
			'title'		=> __( 'General', 'nubocoder-bb-carousel' ),
			'sections'	=> array(
				'general'	=> array(
					'title'		=> '',
					'fields'	=> array(
						'label' => array(
							'type'  => 'text',
							'label' => __( 'Label', 'nubocoder-bb-carousel' ),
						),
						'type' => array(
						  'type'          => 'select',
						  'label'         => __( 'Type', 'nubocoder-bb-carousel' ),
						  'default'       => 'default',
						  'options'       => array(
							'default'		=> __( 'Default', 'nubocoder-bb-carousel' ),
							'custom_html'	=> __( 'Custom HTML', 'nubocoder-bb-carousel' ),
							'shortcode'		=> __( 'Shortcode', 'nubocoder-bb-carousel' ),
						  ),
						  'toggle'        => array(
							'default'      => array(
							  'sections'      => array( 'default' )
							),
							'custom_html'      => array(
							  'sections'      => array( 'html' )
							),
							'shortcode'      => array(
							  'sections'      => array( 'shortcode' )
							),
						  )
						),
					),
				),
				'default'	=> array(
					'title'		=> __( 'Main', 'nubocoder-bb-carousel' ),
					'fields'	=> array(
						'image' => array(
						  'type'          => 'photo',
						  'label'         => __('Image', 'nubocoder-bb-carousel'),
						  'show_remove'   => true,
						),
						'image_size' => array(
						  'type'          => 'photo-sizes',
						  'label'         => __('Image Size', 'nubocoder-bb-carousel'),
						  'default'       => 'medium',
						),
						'content' => array(
						  'type'          => 'editor',
						  'media_buttons' => true,
						  'wpautop'       => true
						),
						'with_link' => array(
							'type'          => 'select',
							'label'         => 'With Link',
							'default'       => 'false',
							'options'       => array(
								'false'     => __( 'Disable', 'nubocoder-bb-carousel' ),
								'true'     => __( 'Enable', 'nubocoder-bb-carousel' ),
							  ),
							'toggle'        => array(
								  'true'      => array(
									'fields'      => array( 'link', 'link_options' ),
								  ),
							  )
						),
						'link' => array(
							'type'          => 'link',
							'label'         => 'Link',
							'show_target'   => true,
							'show_nofollow' => true,
						),
						'link_options' => array(
						  'type'          => 'select',
						  'label'         => __( 'Link Options', 'nubocoder-bb-carousel' ),
						  'description'   => __( '', 'nubocoder-bb-carousel' ),
						  'default'       => 'link_add_text',
						  'multi-select'  => true,
						  'options'       => array(
							'link_image'     => __( 'Link Image', 'nubocoder-bb-carousel' ),
							'link_title'     => __( 'Link Title', 'nubocoder-bb-carousel' ),
							'link_item'      => __( 'Link Entire Item', 'nubocoder-bb-carousel' ),
							'link_add_text'  => __( 'Link Text (bellow content)', 'nubocoder-bb-carousel' ),
						  ),
						  'toggle'        => array(
							  'link_add_text'      => array(
								'fields'      => array( 'link_text' ),
							  ),
						  )
						),
						'link_text' => array(
						  'type'          => 'text',
						  'label'         => __( 'Link Text', 'nubocoder-bb-carousel' ),
						  'default'       => '',
						  'description'   => __( 'Link text that will appear bellow content', 'nubocoder-bb-carousel' ),
						),
					),
				),
				'html'		=> array(
					'title'		=> __( 'Main', 'nubocoder-bb-carousel' ),
					'fields'	=> array(
						'html' => array(
						  'type'          => 'code',
						  'editor'        => 'html',
						  'rows'          => '18'
						),
					),
				),
				'shortcode'	=> array(
					'title'		=> __( 'Shortcode', 'nubocoder-bb-carousel' ),
					'fields'	=> array(
						'shortcode' => array(
						  'type'          => 'text',
						  'label'         => __( 'Shortcode', 'nubocoder-bb-carousel' ),
						  'default'       => '',
						),
					),
				),
			),
		),
	),
));













