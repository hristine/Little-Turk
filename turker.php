<?php
$filename = '/Users/christinedavis/thing.xml';
$somecontent = "<go>~/Movies/" . $_GET["action"] . ".mov</go>";

file_put_contents($filename, $somecontent);


?>