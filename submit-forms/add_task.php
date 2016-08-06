<?php
    /**
     * Created by PhpStorm.
     * User: Olaf Broms
     * Date: 8/6/2016
     * Time: 11:45 AM
     */
    echo ("You are in the submit tasks form area");
    ?>
<!DOCTYPE html>
<html>
<head>
<script src="../javascript/javascript-production/js/vendor/foundation.js"></script>
<script src="../javascript/javascript-production/js/vendor/foundation.min.js"></script>
<script src="../javascript/javascript-production/js/vendor/jquery.js"></script>
<script src="../javascript/javascript-production/js/vendor/what-input.js"></script>

<script src="../javascript/javascript-production/functions.js"></script>

<!--    <link rel="stylesheet" href="styles/styles-production/css/app.css">-->
<!--    <link rel="stylesheet" href="styles/styles-production/css/foundation.css">-->
<!--    <link rel="stylesheet" href="styles/styles-production/css/foundation.min.css">-->

<link rel="stylesheet" href="../styles/styles-production/styles.css">




    <title>Add a Task</title>
</head>

<body>

<form action="../api_controller.php" method="post">
    <div class="large-12 small-12 column"><input type="text" style="width: 20%" class="middle" onchange="alerting()"  id="999" name="theSubmitValue" readonly value="" placeholder="Type Nothing Here"/></div>
    <button type="button" class="button" id="01" onclick="getTheSubmitVal(this.value)" name="inputtask" value="inputtask">Input Tak</button>
<!--    <input type="text" id="form1" required name="taskname" placeholder="Name For New Task">-->
    <div class="row">
        <input class="submit-button middle" disabled="disabled"   id="mainSubmit" type="submit" value="Get the Info">
    </div>
</form>
</body>

</html>