<?php

namespace App\Http\Requests\Merchant;

use Illuminate\Foundation\Http\FormRequest;

class HousingManagementRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'phone'            => 'required|string',
            'name'             => 'required|string',
            'sex'              => 'required|integer',
            'house_type'       => 'required|integer',
            'checking_way'     => 'required|integer',
            'purpose'          => 'required|integer',
            'min_price'        => 'nullable|numeric',
            'selling_price'    => 'nullable|numeric',
            'complex'          => 'nullable|string',
            'building'         => 'nullable|string',
            'unit'             => 'nullable|string',
            'room'             => 'nullable|string',
            'apartment_layout' => 'nullable|string',
            'year'             => 'nullable|integer',
            'building_area'    => 'nullable|integer',
            'usable_area'      => 'nullable|integer',
            'decoration'       => 'nullable|integer',
            'direction'        => 'nullable|array',
            'duty'             => 'nullable|numeric',
            'remark'           => 'nullable|string',
        ];
    }
}
