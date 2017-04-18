<?php
 for(
  $i = 1;
  file_exists(
   $i.
  );
  ++ $i
 )
 {
  echo str_replace(
   ' ',
   '',
   str_replace(
    "\r\n",
	'',
	file_get_contents(
	 $i
	)
   )
  );
 }