<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('bus_type', ['Deluxe', 'Premium', 'Ordinary'])->default('Ordinary');
            $table->integer('frequency_id', false, true)->nullable();
            $table->integer('origin_id', false, true)->nullable();
            $table->integer('destination_id', false, true)->nullable();
            $table->integer('company_id', false, true)->nullable();
            $table->string('departure')->nullable();
            $table->double('fare')->nullable();
            $table->integer('seats', false, true)->nullable();

            $table->foreign('frequency_id')->references('id')->on('frequencies')->onDelete('set null');
            $table->foreign('origin_id')->references('id')->on('routes')->onDelete('set null');
            $table->foreign('destination_id')->references('id')->on('routes')->onDelete('set null');
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('set null');
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
        Schema::table('schedules', function ($table) {
            $table->dropForeign('schedules_origin_id_foreign');
            $table->dropForeign('schedules_destination_id_foreign');
            $table->dropForeign('schedules_frequency_id_foreign');
            $table->dropForeign('schedules_company_id_foreign');
            $table->drop();
        });
    }
}
