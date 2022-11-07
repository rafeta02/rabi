@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.guestbook.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.guestbooks.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">{{ trans('cruds.guestbook.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}">
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.guestbook.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ucapan">{{ trans('cruds.guestbook.fields.ucapan') }}</label>
                <textarea class="form-control {{ $errors->has('ucapan') ? 'is-invalid' : '' }}" name="ucapan" id="ucapan">{{ old('ucapan') }}</textarea>
                @if($errors->has('ucapan'))
                    <div class="invalid-feedback">
                        {{ $errors->first('ucapan') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.guestbook.fields.ucapan_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.guestbook.fields.kehadiran') }}</label>
                <select class="form-control {{ $errors->has('kehadiran') ? 'is-invalid' : '' }}" name="kehadiran" id="kehadiran">
                    <option value disabled {{ old('kehadiran', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Guestbook::KEHADIRAN_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('kehadiran', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('kehadiran'))
                    <div class="invalid-feedback">
                        {{ $errors->first('kehadiran') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.guestbook.fields.kehadiran_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="guest_id">{{ trans('cruds.guestbook.fields.guest') }}</label>
                <select class="form-control select2 {{ $errors->has('guest') ? 'is-invalid' : '' }}" name="guest_id" id="guest_id">
                    @foreach($guests as $id => $entry)
                        <option value="{{ $id }}" {{ old('guest_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('guest'))
                    <div class="invalid-feedback">
                        {{ $errors->first('guest') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.guestbook.fields.guest_helper') }}</span>
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