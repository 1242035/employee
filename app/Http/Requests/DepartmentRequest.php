<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Validation\Factory;

class DepartmentRequest extends Request
{
    /**
     * Create a new FormRequest instance.
     *
     * @return void
     */
    public function __construct(Factory $factory)
    {
        $factory->extend(
            'phone',
            function ($attribute, $value, $parameters)
            {
                return preg_match("/^([0-9\s\-\+\(\)]*)$/", $value);
            },
            'Bad phone number format! Please try another one!'
        );
    }
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
            'name' => 'required|max:255',
            'office_number' => 'required|phone|max:20',
        ];
    }
}
