<?php

add_action( 'init', 'wc_city_tax', 0 );

function wc_city_tax() {
	register_taxonomy(
		'city_tax',
		array( 'swag_cpt' ),
		array(
			'label' => __( 'City' ),
			'rewrite' => array( 'slug' => 'city' ),
			'hierarchical' => false,
		)
	);
}