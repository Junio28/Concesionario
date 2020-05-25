<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->Increments('id');
            $table->enum('type', ['Cambio de Aceite', 'Cabio de Filtro', 'Revisión de Frenos','Otros'])
                ->default('otros');
            $table->enum('made_review', ['Si', 'No']);
            $table->text('others');
            $table->timestamps();
        });

        Schema::create('car_review', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedBigInteger('cars_id');
            $table->unsignedInteger('reviews');

            $table->foreign('cars_id')->references('id')->on('cars')
                ->onDelete('cascade');
            $table->foreign('reviews')->references('id')->on('reviews')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
