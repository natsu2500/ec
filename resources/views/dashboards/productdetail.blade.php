@extends('layouts.dashboardmain')

@section('content')
<div class="container-fluid pr-5 pl-5 pb-5">
    <div class='h3 mt-4'>商品詳細</div>
    <a href="/dashboard/productlist">商品一覧に戻る</a>
    <div class="row"> 
        <div class="image-box mr-5">
            <div class="image-box-hight">
            <img id="top-image"  src="{{ \Storage::url($product->main_image) }}" alt="" data-image="{{ \Storage::url($product->main_image) }}" >
            </div>
            <div class="image-box-low">
                <img class="gridItem" src="{{ \Storage::url($product->main_image) }}" alt=""  data-image="{{ \Storage::url($product->main_image) }}"/>
                <img class="gridItem" src="{{ \Storage::url($product->sub_image_1) }}" alt=""  data-image="{{ \Storage::url($product->sub_image_1) }}"/>
                <img class="gridItem" src="{{ \Storage::url($product->sub_image_2) }}" alt=""  data-image="{{ \Storage::url($product->sub_image_2) }}"/>
                <img class="gridItem" src="{{ \Storage::url($product->sub_image_3) }}" alt=""  data-image="{{ \Storage::url($product->sub_image_3) }}"/>
                <img class="gridItem" src="{{ \Storage::url($product->sub_image_4) }}" alt=""  data-image="{{ \Storage::url($product->sub_image_4) }}"/>

            </div>
        </div>
        <div class="w-50 ml-5">
            <div class="mb-3">                
                <h5>商品ID</h5>
                <div class="ml-5">{{$product->id}}</div>
            </div>

    
            <div class="mb-3"> 
                <h5>商品名</h5>
                <div class="ml-5">{{$product->product_name}}</div>
            </div>

            <div class="mb-3"> 
                <h5>商品名(カナ)</h5>
                <div class="ml-5">{{$product->product_name}}</div>
            </div>

            <div class="mb-3"> 
                <h5>JANコード</h5>
                <div class="ml-5">{{$product->jan}}</div>
            </div>

            <div class="mb-3"> 
                <h5>商品型番</h5>
                <div class="ml-5">{{$product->model_number}}</div>
            </div>

            <div class="mb-3"> 
                <h5>メインカテゴリー</h5>
                <div class="ml-5">{{$main_category["main_categry_name"]}}</div>
            </div>

            <div class="mb-3"> 
                <h5>サブカテゴリー</h5>
                <div class="ml-5">{{$sub_category["sub_categry_name"]}}</div>
            </div>

            <div class="mb-3"> 
                <h5>価格</h5>
                <div class="ml-5">{{$product->price}}</div>
            </div>

            <div class="mb-3"> 
                <h5>商品説明</h5>
                <div class="ml-5">{{$product->description}}</div>
            </div>

            <div class="mb-3"> 
                <h5>販売開始</h5>
                <div class="ml-5">{{$product->start_date}}</div>
            </div>

            <div class="mb-3"> 
                <h5>販売終了</h5>
                <div class="ml-5">{{$product->end_date}}</div>
            </div>

        </div>
    </div>
    
</div>
<script>
const gridItems = document.querySelectorAll('.gridItem');

gridItems.forEach(function(item){
    item.onclick = function(){
    console.log(this.dataset.image)
    document.getElementById('top-image').src =this.dataset.image;
}
});
</script>
@endsection