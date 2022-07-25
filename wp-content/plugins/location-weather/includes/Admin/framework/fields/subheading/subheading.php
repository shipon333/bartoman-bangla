<?php if ( ! defined( 'ABSPATH' ) ) {
	die; } // Cannot access directly.
/**
 *
 * Field: subheading
 *
 * @since 1.0.0
 * @version 1.0.0
 */
if ( ! class_exists( 'SPLWT_Field_subheading' ) ) {
	class SPLWT_Field_subheading extends SPLWT_Fields {

		public function __construct( $field, $value = '', $unique = '', $where = '', $parent = '' ) {
			parent::__construct( $field, $value, $unique, $where, $parent );
		}

		public function render() {

			echo ( ! empty( $this->field['content'] ) ) ? wp_kses_post( $this->field['content'] ) : '';

		}

	}
}
