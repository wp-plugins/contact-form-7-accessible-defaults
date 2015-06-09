<?php

/*
Plugin Name: Contact Form 7: Accessible Defaults
Plugin URI: http://www.joedolson.com/
Description: Sets up an accessible default form when using Contact Form 7. 
Version: 1.1.1
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

/**
 * Return template based on currently selected template
 *
 * @param $template Default template for Contact Form 7
 * @param $prop Current property producing a template. (Same filter applies to features other than the default form.)
 *
 * @return $template New default template.
 */
add_filter( 'wpcf7_default_template', 'cf7adf_template', 10, 2 );
function cf7adf_template( $template, $prop ) {
	$current = ( isset( $_GET['base_form'] ) ) ? $_GET['base_form'] : 'basic';
	if ( $prop == 'form' ) {
		switch( $current ) {
			case 'address':
				$template =
					'<p><label for="your-name">' . __( 'Your Name', 'accessible-contact-form-7' ) . ' ' . __( '(required)' , 'accessible-contact-form-7' ) . '</label><br />' . "\n"
					. '    [text* your-name id:your-name] </p>' . "\n\n"
					. '<p><label for="your-email">' . __( 'Your Email', 'accessible-contact-form-7' ) .  ' ' . __( '(required)' , 'accessible-contact-form-7' ) . '</label><br />' . "\n"
					. '    [email* your-email id:your-email] </p>' . "\n\n"
					. '<p><label for="your-subject">' . __( 'Your Subject', 'accessible-contact-form-7' ) . '</label><br />' . "\n"
					. '    [text your-subject id:your-subject] </p>' . "\n\n"
					. '<fieldset>' . "\n"
					. '<legend>' . __( 'Your Address', 'accessible-contact-form-7' )  . '</legend>' . "\n\n"
					. '<p><label for="address">' . __( 'Address (line 1)', 'accessible-contact-form-7' )  . '</label><br />' . "\n"
					. '    [text address id:address]</p>' . "\n\n"
					. '<p><label for="address2">' . __( 'Address (line 2)', 'accessible-contact-form-7' )  . '</label><br />' . "\n"
					. '    [text address2 id:address2]</p>' . "\n\n"
					. '<p><label for="city">' . __( 'City', 'accessible-contact-form-7' )  . '</label><br />' . "\n"
					. '    [text city id:city]</p>' . "\n\n"
					. '<p><label for="state">' . __( 'State', 'accessible-contact-form-7' )  . '</label><br />' . "\n"
					. '    [text state id:state]</p>' . "\n\n"
					. '<p><label for="postal">' . __( 'Postal Code', 'accessible-contact-form-7' )  . '</label><br />' . "\n"
					. '    [text postal id:postal]</p>' . "\n\n"
					. '<p><label for="country">' . __( 'Country', 'accessible-contact-form-7' )  . '</label><br />' . "\n"
					. '    [text country id:country]</p>' . "\n\n"
					. '</fieldset>' . "\n\n"					
					. '<p><label for="your-message">' . __( 'Your Message', 'accessible-contact-form-7' ) . '</label><br />' . "\n"
					. '    [textarea your-message id:your-message] </p>' . "\n\n";
					break;
			case 'reserve':
				$template =
					'<fieldset>' . "\n"
					.'<legend>' . __( 'Reserve a Room', 'accessible-contact-form-7' ) . '</legend>' . "\n\n"
					.'<p><label for="your-name">' . __( 'Your Name', 'accessible-contact-form-7' ) . ' ' . __( '(required)' , 'accessible-contact-form-7' ) . '</label><br />' . "\n"
					. '    [text* your-name id:your-name] </p>' . "\n\n"
					. '<p><label for="your-email">' . __( 'Your Email', 'accessible-contact-form-7' ) .  ' ' . __( '(required)' , 'accessible-contact-form-7' ) . '</label><br />' . "\n"
					. '    [email* your-email id:your-email] </p>' . "\n\n"
					. '<p><label for="room">' . __( 'Room Choice', 'accessible-contact-form-7' ) . '</label><br />' . "\n"
					. '    [select room id:room "Honeymoon Suite" "Gate Cottage" "Dungeon"] </p>' . "\n\n"
					. '<p><label for="date-in">' . __( 'Arrival Date', 'accessible-contact-form-7' ) . ' ' . __( '(required)' , 'accessible-contact-form-7' ) . '</label><br />' . "\n"
					. '    [date* date-in id:date-in]</p>' . "\n\n"
					. '<p><label for="time-in">' . __( 'Approximate Arrival Time', 'accessible-contact-form-7' ) . ' ' . __( '(required)' , 'accessible-contact-form-7' ) . '</label><br />' . "\n"
					. '    [select* time-in id:time-in "10:00" "11:00" "12:00" "13:00" "14:00" "15:00" "16:00" "17:00" "18:00" "19:00" "20:00" "21:00" "22:00"]</p>' . "\n\n"				
					. '<p><label for="date-out">' . __( 'Departure Date', 'accessible-contact-form-7' ) . ' ' . __( '(required)' , 'accessible-contact-form-7' ) . '</label><br />' . "\n"
					. '    [date* date-out id:date-out]</p>' . "\n\n"
					. '<p><label for="adults">' . __( 'Number of Adults', 'accessible-contact-form-7' ) . ' ' . __( '(required)' , 'accessible-contact-form-7' ) . '</label><br />' . "\n"
					. '    [number* adults id:adults min:1]</p>' . "\n\n"	
					. '<p><label for="children">' . __( 'Number of Children', 'accessible-contact-form-7' ) . ' ' . __( '(required)' , 'accessible-contact-form-7' ) . '</label><br />' . "\n"
					. '    [number* children id:children min:0]</p>' . "\n\n"
					. '<p><label for="your-message">' . __( 'Special Notes', 'accessible-contact-form-7' ) . '</label><br />' . "\n"
					. '    [textarea your-message id:your-message] </p>' . "\n\n"
					. '</fieldset>';
					break;
			case 'subscribe':
				$template =
					'<p><label for="your-name">' . __( 'Your Name', 'accessible-contact-form-7' ) . ' ' . __( '(required)' , 'accessible-contact-form-7' ) . '</label><br />' . "\n"
					. '    [text* your-name id:your-name] </p>' . "\n\n"
					. '<p><label for="your-email">' . __( 'Your Email', 'accessible-contact-form-7' ) .  ' ' . __( '(required)' , 'accessible-contact-form-7' ) . '</label><br />' . "\n"
					. '    [email* your-email id:your-email] </p>' . "\n\n"
					. '<fieldset>' . "\n"
					. '<legend>' . __( 'Format', 'accessible-contact-form-7' ) . '</legend>' . "\n"
					. '[radio format id:format use_label_element "HTML" "Plain Text"]' . "\n"
					. '</fieldset>';
					break;	
			case 'upload':
				$template =
					'<p><label for="your-name">' . __( 'Your Name', 'accessible-contact-form-7' ) . ' ' . __( '(required)' , 'accessible-contact-form-7' ) . '</label><br />' . "\n"
					. '    [text* your-name id:your-name] </p>' . "\n\n"
					. '<p><label for="your-email">' . __( 'Your Email', 'accessible-contact-form-7' ) .  ' ' . __( '(required)' , 'accessible-contact-form-7' ) . '</label><br />' . "\n"
					. '    [email* your-email id:your-email] </p>' . "\n\n"
					. '<p><label for="your-upload">' . __( 'Upload', 'accessible-contact-form-7' ) .  ' ' . __( '(required)' , 'accessible-contact-form-7' ) . '</label><br />' . "\n"
					. '    [file* your-upload id:your-upload] </p>' . "\n\n"					
					. '<fieldset>' . "\n"
					. '<legend>' . __( 'File includes:', 'accessible-contact-form-7' ) . '</legend>' . "\n"
					. '[checkbox format id:format use_label_element "References" "Cover Letter" "Resume" "Curriculum Vitae"]' . "\n"
					. '</fieldset>';
					break;	
			case 'basic':
			default:
				$template =
					'<p><label for="your-name">' . __( 'Your Name', 'accessible-contact-form-7' ) . ' ' . __( '(required)' , 'accessible-contact-form-7' ) . '</label><br />' . "\n"
					. '    [text* your-name id:your-name] </p>' . "\n\n"
					. '<p><label for="your-email">' . __( 'Your Email', 'accessible-contact-form-7' ) .  ' ' . __( '(required)' , 'accessible-contact-form-7' ) . '</label><br />' . "\n"
					. '    [email* your-email id:your-email] </p>' . "\n\n"
					. '<p><label for="your-subject">' . __( 'Your Subject', 'accessible-contact-form-7' ) . '</label><br />' . "\n"
					. '    [text your-subject id:your-subject] </p>' . "\n\n"
					. '<p><label for="your-message">' . __( 'Your Message', 'accessible-contact-form-7' ) . '</label><br />' . "\n"
					. '    [textarea your-message id:your-message] </p>' . "\n\n";
		}
			
		$template = 
				'[response]' . "\n\n"
				. $template . "\n\n"
				.  '<p>[submit "' . __( 'Send', 'accessible-contact-form-7' ) . '"]</p>';
		$template = apply_filters( 'cf7adv_template', $template, $current );
	} else if ( $prop == 'mail' ) {
		switch ( $current ) {
			case 'address':
				$template['body'] = 
						sprintf( __( 'From: %s', 'accessible-contact-form-7' ),
								'[your-name] <[your-email]>' ) . "\n"
						. sprintf( __( 'Subject: %s', 'contact-form-7' ),
								'[your-subject]' ) . "\n\n"
						. __( 'Address:', 'accessible-contact-form-7' )
									. "\n" . '[address]'
									. "\n" . '[address2]'
									. "\n" . '[city]'
									. "\n" . '[state]'		
									. "\n" . '[postal]' 
									. "\n" . '[country]' . "\n\n"	
						. __( 'Message Body:', 'accessible-contact-form-7' )
								. "\n" . '[your-message]' . "\n\n"
						. '--' . "\n"
						. sprintf( __( 'This e-mail was sent from a contact form on %1$s (%2$s)',
								'accessible-contact-form-7' ), get_bloginfo( 'name' ), get_bloginfo( 'url' ) );
				
			break;
			case 'reserve':
				$template['subject'] = sprintf( __( 'Reservation request for %s', 'accessible-contact-form-7' ), '[room]' );
				$template['body'] = 
						sprintf( __( 'From: %s', 'accessible-contact-form-7' ),
								'[your-name] <[your-email]>' ) . "\n"
						. sprintf( __( 'Room Choice: %s', 'accessible-contact-form-7' ),
								'[room]' ) . "\n\n"
						. __( 'Arrival Date:', 'accessible-contact-form-7' )
									. "\n" . '[date-in]' . "\n\n"	
						. __( 'Approximate Arrival Time:', 'accessible-contact-form-7' )
									. "\n" . '[time-in]' . "\n\n"	
						. __( 'Departure Date:', 'accessible-contact-form-7' )
									. "\n" . '[date-out]' . "\n\n"	
						. __( 'Number of Adults:', 'accessible-contact-form-7' )
									. "\n" . '[adults]' . "\n\n"	
						. __( 'Number of Children:', 'accessible-contact-form-7' )
									. "\n" . '[children]' . "\n\n"										
						. __( 'Special notes:', 'accessible-contact-form-7' )
								. "\n" . '[your-message]' . "\n\n"
						. '--' . "\n"
						. sprintf( __( 'This e-mail was sent from a contact form on %1$s (%2$s)',
								'accessible-contact-form-7' ), get_bloginfo( 'name' ), get_bloginfo( 'url' ) );
		
			break;
			case 'subscribe':
				$template['body'] = 
						sprintf( __( 'From: %s', 'accessible-contact-form-7' ),
								'[your-name] <[your-email]>' ) . "\n"
						. __( 'Subscription Format:', 'accessible-contact-form-7' )
								. "\n" . '[format]' . "\n\n"
						. '--' . "\n"
						. sprintf( __( 'This e-mail was sent from a contact form on %1$s (%2$s)',
								'accessible-contact-form-7' ), get_bloginfo( 'name' ), get_bloginfo( 'url' ) );
				$template['subject'] = sprintf( __( 'New subscription by %s', 'accessible-contact-form-7' ), '[your-name]' );
			break;
			case 'upload':
				$template['body'] = 
						sprintf( __( 'From: %s', 'accessible-contact-form-7' ),
								'[your-name] <[your-email]>' ) . "\n"
						. __( 'Upload Submitted', 'accessible-contact-form-7' )
								. "\n" . '[your-upload]' . "\n\n"
						. '--' . "\n"
						. sprintf( __( 'This e-mail was sent from a contact form on %1$s (%2$s)',
								'accessible-contact-form-7' ), get_bloginfo( 'name' ), get_bloginfo( 'url' ) );
				$template['subject'] = sprintf( __( 'New file submission from %s', 'accessible-contact-form-7' ), '[your-name]' );			
				$template['attachments'] = '[your-upload]';
			break;
		}
	}
	return $template;
}


