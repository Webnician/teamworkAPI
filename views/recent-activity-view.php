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

    ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Recent Activity</title>

            <script src="javascript/javascript-production/js/vendor/foundation.js"></script>
            <script src="javascript/javascript-production/js/vendor/foundation.min.js"></script>
            <script src="javascript/javascript-production/js/vendor/jquery.js"></script>
            <script src="javascript/javascript-production/js/vendor/what-input.js"></script>

            <script src="javascript/javascript-production/functions.js"></script>


            <link rel="stylesheet" href="styles/styles-production/styles.css">
        </head>
        <body>
        <div class="middle olc-dark-turq" style="width: 50%;">
        <h1 style="margin-bottom: 3%; color:white" class="center">Recent Activity</h1>

        <?php

          foreach ($theDisplay as $row => $value) { ?>
<div class="middle olc-light-turq rounded" style="margin-bottom: 2%; width: 90%;">
             <h3 class="center" style="color: white"><?php echo $value->fromusername; ?></h3>
    <div style="font-weight: bold; padding: 3%;">
        <h4 class=""style="color: white">
        <?php
            $theDateStart = $value->datetime;
            $getTheLink = _Base_URL;
            $addLinks = $value->link;
            $totalLink = $getTheLink.'/'.$addLinks;
            date_default_timezone_set('America/New_York');

            $theDateEnd =  date('M, j h:m a', strtotime($theDateStart));
            echo $value->description; ?>
            <span style="margin-left: 5%;">
                <?php echo $theDateEnd; ?></span>
        </h4>
<span>
            <?php

              echo $value->activitytype;
                ?></span><span style="margin-left: 3%;"><a href='<?php
              echo $totalLink; ?>'>View the Task</a></span><span style="margin-left: 3%;"><?php
              echo "Task List :  ".$value->extradescription; ?></span> <?php

        //echo $value->itemid;
?>
    </div>
</div>

<?php

          }
?>
        </div>
        </body>
        <?php
    }