<?php

namespace DVICD\CustomServerProvider;

class Links {

    public static function append_support_and_faq_links( $links_array, $plugin_file_name, $plugin_data, $status ) {
        if ( strpos( $plugin_file_name, basename( __FILE__ ) ) !== false ) {
            $links_array[] = '<a href="https://www.paypal.com/paypalme/elsherifsoft" style="color: #39b54a;font-weight: bold;" target="_blank">
                <span class="dashicons dashicons-star-filled" aria-hidden="true" style="font-size:14px;line-height:1.3"></span> Sponsor</a>';
            $links_array[] = '<a href="https://discord.com/invite/kjhta4xQc2" target="_blank">
                <span class="dashicons dashicons-megaphone" aria-hidden="true" style="font-size:14px;line-height:1.3;margin-right:5px;"></span> Join Our Discord Community</a>';
        }

        return $links_array;
    }
}
