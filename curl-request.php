<?php
    /**
     * Created by PhpStorm.
     * User: Olaf Broms
     * Date: 7/29/2016
     * Time: 1:24 PM
     */
    if (file_exists('theEnvlocal.php'))
    {
        include_once ('theEnvlocal.php');
    }
    else {
        include_once("theEnv.php");
    }
include_once ("api_controller.php");

    function teamwork_curl($theUrl)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $theUrl,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "authorization: Basic " . _THE_API_KEY . "",
                "cache-control: no-cache",
                "content-type: application/json"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            return $response;
        }

    }

    function teamwork_curl_add_task($theUrl)
    {


$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => $theUrl,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "{\r\n  \"todo-item\": {\r\n    \"content\": \"Test Task2\",\r\n    \"notify\": false,\r\n    \"description\": \"Test Task Sub Item\",\r\n    \"due-date\": \"20140405\",\r\n    
    \"start-date\": \"20140402\",\r\n    \"estimated-minutes\": \"0\",\r\n    \"private\": 0,\r\n    \"grant-access-to\": \"\",\r\n    \"priority\": \"low\",\r\n    \"progress\": \"20\",\r\n   
     \"attachments\": [],\r\n    \"pendingFileAttachments\": \"\",\r\n    \"responsible-party-id\": 0,\r\n    \"tags\":\"api,documentation\",\r\n    \"positionAfterTask\": -1\r\n  }\r\n}",
    CURLOPT_HTTPHEADER => array(
        "authorization: Basic " . _THE_API_KEY . "",
        "cache-control: no-cache",
        "content-type: application/json"
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
   return $response;
}
    }