<?php

namespace App\Actions;

use App\CapSurvey; 

class CreateCapSurveyAction
{
	private $user;
	private $survey;
	public function __construct($user, $survey) {
		$this->user = $user;
		$this->survey = $survey;
	}
	public function create()
	{
		return CapSurvey::create($this->survey);
	}
	
}
