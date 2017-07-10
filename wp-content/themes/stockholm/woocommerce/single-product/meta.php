<?php
/**
 * Single Product Meta
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/meta.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;

if ( version_compare( WOOCOMMERCE_VERSION, '3.0' ) >= 0 ) { ?>
	<div class="product_meta">
		
		<?php do_action( 'woocommerce_product_meta_start' ); ?>
		
		<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>
			
			<span class="sku_wrapper"><?php esc_html_e( 'SKU:', 'qode' ); ?> <span class="sku"><?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'qode' ); ?></span></span>
		
		<?php endif; ?>
		
		<?php echo wc_get_product_category_list( $product->get_id(), '<span>,</span>  ', '<span class="posted_in">' . _n( 'Category:', 'Categories:', count( $product->get_category_ids() ), 'qode' ) . ' ', '</span>' ); ?>
		
		<?php echo wc_get_product_tag_list( $product->get_id(), '<span>,</span>  ', '<span class="tagged_as">' . _n( 'Tag:', 'Tags:', count( $product->get_tag_ids() ), 'qode' ) . ' ', '</span>' ); ?>
		
		<?php do_action( 'woocommerce_product_meta_end' ); ?>
	
	</div>
<?php } else {
	global $post;
	$cat_count = sizeof( get_the_terms( $post->ID, 'product_cat' ) );
	$tag_count = sizeof( get_the_terms( $post->ID, 'product_tag' ) ); ?>
	
	<div class="product_meta">
		
		<?php do_action( 'woocommerce_product_meta_start' ); ?>
		
		<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>
			
			<span class="sku_wrapper"><?php esc_html_e( 'SKU:', 'qode' ); ?> <span class="sku" itemprop="sku"><?php echo ( $sku = $product->get_sku() ) ? $sku : __( 'N/A', 'qode' ); ?></span></span>
		
		<?php endif; ?>
		
		<?php print $product->get_categories( '<span>,</span>  ', '<span class="posted_in">' . _n( 'Category:', 'Categories:', $cat_count, 'qode' ) . ' ','</span>' ); ?>
		
		<?php print $product->get_tags( '<span>,</span>  ', '<span class="tagged_as">' . _n( 'Tag:', 'Tags:', $tag_count, 'qode' ) . ' ', '</span>' ); ?>
		
		<?php do_action( 'woocommerce_product_meta_end' ); ?>
	
	</div>
<?php } ?>