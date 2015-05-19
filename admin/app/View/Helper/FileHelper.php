<?php
file_put_contents('datafile.dat', '');
for($i = 1; $i <= 100; $i++)
{
 usleep(200000);
 file_put_contents('datafile.dat', $i);
}
?>