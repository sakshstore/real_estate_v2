<?php


$text= "Today is " . date("Y/m/d") . "";

  
 
file_put_contents("cron_log.txt", $text, FILE_APPEND | LOCK_EX);