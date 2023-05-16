<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTrain extends FormRequest
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
            'typeTrain'=> 'required',
            'DateMiseService'=> 'required|min:10|max:10',
            'heureMiseService'=> 'required|min:5|max:5',
            'nombreVoitures'=> 'required'
        
        ];
    }
}
