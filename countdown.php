<?php

$now=time();//台灣時間已改
$nowdate=getdate($now);
$end=mktime(0,0,0,1,1,2018);//設定世界末日最後時間
$enddate=getdate($end);
$dingdong=$enddate["0"]-$nowdate["0"];//結束時間
$second=($dingdong%60);
$minute=(($dingdong-$second)/60);
$hour=(($minute-$minute%60)/60);
$day=(($hour-$hour%24)/24);

echo $day."日".($hour%24)."時".($minute%60)."分".$second."秒";


?>
