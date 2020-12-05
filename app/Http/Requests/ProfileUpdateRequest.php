<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateRequest extends FormRequest
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
            'name' => 'required|min:3|max:255',
            'email' => 'required|min:3|max:255|email',
//            'password' => 'min:8|max:255'
        ];
    }

    public function messages()
    {
        return [
           'name.required'=>'Kullanıcı adı girmek zorunludur.',
           'email.required'=>'Email adresi girmek zorunludur.',
           'name.min'=>'Kullanıcı adı 3 karakterden daha fazla olmalıdır',
           'email.min'=>'Email adresi 3 karakterden daha fazla olmalıdır',
//           'password.min'=>'Parola 8 karakterden daha fazla olmalıdır',
           'name.max'=>'Kullanıcı adı 255 karakterden daha fazla olamaz.',
           'email.max'=>'Parola 255 karakterden daha fazla olamaz.',
//           'password.max'=>'Parola 255 karakterden daha fazla olamaz.',
           'email.email'=>'Email adresi istenilen biçimde yazılmadı'
        ];

    }
}
