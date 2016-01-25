<?php namespace App;

class Message
{
	protected $address;
	protected $name;
	protected $subject;
	protected $body;

	function __construct($address, $name, $subject, $message) {
		$this->setAddress($address);
		$this->setName($name);
		$this->setSubject($subject);
		$this->setMessageBody($message);
	}

	public function setAddress($address) {
		$this->address = $address;
	}

	public function getAddress() {
		return $this->address;
	}

	public function setName($name) {
		$this->name = strip_tags($name);
	}

	public function getName() {
		return $this->name;
	}

	public function setSubject($subject) {
		$this->subject = strip_tags($subject);
	}

	public function getSubject() {
		return $this->subject;
	}

	public function setMessageBody($body) {
		$this->body = strip_tags($body);
	}

	public function getMessageBody() {
		return $this->body;
	}
}
