<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToGuestbooksTable extends Migration
{
    public function up()
    {
        Schema::table('guestbooks', function (Blueprint $table) {
            $table->unsignedBigInteger('guest_id')->nullable();
            $table->foreign('guest_id', 'guest_fk_7567861')->references('id')->on('guests');
        });
    }
}
