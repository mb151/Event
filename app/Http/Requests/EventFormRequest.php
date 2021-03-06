<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventFormRequest extends FormRequest
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
            'title' => 'required|min:3',
            'description' => 'required|min:5',
            'adresse' => 'required|min:5',
            
        ];
    }

    public function attributes()
    {
        return 
        [
            'title' => 'Titre de l\'evenement',
            'description' => 'Description de l\'evenement',
        ];
    }
}
