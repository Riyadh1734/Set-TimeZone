<!DOCTYPE html>
<html>
<body>

<?php
echo "Today is " . date("l"). "<br>";
echo "Today Date is " . date("d.m.y") ."<br>";

date_default_timezone_set("Asia/Dhaka");
$currentTime = date( "h:i:s:a" );
echo " Bangladesh Current Time is $currentTime";
?>

</body>
</html>
