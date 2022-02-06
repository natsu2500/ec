@extends('layouts.dashboardmain')

@section('content')
<div class="container-fluid pr-5 pl-5 pb-5">
    <div class='h3 mt-4'>商品一覧</div>
    <table class="table table-striped bg-white">
        <thead>
          <tr>
            <th scope="col">商品名</th>
            <th scope="col">商品型番</th>
            <th scope="col">JAN</th>
            <th scope="col">価格</th>
            <th scope="col">販売開始日</th>
            <th scope="col">販売終了日</th>
            <th scope="col">詳細</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{$product['product_name']}}</td>
                <td>{{$product['model_number']}}</td>
                <td>{{$product['jan']}}</td>
                <td>{{$product['price']}}円</td>
                <td>{{$product['start_date']}}</td>
                <td>{{$product['end_date']}}</td>
                <td><a href="/dashboard/productdetail/{{$product['id']}}">商品詳細</a></td>
              </tr>
            @endforeach

        </tbody>
      </table>
</div>

@endsection
