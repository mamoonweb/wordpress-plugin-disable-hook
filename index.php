function disable_plugin_updates( $value ) {
    $pluginsToDisable = [
        'elementor-pro/elementor-pro.php'
    ];
    if ( isset($value) && is_object($value) ) {
        foreach ($pluginsToDisable as $plugin) {
            if ( isset( $value->response[$plugin] ) ) {
                unset( $value->response[$plugin] );
            }
        }
    }
    return $value;
}
add_filter( 'site_transient_update_plugins', 'disable_plugin_updates' );
