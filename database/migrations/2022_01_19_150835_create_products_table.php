<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id',8)->comment('ID');
            $table->string('product_name',30)->nullable()->comment('商品名');
            $table->string('product_name_kana',60)->nullable()->comment('商品名(カナ)');
            $table->string('jan',13)->comment('JAN');
            $table->string('model_number')->comment('型番');
            $table->string('description',255)->comment('商品説明');
            $table->string('main_category_id',8)->nullable()->comment('メインカテゴリーID');
            $table->string('sub_category_id',8)->nullable()->comment('サブカテゴリーID');
            $table->string('main_image')->comment('メイン画像');
            $table->string('sub_image_1')->comment('サブ画像1');
            $table->string('sub_image_2')->comment('サブ画像2');
            $table->string('sub_image_3')->comment('サブ画像3');
            $table->integer('price')->nullable()->comment('価格');
            $table->date('start_date',8)->nullable()->comment('販売開始');
            $table->date('end_date',8)->nullable()->comment('販売終了');
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
        Schema::dropIfExists('products');
    }
}
