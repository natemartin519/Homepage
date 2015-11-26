<?php namespace App\Controllers;

use App\Mailer;
use App\Message;

class Contact
{
	public function post($postData) {
		$email = new Message();

		$email->setName($postData['name']);
		$email->setAddress($postData['email']);
		$email->setSubject($postData['subject']);
		$email->setMessageBody($postData['message']);

		$mailer = new Mailer($email);
		$mailer->Send();
		
		return 'index';
	}
}
