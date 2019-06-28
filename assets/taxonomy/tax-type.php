<?php

add_action( 'init', 'wc_type_tax', 0 );

function wc_type_tax() {
	register_taxonomy(
		'swag_type_tax',
		array( 'swag_cpt' ),
		array(
			'label' => __( 'Type' ),
			'rewrite' => array( 'slug' => 'type' ),
			'hierarchical' => true,
		)
	);
}