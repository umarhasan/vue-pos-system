<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddZonesToQuotations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('quotations', function (Blueprint $table) {
            $table->boolean('is_custom')->after('notes')->default(0);
            $table->string('zone_1', 192)->nullable();
            $table->string('zone_2', 192)->nullable();
            $table->string('zone_3', 192)->nullable();
            $table->string('zone_4', 192)->nullable();
            $table->string('zone_5', 192)->nullable();
            $table->string('zone_6', 192)->nullable();
            $table->string('zone_7', 192)->nullable();
            $table->string('zone_8', 192)->nullable();
            $table->string('zone_9', 192)->nullable();
            $table->string('zone_10', 192)->nullable();
            $table->string('zone_11', 192)->nullable();
            $table->string('zone_12', 192)->nullable();
            $table->string('zone_13', 192)->nullable();
            $table->string('zone_14', 192)->nullable();
            $table->string('zone_15', 192)->nullable();
            $table->string('zone_16', 192)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('quotations', function (Blueprint $table) {
            //
        });
    }
}
