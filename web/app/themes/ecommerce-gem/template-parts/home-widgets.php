<?php
/**
 * Home widgets
 *
 * @package eCommerce_Gem
 */

// Bail if not home page.
if ( ! is_page_template( 'templates/home.php' )  ) {
	return;
}
?>

<div id="home-page-widget-area" class="widget-area">
	
		<?php if ( is_active_sidebar( 'home-page-widget-area' ) ) : ?>
			<?php dynamic_sidebar( 'home-page-widget-area' ); ?>
		<?php else: ?>
			<div class="container">
				<?php
				// CTA.
				$args = array(
					'title'       => esc_html__( 'This is eCommerce Gem', 'ecommerce-gem' ),
					'filter'      => true,
					'button_url'  => '#',
					'button_text' => esc_html__( 'Learn More', 'ecommerce-gem' ),
					'text'        => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos dolor possimus inventore ut sint et, blanditiis nobis tempore voluptatum, autem in. Provident fugiat sunt placeat quibusdam dolore, quasi repudiandae eius.', 'ecommerce-gem' ),
				);
				if ( current_user_can( 'edit_theme_options' ) ) {
					$args['button_url']  = esc_url( admin_url( 'widgets.php' ) );
					$args['button_text'] = esc_html__( 'Add Widgets', 'ecommerce-gem' );
					$args['text']        = esc_html__( 'Widgets of Home Page Widget Area will be displayed here. Go to Appearance->Widgets in admin panel to add widgets. All these widgets will be replaced when you start adding widgets.', 'ecommerce-gem' );
				}

				$widget_args = array(
					'before_title' => '<h2 class="widget-title">',
					'after_title'  => '</h2>',
				);
				the_widget( 'eCommerce_Gem_CTA_Widget', $args, $widget_args );
				?>
			</div>
		<?php endif; ?>
	
</div><!-- #home-page-widget-area -->

