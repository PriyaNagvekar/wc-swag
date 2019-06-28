<?php

add_action( 'init', 'wc_year_tax', 0 );

function wc_year_tax() {
	register_taxonomy(
		'year_tax',
		array( 'swag_cpt' ),
		array(
			'label' => __( 'Year' ),
			'rewrite' => array( 'slug' => 'year' ),
			'hierarchical' => false,
		)
	);
}