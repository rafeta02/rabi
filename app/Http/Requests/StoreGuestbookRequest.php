<?php

namespace App\Http\Requests;

use App\Models\Guestbook;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreGuestbookRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('guestbook_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'nullable',
            ],
        ];
    }
}
