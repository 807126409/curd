<?php

namespace App\Http\Requests\Customer;


use Illuminate\Foundation\Http\FormRequest;
use App\Models\Customer;


class Store extends FormRequest
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
            'first_name' => ['required','string','min:3','max:150'],
            'last_name' => ['required','string','min:3','max:150'],
            'email' => ['required','email', 'unique:customer,email'],
            'phone' => ['required', 'unique:customer,phone'],
            'address' =>['required','string','min:5','max:150'],
            'dob' =>  ['date'],
        ];
    }

    public function messages()
    {
        return [
            
        ];
    }
    /**
     * Process the request.
     *
     *
     */
    public function process()
    {
        
        $customer = Customer::create([
           'first_name' => ucfirst($this->first_name),
           'last_name' => ucfirst($this->last_name),
           'email' => strtolower($this->email),
           'phone' => $this->phone,
           'address' => $this->address,
           'dob'  =>  date('Y-m-d', strtotime($this->dob)),
        ]);

        return $customer;
    }
}