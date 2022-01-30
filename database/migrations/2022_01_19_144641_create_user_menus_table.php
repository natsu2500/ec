<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_menus', function (Blueprint $table) {
            $table->increments('id',8);
            $table->string('menu_name',60)->nullable()->comment('メニュー画面');
            $table->string('menu_order')->nullable()->comment('メニュー順序');
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
        Schema::dropIfExists('user_menus');
    }
}
