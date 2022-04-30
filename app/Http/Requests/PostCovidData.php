<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostCovidData extends FormRequest
{
    public function rules()
    {
        return [
            'first_name' => 'required|string|min:3',
            'last_name' => 'required|string|min:3',
            'email' => 'required',
            'had_covid' => '',
            'had_antibody_test' => '',
            'covid_sickness_date' => '',
            'antibodies.test_date' => '',
            'antibodies.number' => '',
            'had_vaccine' => '',
            'vaccination_stage' => '',
            'non_formal_meetings' => '',
            'number_of_days_from_office' => '',
            'what_about_meetings_in_live' => '',
            'tell_us_your_opinion_about_us' => '',
        ];
    }
}
