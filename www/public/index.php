<?php

define("ROOT", dirname(__DIR__));
echo ROOT."\App\View\PollView.php";

require ROOT."/Autoloader.php";
Autoloader::register();

require ROOT."/Rooter.php";
