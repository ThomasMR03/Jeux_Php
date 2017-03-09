<?php
$date = date("d/m/Y");
print("Nous sommes le $date");
$date = date("d-m-Y");
print("</br>Nous sommes le $date");
$date = date("l/j/F/Y");
print("<br>Nous sommes le $date");
echo strftime("</br>%A %e %B %Y");