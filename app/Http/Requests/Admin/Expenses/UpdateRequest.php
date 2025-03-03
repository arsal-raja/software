<?php
namespace App\Http\Requests\Admin\Expenses;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class CreateRequest
 * @package App\Http\Requests\Admin\Employee
 */
class UpdateRequest extends FormRequest
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
            'itemName' => 'required',
            'price'    => 'required',
            'purchaseDate'    => 'required'
        ];
    }

    public function messages()
    {
        return [
            //
        ];
    }

}
