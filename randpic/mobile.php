<?php
$randNum = mt_rand(1,23);
header('http/1.1 302 Moved Temporarily');
header('Location: https://api.waterapple09.com/randpic/mobile/' . $randNum . '.webp');
?>