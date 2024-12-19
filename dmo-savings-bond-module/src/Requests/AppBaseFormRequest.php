<?php

namespace DMO\SavingsBond\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppBaseFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [];
    }
}
