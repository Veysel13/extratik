<?php

namespace App\Domain\Patient\Http\Requests;

use App\Core\Http\Requests\BaseRequest;

class PatientRequest extends BaseRequest
{
    protected $rules;

    public function rules()
    {
        $this->rules = [
            'id_card' => 'required|unique',
            'gender' => 'required',
            'name' => 'required',
            'surname' => 'required',
            'date_of_birth' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'id_card.unique' => 'The Id Card has already been taken.',
        ];
    }

}
