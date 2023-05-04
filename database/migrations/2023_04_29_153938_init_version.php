<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subdistrict', function (Blueprint $table) {
            $table->id()->autoincrement();
            $table->string('code');
            $table->string('name');
        });
        Schema::create('village', function (Blueprint $table) {
            $table->id()->autoincrement();
            $table->string('code');
            $table->string('name');
            $table->foreignId('subdistrict_id')->constrained('subdistrict');
        });

        Schema::create('record', function (Blueprint $table) {
            $table->id()->autoincrement();
            $table->string('subdistrict');
            $table->string('village');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
