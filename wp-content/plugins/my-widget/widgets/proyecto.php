<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Proyecto extends \Elementor\Widget_Base {

	/**
	 * Retorna el nombre del widget
	 *
	 * Nombre del widget
	 * @access public
	 * @return string nombre del widget .
	 */
	public function get_name() {
		return 'Proyecto';
	}

	/**
	 * Retorna el título del widget
	 *
	 * Título del widget
	 * @access public
	 * @return string título del widget .
	 */
	public function get_title() {
		return esc_html__( 'Proyecto', 'proyecto' );
	}

	/**
	 * Retorna el icono del widget
	 *
	 * Icono del widget
	 * @access public
	 * @return string Icono del widget .
	 */
	public function get_icon() {
		return 'eicon-document-file';
	}

	/**
	 * Retorna la categorias de widget
	 *
	 * Recuperar la lista de categorías a las que pertenece el widget Producto
	 *
	 * @since 1.0.0
	 * @access public
	 * @return array Categorias de widget.
	 */
	public function get_categories() {
		return [ 'general' ];
	}



	/**
	 * Registra el widget Proyecto en los widget controls.
	 *
	 * Agregar campos de entrada para permitir al usuario personalizar la configuración del widget
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content', 'proyecto' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		
        $this->add_control(
            'Periodo',
            [
                'label'=>esc_html__( 'Periodo', 'proyecto' ),
                'label_block'=>true,
                'type'=>\Elementor\Controls_Manager::TEXT,
                'placeholder'=>esc_html__('mm/yyyy - mm/yyyy', 'proyecto')
            ]
        );
        $this->add_control(
            'Titulo',
            [
                'label'=>esc_html__('Titulo del proyecto', 'proyecto'),
                'label_block'=>true,
                'type'=>\Elementor\Controls_Manager::TEXT,
                'placeholder'=>esc_html__('Agregue el título del proyecto', 'proyecto')
            ]   
        );
    
        $this->add_control(
            'Descripcion',[
                'label'=>__('Descripcion del proyecto', 'proyecto'),
                'label_block'=>true,
                'type'=>\Elementor\Controls_Manager::TEXTAREA,
                'placeholder'=>__('Agregue las descripción del proyecto', 'proyecto')
            ]   
        );

		$this->end_controls_section();

	}

	/**
	 * Renderiza la salida del widget Proyecto en el frontend
	 *
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {

		$settings = $this->get_settings_for_display();

	    echo '<h3>' . $settings['Periodo'] . '</h3>';
        echo '<h4>' . $settings['Titulo'] . '</h4>';
        echo '<h5>' . $settings['Descripcion'] . '</h5>';
	}

	

}