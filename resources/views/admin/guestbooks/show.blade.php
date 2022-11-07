@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.guestbook.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.guestbooks.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.guestbook.fields.name') }}
                        </th>
                        <td>
                            {{ $guestbook->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.guestbook.fields.ucapan') }}
                        </th>
                        <td>
                            {{ $guestbook->ucapan }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.guestbook.fields.kehadiran') }}
                        </th>
                        <td>
                            {{ App\Models\Guestbook::KEHADIRAN_SELECT[$guestbook->kehadiran] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.guestbook.fields.guest') }}
                        </th>
                        <td>
                            {{ $guestbook->guest->name ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.guestbooks.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection