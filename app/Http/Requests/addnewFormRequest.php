<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addnewFormRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'name' => 'required|min:3|max:100',
            'joinDate' => 'required',
            'birth' => 'required',
            'idNumb' => 'required|min:3|max:20',
            'nip' => 'required|min:3|max:11',
            'phoneNumb' => 'required|min:3|max:20',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:8|confirmed',
            'alamat' => 'required|min:10',
            'jobDesc' => 'required|min:10',
            'jobPurpose' => 'required|min:10',
            'accName' => 'required|min:3|max:50',
            'npwp' => 'required|min:3|max:20',
            'accNumb' => 'required|min:3|max:20',
            'bpjsKerja' => 'required|min:3|max:20',
            'health' => 'required|min:3|max:20',
            'bpjsSehat' => 'required|min:3|max:20',
            'departemenName' => 'required',
            'title1Name' => 'required',
            'lokasiName' => 'required',
            'brandName' => 'required',
            'bankName' => 'required',
            ];
    }
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Can not be blank',
            'email.required' => 'Can not be blank',
            'joinDate.required' => 'Can not be blank',
            'birth.required' => 'Can not be blank',
            'departemenName.required' => 'Can not be blank',
            'nip.required' => 'Can not be blank',
            'phoneNumb.required' => 'Can not be blank',
            'title1Name.required' => 'Can not be blank',
            'lokasiName.required' => 'Can not be blank',
            'brandName.required' => 'Can not be blank',
            'password.required' => 'Can not be blank',
            'password_confirmation.required' => 'Can not be blank',
            'alamat.required' => 'Can not be blank',
            'jobDesc.required' => 'Can not be blank',
            'jobPurpose.required' => 'Can not be blank',
            'bankName.required' => 'Can not be blank',
            'accName.required' => 'Can not be blank',
            'npwp.required' => 'Can not be blank',
            'accNumb.required' => 'Can not be blank',
            'bpjsKerja.required' => 'Can not be blank',
            'health.required' => 'Can not be blank',
            'bpjsSehat.required' => 'Can not be blank',
            
        ];
    }
}
