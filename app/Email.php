<?php namespace App;

class Email implements Message
{
	protected $address;
	protected $name;
	protected $subject;
	protected $body;

	public function setAddress($address) {
		$this->address = $address;
	}

	public function getAddress() {
		return $this->address;
	}

	public function setName($name) {
		$this->name = $name;
	}

	public function getName() {
		return $this->name;
	}

	public function setSubject($subject) {
		$this->subject = $subject;
	}

	public function getSubject() {
		return $this->subject;
	}

	public function setMessageBody($body) {
		$this->body = $body;
	}

	public function getMessageBody() {
		return $this->body;
	}

	public function getMessageString(){}
	public function getMessageJSON(){}

}