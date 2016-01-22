<?php


function requireappFunction(){
    if ($handle = opendir('../app/Http/Controllers/AppFunction')) {

        while (false !== ($entry = readdir($handle))) {

            if ($entry != "." && $entry != "..") {
                $tab = explode('Function.',$entry);
                if(!empty($tab[1])&&($tab[1] == "php")){
                    $array[] = $entry;
                    require_once $entry;
                }


            }
        }

        closedir($handle);

        return $array;
    }
}
requireappFunction();