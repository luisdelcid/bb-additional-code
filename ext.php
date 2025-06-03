<?php
/*
 * This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 2 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with this program. If not, see <https://www.gnu.org/licenses/>.
 */

// Make sure we don't expose any info if called directly.
if(!defined('ABSPATH') or !class_exists('__Base')){
    die("Hi there! I'm a magic extension, not much I can do when called directly.");
}

// Include the `BB_Additional_Code` class.
require_once(plugin_dir_path(__FILE__) . 'bb-additional-code.php');

// Wait for the `after_magic_loaded` action hook.
__add_action_once('after_magic_loaded', ['BB_Additional_Code', 'get_instance']);
