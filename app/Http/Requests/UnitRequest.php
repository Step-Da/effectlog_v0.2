<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UnitRequest extends FormRequest
{
    /**
     * 
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * 
     * @return array
     */
    public function rules()
    {
        return[
            'name' =>'required|min:5|max:50',
            'url' =>'required',
            'description' => 'min:15|max:300',
        ];
    }

    public function attributes()
    {
        return[
            'name' => 'Наименование',
            'url' => 'Строка подключения',
            'description' => 'Описание',
        ];
    }

    public function messages()
    {
        return[
            'name.required' => 'Поле наименование является обязательным',
            'url.required' => 'Поле строка подключения является обязательным',
        ];
    }
}