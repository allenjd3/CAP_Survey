<?php

namespace Tests\Feature;

use App\Actions\CreateCapSurveyAction;
use App\CapSurvey;
use App\User;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateCapSurveyActionTest extends TestCase
{
		use RefreshDatabase;
		/**
		 * @test
		 */
		public function a_user_can_create_a_cap_survey()
		{
				$user = factory(User::class)->create();
				$createCapSurveyAction = new CreateCapSurveyAction($user, [
					'name'=>'cap survey name',
					'due_date'=> Carbon::parse('next friday')->toDateString(),
					'samples_expire'=>Carbon::parse('today + 5 days')->toDateString(),
					'director_signed'=>false,
					'pathologist_signed'=>false,
					'employee_signed'=>false
				]);

				$createCapSurveyAction->create();

				$this->assertEquals(1, count(CapSurvey::all()->toArray()));

				
				
		}

}
