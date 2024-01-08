<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeStringToText extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->text('name')->change();
            $table->text('slug')->nullable()->change();
            $table->longText('desc')->nullable()->change();
            $table->text('keywords')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('name')->change();
            $table->string('slug')->nullable()->change();
            $table->text('desc')->nullable()->change();
            $table->string('keywords')->nullable()->change();

        });
    }
}
