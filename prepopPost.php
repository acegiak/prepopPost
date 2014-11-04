<?php


/*
    Plugin Name: prepopPost
    Plugin URI: https://github.com/acegiak/prepopPost
    Description: Make The Post Editor Page accept prepopulation through jquery
    Version: 1
    Author: Ashton McAllan
    Author URI: http://www.acegiak.net
    License: GPLv2
*/

/*  Copyright 2011 Ashton McAllan (email : acegiak@machinespirit.net)
    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.
    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
    GNU General Public License for more details.
    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
*/

function pw_load_scripts($hook) {
 
	if( $hook != 'edit.php' && $hook != 'post.php' && $hook != 'post-new.php' ) 
		return;
 
	wp_enqueue_script( 'jpop-js', plugins_url( 'prepoppost/js/jpop.js' , dirname(__FILE__) ) );
}
add_action('admin_enqueue_scripts', 'pw_load_scripts');


?>
