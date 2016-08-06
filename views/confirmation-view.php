<?php
    /**
     * Created by PhpStorm.
     * User: Olaf Broms
     * Date: 8/6/2016
     * Time: 1:19 PM
     */
    include_once ("/api_controller.php");

    function confirmation_view($theresponse)
    {
        $theRenderInfo = json_decode($theresponse);
        print_r($theRenderInfo);
    }