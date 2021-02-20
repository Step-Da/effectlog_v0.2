<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UnitRequest extends FormRequest
{
    /**
     * Авторизация пользователя
     * 
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Правила валидации пои создании нового поставщика
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

    /**
     * Русификация аттрибутов модели
     * 
     * @return array
     */
    public function attributes()
    {
        return[
            'name' => 'Наименование',
            'url' => 'Строка подключения',
            'description' => 'Описание',
        ];
    }

    /**
     * Сообщение при нарушении правил валидации
     * 
     * @return array
     */
    public function messages()
    {
        return[
            'name.required' => 'Поле наименование является обязательным',
            'url.required' => 'Поле строка подключения является обязательным',
        ];
    }
}