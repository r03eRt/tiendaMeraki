
$j(document).ready(function() {
	"use strict";

    $j('.price_slider_wrapper').parents('.widget').addClass('widget_price_filter');
    initSelect2();
    initAddToCartPlusMinus();
	qodeInitSingleProductLightbox();
});

function initSelect2(){
	"use strict";
	
    $j('.woocommerce-ordering .orderby, #calc_shipping_country, #dropdown_product_cat, select#calc_shipping_state').select2({
        minimumResultsForSearch: -1
    });
    $j('.woocommerce-account .country_select').select2();
}

function initAddToCartPlusMinus(){
	"use strict";
	
	$j(document).on( 'click', '.quantity .plus, .quantity .minus', function() {

		// Get values
		var $qty		= $j(this).closest('.quantity').find('.qty'),
			currentVal	= parseFloat( $qty.val() ),
			max			= parseFloat( $qty.attr( 'max' ) ),
			min			= parseFloat( $qty.attr( 'min' ) ),
			step		= $qty.attr( 'step' );

		// Format values
		if ( ! currentVal || currentVal === '' || currentVal === 'NaN' ) currentVal = 0;
		if ( max === '' || max === 'NaN' ) max = '';
		if ( min === '' || min === 'NaN' ) min = 0;
		if ( step === 'any' || step === '' || step === undefined || parseFloat( step ) === 'NaN' ) step = 1;

		// Change the value
		if ( $j( this ).is( '.plus' ) ) {

			if ( max && ( max == currentVal || currentVal > max ) ) {
				$qty.val( max );
			} else {
				$qty.val( currentVal + parseFloat( step ) );
			}

		} else {

			if ( min && ( min == currentVal || currentVal < min ) ) {
				$qty.val( min );
			} else if ( currentVal > 0 ) {
				$qty.val( currentVal - parseFloat( step ) );
			}
		}

		// Trigger change event
		$qty.trigger( 'change' );
	});
}

/*
 ** Init Product Single Pretty Photo attributes
 */
function qodeInitSingleProductLightbox() {
	"use strict";
	
	var item = $j('.woocommerce.single-product .product .images .woocommerce-product-gallery__image');
	
	if(item.length) {
		item.each(function() {
			var thisItem = $j(this).children('a');
			
			thisItem.attr('data-rel', 'prettyPhoto[woo_single_pretty_photo]');
			
			$j('a[data-rel]').each(function() {
				$j(this).attr('rel', $j(this).data('rel'));
			});
			
			$j("a[rel^='prettyPhoto']").prettyPhoto({
				animation_speed: 'normal', /* fast/slow/normal */
				slideshow: false, /* false OR interval time in ms */
				autoplay_slideshow: false, /* true/false */
				opacity: 0.80, /* Value between 0 and 1 */
				show_title: true, /* true/false */
				allow_resize: true, /* Resize the photos bigger than viewport. true/false */
				horizontal_padding: 0,
				default_width: 650,
				default_height: 400,
				counter_separator_label: '/', /* The separator for the gallery counter 1 "of" 2 */
				theme: 'pp_default', /* light_rounded / dark_rounded / light_square / dark_square / facebook */
				hideflash: false, /* Hides all the flash object on a page, set to TRUE if flash appears over prettyPhoto */
				wmode: 'opaque', /* Set the flash wmode attribute */
				autoplay: true, /* Automatically start videos: True/False */
				modal: false, /* If set to true, only the close button will close the window */
				overlay_gallery: false, /* If set to true, a gallery will overlay the fullscreen image on mouse over */
				keyboard_shortcuts: true, /* Set to false if you open forms inside prettyPhoto */
				deeplinking: false,
				social_tools: false
			});
		});
	}
}
