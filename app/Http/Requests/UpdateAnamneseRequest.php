<?php

namespace App\Http\Requests;

use App\Models\Anamnese;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateAnamneseRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('anamnese_edit');
    }

    public function rules()
    {
        return [];
    }
}
