<?php
namespace App\Http\Requests\Admin\Holiday;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class CreateRequest
 * @package App\Http\Requests\Admin\Employee
 */
class CreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    // public function authorize()
    // {
    //     // If admin
    //     return admin();
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'date.0'  => 'required',
        ];
    }

    public function messages()
    {
        return [
            'date.0.required' => 'Date is a require field;'
        ];
    }

}
