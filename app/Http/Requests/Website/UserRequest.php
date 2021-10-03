<?php

namespace App\Http\Requests\Website;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
    public static function register()
    {
        return [
            'first_name'=>  'required|alpha|max:255|min:3',
            'last_name' =>  'nullable|alpha|max:255',
            'email'     =>  'required|email|unique:users,email|max:255',
            'phone'     =>  'required|numeric|digits_between:8,20|unique:users,phone',
            'password'  =>  'required|min:6|max:255',
            'confirm_password'=> 'required|same:password|min:6|max:255',
        ];
    }

    public static function signin()
    {
        return [
            'email' =>  'required',
            'password' =>  'required',
        ];
    }

    public static function change_password(){
        return [
            'current_password' => 'required',
            'new_password'=> 'required|different:current_password|min:6',
            'confirm_password'=> 'required|same:new_password|min:6',
        ];
    }
}
