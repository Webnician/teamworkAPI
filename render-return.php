<?php
    /**
     * Created by PhpStorm.
     * User: Olaf Broms
     * Date: 7/29/2016
     * Time: 1:39 PM
     */
    include_once ("api_controller.php");
    function render_the_return($theresponse){
        $theRenderInfo = json_decode($theresponse);
        $count = 0;
foreach ($theRenderInfo as $row){
    //echo $row;
    echo $theRenderInfo->activity[48]->itemid;
    //echo $theRenderInfo->activity[0]['project-id'];
    //$theRenderInfo->activity[48]->itemid;
    $count++;
}
    }