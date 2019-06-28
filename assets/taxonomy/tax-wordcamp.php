<?php

add_action( 'init', 'wc_wordcamp_name_tax', 0 );

function wc_wordcamp_name_tax() {
	register_taxonomy(
		'wordcamp_name_tax',
		array( 'swag_cpt' ),
		array(
			'label' => __( 'Wordcamp' ),
			'rewrite' => array( 'slug' => 'wordcamp' ),
			'hierarchical' => false,
		)
	);
}