<?php

function getNames($file_name)
{
    $file = fopen($file_name,"r");
    $array[] = '';
    while (($data = fgetcsv($file, null, ",")) !== false) {
        array_push($array, $data[0]);

    }
    fclose($file);
    array_shift($array);
    return $array;
}

function generateRandomEmail()
{
    
    $nouns =  getNames("first_name.csv");
    $adjectives = getNames("last_name.csv");

    $domains[] = 'fakeemail.dev.vodafonesolutions.pt';
    $dom = $domains[array_rand($domains)];
    
    $dom = str_replace('*', $nouns[array_rand($nouns)], $dom);
    while (strpos($dom, '*') !== false) {
        $dom = str_replace('*', $nouns[array_rand($nouns)], $dom);
    }

    return $adjectives[array_rand($adjectives)] . '.' . $nouns[array_rand($nouns)].'@'.$dom;
}

echo generateRandomEmail();

?>