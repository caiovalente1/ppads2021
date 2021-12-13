@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.healtState.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.healt-states.update", [$healtState->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <div class="form-check {{ $errors->has('good') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="good" value="0">
                    <input class="form-check-input" type="checkbox" name="good" id="good" value="1" {{ $healtState->good || old('good', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="good">{{ trans('cruds.healtState.fields.good') }}</label>
                </div>
                @if($errors->has('good'))
                    <div class="invalid-feedback">
                        {{ $errors->first('good') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.healtState.fields.good_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('bad') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="bad" value="0">
                    <input class="form-check-input" type="checkbox" name="bad" id="bad" value="1" {{ $healtState->bad || old('bad', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="bad">{{ trans('cruds.healtState.fields.bad') }}</label>
                </div>
                @if($errors->has('bad'))
                    <div class="invalid-feedback">
                        {{ $errors->first('bad') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.healtState.fields.bad_helper') }}</span>
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