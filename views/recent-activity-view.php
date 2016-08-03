<?php
    /**
     * Created by PhpStorm.
     * User: Olaf Broms
     * Date: 7/29/2016
     * Time: 1:39 PM
     */
    include_once ("/api_controller.php");

    function recent_activity_view($theresponse){
        $theRenderInfo = json_decode($theresponse);

        $theDisplay = $theRenderInfo->activity;
  //    foreach ($theRenderInfo as $row1 => $val1) {
    ?><h1 style="margin-bottom: 3%;">Recent Activity</h1><?php

          foreach ($theDisplay as $row => $value) { ?>

              <h2 style="margin-bottom: 3%;"><?php echo $row;?></h2>
              <?php
              //echo $theRenderInfo->activity[48]->itemid;
              // echo $row[$count]->project-id;
//echo $value->project-id;
    echo $value->description;
              echo      $value->datetime;
              echo $value->activitytype;
      //        echo $value->project-name;
              echo $value->link;
              echo $value->extradescription;
              echo $value->fromusername;
              echo $value->itemid;
              //echo $theRenderInfo->activity[0]['project-id'];
              //$theRenderInfo->activity[48]->itemid;

          }
   //   }
    }