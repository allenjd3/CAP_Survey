<?php

namespace App\Actions;

use Illuminate\Support\Facades\DB;

class AssociateCapSurveyToEmployeeAction
{
		private $cap_survey;
		private $employee;
		public function __construct($cap_survey, $employee){
			$this->cap_survey = $cap_survey;
			$this->employee = $employee;
		}
		public function handle()
		{
				return DB::table('cap_surveys_employees')->insert([
					'cap_survey_id'=>$this->cap_survey->id,
					'employee_id'=>$this->employee->id
				]);

		
		}

}
