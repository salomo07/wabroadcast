<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Emailz {
	public function __construct()
    {
    	echo 'string';
    }
    public function confirmEmail($to,$_idUser)
	{
		$subject = 'Confirm Email - Kenji Shop Registration';
		$headers = "From: " . "Kenji Shop Admin". "\r\n";
		$headers .= "CC: kenjibanzai@gmail.com\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

		$message = '<html><body>';
		$message .= '<h1>Hello, World!</h1>';
		$message .= '</body></html>';
		echo 'sending';
		mail($to, $subject, $message, $headers);
	}
}
