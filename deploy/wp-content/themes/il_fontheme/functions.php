<?php

  // REGISTRO DE ESTILOS

  function register_enqueue_style() {
  		$theme_data = wp_get_theme();

  		/* Registrando estilos */
  		wp_register_style('bootstrap', get_parent_theme_file_uri('/assets/vendor/css/bootstrap.css'), null, '1.0.0', 'screen');
      wp_register_style('googleFonts', 'https://fonts.googleapis.com/css?family=Abril+Fatface|Roboto+Condensed:400,700');
      wp_register_style('main', get_parent_theme_file_uri('/assets/css/style.css'), null, '1.0.0', 'screen');

      /* Enqueue estilos */
      wp_enqueue_style('bootstrap');
      wp_enqueue_style('googleFonts');
      wp_enqueue_style('main');
	}

	add_action( 'wp_enqueue_scripts', 'register_enqueue_style' );

  // REGISTRO DE SCRIPTS

  function register_enqueue_scripts() {
		$theme_data = wp_get_theme();

		/* Deregister Scripts */
		wp_deregister_script( 'jquery' );


		/* Registrando Scripts */
		wp_register_script('jQuery3', get_parent_theme_file_uri('/assets/vendor/js/jquery-3.3.1.slim.min.js'), null, '3.2.1', true);

		wp_register_script('bootstrap', get_parent_theme_file_uri('/assets/vendor/js/bootstrap.min.js'), array('jQuery_migrate'), null, true);
		wp_register_script('mainJS', get_parent_theme_file_uri('assets/js/script.js'), array('jQuery3'), null, true);

		/* Enqueue Scripts */
		wp_enqueue_script('bootstrap');
		wp_enqueue_script('mainJS');
	}

	add_action( 'wp_enqueue_scripts', 'register_enqueue_scripts' );



?>
