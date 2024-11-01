<?php
class wpshare247_countdown extends \Elementor\Widget_Base {

	public function get_name() {
		return 'wpshare247-countdown';
	}

	public function get_title() {
		return esc_html__( 'Ws247 Count Down', 'wpshare247-elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-countdown';
	}

	public function get_categories() {
		return [ 'wpshare247' ];
	}

	public function get_keywords() {
		return [ 'tbay', 'wpshare247', 'countdown', 'event', 'clock'];
	}

	protected function register_countdown_section(){
		$this->start_controls_section(
			'section_countdown',
			[
				'label' => esc_html__( 'Countdown', 'elementor' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT, //TAB_ADVANCED
			]
		);

			$this->add_control(
				'countdown_timepicker',
				[
					'label' => esc_html__( 'Due Date', 'elementor' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => date('Y/m/d h:i:s', strtotime('+3 days')),
					'placeholder' => date('Y/m/d h:i:s'),
					'description' => esc_html__( 'YYYY/MM/DD or YYYY/MM/DD H:I:S', 'elementor' ),
				]
			);

			//-----------------------
			$this->add_control(
				'countdown_day_hr',
				[
					'type' => \Elementor\Controls_Manager::DIVIDER,
				]
			);

			$this->add_control(
				'countdown_day_on',
				[
					'label' => esc_html__( 'Days', 'elementor' ),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'On', 'elementor' ),
					'label_off' => esc_html__( 'Off', 'elementor' ),
					'return_value' => 'yes',
					'default' => 'yes',
				]
			);

			$this->add_control(
				'countdown_day_text',
				[
					'label' => esc_html__( 'Days label', 'elementor' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Days', 'elementor' ),
					'placeholder' => esc_html__( 'Days', 'elementor' ),
					'condition' => [
						'countdown_day_on' => 'yes',
					],
				]
			);

			//-----------------------
			$this->add_control(
				'countdown_hours_hr',
				[
					'type' => \Elementor\Controls_Manager::DIVIDER,
				]
			);

			$this->add_control(
				'countdown_hours_on',
				[
					'label' => esc_html__( 'Hours', 'elementor' ),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'On', 'elementor' ),
					'label_off' => esc_html__( 'Off', 'elementor' ),
					'return_value' => 'yes',
					'default' => 'yes',
				]
			);

			$this->add_control(
				'countdown_hours_text',
				[
					'label' => esc_html__( 'Hours label', 'elementor' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Hours', 'elementor' ),
					'placeholder' => esc_html__( 'Hours', 'elementor' ),
					'condition' => [
						'countdown_hours_on' => 'yes',
					],
				]
			);

			//-----------------------
			$this->add_control(
				'countdown_minutes_hr',
				[
					'type' => \Elementor\Controls_Manager::DIVIDER,
				]
			);

			$this->add_control(
				'countdown_minutes_on',
				[
					'label' => esc_html__( 'Minutes', 'elementor' ),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'On', 'elementor' ),
					'label_off' => esc_html__( 'Off', 'elementor' ),
					'return_value' => 'yes',
					'default' => 'yes',
				]
			);

			$this->add_control(
				'countdown_minutes_text',
				[
					'label' => esc_html__( 'Minutes label', 'elementor' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Minutes', 'elementor' ),
					'placeholder' => esc_html__( 'Minutes', 'elementor' ),
					'condition' => [
						'countdown_minutes_on' => 'yes',
					],
				]
			);

			//-----------------------
			$this->add_control(
				'countdown_seconds_hr',
				[
					'type' => \Elementor\Controls_Manager::DIVIDER,
				]
			);

			$this->add_control(
				'countdown_seconds_on',
				[
					'label' => esc_html__( 'Seconds', 'elementor' ),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'On', 'elementor' ),
					'label_off' => esc_html__( 'Off', 'elementor' ),
					'return_value' => 'yes',
					'default' => 'yes',
				]
			);

			$this->add_control(
				'countdown_seconds_text',
				[
					'label' => esc_html__( 'Seconds label', 'elementor' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Seconds', 'elementor' ),
					'placeholder' => esc_html__( 'Seconds', 'elementor' ),
					'condition' => [
						'countdown_seconds_on' => 'yes',
					],
				]
			);

			$this->add_control(
				'countdown_s_hr',
				[
					'type' => \Elementor\Controls_Manager::DIVIDER,
				]
			);

			$this->add_control(
				'countdown_s',
				[
					'label' => esc_html__( 'Type', 'elementor' ),
					'type' => \Elementor\Controls_Manager::SELECT,
					'default' => 'block',
					'options' => [
								'block' => esc_html__( 'Block', 'elementor' ),
								'inline' => esc_html__( 'Inline', 'elementor' )
								]
				]
			);

			$this->add_control(
				'countdown_align',
				[
					'label' => esc_html__( 'Alignment', 'elementor' ),
					'type' => \Elementor\Controls_Manager::CHOOSE,
					'options' => [
						'left' => [
							'title' => esc_html__( 'Left', 'elementor' ),
							'icon' => 'eicon-text-align-left',
						],
						'center' => [
							'title' => esc_html__( 'Center', 'elementor' ),
							'icon' => 'eicon-text-align-center',
						],
						'right' => [
							'title' => esc_html__( 'Right', 'elementor' ),
							'icon' => 'eicon-text-align-right',
						],
					],
					'default' => 'center',
					'toggle' => true,
					'selectors' => [
						'{{WRAPPER}} .type-inline' => 'text-align: {{VALUE}};',
					],
					'condition' => [
						'countdown_s' => 'inline',
					]
				]
			);
		
		$this->end_controls_section();
	}

	protected function register_style_section(){
		$this->start_controls_section(
			'section_style_box',
			[
				'label' => esc_html__( 'Box', 'elementor' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE, //TAB_ADVANCED
			]
		);
			$this->add_group_control(
					\Elementor\Group_Control_Background::get_type(),
					[
						'name' => 'box_bg',
						'types' => [ 'classic', 'gradient' ],
						'selector' => '{{WRAPPER}} .countdown-col',
					]
				);

			$this->add_group_control(
					\Elementor\Group_Control_Border::get_type(),
					[
						'name' => 'box_border',
						'selector' => '{{WRAPPER}} .countdown-col',
					]
				);
			$this->add_control(
					'box_border_radius',
					[
						'label' => esc_html__( 'Border Radius', 'elementor' ),
						'type' => \Elementor\Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em', 'custom' ],
						'selectors' => [
							'{{WRAPPER}} .countdown-col' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);

			$this->add_control(
					'box_margin',
					[
						'label' => esc_html__( 'Margin', 'elementor' ),
						'type' => \Elementor\Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em', 'custom' ],
						'selectors' => [
							'{{WRAPPER}} .countdown-col' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);

		$this->end_controls_section();


		//--------------
		$this->start_controls_section(
			'section_style_content',
			[
				'label' => esc_html__( 'Content', 'elementor' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE, //TAB_ADVANCED
			]
		);
			$this->add_control(
				'digits_heading',
				[
					'label' => esc_html__( 'Digits', 'elementor' ),
					'type' => \Elementor\Controls_Manager::HEADING,
					'separator' => 'before',
				]
			);

			$this->add_control(
					'content_color',
					[
						'label' => esc_html__( 'Color', 'elementor' ),
						'type' => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .countdown-col .dt' => 'color: {{VALUE}}',
						],
					]
				);

			$this->add_group_control(
					\Elementor\Group_Control_Typography::get_type(),
					[
						'name' => 'content_typography',
						'selector' => '{{WRAPPER}} .countdown-col .dt',
					]
				);

			$this->add_control(
				'label_heading',
				[
					'label' => esc_html__( 'Label', 'elementor' ),
					'type' => \Elementor\Controls_Manager::HEADING,
					'separator' => 'before',
				]
			);

			$this->add_control(
					'label_color',
					[
						'label' => esc_html__( 'Color', 'elementor' ),
						'type' => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .countdown-col .txt' => 'color: {{VALUE}}',
						],
					]
				);

			$this->add_group_control(
					\Elementor\Group_Control_Typography::get_type(),
					[
						'name' => 'label_typography',
						'selector' => '{{WRAPPER}} .countdown-col .txt',
					]
				);

			$this->add_control(
				'label_align',
				[
					'label' => esc_html__( 'Align', 'elementor' ),
					'type' => \Elementor\Controls_Manager::SELECT,
					'default' => 'below',
					'options' => [
								'below' => esc_html__( 'Below', 'elementor' ),
								'right' => esc_html__( 'Right', 'elementor' )
								]
				]
			);




		$this->end_controls_section();
	}

	protected function register_controls() {
		$this->register_countdown_section();
		$this->register_style_section();
	}
	
	protected function render() {
		$settings = $this->get_settings_for_display();

		$countdown_timepicker = $settings['countdown_timepicker'];


		$countdown_day_on = ($settings['countdown_day_on']==='yes') ? true : false;
		$countdown_day_text = $settings['countdown_day_text'];
		$countdown_day_html = '';
		if($countdown_day_on){
			$countdown_day_html = '<div class="countdown-col"><span class="dt">%D</span><span class="txt"> '.esc_attr($countdown_day_text).'</span></div> ';
		}

		$countdown_hours_on = ($settings['countdown_hours_on']==='yes') ? true : false;
		$countdown_hours_text = $settings['countdown_hours_text'];
		$countdown_hours_html = '';
		if($countdown_hours_on){
			$countdown_hours_html = '<div class="countdown-col"><span class="dt">%H</span><span class="txt"> '.esc_attr($countdown_hours_text).'</span></div> ';
		}

		$countdown_minutes_on = ($settings['countdown_minutes_on']==='yes') ? true : false;
		$countdown_minutes_text = $settings['countdown_minutes_text'];
		$countdown_minutes_html = '';
		if($countdown_minutes_on){
			$countdown_minutes_html = '<div class="countdown-col"><span class="dt">%M</span><span class="txt"> '.esc_attr($countdown_minutes_text).'</span></div> ';
		}

		$countdown_seconds_on = ($settings['countdown_seconds_on']==='yes') ? true : false;
		$countdown_seconds_text = $settings['countdown_seconds_text'];
		$countdown_seconds_html = '';
		if($countdown_seconds_on){
			$countdown_seconds_html = '<div class="countdown-col"><span class="dt">%S</span><span class="txt"> '.esc_attr($countdown_seconds_text).'</span></div> ';
		}

		$label_align_class = 'txt-'.$settings['label_align']; 

		$countdown_s = 'type-'.$settings['countdown_s'];

		$clock_id = uniqid('clock-'); 
	?>

		<section class="wpshare247-elementor-addon wpshare247-countdown">
			<div id="<?php echo esc_attr($clock_id); ?>" class="wpshare247-clock <?php echo esc_attr($label_align_class); ?> <?php echo esc_attr($countdown_s); ?>"></div>
		</section>

		<script type="text/javascript">
			jQuery(document).ready(function($) {
				jQuery('#<?php echo esc_attr($clock_id); ?>').countdown('<?php echo esc_attr($countdown_timepicker); ?>', function(event) {
				  var $this = $(this).html(event.strftime(''
				    + '<?php echo $countdown_day_html; ?>'
				    + '<?php echo $countdown_hours_html; ?> '
				    + '<?php echo $countdown_minutes_html; ?> '
				    + '<?php echo $countdown_seconds_html; ?>'));
				});
			});	
		</script>
	<?php
	}
}