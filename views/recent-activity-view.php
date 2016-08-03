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
              <?php

    echo $value->description;
              echo      $value->datetime;
              echo $value->activitytype;

              echo $value->link;
              echo $value->extradescription;

              echo $value->itemid;
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