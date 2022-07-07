<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::create('collectors', function (Blueprint $table) {
        Schema::create('collectors', function ($table) {
            $table->id();
            $table->string('given_name', 128)->nullable();
            $table->string('family_name', 192);
            $table->array('cars')->nullable();
            $table->timestamps();

            $table->index(
                ['family_name', 'given_name',], 'full_name', null,
                ['sparse' => true, 'unique' => true, 'background' => true,]);
            $table->index(
                ['given_name', 'family_name',], 'full_name_reversed', null,
                ['sparse' => true, 'unique' => true, 'background' => true,]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIndex('full_name_reversed');
        Schema::dropIndex('full_name');
        Schema::dropIfExists('collectors');
    }
};
