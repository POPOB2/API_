<?php
// https://blog.johnsonlu.org/php-curl/

// 不同網域 用特定符號作為 進入該網域的該網站的鑰匙
// header("Access-Control-Allow-Origin: *");


// 初始化 curl, 類似session_start(), 作為宣告啟用CURL  // $變數=curl_init(API網址);
$curl=curl_init ("https://data.ntpc.gov.tw/api/datasets/71CD1490-A2DF-4198-BEF1-318479775E8A/json?page=0&size=100");

// 上述的https的s意思為,下述的SSL  即為:網路安全憑證
// 連結設定 (1.設置的API, 2.將API設為信任認證, 3.開或關閉該憑證)
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);


// 改為True, 傳回結果 不會輸出在畫面上, 可加可不加 但若要傳給JS須加上這行
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);


//加入User Agent(),  模擬browser(瀏覽器)行為, 可加可不加
// curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:28.0) Gecko/20100101 Firefox/28.0");

// curl_exec() == 變成要執行的格式, 依需求可以在()內加上條件, 函式詳見官方文件
$output = curl_exec ($curl); //  // 原本的API為object物件, 使用exec把指定的init提供的URL轉換為字串


// 清除記憶體內的(API資料), 當資料越多越會影響效能
curl_close($curl);
echo $output;
// var_dump($output);
?>