<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserScreensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_screens', function (Blueprint $table) {
            $table->increments('id',8);
            $table->integer('menu_id',8)->nullable()->comment('メニュ-ID');
            $table->string('screen_name',60)->nullable()->comment('スクリーン画面');
            $table->string('screen_order')->nullable()->comment('スクリーン順序');
            $table->string('screen_url')->nullable()->comment('スクリーンURL');
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
        Schema::dropIfExists('user_screens');
    }
}
