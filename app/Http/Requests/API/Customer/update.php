<?php

namespace App\Http\Requests\Customer;


use Illuminate\Foundation\Http\FormRequest;
use App\Models\Customer;


class Update extends FormRequest
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
            'email' =>  'unique:users,email,'.$this->segment(2),
            'phone' => ['required'],
            'address' =>['required','string','min:5','max:150'],
            'dob' =>  ['date']
        ];
    }

    /**
     * Process the request.
     *
     *
     */
    public function process()
    {
        return Customer::where('id', $this->segment(2))->update([
           'first_name' => ucfirst($this->first_name),
           'last_name' => ucfirst($this->last_name),
           'email' => strtolower($this->email),
           'phone' => $this->phone,
           'address' => $this->address,
           'dob'  =>  date('Y-m-d', strtotime($this->dob))
        ]);
    }
}