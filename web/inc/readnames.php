<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));

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

function loadSettings()
{
    if(file_exists(ROOT.DS.'..'.DS.'config.ini'))
        return parse_ini_file(ROOT.DS.'..'.DS.'config.ini');
    return false;
}


//echo generateRandomEmail();
$domains= array('sapo.pt','vodafonesolutions.com','gmail.com');
$token ='@';
$eamil_domain = explode($token,"jonas.bffdf@vodafonesolutions.com");

if (in_array($eamil_domain[1], $domains))
  {
  echo "Match found";
  }
  else{
    echo "Not found";
  }

echo ROOT.DS.'..'.DS.'config.ini';

?>