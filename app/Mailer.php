<?php namespace App;

class Mailer
{	
	protected $message;

	function __construct(Message $message) {
		$this->message = $message;
	}

	public function Send() {
		$headers = 'From: ' . EMAIL . "\r\n" .
    			   'Reply-To: ' . $this->message->getAddress() . "\r\n" .
    			   'X-Mailer: PHP/' . phpversion();

		$result = mail(EMAIL, $this->message->getSubject(), $this->message->getMessageBody(), $headers); 
		var_dump($result);
	}
}
