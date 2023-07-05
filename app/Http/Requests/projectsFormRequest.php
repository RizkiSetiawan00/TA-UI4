<?php

namespace App\Http\Requests;
use Carbon\Carbon;

use App\Rules\DateBetween;
use App\Rules\TimeBetween;
use Illuminate\Foundation\Http\FormRequest;

class projectsFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */

    public function rules()
    {
        
            /*
        return [
            'desc' => 'required',
            'deadline' => 'required',
            'sta_desc' => 'required',
            'user_id' => 'required',
            ];
            */
        return [
            'desc' => ['required'],
            'deadline'=>['required', 'date', new DateBetween],
            'sta_desc' => ['required'],
            'user_id' => ['required'],
            ];
    }
    public function messages()
    {
        return [
            'desc.required'=> 'Can not be blank',
            'deadline.required'=> 'Can not be blank',
            'sta_desc.required'=> 'Can not be blank',
            'user_id.required'=> 'Can not be blank',
            
        ];
    }
}
