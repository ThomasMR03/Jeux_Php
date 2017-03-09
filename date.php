<?php
$date = date("d/m/Y");
print("Nous sommes le $date");
$date = date("d-m-Y");
print("</br>Nous sommes le $date");
$date = date("l/j/F/Y");
print("<br>Nous sommes le $date");
echo strftime("</br>%A %e %B %Y</br>");
echo time().'</br>';
echo mktime(15, 34, 12, 03, 2, 2016).'</br>';
$datetime1 = new DateTime('2016-05-16');
$datetime2 = new DateTime();
$interval = $datetime1->diff($datetime2);
echo $interval->format('%a jours').'</br>';
