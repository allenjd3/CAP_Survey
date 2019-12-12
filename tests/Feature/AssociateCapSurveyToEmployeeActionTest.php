<?php

namespace Tests\Feature;

use App\Actions\AssociateCapSurveyToEmployeeAction;
use App\Actions\CreateCapSurveyAction;
use App\Actions\CreateEmployeeAction;
use App\User;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class AssociateCapSurveyToEmployeeActionTest extends TestCase
{
		use RefreshDatabase;
		/**
		 * @test
		 */
		public function a_user_can_associate_an_employee_with_a_cap_survey() {
				$user = factory(User::class)->create();

				$createCapSurveyAction = new CreateCapSurveyAction($user, [
						'name'=>'cap survey name',
						'due_date'=> Carbon::parse('next friday')->toDateString(),
						'samples_expire'=> Carbon::parse('today + 5 days')->toDateString(),
						'director_signed'=>false,
						'pathologist_signed'=>false,
						'employee_signed'=>false
				]);

				$cap_survey = $createCapSurveyAction->create();

				$createEmployeeAction = new CreateEmployeeAction($user, [
						'name'=>'Cathy Nelson',
						'email'=>'cathy_nelson@trihealth.com',
				]);
				$employee = $createEmployeeAction->create();

				$associateCapSurveyToEmployeeAction = new AssociateCapSurveyToEmployeeAction($cap_survey, $employee);
				$associateCapSurveyToEmployeeAction->handle();



				$association = collect( DB::table('cap_surveys_employees')->where('cap_survey_id', 1)->orWhere('employee_id', 1)->get());					
				$this->assertEquals(1, count($association->toArray()));

		}
}
