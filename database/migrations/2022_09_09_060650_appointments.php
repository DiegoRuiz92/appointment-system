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
        Schema::create('appointments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('office_id');
            $table->foreign('office_id')
                ->references('id')
                ->on('offices');
            $table->unsignedBigInteger('workshop_id');
            $table->foreign('workshop_id')
                ->references('id')
                ->on('workshops');
            $table->unsignedBigInteger('owner_id');
            $table->foreign('owner_id')
                ->references('id')
                ->on('owners')
                ->onDelete('cascade');
            $table->date('date')->unique();
            $table->time('time');
            $table->timestamps();
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
