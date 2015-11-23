<?php namespace App;

interface Message 
{
	public function getMessageString();
	public function getMessageJSON();
}