<?php

namespace App\Http\Requests;

use App\Models\Parts\CasePart;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCaseRequest extends FormRequest
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
        return CasePart::$rules;
    }

    protected function prepareForValidation()
    {
        //$this->merge(['gallery' => json_decode($this->gallery)]);
    }

    /**
     * @return string
     */
    public function getRedirect(): string
    {
        return $this->redirect;
    }
}
