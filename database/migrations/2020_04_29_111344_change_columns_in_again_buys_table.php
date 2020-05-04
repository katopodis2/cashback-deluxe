<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeColumnsInAgainBuysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('again_buys', function (Blueprint $table) {
            $table->boolean('is_buy_again')->default(ConstBoolean::NO)->after('store_id');
            $table->dropColumn('yes');
            $table->dropColumn('no');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('again_buys', function (Blueprint $table) {
            //
        });
    }
}
