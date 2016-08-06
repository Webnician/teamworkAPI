<?php
    /**
     * Created by PhpStorm.
     * User: Olaf Broms
     * Date: 7/29/2016
     * Time: 1:30 PM
     */
    include_once ("curl-request.php");
    include_once ("views/recent-activity-view.php");
    include_once ("views/confirmation-view.php");
    include_once ("submit-types.php");

    //look for local env file
    if (file_exists('theEnvlocal.php'))
    {
        include_once ('theEnvlocal.php');
    }
    else {
        include_once("theEnv.php");
    }



   //the full url variable
$theGetUrl = '';

    //get recent activity
    if($_POST["theSubmitValue"] == "recentactivity")
        {
            $theSubmitType = $_POST["theSubmitValue"];
            $theGetUrl = get_Submit_Type($theSubmitType);
            $theresponse = teamwork_curl($theGetUrl);
            recent_activity_view($theresponse);
        }
    if($_POST["theSubmitValue"] == "addtask")
        {
            header("location:submit-forms/add_task.php");
        }
    if($_POST["theSubmitValue"] == "inputtask")
        {
            $theSubmitType = $_POST["theSubmitValue"];
            $theGetUrl = get_Submit_Type($theSubmitType, 388468);
            $theresponse = teamwork_curl_add_task($theGetUrl);
            confirmation_view($theresponse);

        }

    //echo $theresponse;