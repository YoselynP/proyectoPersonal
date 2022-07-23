<?php
/**
 * Plugin Name: Essential Elementor Widgets
 * Description: Elementor custom widgets from Eessential Web Apps.
 * Plugin URI:  https://essentialwebapps.com/
 * Version:     1.0.0
 * Author:      Essential Web Apps
 * Author URI:  https://essentialwebapps.com/
 * Text Domain: essential-elementor-widget
 *
 * Elementor tested up to: 3.5.0
 * Elementor Pro tested up to: 3.5.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Registra el widget proyecto.
 *
 * Incluye el archivo de widget y registre la clase de widget.
 *
 * @since 1.0.0
 * @param \Elementor\Widgets_Manager $widgets_manager Elementor widgets manager.
 * @return void
 */
function register_proyecto_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/proyecto.php' );

	$widgets_manager->register( new \Proyecto () );

}
add_action( 'elementor/widgets/register', 'register_proyecto_widget' );


