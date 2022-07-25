<?php if ( ! defined( 'ABSPATH' ) ) {
	die; } // Cannot access directly.
/**
 *
 * Field: backup
 *
 * @since 1.0.0
 * @version 1.0.0
 */
if ( ! class_exists( 'SPLWT_Field_backup' ) ) {
	class SPLWT_Field_backup extends SPLWT_Fields {

		public function __construct( $field, $value = '', $unique = '', $where = '', $parent = '' ) {
			parent::__construct( $field, $value, $unique, $where, $parent );
		}

		public function render() {

			$unique = $this->unique;
			$nonce  = wp_create_nonce( 'splwt_backup_nonce' );
			$export = add_query_arg(
				array(
					'action' => 'splwt-lite-export',
					'unique' => $unique,
					'nonce'  => $nonce,
				),
				admin_url( 'admin-ajax.php' )
			);

			echo $this->field_before();

			echo '<textarea name="splwt_import_data" class="splwt-lite-import-data"></textarea>';
			echo '<button type="submit" class="button button-primary splwt-lite-confirm splwt-lite-import" data-unique="' . esc_attr( $unique ) . '" data-nonce="' . esc_attr( $nonce ) . '">' . esc_html__( 'Import', 'location-weather' ) . '</button>';
			echo '<hr />';
			echo '<textarea readonly="readonly" class="splwt-lite-export-data">' . esc_attr( json_encode( get_option( $unique ) ) ) . '</textarea>';
			echo '<a href="' . esc_url( $export ) . '" class="button button-primary splwt-lite-export" target="_blank">' . esc_html__( 'Export & Download', 'location-weather' ) . '</a>';
			echo '<hr />';
			echo '<button type="submit" name="splwt_transient[reset]" value="reset" class="button splwt-lite-warning-primary splwt-lite-confirm splwt-lite-reset" data-unique="' . esc_attr( $unique ) . '" data-nonce="' . esc_attr( $nonce ) . '">' . esc_html__( 'Reset', 'location-weather' ) . '</button>';

			echo $this->field_after();

		}

	}
}
