<?php

add_action( 'init', 'wc_country_tax', 0 );

function wc_country_tax() {
	register_taxonomy(
		'country_tax',
		array( 'swag_cpt' ),
		array(
			'label' => __( 'Country' ),
			'rewrite' => array( 'slug' => 'country' ),
			'hierarchical' => false,
		)
	);
}