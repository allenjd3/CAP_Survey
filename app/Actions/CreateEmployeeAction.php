<?php

namespace App\Actions;

use App\Employee;


class CreateEmployeeAction
{

		private $user;
		private $employee;
		public function __construct($user, $employee)
		{
				$this->user = $user;
				$this->employee = $employee;
		
		}
		public function create()
		{
				return Employee::create($this->employee);
			
		}
}
