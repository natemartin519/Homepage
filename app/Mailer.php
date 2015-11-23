<?php namespace App;

class Mailer
{
	protected $email;

	function __construct(Message $email) {
		$this->email = $email;
	}

	
}
