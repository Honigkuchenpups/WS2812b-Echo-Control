<?php
$brightness = $_GET['brightness'];
file_put_contents('brightness', $brightness);
echo("<br>Read:");
readfile('brightness');
sleep(0.1);
?>