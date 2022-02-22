<?php

namespace App\Http\Requests\Voters;

use Illuminate\Foundation\Http\FormRequest;

class CreateVotersRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'voter_name'=> 'required',
            'gender'=> 'required',
            'level'=> 'required',
            'password' => 'required|unique:voters',
            'vote_status'=> 'required'
        ];
    }
}
