<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVoyage extends FormRequest
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
            
            'heureDepartVoyage'=> 'required',
            'heureFinVoyage'=> 'required',
            'dateDepartVoyage' => 'required',
            'prixPropose' => 'required',
            'train_id' => 'required',
            'villeDep'=> 'required',
            'villeFin'=> 'required'
           
        ];
    }
}
