<?php if ( ! defined( 'ABSPATH' ) ) {
	die; } // Cannot access directly.
/**
 *
 * Field: callback
 *
 * @since 1.0.0
 * @version 1.0.0
 */
if ( ! class_exists( 'SPLWT_Field_callback' ) ) {
	class SPLWT_Field_callback extends SPLWT_Fields {

		public function __construct( $field, $value = '', $unique = '', $where = '', $parent = '' ) {
			parent::__construct( $field, $value, $unique, $where, $parent );
		}

		public function render() {

			if ( isset( $this->field['function'] ) && function_exists( $this->field['function'] ) ) {

				$args = ( isset( $this->field['args'] ) ) ? $this->field['args'] : null;

				call_user_func( $this->field['function'], $args );

			}

		}

	}
}
