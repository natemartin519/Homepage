<?php 

use App\Email;
use Faker\Factory as FackerFactory;
// receives

class EmailTest extends PHPUnit_Framework_TestCase
{
	protected $faker;
	protected $address;
	protected $emailMessage;
	protected $name;
	protected $subject;
	protected $messageBody;

	protected function setUp()
    {
        $this->faker = FackerFactory::create();

        $this->address = $this->faker->email();
        $this->name = $this->faker->name();
        $this->subject = $this->faker->words();
        $this->messageBody = $this->faker->text();
		$this->emailMessage = new Email();
    }

	public function test_email_receives_a_return_address() {
		$this->emailMessage->setAddress($this->address);

		$this->assertAttributeNotEmpty('address', $this->emailMessage);
	}

	public function test_email_returns_a_return_address() {
		$this->emailMessage->setAddress($this->address);
		$returnedAddress = $this->emailMessage->getAddress();

		$this->assertEquals($this->address, $returnedAddress);
	}

	public function test_email_receives_a_contact_name() {
		$this->emailMessage->setName($this->name);

		$this->assertAttributeNotEmpty('name', $this->emailMessage);
	}

	public function test_email_returns_a_contact_name() {
		$this->emailMessage->setName($this->name);
		$returnedName = $this->emailMessage->getName();

		$this->assertEquals($this->name, $returnedName);
	}

	public function test_email_receives_a_subject() {
		$this->emailMessage->setSubject($this->subject);

		$this->assertAttributeNotEmpty('subject', $this->emailMessage);
	}

	public function test_email_returns_a_subject() {
		$this->emailMessage->setSubject($this->subject);
		$returnedSubject = $this->emailMessage->getSubject();

		$this->assertEquals($this->subject, $returnedSubject);		
	}

	public function test_email_receives_a_message_body() {
		$this->emailMessage->setMessageBody($this->messageBody);

		$this->assertAttributeNotEmpty('body', $this->emailMessage);		
	}

	public function test_email_returns_a_message_body() {
		$this->emailMessage->setMessageBody($this->messageBody);
		$returnedMessageBody = $this->emailMessage->getMessageBody();

		$this->assertEquals($this->messageBody, $returnedMessageBody);		
	}

	public function test_email_should_return_the_message_as_a_string() {

	}

	public function test_email_should_return_the_message_as_a_JSON_object() {
		
	}
}
