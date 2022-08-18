<?php 
    // Access-Control-Allow-Origin == 允許連線的網域   
    // 值 為可連進來的網域, * == 全部, 網域為http://之後的內容 內容碰到的第一個/ 之間的網址, 如:https://tw.yahoo.com/ 這樣tw.yahoo.com就是domain(網域)
    header("Access-Control-Allow-Origin: *");


    $curl = curl_init ("https://data.ntpc.gov.tw/api/datasets/71CD1490-A2DF-4198-BEF1-318479775E8A/json?page=0&size=10");
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

    // 傳回結果 不會輸出在畫面上 傳給前端JS記得加這行
    // 如果沒有關掉 畫面顯示為 $curl value -> object
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $output = curl_exec ($curl);


    // close
    // echo gettype($curl); //object
    // echo gettype($output); //string
    curl_close($curl);
    echo $output;
?>