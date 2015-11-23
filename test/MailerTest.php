<?php

use App\Mailer;
use App\Email;

class MailerTest extends PHPUnit_Framework_TestCase
{

	public function test_Emailer_takes_a_message_object_on_creation()
    {
    	$testEmail = new Email(new Email());
        $mailer = new Mailer($testEmail);

		$this->assertAttributeNotEmpty('email', $mailer);
    }
}