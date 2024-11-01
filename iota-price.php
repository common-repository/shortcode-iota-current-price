<?php
/**
 * @package IOTAPrice
 */
/*
Plugin Name: IOTA Current Price Shortcode
Plugin URI: https://buyiotacryptocurrency.com
Description: Simple plugin that uses the shortcode [iotaprice] to output the current price of IOTA cryptocurrency in USD gathered from the Bitfinex API.
Version: 2.0
Author: Chris White
Author URI: https://hchad.com/
License: GPLv2 or later
Text Domain: iotaprice
*/

function iota_function($currency) {
    extract(shortcode_atts(array(
        'currency' => 'usd'
    ), $currency));
    
    switch ($currency) {
        case 'usd':
            $request = wp_remote_get( 'https://api.bitfinex.com/v1/ticker/iotusd' );
                if( is_wp_error( $request ) ) {
	                return false;
                }
            $body = wp_remote_retrieve_body( $request );
            $data = json_decode( $body, true );
                if( ! empty( $data ) ) {
	
                    return $data['last_price'];
                }
            
            break;
        case 'btc':
            $request = wp_remote_get( 'https://api.bitfinex.com/v1/ticker/iotbtc' );
                if( is_wp_error( $request ) ) {
	                return false;
                }
            $body = wp_remote_retrieve_body( $request );
            $data = json_decode( $body, true );
                if( ! empty( $data ) ) {
	
                    return $data['last_price'];
                }
            
            break;
        case 'eth':
            $request = wp_remote_get( 'https://api.bitfinex.com/v1/ticker/ioteth' );
                if( is_wp_error( $request ) ) {
	                return false;
                }
            $body = wp_remote_retrieve_body( $request );
            $data = json_decode( $body, true );
                if( ! empty( $data ) ) {
	
                    return $data['last_price'];
                }
            
            break;
        case 'eur':
            $request = wp_remote_get( 'https://api.coinmarketcap.com/v1/ticker/iota?convert=EUR' );
                if( is_wp_error( $request ) ) {
	                return false;
                }
            $body = wp_remote_retrieve_body( $request );
            $data = json_decode( $body, true );
                if( ! empty( $data ) ) {
	
	                    foreach( $data as $price ) {
                            return $price['price_eur'];
                        }
                }
            
            break;
        case 'gbp':
            $request = wp_remote_get( 'https://api.coinmarketcap.com/v1/ticker/iota?convert=GBP' );
                if( is_wp_error( $request ) ) {
	                return false;
                }
            $body = wp_remote_retrieve_body( $request );
            $data = json_decode( $body, true );
                if( ! empty( $data ) ) {
	
	                    foreach( $data as $price ) {
                            return $price['price_gbp'];
                        }
                }
            break;

    }
}
add_shortcode('iotaprice', 'iota_function');
?>