<?php 

global $wpdb;
//        $wpdb->show_errors()

        $clientTab =  'wp_ssd_client';
        $a =$wpdb->get_results( "SELECT nom FROM wp_ssd_client   ", ARRAY_A);
echo $a;


 ?>