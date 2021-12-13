<?php

namespace App\Http\Requests;

use App\Models\HealtState;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateHealtStateRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('healt_state_edit');
    }

    public function rules()
    {
        return [];
    }
}
