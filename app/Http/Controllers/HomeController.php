<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guestbook;
use App\Models\Guest;
use App\Http\Requests\StoreGuestbookRequest;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($tamu = null)
    {
        if ($tamu) {
            $guest = Guest::where('slug', $tamu)->first();
        }

        $guestbooks = Guestbook::latest()->get();
        return view('front', compact('guestbooks'))->with('guest', $guest->name ?? $tamu);
    }

    public function ucapan(Request $request)
    {
        $guestbook = Guestbook::create($request->all());

        return response()->json([
            'success'=> 'Ucapan dan Doa berhasil disimpan',
            'data' => [
                'name' => $guestbook->name,
                'ucapan' => $guestbook->ucapan,
                'kehadiran' => $guestbook->kehadiran,
                'hadir' => Guestbook::KEHADIRAN_SELECT[$guestbook->kehadiran]
            ]]);
    }
}
