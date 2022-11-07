<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyGuestRequest;
use App\Http\Requests\StoreGuestRequest;
use App\Http\Requests\UpdateGuestRequest;
use App\Models\Guest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;
use Excel;
use App\Imports\GuestImport;
use App\Exports\GuestExport;

class GuestController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('guest_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Guest::query()->select(sprintf('%s.*', (new Guest())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'guest_show';
                $editGate = 'guest_edit';
                $deleteGate = 'guest_delete';
                $crudRoutePart = 'guests';

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
            $table->editColumn('slug', function ($row) {
                return $row->slug ? $row->slug : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.guests.index');
    }

    public function create()
    {
        abort_if(Gate::denies('guest_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.guests.create');
    }

    public function store(StoreGuestRequest $request)
    {
        $guest = Guest::create($request->all());

        return redirect()->route('admin.guests.index');
    }

    public function edit(Guest $guest)
    {
        abort_if(Gate::denies('guest_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.guests.edit', compact('guest'));
    }

    public function update(UpdateGuestRequest $request, Guest $guest)
    {
        $guest->update($request->all());

        return redirect()->route('admin.guests.index');
    }

    public function show(Guest $guest)
    {
        abort_if(Gate::denies('guest_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.guests.show', compact('guest'));
    }

    public function destroy(Guest $guest)
    {
        abort_if(Gate::denies('guest_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $guest->delete();

        return back();
    }

    public function massDestroy(MassDestroyGuestRequest $request)
    {
        Guest::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function import(Request $request)
    {
        $file = $request->file('import_file');
        $request->validate([
            'import_file' => 'mimes:csv,txt,xls,xlsx',
        ]);

        Excel::import(new GuestImport(), $file);

        return redirect()->back();
    }

    public function export()
    {
        return (new GuestExport())->download('exportan.xlsx');
    }
}
