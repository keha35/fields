<?php

include "../../../inc/includes.php";
$path = PLUGINFIELDS_FRONT_PATH . '/' . $_GET['ddtype'] . '.php';
if (strpos(realpath($path), realpath(PLUGINFIELDS_FRONT_PATH)) === 0) {
    include_once $path;
} else {
    throw new \RuntimeException('Attempt to load unsecure or missing ' . $path .'!');
}
