<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_categories', function (Blueprint $table) {
            $table->increments('id',8)->comment('ID');
            $table->string('main_id',8)->nullable()->comment('main_ID');
            $table->string('sub_categry_name',60)->nullable()->comment('サブカテゴリー名');
            $table->string('create_user')->nullable()->comment('作成者');
            $table->string('update_uesr')->nullable()->comment('更新者');
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
        Schema::dropIfExists('sub_categories');
    }
}
