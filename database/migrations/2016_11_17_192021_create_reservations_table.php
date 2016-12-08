<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('schedule_id', false, true)->nullable();
            $table->enum('status', ['pending', 'confirmed'])->nullable()->default('pending');
            $table->date('reservation_date')->nullable();
            $table->integer('quantity', false, true)->nullable();
            $table->double('fare', false, true)->nullable();
            $table->double('total', false, true)->nullable();
            $table->integer('client_id', false, true)->nullable();

            $table->foreign('schedule_id')->references('id')->on('schedules')->onDelete('set null');
            $table->nullableTimestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reservations', function ($table) {
            $table->dropForeign('reservations_schedule_id_foreign');
            $table->drop();
        });
    }
}