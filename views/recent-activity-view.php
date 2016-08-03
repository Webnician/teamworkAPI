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

    ?><h1 style="margin-bottom: 3%;">Recent Activity</h1><?php

          foreach ($theDisplay as $row => $value) { ?>

              <h2 style="margin-bottom: 3%;"><?php echo $row;?></h2>
              <?php

    echo $value->description;
              echo      $value->datetime;
              echo $value->activitytype;

              echo $value->link;
              echo $value->extradescription;
              echo $value->fromusername;
              echo $value->itemid;


          }

    }