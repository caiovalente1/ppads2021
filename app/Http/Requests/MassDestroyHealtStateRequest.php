<?php

namespace App\Http\Requests;

use App\Models\HealtState;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyHealtStateRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('healt_state_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:healt_states,id',
        ];
    }
}
