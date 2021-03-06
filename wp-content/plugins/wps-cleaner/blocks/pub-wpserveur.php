<?php
// don't load directly
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$pf = \WPS\WPS_Cleaner\Pub::wps_ip_check_return_pf();
if ( ! empty( $pf ) ) {
	return false;
}

$plugin              = 'migrate-guru/migrateguru.php';

$is_plugin_installed = \WPS\WPS_Cleaner\Pub::is_plugin_installed( $plugin );

if ( ! $is_plugin_installed ) {
	$classes    = 'install-now';
	$action_url = wp_nonce_url( add_query_arg(
		array(
			'action' => 'install-plugin',
			'plugin' => 'migrate-guru',
		),
		network_admin_url( 'update.php' )
	), 'install-plugin_migrate-guru' );
	$button     = __( 'Install Migrate Guru', 'wps-limit-login' );
} else {
	$action_url = wp_nonce_url( add_query_arg(
		array(
			'action'        => 'activate',
			'plugin'        => $plugin,
			'plugin_status' => 'all',
			'paged'         => 1
		),
		network_admin_url( 'plugins.php' )
	), 'activate-plugin_' . $plugin );

	$button = __( 'Enable Migrate Guru', 'wps-limit-login' );
}

if ( empty( $action_url ) ) {
	return false;
}

$details_url = add_query_arg(
	array(
		'tab'       => 'plugin-information',
		'plugin'    => 'migrate-guru',
		'TB_iframe' => true,
		'width'     => 722,
		'height'    => 949,
	),
	network_admin_url( 'plugin-install.php' )
); ?>
<div class="pub-wp-serveur plugin-card plugin-card-migrate-guru">
    <div class="logo">
        <a href="https://www.wpserveur.net/?refwps=14&campaign=wpslimitlogin" target="_blank">
            <img src="https://www.wpserveur.net/muwps/WPServeur-logo-white.svg" alt="WPServeur" height="auto"
                 width="200"/>
        </a>
    </div>
    <div class="message">
        <strong><?php _e( 'Discover the specialized WordPress hosting with WPServeur!', 'wps-limit-login' ); ?></strong>
        <strong><?php _e( 'For fast, secure and efficient hosting.', 'wps-limit-login' ); ?></strong><br/>
		<?php _e( 'We only do WordPress but we do it well!', 'wps-limit-login' ); ?><br/>
        <i style="font-size:11px;"><?php _e( '(-10% discount on your subscription with the promo code <strong>WPSC&T</strong>)', 'wps-limit-login' ); ?></i>
    </div>
    <div class="cta">
        <a href="https://www.wpserveur.net/?refwps=14&campaign=wpslimitlogin" target="_blank"
           class="btn-pubwps btn-abonner"><?php _e( 'Subscribe to WPServeur', 'wps-limit-login' ); ?></a>
        <a data-slug="migrate-guru" href="<?php echo $action_url; ?>"
           class="btn-pubwps btn-install-plugin <?php echo $classes; ?>"><?php echo $button; ?></a>
        <a href="<?php echo $details_url; ?>"
           class="thickbox open-plugin-details-modal btn-wps-details"><?php echo sprintf( __( 'More about %s', 'wps-limit-login' ), 'Migrate Guru' ); ?></a>
    </div>
</div>