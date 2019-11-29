<?php

$file = "geojson.zip";

header('Content-type: application/octet-stream');

header('Content-Transfer-Encoding: Binary');

header('Content-disposition: attachment; filename="'.$file.'"');

echo readfile($file);
// header('Location: geojson.zip');