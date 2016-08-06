<?php
    /**
     * Created by PhpStorm.
     * User: Olaf Broms
     * Date: 8/2/2016
     * Time: 10:53 PM
     */
    function get_Submit_Type($subtype, $tasklist = NULL)
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
        if($subtype == "inputtask")
        {
            $returnUrl = _Base_URL."/tasklists/".$tasklist."/tasks.json";
        }
        return $returnUrl;
    }