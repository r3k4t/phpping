<?php
system("clear");
echo          "\t+++ PHPPing +++\n";
echo  "Author : Rahat Khan Tusar(RKT)\n";
echo  "Github : https://github.com/r3k4t\n";
echo "\n Enter a ip address:";
$host=trim(fgets(STDIN));
system("ping $host");
?>