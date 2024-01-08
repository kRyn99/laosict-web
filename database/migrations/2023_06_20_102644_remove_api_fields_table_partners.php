<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveApiFieldsTablePartners extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('partners', function (Blueprint $table) {
            $table->dropColumn([
                'number_of_success_projects',
                'total_collect_amount',
                'total_collect_turn',
                'source_id',
            ]);
        });

        Schema::table('programs', function (Blueprint $table) {
            $table->dropColumn([
                'current_collect_amount',
               // 'total_collect_amount',
                'total_collect_turn',
                'day_left',
                'source_id',
            ]);
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
