<?php
/**
 * Our inital setup function when activated.
 *
 * @return void
 */
function lw_woo_gdpr_install() {

	// Create our export folder.
	lw_woo_gdpr()->create_export_folder();

	// Include our action so that we may add to this later.
	do_action( 'lw_woo_gdpr_install_process' );

	// And flush our rewrite rules.
	flush_rewrite_rules();
}
register_activation_hook( LW_WOO_GDPR_FILE, 'lw_woo_gdpr_install' );
