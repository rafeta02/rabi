<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuestbooksTable extends Migration
{
    public function up()
    {
        Schema::create('guestbooks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->longText('ucapan')->nullable();
            $table->string('kehadiran')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
