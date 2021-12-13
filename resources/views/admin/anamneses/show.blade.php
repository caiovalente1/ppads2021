@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.anamnese.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.anamneses.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.anamnese.fields.id') }}
                        </th>
                        <td>
                            {{ $anamnese->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.anamnese.fields.air') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $anamnese->air ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.anamnese.fields.tiredness') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $anamnese->tiredness ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.anamnese.fields.fever') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $anamnese->fever ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.anamnese.fields.pain') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $anamnese->pain ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.anamnese.fields.head') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $anamnese->head ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.anamnese.fields.chest') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $anamnese->chest ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.anamnese.fields.muscle') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $anamnese->muscle ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.anamnese.fields.smell') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $anamnese->smell ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.anamnese.fields.taste') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $anamnese->taste ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.anamnese.fields.diarrhea') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $anamnese->diarrhea ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.anamnese.fields.sneeze') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $anamnese->sneeze ? 'checked' : '' }}>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.anamneses.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection