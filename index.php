<?php
    /**
     * Created by PhpStorm.
     * User: Olaf Broms
     * Date: 7/29/2016
     * Time: 1:47 PM
     */
    ?>
<!DOCTYPE html>
<html>
<head>
<script>

</script>

<script src="javascript/javascript-production/js/vendor/foundation.js"></script>
<script src="javascript/javascript-production/js/vendor/foundation.min.js"></script>
<script src="javascript/javascript-production/js/vendor/jquery.js"></script>
<script src="javascript/javascript-production/js/vendor/what-input.js"></script>

<script src="javascript/javascript-production/functions.js"></script>

<!--    <link rel="stylesheet" href="styles/styles-production/css/app.css">-->
<!--    <link rel="stylesheet" href="styles/styles-production/css/foundation.css">-->
<!--    <link rel="stylesheet" href="styles/styles-production/css/foundation.min.css">-->

<link rel="stylesheet" href="styles/styles-production/styles.css">
    <title>Teamwork API Integration</title>
</head>
<body>
<!--    <input type="hidden" name="action" value="allprojects">-->
<div class="header"><h1>Teamwork API Integration</h1></div>
    <form action="api_controller.php" method="POST">
        <div class="row">
            <div class="large-12 small-12 column"><input type="text" style="width: 20%" class="middle"  id="999" name="theSubmitValue" readonly value="" placeholder="Type Nothing Here"/></div>
        </div>

        <div class="row middle" style="margin-top: 3%; margin-bottom: 3%">
            <button type="button" class="button" id="01" onclick="getTheSubmitVal(this.value)" name="allprojects" value="allprojects">Get All Projects</button>
            <button type="button" class="button" id="02" onclick="getTheSubmitVal(this.value)" name="recentactivity" value="recentactivity">Get Recent Activity</button>
        </div>
        <div class="row">
            What else will be nice to have is :::::: GOod rendering, ability to add constraints, send and receive messages, add and remove tasks, get and make calendar events, search, sync teamwork with github/bit bucket, switch the api key over to file system user, switch this to use ajax to speed things up....  anything else?
        </div>

        <div class="row">
            <input class="submit-button middle" type="submit" value="Get the Info">
        </div>
    </form>

</body>
</html>