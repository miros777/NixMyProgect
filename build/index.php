<?php

$content = ob_start();
$content = include 'bd/content.php';
$content = ob_get_clean();

require_once 'layouts/home.php';