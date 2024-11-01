=== IOTA Current Price Shortcode ===
Contributors: unagi
Tags: iota price, iota widget, iota, iota shortcode, iota current price
Requires at least: 3.7
Tested up to: 4.8.1
Stable tag: 2.0
License: GPLv2 or later

IOTA Current Price Shortcode pulls the latest price of IOTA in USD from the Bitfinex API and outputs it wherever you'd like on your site.

== Description ==

IOTA Current Price Shortcode pulls the latest price of IOTA in USD from the Bitfinex API and outputs it wherever you'd like on your site using the shortcode [iotaprice]. By default the shortcode shows the price of MIOTA in USD. You can use different attributes to show the current price in different currencies. Currently the following attributes are supported:

[iotaprice currency=“usd”] for US Dollar per MIOTA
[iotaprice currency=“btc”] for Bitcoin per MIOTA
[iotaprice currency=“eth”] for Ethereum per MIOTA
[iotaprice currency=“eur”] for Euro per MIOTA
[iotaprice currency=“gbp”] for Pound Sterling per MIOTA


This plugin utilizes 3rd party services by connecting to third party APIs to pull the latest market data from: 
https://api.bitfinex.com/v1/ticker/
https://api.coinmarketcap.com/v1/ticker/

== Installation ==

Upload the IOTA Current Price Shortcode plugin to your blog, Activate it, then you're done!

== Changelog ==
= 2.0 =

* Added BTC and ETH currencies
* Changed file_get_content to wp_remote_get

= 0.2 =

* Added third party API info and fixed description in readme.txt

= 0.1 =
*Release Date - 01 September 2017*

* Created shortcode to display price from Bitfinex API