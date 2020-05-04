<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeColumnsNameInRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ratings', function (Blueprint $table) {
            $table->renameColumn('support_quality','support_quality1');
            $table->renameColumn('product_description_compliance','product_description_compliance1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ratings', function (Blueprint $table) {
            $table->renameColumn('support_quality1','support_quality');
            $table->renameColumn('product_description_compliance1','product_description_compliance');
        });
    }
}
