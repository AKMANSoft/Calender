<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'chain' => 'required',
            'total_supply' => 'required',
            'description' => 'required',
            'twitter_link' => 'nullable|url',
            'discord_link' => 'nullable|url',
            'website_link' => 'nullable|url',
            'profile_image_path' => 'required|file',
            'banner_image_path' => 'nullable|file',
            'pre_sale_timezone' => 'required',
            'pre_sale_date' => 'nullable',
            'pre_sale_time' => 'nullable',
            'pre_sale_price' => 'nullable',
            'mint_date' => 'required',
            'mint_time' => 'required',
            'mint_price' => 'required',
            'founder_name' => 'nullable',
            'founder_email' => 'required',
            'founder_phone' => 'nullable',
        ];
    }
}
