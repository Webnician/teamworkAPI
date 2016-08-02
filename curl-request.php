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