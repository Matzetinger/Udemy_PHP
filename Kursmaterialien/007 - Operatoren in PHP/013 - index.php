<?php

$filename = "text.txt";
$inhalt = "Hello im Hacking.";

$result = shell_exec("echo $inhalt > $filename 2>&1");
//$result = exec('dir');
//$result = system("dir");

//passthru("dir");

//var_dump($result);



?>
