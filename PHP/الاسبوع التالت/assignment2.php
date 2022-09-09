<?php

$name = "elzero";
$x = &$name;
$x = "web";
$$name="web";

echo $name;
echo "<br>";
echo $$name;
echo "<br>";
echo "${$name}";
echo "<br>";
echo "$name";
echo "<br>";
echo "${name}";
