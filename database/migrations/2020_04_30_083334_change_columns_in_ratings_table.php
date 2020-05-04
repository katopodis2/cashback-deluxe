<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeColumnsInRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ratings', function (Blueprint $table) {
            $table->integer('support_quality')->nullable()->after('delivery_speed');
            $table->integer('product_description_compliance')->nullable()->after('support_quality');
            $table->dropColumn('support_quality1');
            $table->dropColumn('product_description_compliance1');
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
            $table->dropColumn('support_quality');
            $table->dropColumn('product_description_compliance');
            $table->text('support_quality1')->nullable();
            $table->text('product_description_compliance1')->nullable();
        });
    }
}
