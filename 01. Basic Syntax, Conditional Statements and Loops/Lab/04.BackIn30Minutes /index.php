<?php
$hour = readline();
$minute = readline();
$selectedTime = "$hour:$minute:00";
echo date('G:i',strtotime($selectedTime . ' +30 minutes'));