<?php

namespace App\Http\Requests;

use App\Models\Tea;
use Illuminate\Foundation\Http\FormRequest;

class RecommendationQuery extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'caffeine'    => ['integer', 'min:0', 'max:100'],
            'rush'        => ['integer'],
            'type'        => ['string', 'in:'.implode(',', Tea::TYPES)],
        ];
    }
}
