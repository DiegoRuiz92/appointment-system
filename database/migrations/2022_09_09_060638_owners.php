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
        Schema::create('owners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('document',15)->unique();
           
            $table->unsignedBigInteger('document_id');
            $table->foreign('document_id')
                ->references('id')
                ->on('documents')
                ->onDelete('cascade');
            $table->string('firstname',15);
            $table->string('middlename',15)->nullable();
            $table->string('lastname',15);
            $table->string('second_lastname',15)->nullable();
            $table->string('mobile',15);
            $table->string('email',50)->unique();

            $table->string('license',15)->unique();
            $table->string('brand',30);
            $table->string('line',30);
            $table->integer('model');
        
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
        Schema::dropIfExists('owners');
    }
};
