<?php

namespace App\Http\Requests\Contact;

use Illuminate\Foundation\Http\FormRequest;

class CreateContactRequest extends FormRequest
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
            'content' => 'required|min:10'
        ];
    }
    public function messages(){
        return[
            'content.required' => 'Không được để trống nội dung',
            'content.min' => 'Không thể ngắn hơn 10 kí tự'
        ];
    }
}
