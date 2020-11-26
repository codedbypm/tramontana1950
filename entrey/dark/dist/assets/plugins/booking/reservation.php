<?php
require_once 'config.php';

// Defind variables
$json =		 array();
$checkin =	 isset( $_POST['reservation__check-in'] ) ? $_POST['reservation__check-in'] : '';
$checkout =	 isset( $_POST['reservation__check-out'] ) ? $_POST['reservation__check-out'] : '';
$firstname = isset( $_POST['reservation__firstname'] ) ? $_POST['reservation__firstname'] : '';
$lastname =  isset( $_POST['reservation__lastname'] ) ? $_POST['reservation__lastname'] : '';
$email =	 isset( $_POST['reservation__email'] ) ? $_POST['reservation__email'] : '';
$phone =	 isset( $_POST['reservation__phone'] ) ? $_POST['reservation__phone'] : '';
$message =	 isset( $_POST['reservation__message'] ) ? $_POST['reservation__message'] : '';

// Check if fields are empty
if( !$checkin ) {
	$json['error']['checkin'] = 'Please enter check-in date.';
}
if( !$checkout ) {
	$json['error']['checkout'] = 'Please enter check-out date.';
}
if( !$firstname ) {
	$json['error']['firstname'] = 'Please enter your first name.';
}
if( !$lastname ) {
	$json['error']['lastname'] = 'Please enter your last name.';
}
if( !$email ) {
	$json['error']['email'] = 'Please enter your email address.';
}
if( !$phone ) {
	$json['error']['phone'] = 'Please enter your phone number.';
}
if( !$message ) {
	$json['error']['message'] = 'Please enter your message.';
}

// Proceed if no erros found
if( !isset( $json['error'] ) ) {

	// Email message
	$mail_message =  $mail_subject . "\r\n\r\n";
	$mail_message .= "Check-in: " . $checkin . "\r\n";
	$mail_message .= "Check-out: " . $checkout . "\r\n";
	$mail_message .= "First Name: " . $firstname . "\r\n";
	$mail_message .= "Last Name: " . $lastname . "\r\n";
	$mail_message .= "Email address: " . $email . "\r\n";
	$mail_message .= "Phone: " . $phone . "\r\n";
	$mail_message .= "Comments: " . $message . "\r\n";

	// Email title
	$mail_headers  = "Content-type: text/plain; charset=utf-8\r\n";
	$mail_headers .= "From: {$from_email}\r\n";

	// Sending email
	mail( $to_email, $mail_subject, $mail_message, $mail_headers );

	// Return success message
	$json['success'] = 'Your booking request has been processed successfully!';
}

// Return data
echo json_encode( $json );
?>