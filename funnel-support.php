<?php 

/**
 * @package FunnelSupport
 */
 /*
 Plugin Name: Funnel Support
 Plugin URI: https://github.com/hloveranes/wp-funnel-plugin
 Description: Custom plugin like cartflows funnel
 Version: 0.0.1
 Author: Devy-tech
 Author URI: https://github.com/hloveranes
 License: GPLv2 or Later
 Text Domain: funnel-support
 */

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2005-2015 Automattic, Inc.
*/

defined( 'ABSPATH' ) or die( 'Hey, what are you doing here? You silly human!' );
// <----------------------------------------------------------------------------------------------------------------------------> //

function funnel_support($step_e) {
    include plugin_dir_path( __FILE__ ). 'tempfunnel/step-e.php';
    return $step_e;
}
add_shortcode( 'funnelSupport', 'funnel_support' );
