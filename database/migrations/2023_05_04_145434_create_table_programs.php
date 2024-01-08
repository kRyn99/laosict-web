<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePrograms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug')->nullable();
            $table->bigInteger('program_type_id')->index();
            $table->unsignedFloat('current_collect_amount', 15, 0)->nullable();
            $table->unsignedFloat('total_collect_amount', 15, 0)->nullable();
            $table->integer('total_collect_turn')->default(0);
            $table->integer('day_left')->default(0);
            $table->unsignedBigInteger('source_id')->index()->nullable()->unique();
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
        Schema::dropIfExists('programs');
    }
}
