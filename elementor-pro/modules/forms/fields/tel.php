<?php
namespace ElementorPro\Modules\Forms\Fields;

use ElementorPro\Modules\Forms\Classes;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class Tel extends Field_Base {

	public function get_type() {
		return 'tel';
	}

	public function get_name() {
		return esc_html__( 'Tel', 'elementor-pro' );
	}

	public function render( $item, $item_index, $form ) {
		$form->add_render_attribute( 'input' . $item_index, 'class', 'elementor-field-textual' );
		// Pattern validation removed to allow any input format
		// Title attribute removed
		?>
		<input size="1" <?php $form->print_render_attribute_string( 'input' . $item_index ); ?>>

		<?php
	}

	public function validation( $field, Classes\Form_Record $record, Classes\Ajax_Handler $ajax_handler ) {
		// Server-side validation removed to allow any input format
		return;
	}
}
