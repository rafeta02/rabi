<?php

namespace App\Exports;

use App\Models\Guest;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class GuestExport implements FromCollection, ShouldAutoSize
{
    use Exportable;

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $guests = Guest::all();
        $rows = collect([]);

        $rows->push([
            'nama' => 'Nama',
            'brodcast' => 'broadcast',
        ]);

        foreach($guests as $guest) {
            $row = [
                'nama' => $guest->name,
                'broadcast' => "Bismillahirrahmanirrahim
                Assalamu'alaikum wr wb.
                Kepada Yth. ".$guest->name."

                Tanpa mengurangi rasa hormat, perkenankan kami mengundang Bapak/Ibu/Saudara/i, teman sekaligus sahabat, untuk menghadiri acara pernikahan kami :

                Ristina Rahma Shinta Dewi & Ramadhan Febri Utama

                Berikut link undangan kami untuk info lengkap dari acara bisa kunjungi :

                https://wedding.pekade.com/to/".$guest->slug."

                Merupakan suatu kehormatan dan kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i, teman sekaligus sahabat berkenan hadir dan memberikan doa restu pada acara pernikahan kami.

                Atas perhatiannya kami ucapkan terimakasih.

                Wassalamu'alaikum wr wb."
            ];
            $rows->push($row);
        }

        return $rows;
    }
}
