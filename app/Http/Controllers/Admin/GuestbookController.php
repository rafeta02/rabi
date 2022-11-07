<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyGuestbookRequest;
use App\Http\Requests\StoreGuestbookRequest;
use App\Http\Requests\UpdateGuestbookRequest;
use App\Models\Guest;
use App\Models\Guestbook;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class GuestbookController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('guestbook_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Guestbook::with(['guest'])->select(sprintf('%s.*', (new Guestbook())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'guestbook_show';
                $editGate = 'guestbook_edit';
                $deleteGate = 'guestbook_delete';
                $crudRoutePart = 'guestbooks';

                return view('partials.datatablesActions', compact(
                'viewGate',
                'editGate',
                'deleteGate',
                'crudRoutePart',
                'row'
            ));
            });

            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : '';
            });
            $table->editColumn('ucapan', function ($row) {
                return $row->ucapan ? $row->ucapan : '';
            });
            $table->editColumn('kehadiran', function ($row) {
                return $row->kehadiran ? Guestbook::KEHADIRAN_SELECT[$row->kehadiran] : '';
            });
            $table->addColumn('guest_name', function ($row) {
                return $row->guest ? $row->guest->name : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'guest']);

            return $table->make(true);
        }

        return view('admin.guestbooks.index');
    }

    public function create()
    {
        abort_if(Gate::denies('guestbook_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $guests = Guest::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.guestbooks.create', compact('guests'));
    }

    public function store(StoreGuestbookRequest $request)
    {
        $guestbook = Guestbook::create($request->all());

        return redirect()->route('admin.guestbooks.index');
    }

    public function edit(Guestbook $guestbook)
    {
        abort_if(Gate::denies('guestbook_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $guests = Guest::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $guestbook->load('guest');

        return view('admin.guestbooks.edit', compact('guestbook', 'guests'));
    }

    public function update(UpdateGuestbookRequest $request, Guestbook $guestbook)
    {
        $guestbook->update($request->all());

        return redirect()->route('admin.guestbooks.index');
    }

    public function show(Guestbook $guestbook)
    {
        abort_if(Gate::denies('guestbook_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $guestbook->load('guest');

        return view('admin.guestbooks.show', compact('guestbook'));
    }

    public function destroy(Guestbook $guestbook)
    {
        abort_if(Gate::denies('guestbook_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $guestbook->delete();

        return back();
    }

    public function massDestroy(MassDestroyGuestbookRequest $request)
    {
        Guestbook::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
