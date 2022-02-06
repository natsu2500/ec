<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\MainCategory;
use App\Model\SubCategory;
use App\Http\Requests\ProductRegisterRequest;
use InterventionImage;


class ProductRegisterController extends Controller
{
    public function  index(){

        $menus = app()->make('App\Http\Controllers\LayoutController');
        $menus = $menus->menus();
        $screens = app()->make('App\Http\Controllers\LayoutController');
        $screens = $screens->screens();

        $main_categories = self::getMainCategries();
        return view('/dashboards/productregister',['menus' => $menus ,'screens' => $screens , 'main_categories' => $main_categories]);
    }

    public function create(ProductRegisterRequest $request){

        $main_image = $request->file('main_product_image');

        InterventionImage::make($main_image)
	                        ->fit(750, 500)
	                        ->save($main_image);

        $main_image_path = isset($main_image) ? $main_image->store('images', 'public') : '';


        for($i = 1; $i < 12; $i++){
            if(!empty($request->file('sub_product_image_'.$i))){
                ${"sub_image_".$i} = $request->file('sub_product_image_'.$i);
    
                InterventionImage::make(${"sub_image_".$i})
                                    ->fit(750, 500)
                                    ->save(${"sub_image_".$i});
        
                ${"sub_image_path_".$i} = isset(${"sub_image_".$i}) ? ${"sub_image_".$i}->store('images', 'public') : '';
            } else{
                ${"sub_image_path_".$i} = null;
            };
        };

        $product = new Product;
        $product->product_name = $request->product_name;
        $product->product_name_kana = $request->product_name_kana;
        $product->jan = $request->jan;
        $product->model_number = $request->model_number;
        $product->description = $request->description;
        $product->main_category_id = $request->main_category;
        $product->sub_category_id = $request->sub_category;
        $product->main_image = $main_image_path;
        $product->sub_image_1 = $sub_image_path_1;
        $product->sub_image_2 = $sub_image_path_2;
        $product->sub_image_3 = $sub_image_path_3;
        $product->sub_image_4 = $sub_image_path_4;
        $product->price = $request->price;
        $product->start_date = $request->start_date;
        $product->end_date = $request->end_date;
        $product->create_user = "test";
        $product->update_uesr =  "test";
        $product->created_at = now();
        $product->updated_at = now();
        $product->save();

        return redirect('/dashboard/productregister')->with('flash_message','・登録が完了しました。');
    }

    //メインカテゴリー取得
    public function getMainCategries(){
        $main_catrgries = MainCategory::all();

        return $main_catrgries;
    }

    //サブカテゴリー取得
    public function getSubCategries(Request $request){
        $sub_catrgries = SubCategory::where('main_id',$request->main_category_id)->get();

        return response()->json($sub_catrgries);
    }


}
