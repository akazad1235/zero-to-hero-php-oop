<?php
$fileName = "E:\\practice php\\file\\asset\\file.txt";

$fp = fopen($fileName, 'r');

  echo fgets($fp);
$data = file_get_contents($fileName);

echo $data;