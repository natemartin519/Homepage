<?php namespace App;

class Mailer
{
	const to = 'natemartin519@gmail.com';
	
	protected $message;

	function __construct(Message $message) {
		$this->message = $message;
	}

	public function Send() {
		$headers = 'From: ' . $this->message->getAddress() . "\r\n" .
    			   'Reply-To: ' . $this->message->getAddress() . "\r\n" .
    			   'X-Mailer: PHP/' . phpversion();

		$result = mail(self::to, $this->message->getSubject(), $this->message->getMessageBody(), $headers); 
		var_dump($result);
	}
}
