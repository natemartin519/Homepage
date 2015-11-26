<?php namespace App;

class Mailer
{	
	protected $message;

	function __construct(Message $message) {
		$this->message = $message;
	}

	public function Send() {
		$headers = 'From: <' . $this->message->getName() . '>' . $this->message->getAddress() . "\r\n" .
    			   // 'Reply-To: ' . $this->message->getAddress() . "\r\n" .
    			   'X-Mailer: PHP/' . phpversion();

		$result = mail(EMAIL, $this->message->getSubject(), $this->message->getMessageBody(), $headers); 
	}
}
