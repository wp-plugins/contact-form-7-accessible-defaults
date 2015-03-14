<?php

/*
Plugin Name: Contact Form 7: Accessible Defaults
Plugin URI: http://www.joedolson.com/
Description: Sets up an accessible default form when using Contact Form 7. 
Version: 1.0.0
Author: Joseph Dolson
Author URI: http://www.joedolson.com/
Text Domain: accessible-contact-form-7
Domain Path: /lang/
*/
/*  Copyright 2015  Joseph C Dolson  (email : plugins@joedolson.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

load_plugin_textdomain( 'accessible-contact-form-7',false, dirname( plugin_basename( __FILE__ ) ) . '/lang' );

add_filter( 'wpcf7_default_template', 'cf7adf_template', 10, 2 );
function cf7adf_template( $template, $prop ) {
	if ( $prop == 'form' ) {
		$template =
			'[response]' . "\n\n"
			. '<p><label for="your-name">' . __( 'Your Name', 'accessible-contact-form-7' ) . ' ' . __( '(required)' , 'accessible-contact-form-7' ) . '</label><br />' . "\n"
			. '    [text* your-name id:your-name] </p>' . "\n\n"
			. '<p><label for="your-email">' . __( 'Your Email', 'accessible-contact-form-7' ) .  ' ' . __( '(required)' , 'accessible-contact-form-7' ) . '</label><br />' . "\n"
			. '    [email* your-email id:your-email] </p>' . "\n\n"
			. '<p><label for="your-subject">' . __( 'Your Subject', 'accessible-contact-form-7' ) . '</label><br />' . "\n"
			. '    [text your-subject id:your-subject] </p>' . "\n\n"
			. '<p><label for="your-message">' . __( 'Your Name', 'accessible-contact-form-7' ) . '</label><br />' . "\n"
			. '    [textarea your-message id:your-message] </p>' . "\n\n"
			. '<p>[submit "' . __( 'Send', 'accessible-contact-form-7' ) . '"]</p>';

		return $template;
	}
	return $template;
}