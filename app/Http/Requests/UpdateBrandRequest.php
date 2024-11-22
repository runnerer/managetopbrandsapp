<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\IsoCountry;

class UpdateBrandRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'brand_name' => 'sometimes|string|max:255',
            'brand_image' => 'sometimes|url',
            'rating' => 'sometimes|integer|min:1|max:5',
            'country' => ['sometimes', 'string', 'size:2', new IsoCountry],
        ];
    }
}
