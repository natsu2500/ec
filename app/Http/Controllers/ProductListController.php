<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\MainCategory;
use App\Model\SubCategory;
use App\Http\Requests\ProductRegisterRequest;

class ProductListController extends Controller
{
    public function  index(){

        $products= Product::all();

        return view('/dashboards/productlist',['products' => $products]);
    }

    public function detail(request $request){

        $product = Product::find($request->id);

        $main_category = MainCategory::find($product->main_category_id);
        $sub_category = SubCategory::find($product->sub_category_id);

        return view('/dashboards/productdetail',['product' => $product,'main_category' => $main_category,'sub_category' => $sub_category]);
    }
}
