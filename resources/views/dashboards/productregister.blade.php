@extends('layouts.dashboardmain')

@section('content')

<div class="container-fluid pr-5 pl-5 pb-5">
    @if(count($errors) > 0)
    <div class="bg-danger text-white mt-4 mb-2">
        <ul class="pt-2 pb-3 pl-3">
            @foreach ($errors->all() as $error)
            <li class="mt-1">{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if(session('flash_message'))
    <div class="bg-info text-white mt-4 mb-2">
        <p class="p-2">{{session('flash_message')}}</p>
    </div>
    @endif

    <div class='h3 mt-4'>商品登録</div>
    <form  action="/dashboard/productregister/add" method="POST" onSubmit="return check()" enctype="multipart/form-data">
    {{ csrf_field() }}
        <div class="row">

            <div class="col-6">

                <fieldset disabled>
                    <div class="form-group">
                        <label for="registeri_d">登録ID</label>
                        <input type="text" class="form-control" id="register_id" placeholder="register id" name="id">
                    </div>
                    <div class="form-group">
                        <label for="register_name">登録名</label>
                        <input type="text" class="form-control" id="register_name"  placeholder="regiser name" name="register_name">
                    </div>
                </fieldset>

                <div class="form-group">
                    <label for="product_name">商品名</label>
                    <input type="text" class="form-control @if($errors->has('product_name')) alert alert-danger border border-danger @endif" id="product_name" placeholder="product name" name="product_name" value="{{old('product_name')}}">
                </div>

                <div class="form-group">
                    <label for="product_name_kana">商品名（カナ）</label>
                    <input type="text" class="form-control @if($errors->has('product_name_kana')) alert alert-danger border border-danger @endif" id="product_name_kana" placeholder="product name(kana)" name="product_name_kana" value="{{old('product_name_kana')}}">
                </div>

                <div class="form-group">
                    <label for="jan">JAN</label>
                    <input type="text" class="form-control @if($errors->has('jan')) alert alert-danger border border-danger @endif" id="jan"  placeholder="JAN" name="jan" value="{{old('jan')}}">
                </div>

                <div class="form-group">
                    <label for="model_number">型番</label>
                    <input type="text" class="form-control @if($errors->has('model_number')) alert alert-danger border border-danger @endif" id="model_number" placeholder="model number" name="model_number" value="{{old('model_number')}}">
                </div>

                <div>
                    <label for="main_category">カテゴリー</label>
                    <select class="form-control @if($errors->has('main_category')) alert alert-danger border border-danger @endif"  id="main_category" name="main_category" value="{{old('main_category')}}" @if($errors->has('main_category')) style = "padding: 0rem 1.25rem;" @endif>
                        <option value="">-</option>
                        @foreach($main_categories as $main_category)
                        <option value="{{$main_category->id}}">{{$main_category->main_categry_name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mt-3">
                    <label for="category">サブカテゴリー</label>
                    <select disabled class="form-control @if($errors->has('sub_category')) alert alert-danger border border-danger @endif" id="sub_category" name="sub_category" value="{{old('sub_category')}}" @if($errors->has('main_category')) style = "padding: 0rem 1.25rem;" @endif>
                        <option value="">-</option>
                    </select>
                </div>


            </div>

            <div class="col-6">

                <div class="form-group">
                    <label for="price">価格</label>
                    <input type="text" class="form-control @if($errors->has('price')) alert alert-danger border border-danger @endif" id="price" aria-describedby="emailHelp" placeholder="price" name="price" value="{{old('price')}}">
                </div>

                <div class="row">

                    <div class="form-group col-6">
                        <label for="start_date">販売開始日</label>
                        <input type="date" class="form-control @if($errors->has('start_date')) alert alert-danger border border-danger @endif" id="start_date" placeholder="start" name="start_date" value="{{old('start_date')}}">
                    </div>

                    <div class="form-group col-6">
                        <label for="end_date">販売終了日</label>
                        <input type="date" class="form-control @if($errors->has('end_date')) alert alert-danger border border-danger @endif" id="end_date" placeholder="end" name="end_date" value="{{old('end_date')}}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="description">商品説明</label>
                    <textarea class="form-control @if($errors->has('description')) alert alert-danger border border-danger @endif" id="description" rows="3" name="description">{{old('description')}}</textarea>
                </div>

                <div class="form-group mt-4 mb-4">
                    <label for="main_product_image">メイン商品画像</label>
                    <input type="file" class="form-control-file" id="main_product_image" name="main_product_image" value="{{old('main_product_image')}}">
                </div>

                
                <div class="form-group mt-4">
                    <label for="sub_product_image_1">サブ商品画像1</label>
                    <input type="file" class="form-control-file" id="sub_product_image_1" name="sub_product_image_1" value="{{old('sub_product_image_1')}}">
                </div>

                <div class="form-group mt-4">
                    <label for="sub_product_image_1">サブ商品画像2</label>
                    <input type="file" class="form-control-file" id="sub_product_image_2" name="sub_product_image_2" value="{{old('sub_product_image_2')}}">
                </div>

                <div class="form-group mt-4">
                    <label for="sub_product_image_1">サブ商品画像3</label>
                    <input type="file" class="form-control-file" id="sub_product_image_3" name="sub_product_image_3" value="{{old('sub_product_image_3')}}">
                </div>

                <div class="form-group mt-4">
                    <label for="sub_product_image_1">サブ商品画像4</label>
                    <input type="file" class="form-control-file" id="sub_product_image_4" name="sub_product_image_4" value="{{old('sub_product_image_4')}}">
                </div>

                <div class="form-group mt-5">
                <button type="submit" class="btn btn-primary mx-auto d-block mt-5 pl-5 pr-5 pt-2 pb-2">登録</button>
                </div>
            </div>

        </div>
      </form>
  </div>
<script>
    function check(){
        if(window.confirm('登録してよろしいですか？')){ // 確認ダイアログを表示

        return true; // 「OK」時は送信を実行
        }else{ // 「キャンセル」時の処理

        return false; // 送信を中止
        }
    }

     $(function(){
        //selectタグ（親） が変更された場合
        $('#main_category').on('change', function(){
          let main_category_val = $(this).val();

          $.ajax({
            url: "/dashboard/productregister/subcategory",
            type: "get",
            dataType: 'json',
            data: {
                main_category_id: main_category_val
            }
          })
          .done(function(data){
            $('#sub_category').prop('disabled',true);
            if($('.rm_sub_category').length > 0){
                $('.rm_sub_category').remove();
            }

            if(data.length > 0){
                $('#sub_category').prop('disabled',false);

                let sub_category =  $('#sub_category');
                for(let i = 0; i < data.length; i++){
                    let option = $('<option ></option>').text(data[i]['sub_categry_name']).addClass('rm_sub_category').val(data[i]['id']);
                sub_category.append(option);
                }
            }
          })
          .fail(function(){
            console.log(data);
          });

        });
      });


</script>
@endsection
