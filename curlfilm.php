<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 10/7/16
 * Time: 4:06 PM
 */
$string = '{"pageCount":200,"category_id":"-1","startIndex":0}';
$data = array('request'=> $string);
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => "http://api.htvonline.com.vn/tv_channels",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => http_build_query($data),
    CURLOPT_HTTPHEADER => array(
        "authorization: Basic YXBpaGF5aGF5dHY6NDUlJDY2N0Bk",
        "user-agent: Apache-HttpClient/UNAVAILABLE (java 1.4)"
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
}