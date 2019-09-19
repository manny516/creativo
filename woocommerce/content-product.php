<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.6.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>

<?php
$price = number_format(get_post_meta( get_the_ID(), '_regular_price', true), 2, '.', '');
$ida = get_post_thumbnail_id( get_the_ID() );
if(has_post_thumbnail())
{
	$thumgSmallr = get_the_post_thumbnail(get_the_ID(), 'creatividad_woocommerce_thumbnail');
}
else
{
	$thumgSmallr = '<img alt="" src="http://placehold.it/360x360" alt="ThemeOnLab"/>';
}
?>
<li <?php post_class( ); ?> >
		<?php $sale = get_post_meta( get_the_ID(), '_sale_price', true);?>
		<div class="four columns places creatividad-product row col-md-12">

		<section>
				<a href="<?php the_permalink(); ?>">
				<div class="creatividad-wrapper">
					<?php

					     echo balanceTags($thumgSmallr,true);
					?>

					<h3> <?php the_title(); ?> </h3>
				<?php
					if($sale != NULL){ 
				?>
				<span class="onsale"> <?php esc_html_e('Sale !','creatividad'); ?> </span>
				<?php } ?>
					<div class="view-prod"> <p> <?php esc_html_e( 'View Item', 'creatividad'); ?> </p>  </div>
					<div class="add-to-cart-btn"><?php echo do_shortcode('[add_to_cart id="'.get_the_ID().'"]'); ?></div>
				</div>
				</a>
			</section>
			<h2><?php the_title(); ?></h2>
			<div class="clear"> </div>
			<?php
				if($sale != NULL){ 
			?>
			<del class="sale-price"><span><?php echo get_woocommerce_currency_symbol()." ".$sale; ?> </span></del>
			<ins><span class="main-price"> <?php echo get_woocommerce_currency_symbol(); ?><?php echo esc_html($price); ?></span></ins>
			<?php  
			}else{
			?>
			<span class="main-price"> <?php echo get_woocommerce_currency_symbol(); ?><?php echo esc_html($price); ?></span>
			<?php 
			}
			?>
		</div>
	</li>
