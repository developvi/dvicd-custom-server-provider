<?php

namespace DVICD\CustomServerProvider;

class Provider {

    public static function add_cloud_provider( $cloud_providers ) {
        $custom_server = [ 'custom-server' => 'Custom Server' ];
        return array_merge( $cloud_providers, $custom_server );
    }

    public static function add_to_provider_types( $provider_types ) {
        $provider_types['custom-server'] = 'Custom Server';
        return $provider_types;
    }
}
