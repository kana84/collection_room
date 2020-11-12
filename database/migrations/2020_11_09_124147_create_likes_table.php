<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();  //外部キー制約
            $table->foreignId('collection_id')->constrained();  //外部キー制約
            $table->primary(['user_id', 'collection_id']); 
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'))->nullable(false);
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'))->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('likes');
    }
}
