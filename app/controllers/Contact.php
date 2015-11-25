<?php namespace App\Controllers;

use App\Mailer;
use App\Email;

class Contact
{
	public function post($postData) {
		$email = new Email();

		$email->setName($postData['name']);
		$email->setAddress($postData['email']);
		$email->setSubject($postData['subject']);
		$email->setMessageBody($postData['message']);

		$mailer = new Mailer($email);
		var_dump($mailer);
		$mailer->Send();
		
		return 'index';
	}
}
