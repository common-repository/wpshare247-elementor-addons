<?php
class wpshare247_product_single_price_widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'wpshare247-show-product-price';
	}

	public function get_title() {
		return esc_html__( 'Ws247 Product Price', 'wpshare247-elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-product-price';
	}

	public function get_categories() {
		return [ 'wpshare247' ];
	}

	public function get_keywords() {
		return [ 'tbay', 'wpshare247', 'product', 'price', 'regular', 'sale' ];
	}


	protected function register_layout_controls(){
	
		$this->add_control(
			'paginate',
			[
				'label' => esc_html__( 'Xuống dòng', 'elementor' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'On', 'elementor' ),
				'label_off' => esc_html__( 'Off', 'elementor' ),
				'return_value' => 'block',
				'default' => '',
				'selectors' => [
						'div.product {{WRAPPER}} p.price del' => 'display: {{VALUE}};',
						'{{WRAPPER}} del' => 'display: {{VALUE}};',
						'{{WRAPPER}} .d-price' => 'display: {{VALUE}};'
					],
			]
		);

		$this->add_control(
					'paginate_align',
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
						'default' => 'Left',
						'toggle' => true,
						'selectors' => [
							'{{WRAPPER}} .price' => 'text-align: {{VALUE}};',
						],
					]
				);

			$this->add_control(
					'price_custom',
					[
						'label' => esc_html__( 'Tùy chỉnh giá', 'elementor' ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'On', 'elementor' ),
						'label_off' => esc_html__( 'Off', 'elementor' ),
						'return_value' => 'yes',
						'default' => '',
						'selectors' => [
								'{{WRAPPER}} .wp247-product-custom del' => 'text-decoration: none;',
								'{{WRAPPER}} .wp247-product-custom del .amount' => 'text-decoration: line-through;',

								'{{WRAPPER}} .wooc-price-og' => 'display: none;',
								'{{WRAPPER}} .wp247-product-custom' => 'display: block !important;',
							],
					]
				);


			$this->add_control(
				'price_text',
				[
					'label' => esc_html__( 'Tiền tố giá', 'elementor' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Giá niêm yết:', 'elementor' ),
					'placeholder' => esc_html__( 'Giá niêm yết:', 'elementor' ),
					'condition' => [
						'price_custom' => 'yes',
					]
				]
			);
			$this->add_control(
					'price_text_hd',
					[
						'label' => esc_html__( 'Ẩn tiền tố này', 'elementor' ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'On', 'elementor' ),
						'label_off' => esc_html__( 'Off', 'elementor' ),
						'return_value' => 'yes',
						'default' => '',
						'condition' => [
							'price_custom' => 'yes',
						],
						'selectors' => [
								'{{WRAPPER}} del' => 'display: none'
							],
					]
				);


			$this->add_control(
				'sale_price_text',
				[
					'label' => esc_html__( 'Tiền tố giá giảm', 'elementor' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Giá bán:', 'elementor' ),
					'placeholder' => esc_html__( 'Giá bán:', 'elementor' ),
					'condition' => [
						'price_custom' => 'yes',
					]
				]
			);
			$this->add_control(
					'sale_price_text_hd',
					[
						'label' => esc_html__( 'Ẩn tiền tố này', 'elementor' ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'On', 'elementor' ),
						'label_off' => esc_html__( 'Off', 'elementor' ),
						'return_value' => 'yes',
						'default' => '',
						'condition' => [
							'price_custom' => 'yes',
						],
						'selectors' => [
								'{{WRAPPER}} ins' => 'display: none'
							],
					]
				);

			$this->add_control(
				'diff_price_text',
				[
					'label' => esc_html__( 'Tiền tố tiết kiệm', 'elementor' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Tiết kiệm:', 'elementor' ),
					'placeholder' => esc_html__( 'Tiết kiệm:', 'elementor' ),
					'condition' => [
						'price_custom' => 'yes',
					]
				]
			);
			$this->add_control(
					'diff_price_text_hd',
					[
						'label' => esc_html__( 'Ẩn tiền tố này', 'elementor' ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'On', 'elementor' ),
						'label_off' => esc_html__( 'Off', 'elementor' ),
						'return_value' => 'yes',
						'default' => '',
						'condition' => [
							'price_custom' => 'yes',
						],
						'selectors' => [
								'{{WRAPPER}} .d-price' => 'display: none'
							],
					]
				);
	}

	protected function register_tab_layout_section(){
		$this->start_controls_section(
			'section_layout',
			[
				'label' => esc_html__( 'Layout', 'elementor' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT, //TAB_ADVANCED
			]
		);
			$this->register_layout_controls();

		$this->end_controls_section();
	}


	protected function register_price_controls(){
		$this->add_control(
					'price_style_color',
					[
						'label' => esc_html__( 'Color', 'elementor' ),
						'type' => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} del' => 'color: {{VALUE}}'

						],
					]
				);

		$this->add_control(
					'price_style_color_prefix',
					[
						'label' => esc_html__( 'Màu tiền tố', 'elementor' ),
						'type' => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} del strong' => 'color: {{VALUE}}'

						],
					]
				);

		$this->add_group_control(
					\Elementor\Group_Control_Typography::get_type(),
					[
						'name' => 'price_typography',
						'selector' => '{{WRAPPER}} del',
					]
				);
	}

	protected function register_sale_price_controls(){
		$this->add_control(
					'sale_price_style_color',
					[
						'label' => esc_html__( 'Color', 'elementor' ),
						'type' => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} ins' => 'color: {{VALUE}}',
						],
					]
				);

		$this->add_control(
					'sale_price_style_color_prefix',
					[
						'label' => esc_html__( 'Màu tiền tố', 'elementor' ),
						'type' => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} ins strong' => 'color: {{VALUE}}'

						],
					]
				);

		$this->add_group_control(
					\Elementor\Group_Control_Typography::get_type(),
					[
						'name' => 'sale_price_typography',
						'selector' => '{{WRAPPER}} ins',
					]
				);
	}

	protected function register_diff_price_controls(){
		$this->add_control(
					'diff_price_style_color',
					[
						'label' => esc_html__( 'Color', 'elementor' ),
						'type' => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .d-price' => 'color: {{VALUE}}',
						],
					]
				);

		$this->add_control(
					'diff_price_style_color_prefix',
					[
						'label' => esc_html__( 'Màu tiền tố', 'elementor' ),
						'type' => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .d-price strong' => 'color: {{VALUE}}'

						],
					]
				);
		$this->add_group_control(
					\Elementor\Group_Control_Typography::get_type(),
					[
						'name' => 'diff_price_typography',
						'selector' => '{{WRAPPER}} .d-price',
					]
				);
	}

	
	

	protected function register_tab_style_section(){
		//----------------------
		$this->start_controls_section(
			'section_price_style',
			[
				'label' => esc_html__( 'Price', 'woocommerce' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE, //TAB_ADVANCED
			]
		);
			$this->register_price_controls();

		$this->end_controls_section();

		//----------------------
		$this->start_controls_section(
			'section_price_style_sale',
			[
				'label' => esc_html__( 'Discount:', 'woocommerce' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE, //TAB_ADVANCED
			]
		);
			$this->register_sale_price_controls();

		$this->end_controls_section();

		//----------------------
		$this->start_controls_section(
			'section_diff_price_style_sale',
			[
				'label' => esc_html__( 'Tiết kiệm:', 'woocommerce' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE, //TAB_ADVANCED
			]
		);
			$this->register_diff_price_controls();

		$this->end_controls_section();

	}

	protected function register_controls() {

		$this->register_tab_layout_section();

		$this->register_tab_style_section();
	}



	protected function render() {
		$settings = $this->get_settings_for_display();
		$price_custom = $settings['price_custom'];

		$price_text = isset($settings['price_text']) ? $settings['price_text'] : 'Giá niêm yết:';
		$sale_price_text = isset($settings['sale_price_text']) ? $settings['sale_price_text'] : 'Giá bán:';
		$diff_price_text = isset($settings['diff_price_text']) ? $settings['diff_price_text'] : 'Tiết kiệm:';

		global $product;

		if( !is_object($product) ){
			$product = Ws247_EA_Woocommerce::get_product();
		}

		if( is_object($product) ):
			$price = $product->price;
			$regular_price = $product->regular_price;
			$d = $regular_price - $price;
	?>
		<section class="wpshare247-elementor-addon">

			
			<p class="price wp247-product-custom" style="display: none;">
				<del><?php if($price_text){ ?><strong><?php echo $price_text; ?></strong><?php } ?> <?php echo woocommerce_price($regular_price);?></del>
				<ins><?php if($sale_price_text){ ?><strong><?php echo $sale_price_text; ?></strong><?php } ?> <?php echo woocommerce_price($price);?></ins>
				<span class="d-price"><?php if($diff_price_text){ ?><strong><?php echo $diff_price_text; ?></strong><?php } ?> <?php echo woocommerce_price($d);?></span>
			</p>

			<p class="wooc-price-og <?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?>"><?php echo $product->get_price_html(); ?></p>

		</section>

		<?php
		endif;
	}
}