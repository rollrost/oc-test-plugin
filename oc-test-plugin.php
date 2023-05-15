<?php
/**
 * Test-plugin-for update from github
 *
 * @package   oc-test-plugin
 * @link      https://github.com/rollrost/oc-test-plugin
 * @author    Rost Dan <rost@originalconcepts.co.il>
 * @copyright 2023 Rost
 * @license   GPL v2 or later
 *
 * Plugin Name:  OC Test plugin
 * Description:  Check WordPress plugin update from private repository
 * Version:      1.0.0
 * Plugin URI:   https://github.com/rollrost/oc-test-plugin
 * Author:       Rost Dan
 * Author URI:   https://github.com/rollrost/oc-test-plugin
 * Text Domain:  oc-test-plugin
 * Domain Path:  /languages/
 * Requires PHP: 7.2
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'OC_TEST_PLUGIN', '1.0.0' );


function oc_test_plugin_start(){
	echo '<div style="color:#c00;padding:10px;border:2px solid #c00;margin: 10px;">';
	echo 'OS test plugin start version:'. OC_TEST_PLUGIN;
	echo '</div>';
}

add_action( 'flatsome_after_header', 'oc_test_plugin_start' );