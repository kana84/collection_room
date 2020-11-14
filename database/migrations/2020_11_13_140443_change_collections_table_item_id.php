<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeCollectionsTableItemId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        //カラム名の変更
        Schema::table('collections', function (Blueprint $table) {
            $table->renameColumn('item_id', 'item_cd');
        });

        //型の変更
        Schema::table('collections', function (Blueprint $table) {
            $table->string('item_cd')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('collections', function (Blueprint $table) {
            $table->integer('item_cd')->change();
        });

        Schema::table('collections', function (Blueprint $table) {
            $table->renameColumn('item_cd','item_id');
        });
    }
}
