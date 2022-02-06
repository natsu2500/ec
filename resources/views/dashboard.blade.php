@extends('layouts.dashboardmain')

@section('content')
<div class="container-fluid pr-5 pl-5 pb-5">
    <div class='h3 mt-4'>TOPページ</div>
        <div class="row">
            <div class="w-25">
                <div class="bg-light p-2 mt-3">
                    <h4>受注状況</h4>
                    <div>
                        <div>本日の受注</div>
                        <p>3件</p>
                    </div>
                    <div>
                        <div>直近7日間の受注</div>
                        <p>3件</p>
                    </div>
                    <div>
                        <div>直近30日間の受注</div>
                        <p>54件</p>
                    </div>
                </div>
            </div>
            <canvas class="w-75" height="250" id="myChart"></canvas>
        </div>
        <div class="row">
            <div class="w-25">
                <div class="bg-light p-2 mt-3">
                    <h4>売上状況</h4>
                    <div>
                        <div>本日の売上</div>
                        <p>3300円</p>
                    </div>     
                    <div>
                        <div>直近７日間の売上</div>
                        <p>24000円</p>
                    </div>
                    <div>
                        <div>直近30日間の売上</div>
                        <p>1800000円</p>
                    </div>
                </div>
                
            </div>
            <canvas class="w-75" height="250" id="myChart2"></canvas>
        </div>

        <div class="bg-light p-2 mt-3">
            <h4>本日出荷リスト</h4>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">注文番号</th>
                    <th scope="col">氏名</th>
                    <th scope="col">送付先</th>
                    <th scope="col">商品数</th>
                    <th scope="col">備考</th>
                    <th scope="col">詳細</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>A1298</th>
                    <td>佐藤隆義</td>
                    <td>東京都練馬区練馬高野台２-１</td>
                    <td>1個</td>
                    <td>時間指定あり</td>
                    <td><a href="">注文詳細</a></td>
                  </tr>
                  <tr>
                    <th>A3098</th>
                    <td>高橋和樹</td>
                    <td>東京都港区2ー１１</td>
                    <td>2個</td>
                    <td>時間指定あり</td>
                    <td><a href="">注文詳細</a></td>
                  </tr>
                  <tr>
                    <th>U1298</th>
                    <td>内田相馬</td>
                    <td>群馬県太田市昭和町昭和町43-2</td>
                    <td>1個</td>
                    <td>時間指定あり</td>
                    <td><a href="">注文詳細</a></td>
                  </tr>
                  <tr>
                    <th>M3409</th>
                    <td>寺尾由紀</td>
                    <td>石川県金沢市太田町２-１</td>
                    <td>1個</td>
                    <td></td>
                    <td><a href="">注文詳細</a></td>
                  </tr>
                  <tr>
                    <th>K9298</th>
                    <td>田島誠也</td>
                    <td>愛知県碧南市鷲塚町町1-1-1 </td>
                    <td>1個</td>
                    <td></td>
                    <td><a href="">注文詳細</a></td>
                  </tr>
                  <tr>
                    <th>F1298</th>
                    <td>中城孝司</td>
                    <td>愛知県刈谷市中田町２-１ レオパレス201</td>
                    <td>3個</td>
                    <td></td>
                    <td><a href="">注文詳細</a></td>
                  </tr>
                </tbody>
              </table>
        </div>

</div>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['１日', '２日', '３日', '４日', '５日', '６日', '７日', '8日', '9日', '10日', '11日', '12日', '13日', '14日', '15日', '16日', '17日', '18日', '19日', '20日', '21日', '22日', '23日', '24日', '25日', '26日', '27日', '28日', '29日', '30日', '31日'],
            datasets: [{
                label: '受注',
                data: [2, 1, 5, 2, 2, 3, 4],
                backgroundColor: 'rgb(30,144,255)',
            }]
        },
        options: {}
    });
    var ctx = document.getElementById('myChart2').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['１日', '２日', '３日', '４日', '５日', '６日', '７日', '8日', '9日', '10日', '11日', '12日', '13日', '14日', '15日', '16日', '17日', '18日', '19日', '20日', '21日', '22日', '23日', '24日', '25日', '26日', '27日', '28日', '29日', '30日', '31日'],
            datasets: [{
                label: '売上',
                data: [2000, 10000, 5000, 2000, 2000, 3000, 4000],
                backgroundColor: 'rgb(255, 99, 132)',
            }]
        },
        options: {}
    });
</script>
@endsection
