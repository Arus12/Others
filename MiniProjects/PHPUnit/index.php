<?php

use BasicPHPUnitTest\math;

require __DIR__ . "/vendor/autoload.php";

$k = new math\kvadr(10, -11, 1);
echo $k->checkD($k);
$k->showRoots($k);
echo $k->checkresult($k);
