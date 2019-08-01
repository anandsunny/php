<?php

//   Timestamps in php
//$current_time = time();
//echo date('d-M-Y H:i:sa',$current_time);



/* date(format,timestamp) */


/* mktime(hour,minute,second,month,day,year)  */

// Prints: October 3, 1975 was on a Friday
//echo mktime(0,0,0,01,21,2017);

/* strtotime(time)*/

echo(strtotime("now") . "<br>");
echo(strtotime("3 October 2005") . "<br>");
echo(strtotime("+5 hours") . "<br>");
echo(strtotime("-1 week") . "<br>");
echo(strtotime("+1 week 3 days 7 hours 5 seconds") . "<br>");
echo(strtotime("next Monday") . "<br>");
echo(strtotime("last Sunday"));

?>