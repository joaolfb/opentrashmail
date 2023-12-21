<?php

//echo getNames("first_name.csv");
echo "\n"; 
//echo getNames("last_name.csv");

function getNames($file_name)
{
    $file = fopen($file_name,"r");
    $array[] = '';
    while (($data = fgetcsv($file, null, ",")) !== false) {
        array_push($array, $data[0]);

    }
    fclose($file);
    array_shift($array);
    return  json_encode($array);
}


?>