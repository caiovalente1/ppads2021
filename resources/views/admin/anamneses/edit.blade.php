@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.anamnese.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.anamneses.update", [$anamnese->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <div class="form-check {{ $errors->has('air') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="air" value="0">
                    <input class="form-check-input" type="checkbox" name="air" id="air" value="1" {{ $anamnese->air || old('air', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="air">{{ trans('cruds.anamnese.fields.air') }}</label>
                </div>
                @if($errors->has('air'))
                    <div class="invalid-feedback">
                        {{ $errors->first('air') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.anamnese.fields.air_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('tiredness') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="tiredness" value="0">
                    <input class="form-check-input" type="checkbox" name="tiredness" id="tiredness" value="1" {{ $anamnese->tiredness || old('tiredness', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="tiredness">{{ trans('cruds.anamnese.fields.tiredness') }}</label>
                </div>
                @if($errors->has('tiredness'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tiredness') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.anamnese.fields.tiredness_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('fever') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="fever" value="0">
                    <input class="form-check-input" type="checkbox" name="fever" id="fever" value="1" {{ $anamnese->fever || old('fever', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="fever">{{ trans('cruds.anamnese.fields.fever') }}</label>
                </div>
                @if($errors->has('fever'))
                    <div class="invalid-feedback">
                        {{ $errors->first('fever') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.anamnese.fields.fever_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('pain') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="pain" value="0">
                    <input class="form-check-input" type="checkbox" name="pain" id="pain" value="1" {{ $anamnese->pain || old('pain', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="pain">{{ trans('cruds.anamnese.fields.pain') }}</label>
                </div>
                @if($errors->has('pain'))
                    <div class="invalid-feedback">
                        {{ $errors->first('pain') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.anamnese.fields.pain_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('head') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="head" value="0">
                    <input class="form-check-input" type="checkbox" name="head" id="head" value="1" {{ $anamnese->head || old('head', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="head">{{ trans('cruds.anamnese.fields.head') }}</label>
                </div>
                @if($errors->has('head'))
                    <div class="invalid-feedback">
                        {{ $errors->first('head') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.anamnese.fields.head_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('chest') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="chest" value="0">
                    <input class="form-check-input" type="checkbox" name="chest" id="chest" value="1" {{ $anamnese->chest || old('chest', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="chest">{{ trans('cruds.anamnese.fields.chest') }}</label>
                </div>
                @if($errors->has('chest'))
                    <div class="invalid-feedback">
                        {{ $errors->first('chest') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.anamnese.fields.chest_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('muscle') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="muscle" value="0">
                    <input class="form-check-input" type="checkbox" name="muscle" id="muscle" value="1" {{ $anamnese->muscle || old('muscle', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="muscle">{{ trans('cruds.anamnese.fields.muscle') }}</label>
                </div>
                @if($errors->has('muscle'))
                    <div class="invalid-feedback">
                        {{ $errors->first('muscle') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.anamnese.fields.muscle_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('smell') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="smell" value="0">
                    <input class="form-check-input" type="checkbox" name="smell" id="smell" value="1" {{ $anamnese->smell || old('smell', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="smell">{{ trans('cruds.anamnese.fields.smell') }}</label>
                </div>
                @if($errors->has('smell'))
                    <div class="invalid-feedback">
                        {{ $errors->first('smell') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.anamnese.fields.smell_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('taste') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="taste" value="0">
                    <input class="form-check-input" type="checkbox" name="taste" id="taste" value="1" {{ $anamnese->taste || old('taste', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="taste">{{ trans('cruds.anamnese.fields.taste') }}</label>
                </div>
                @if($errors->has('taste'))
                    <div class="invalid-feedback">
                        {{ $errors->first('taste') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.anamnese.fields.taste_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('diarrhea') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="diarrhea" value="0">
                    <input class="form-check-input" type="checkbox" name="diarrhea" id="diarrhea" value="1" {{ $anamnese->diarrhea || old('diarrhea', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="diarrhea">{{ trans('cruds.anamnese.fields.diarrhea') }}</label>
                </div>
                @if($errors->has('diarrhea'))
                    <div class="invalid-feedback">
                        {{ $errors->first('diarrhea') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.anamnese.fields.diarrhea_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('sneeze') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="sneeze" value="0">
                    <input class="form-check-input" type="checkbox" name="sneeze" id="sneeze" value="1" {{ $anamnese->sneeze || old('sneeze', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="sneeze">{{ trans('cruds.anamnese.fields.sneeze') }}</label>
                </div>
                @if($errors->has('sneeze'))
                    <div class="invalid-feedback">
                        {{ $errors->first('sneeze') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.anamnese.fields.sneeze_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection