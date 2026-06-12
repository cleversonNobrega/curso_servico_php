<?php

echo is_int(PHP_INT_MAX);

echo ("\n");

var_dump(PHP_INT_MAX + 1);

echo ("\n");

var_dump(1 + 1.0);

echo ("\n");

echo "float para int";
var_dump((int) 6.8);

echo ("\n");

var_dump(intval(2.8, 10));

var_dump((int) round(2.8));

var_dump("3" + 2);
echo ("\n");

var_dump("3" . 2);

echo is_string("3" . 2);
echo ("\n");

var_dump(1 + "5 cinco");

var_dump(1 + "cinco 5");

var_dump(1 + "2+ 5");