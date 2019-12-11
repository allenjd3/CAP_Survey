<?php

namespace Tests\Feature;

use App\Actions\CreateEmployeeAction;
use App\Employee;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateEmployeeActionTest extends TestCase
{
		use RefreshDatabase;
		/**
		 * @test
		 */
		public function a_user_can_create_a_new_employee()
		{
				$user = factory(User::class)->create();
				$createEmployeeAction = new CreateEmployeeAction($user, [
					'name'=>'Cathy Nelson',
					'email'=>'cathy_nelson@trihealth.com',
				]);
				$createEmployeeAction->create();
				$this->assertEquals(1, count(Employee::all()->toArray()));

				
		}
}
