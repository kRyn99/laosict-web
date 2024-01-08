<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePartners extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug')->nullable();
            $table->string('slogan')->nullable();
            $table->string('image')->nullable();
            $table->text('desc')->nullable();
            $table->integer('number_of_success_projects')->default(0);
            $table->unsignedFloat('total_collect_amount', 15, 0)->nullable();
            $table->integer('total_collect_turn')->nullable();
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
        Schema::dropIfExists('partners');
    }
}
