<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guestbook extends Model
{
    use SoftDeletes;
    use HasFactory;

    public const KEHADIRAN_SELECT = [
        'hadir' => 'Hadir',
        'tidak' => 'Tidak Hadir',
    ];

    public $table = 'guestbooks';

    protected $appends = [
        'hadir',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'ucapan',
        'kehadiran',
        'guest_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function guest()
    {
        return $this->belongsTo(Guest::class, 'guest_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function getHadirAttribute()
    {
        return Guestbook::KEHADIRAN_SELECT[$this->kehadiran];
    }
}
