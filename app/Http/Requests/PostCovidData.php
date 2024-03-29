<?php

namespace App\Http\Requests;

use App\Rules\SimpleDateRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PostCovidData extends FormRequest
{
	public function rules(): array
	{
		return [
			'first_name'          => 'required|string|min:3',
			'last_name'           => 'required|string|min:3',
			'email'               => 'required|email',
			'had_covid'           => 'required|in:yes,no,have_right_now',
			'had_antibody_test'   => 'required_if:had_covid,yes',
			'covid_sickness_date' => [
				'required_if:had_antibody_test,false',
                'date'
			],
			'antibodies.test_date' => 'date',
			'antibodies.number'    => 'integer',
			'had_vaccine'          => 'required|boolean',
			'vaccination_stage'    => [
				'required_if:had_vaccine,true',
				Rule::in(
					[
						'first_dosage_and_registered_on_the_second',
						'fully_vaccinated',
						'first_dosage_and_not_registered_yet',
					]
				),
			],
			'i_am_waiting' => [
				'required_if:had_vaccine,false',
				Rule::in(
					[
						'registered_and_waiting',
						'not_planning',
						'had_covid_and_planning_to_be_vaccinated',
					]
				),
			],
			'non_formal_meetings' => [
				'required',
				Rule::in(
					[
						'twice_a_week',
						'once_a_week',
						'once_in_a_two_weeks',
						'once_in_a_month',
					]
				),
			],
			'number_of_days_from_office' => [
				'required',
				Rule::in([0, 1, 2, 3, 4, 5]),
			],
			'what_about_meetings_in_live'   => 'string|nullable',
			'tell_us_your_opinion_about_us' => 'string|nullable',
		];
	}
}
