<?php namespace App\Controllers;

use App\Mailer;
use App\Message;

class Contact
{
	public function post($postData) {
		$email = new Message($postData['email'], 
							 $postData['name'], 
							 $postData['subject'], 
							 $postData['message']
							 );

		$mailer = new Mailer($email);

		$mailer->Send();		
		return 'index';
	}
}
