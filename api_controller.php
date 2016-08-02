<?php
    /**
     * Created by PhpStorm.
     * User: Olaf Broms
     * Date: 7/29/2016
     * Time: 1:30 PM
     */
    include_once ("curl-request.php");
    include_once ("render-return.php");
    if (file_exists('theEnvlocal.php'))
    {
        include_once ('theEnvlocal.php');
    }
    else {
        include_once("theEnv.php");
    }

    function get_Submit_Type($subtype)
    {
        $returnUrl = "";
        if ($subtype == "recentactivity")
        {
            $returnUrl = _Base_URL."/latestActivity.json";
        }
        if($subtype == "allprojects")
        {
            $returnUrl = _Base_URL."/projects.json";
        }
        return $returnUrl;
    }

    $url = "http://teamwork.onlinelearning-c.org/projects.json";
    $url2 = "http://teamwork.onlinelearning-c.org/latestActivity.json";
$theGetUrl = '';
if($_POST["theSubmitValue"] != "")
{
    $theSubmitType = $_POST["theSubmitValue"];
$theGetUrl = get_Submit_Type($theSubmitType);
}


    $theresponse = teamwork_curl($theGetUrl);
render_the_return($theresponse);
    //echo $theresponse;