/** 
 * Produce the array of sample forms available
 * 
 * @param $post Current Contact Form 7 Form object
 * @return array 
 */
function cf7adb_forms( $post ) {
	$forms = array( 
		'basic' => 'Basic', 
		'address'=>'Contact with Address',
		'reserve'=>'Reservation',
		'subscribe'=>'Subscription',
		'upload'=>'File Submission'
	);
	/**
	 * Filters the array of sample forms. Insert an additional form from a plug-in or theme.
	 * 
	 * @param $forms array of forms.
	 * @param $post Current Contact Form 7 Form object
	 */
	return apply_filters( 'cf7adb_add_form_select', $forms, $post );
}

/**
 * Generate form selector
 *
 * @param $post Current Contact Form 7 object
 * @return $links list of links to select from.
 */
add_filter( 'wpcf7_editor_panels', 'cf7adb_create_form' );
function cf7adb_create_form( $panels ) {
	$panels['accessible-contact-forms'] = array(
		'title' => __( 'Templates', 'accessible-contact-form-7' ),
		'callback' => 'cf7adb_select_form'
	);
	
	return $panels;
}

function cf7adb_select_form( $post ) {
	if ( isset( $_GET['page'] ) && $_GET['page'] == 'wpcf7-new' ) {
		$links = '';
		$available_forms = cf7adb_forms( $post );
		$locale = ( isset( $_GET['locale'] ) ) ? $_GET['locale'] : false;
		$base_url = admin_url( 'admin.php?page=wpcf7-new' );
		if ( $locale ) {
			$base_url = add_query_arg( 'locale', $_GET['locale'], $base_url );
		}
		foreach ( $available_forms as $key=> $form ) {
			$url = esc_url( add_query_arg( 'base_form', $key, $base_url ) );
			$current = ( isset( $_GET['base_form'] ) ) ? $_GET['base_form'] : 'basic';
			if ( $current == $key ) {
				$links .= "<li class='selected'>$form</li>";
			} else {
				$links .= "<li><a href='$url'>$form</a></li>";
			}
		}
		if ( $links ) {
			$links = "
				<h3>". __( 'Select an accessible base form:', 'accessible-contact-form-7' ) . "</h3>
					<div class='select-accessible-template'>
						<ul class='cf7adb'>
							$links
						</ul>
					</div>";
			echo $links;
		}
	}
}

add_action( 'admin_enqueue_scripts', 'cf7adb_enqueue_scripts' );
function cf7adb_enqueue_scripts() {
	wp_enqueue_style( 'cf7adb', plugins_url( 'css/cf7adb.css', __FILE__ ) );
}