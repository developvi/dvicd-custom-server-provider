<?php

namespace DVICD\CustomServerProvider;

class DVICDINIT {

    public static  function init() {
        add_filter( 'plugin_row_meta', [ Links::class, 'append_support_and_faq_links' ], 10, 4 );
        add_filter( 'wpcd_get_cloud_providers', [ Provider::class, 'add_cloud_provider' ] );
        add_filter( 'wpcd_provider_types', [ Provider::class, 'add_to_provider_types' ] );
    }
}
