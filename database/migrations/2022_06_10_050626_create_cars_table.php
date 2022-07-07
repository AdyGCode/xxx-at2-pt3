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
        Schema::create('cars', function ($table) {
            $table->id();
            $table->string('code')->default('UNKNOWN');
            $table->string('model')->default('** UNKNOWN **');
            $table->string('manufacturer')->default('** UNKNOWN **');
            $table->unsignedMediumInteger('price')->default(0);
            $table->timestamps();

            $table->index(['code'], 'code', null, ['sparse' => true, 'unique' => true, 'background' => true,]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIndex('code');

        Schema::dropIfExists('cars');
    }
};
