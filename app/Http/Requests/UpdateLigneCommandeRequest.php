<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLigneCommandeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //
            'etatCommande'=>'required|string',
            'numeroCommande'=>'required|string',
            'statutCommande'=>'required|string',
            'paiement'=>'required|integer',
            'user_id'=>'required',
            'zone_id'=>'required',
            'lignCommande_id'=>'required',
        ];
    }
}
