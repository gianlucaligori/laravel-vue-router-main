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
        Schema::create('cocktails', function (Blueprint $table) {
            $table->id();

            $table->string("strDrink", 30);
            $table->text("strInstructionsIT");
            $table->string("strDrinkThumb", 1000);
            $table->string("strAlcoholic", 50);
            $table->date("dateModified");
            $table->string("strCategory", 30);

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
        Schema::dropIfExists('cocktails');
    }
};
