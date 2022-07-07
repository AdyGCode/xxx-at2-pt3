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
        Schema::create('car_collector', function (Blueprint $table) {
            $table->id();
            $table->string('collector_id');
            $table->string('car_id');
            $table->timestamps();

            $table->index(
                ['collector_id', 'car_id',], 'collector_car', null,
                ['sparse' => true, 'unique' => true, 'background' => true,]);
            $table->index(
                ['car_id','collector_id', ], 'car_collector', null,
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
        Schema::dropIndex('collector_car');
        Schema::dropIndex('car_collector');

        Schema::dropIfExists('car_collector');
    }
};
