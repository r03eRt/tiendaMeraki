<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Settings for MRW Carrier shipping
 */
return array(
	'enabled' => array(
		'title'   => __( 'Enable', 'woocommerce-mrw-carrier' ),
		'type'    => 'checkbox',
		'label'   => __( 'Enable MRW Carrier', 'woocommerce-mrw-carrier' ),
		'default' => 'yes'
		),
	'mrwtitle' => array(
		'title'       => __( 'Title', 'woocommerce-mrw-carrier' ),
		'type'        => 'text',
		'description' => __( 'This controls the title which the user sees during checkout.', 'woocommerce-mrw-carrier' ),
		'default'     => __( 'MRW', 'woocommerce-mrw-carrier' ),
		'desc_tip'    => true,
		),
	'mrwtype' => array(
		'title'       => __( 'Environment', 'woocommerce-mrw-carrier' ),
		'type'        => 'select',
		'class'       => 'wc-enhanced-select',
		'description' => __( 'Environment development/live', 'woocommerce-mrw-carrier' ),
		'default'     => 'development',
		'options'     => array(
			'development' => __( 'Development environment', 'woocommerce-mrw-carrier' ),
			'live'     	  => __( 'Live environment', 'woocommerce-mrw-carrier' ),
			),
		'desc_tip'    => true,
		),
	'mrwfranchise' => array(
		'title'       => __( 'Franchise', 'woocommerce-mrw-carrier' ),
		'type'        => 'text',
		'description' => __( '5 digits number XXXXX', 'woocommerce-mrw-carrier'),
		'default'     => '',
		'desc_tip'    =>  __( 'Franchise number, must be 5 digits long', 'woocommerce-mrw-carrier' ),
		'placeholder' => 'e.g. 12345',
		),
	'mrwsubscriber' => array(
		'title'       => __( 'Subscriber', 'woocommerce-mrw-carrier' ),
		'type'        => 'text',
		'desc_tip'    => __( 'Subsccriber number, must be 6 digits long', 'woocommerce-mrw-carrier' ),
		'default'     => '',
		'description' => __( '6 digits number XXXXXX', 'woocommerce-mrw-carrier' ),
		'placeholder' => __('e.g. 123456' ),
		),
	'mrwdepartment' => array(
		'title'       => __( 'Department', 'woocommerce-mrw-carrier' ),
		'type'        => 'text',
		'desc_tip'    => __( 'Department code (optional)', 'woocommerce-mrw-carrier' ),
		'default'     => '',
		'placeholder' => __( 'Optional', 'woocommerce-mrw-carrier' ),
		),
	'mrwuser' => array(
		'title'       => __( 'MRW User', 'woocommerce-mrw-carrier' ),
		'type'        => 'text',
		'default'     => '',
		),
	'mrwpass' => array(
		'title'       => __( 'MRW Password', 'woocommerce-mrw-carrier' ),
		'type'        => 'text',
		'default'     => '',
		),
	'mrwpasstrack' => array(
		'title'       => __( 'MRW Tracking Password', 'woocommerce-mrw-carrier' ),
		'type'        => 'text',
		'desc_tip'    => __( 'Tracking password, ask the franchise', 'woocommerce-mrw-carrier' ),
		'default'     => '',
		),
	'mrwavailableservices' => array(
		'title'       => __( 'Available services', 'woocommerce-mrw-carrier' ),
		'type'        => 'multiselect',
		'class'       => 'wc-enhanced-select',
		'desc_tip'    => __( 'Click in the select box to add services', 'woocommerce-mrw-carrier' ),
		'description' => __( 'Click in the select box to add services', 'woocommerce-mrw-carrier' ),
		'options'     => array(
			'0000'    => __( 'Urgente 10', 'woocommerce-mrw-carrier' ),
			'0005'    => __( 'Urgente Hoy', 'woocommerce-mrw-carrier' ),
			'0010'    => __( 'Promociones', 'woocommerce-mrw-carrier' ),
			'0100'    => __( 'Urgente 12', 'woocommerce-mrw-carrier' ),
			'0110'    => __( 'Urgente 14', 'woocommerce-mrw-carrier' ),
			'0120'    => __( 'Urgente 22', 'woocommerce-mrw-carrier' ),
			'0200'    => __( 'Urgente 19', 'woocommerce-mrw-carrier' ),
			'0205'    => __( 'Urgente 19 Expedición', 'woocommerce-mrw-carrier' ),
			'0115'    => __( 'Urgente 14 Expedición', 'woocommerce-mrw-carrier' ),
			'0105'    => __( 'Urgente 12 Expedición', 'woocommerce-mrw-carrier' ),
			'0015'    => __( 'Urgente 10 Expedición', 'woocommerce-mrw-carrier' ),
			'0210'    => __( 'Urgente 19 Mas 40 Kilos', 'woocommerce-mrw-carrier' ),
			'0220'    => __( 'Urgente 19 Portugal', 'woocommerce-mrw-carrier' ),
			'0230'    => __( 'Bag 19', 'woocommerce-mrw-carrier' ),
			'0235'    => __( 'Bag 14', 'woocommerce-mrw-carrier' ),
			'0300'    => __( 'Económico', 'woocommerce-mrw-carrier' ),
			'0310'    => __( 'Económico Mas 40 Kilos', 'woocommerce-mrw-carrier' ),
			'0350'    => __( 'Económico interinsular', 'woocommerce-mrw-carrier' ),
			'0400'    => __( 'Express Documentos', 'woocommerce-mrw-carrier' ),
			'0450'    => __( 'Express 2 Kilos', 'woocommerce-mrw-carrier' ),
			'0480'    => __( 'Caja Express 3 Kilos', 'woocommerce-mrw-carrier' ),
			'0490'    => __( 'Documentos 14', 'woocommerce-mrw-carrier' ),
			'0800'    => __( 'Ecommerce', 'woocommerce-mrw-carrier' ),
			'0810'    => __( 'Ecommerce Canje', 'woocommerce-mrw-carrier' ),
			'0370'    => __( 'Marítimo Baleares', 'woocommerce-mrw-carrier' ),
			'0385'    => __( 'Marítimo Canarias', 'woocommerce-mrw-carrier' ),
			'0390'    => __( 'Marítimo Interinsular', 'woocommerce-mrw-carrier' ),
			),
		),
	'mrwdefaultservice' => array(
		'title'       => __( 'Default service', 'woocommerce-mrw-carrier' ),
		'type'        => 'select',
		'class'       => 'wc-enhanced-select',
		'description' => __( 'Wont be available if it isn\'t selected in available services', 'woocommerce-mrw-carrier' ),
		'options'     => array(
			'0000'    => __( 'Urgente 10', 'woocommerce-mrw-carrier' ),
			'0005'    => __( 'Urgente Hoy', 'woocommerce-mrw-carrier' ),
			'0010'    => __( 'Promociones', 'woocommerce-mrw-carrier' ),
			'0100'    => __( 'Urgente 12', 'woocommerce-mrw-carrier' ),
			'0110'    => __( 'Urgente 14', 'woocommerce-mrw-carrier' ),
			'0120'    => __( 'Urgente 22', 'woocommerce-mrw-carrier' ),
			'0200'    => __( 'Urgente 19', 'woocommerce-mrw-carrier' ),
			'0205'    => __( 'Urgente 19 Expedición', 'woocommerce-mrw-carrier' ),
			'0115'    => __( 'Urgente 14 Expedición', 'woocommerce-mrw-carrier' ),
			'0105'    => __( 'Urgente 12 Expedición', 'woocommerce-mrw-carrier' ),
			'0015'    => __( 'Urgente 10 Expedición', 'woocommerce-mrw-carrier' ),
			'0210'    => __( 'Urgente 19 Mas 40 Kilos', 'woocommerce-mrw-carrier' ),
			'0220'    => __( 'Urgente 19 Portugal', 'woocommerce-mrw-carrier' ),
			'0230'    => __( 'Bag 19', 'woocommerce-mrw-carrier' ),
			'0235'    => __( 'Bag 14', 'woocommerce-mrw-carrier' ),
			'0300'    => __( 'Económico', 'woocommerce-mrw-carrier' ),
			'0310'    => __( 'Económico Mas 40 Kilos', 'woocommerce-mrw-carrier' ),
			'0350'    => __( 'Económico interinsular', 'woocommerce-mrw-carrier' ),
			'0400'    => __( 'Express Documentos', 'woocommerce-mrw-carrier' ),
			'0450'    => __( 'Express 2 Kilos', 'woocommerce-mrw-carrier' ),
			'0480'    => __( 'Caja Express 3 Kilos', 'woocommerce-mrw-carrier' ),
			'0490'    => __( 'Documentos 14', 'woocommerce-mrw-carrier' ),
			'0800'    => __( 'Ecommerce', 'woocommerce-mrw-carrier' ),
			'0810'    => __( 'Ecommerce Canje', 'woocommerce-mrw-carrier' )
			),
		),
	'mrwnotifications' => array(
		'title'       => __( 'Notifications', 'woocommerce-mrw-carrier' ),
		'type'        => 'select',
		'default'     => 'Without notifications',
		'class'       => 'availability wc-enhanced-select',
		'options'     => array(
			'none'       => __( 'Without notifications', 'woocommerce-mrw-carrier' ),
			'email'      => __( 'Notifications via Email', 'woocommerce-mrw-carrier' ),
			'sms'      	 => __( 'Notifications via SMS', 'woocommerce-mrw-carrier' ),
			'sms+email'  => __( 'Notifications via SMS and Email', 'woocommerce-mrw-carrier' )
			)
		),
	'mrwcountries' => array(
		'title'       => __( 'Specific Countries', 'woocommerce-mrw-carrier' ),
		'type'        => 'select',
		'class'       => 'wc-enhanced-select',
		'css'         => 'width: 450px;',
		'default'     => '',
		'default'     => 'ES',
		'options'     => array(
			'ES'       => __( 'Spain', 'woocommerce-mrw-carrier' ),
			),
		),
	'mrwweightprice' => array(
		'title'       => __( 'Calculate shipping from', 'woocommerce-mrw-carrier' ),
		'type'        => 'select',
		'class'       => 'wc-enhanced-select priceweight',
		'description' => __( 'Weight/Price', 'woocommerce-mrw-carrier' ),
		'default'     => 'weight',
		'options'     => array(
			'weight' => __( 'Weight', 'woocommerce-mrw-carrier' ),
			'price'     	  => __( 'Price', 'woocommerce-mrw-carrier' ),
			),
		'desc_tip'    => true,
		),
	'mrwapportionment' => array(
		'title'   => __( 'Package apportionment', 'woocommerce-mrw-carrier' ),
		'type'    => 'checkbox',
		'description' => __( 'Check just in case your franchise tells you', 'woocommerce-mrw-carrier' ),
		'desc_tip'    => __( 'Check this option if you want to do package apportionment', 'woocommerce-mrw-carrier' ),
		'label'   => __( 'Package apportionment', 'woocommerce-mrw-carrier' ),
		'default' => 'no',		
		),
	'mrwerrorlog' => array(
		'title'   => __( 'Error Log', 'woocommerce-mrw-carrier' ),
		'type'    => 'checkbox',
		'desc_tip'    => __( 'Check this option if you want to generate an error log', 'woocommerce-mrw-carrier' ),
		'label'   => __( 'Error Log', 'woocommerce-mrw-carrier' ),
		'default' => 'yes'
		),
		'mrwshowrate' => array(
		'title'       => __( 'If there is no shipping rate that match', 'woocommerce-mrw-carrier' ),
		'type'        => 'select',
		'class'       => 'wc-enhanced-select priceweight',
		'description' => __( 'Show most expensive/Don´t show', 'woocommerce-mrw-carrier' ),
		'default'     => 'rateno',
		'options'     => array(
			'rateyes' => __( 'Show most expensive rate', 'woocommerce-mrw-carrier' ),
			'rateno'  => __( 'Don`t show rate', 'woocommerce-mrw-carrier' ),
			),
		'desc_tip'    => true,
		),
	'mrwfree' => array(
		'title'       => __( 'Free delivery from', 'woocommerce-mrw-carrier' ),
		'type'        => 'number',
		'description' => __( 'Delivery free if the order price is above this amount. 0 to disable', 'woocommerce-mrw-carrier'),
		'desc_tip'    =>  __( 'Delivery free if the order price is above this amount. 0 to disable', 'woocommerce-mrw-carrier' ),
		'placeholder' => 'e.g. 50',
		'default'     => '0'
		),
	'mrwmpflag' => array(
		'title'   => __( 'Marketplaces Flag', 'woocommerce-mrw-carrier' ),
		'type'    => 'checkbox',
		'desc_tip'    => __( 'Check this option if you want to print market places labels. Just in case your franchise tells you', 'woocommerce-mrw-carrier' ),
		'label'   => __( 'Marketplaces Flag', 'woocommerce-mrw-carrier' ),
		'default' => 'no'
		),
	'additional_costs_table' => array(
		'type'				=> 'additional_costs_table'
		),

);