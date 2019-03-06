<?php

$labels_settings = array(
	'type'    => 'postbox',
	'label'   => esc_html__( 'Labels', 'comments-ratings' ),
	'options' => array(
		'review_rating_label'      => array(
			'label'   => esc_html__( 'Review Rating Label: ', 'comments-ratings' ),
			'default' => esc_html__( 'Su calificación general de este anuncio:', 'comments-ratings' ),
			'type'    => 'text',
			'size'    => "80"
		),
		'review_title_label'       => array(
			'label'   => esc_html__( 'Review Title Label: ', 'comments-ratings' ),
			'default' => esc_html__( 'El titulo de tu comentario', 'comments-ratings' ),
			'type'    => 'text',
			'size'    => "80"
		),
		'review_title_placeholder' => array(
			'label'   => esc_html__( 'Review Title Placeholder: ', 'comments-ratings' ),
			'default' => esc_html__( 'Resuma su opinión o resalte un detalle interesante', 'comments-ratings' ),
			'type'    => 'text',
			'size'    => "80"
		),
		'review_label'             => array(
			'label'   => esc_html__( 'Review Label: ', 'comments-ratings' ),
			'default' => esc_html__( 'Tu comentario', 'comments-ratings' ),
			'type'    => 'text',
			'size'    => "80"
		),
		'review_placeholder'       => array(
			'label'   => esc_html__( 'Review Placeholder: ', 'comments-ratings' ),
			'default' => esc_html__( 'Cuente su experiencia o deje un consejo para otros', 'comments-ratings' ),
			'type'    => 'text',
			'size'    => "80"
		),
		'review_submit_button'     => array(
			'label'   => esc_html__( 'Review Submit Button: ', 'comments-ratings' ),
			'default' => esc_html__( 'Envíe su opinión', 'comments-ratings' ),
			'type'    => 'text',
			'size'    => "80"
		),
	)
); # config

return $labels_settings;