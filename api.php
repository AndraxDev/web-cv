<?php

$query = $_GET['query'];

$database = file_get_contents("projects.json");

if ($query != "") {
    if (strpos(strtolower($query), "lang:") !== false) {
        $n = str_replace("lang:", "", $query);
        $ds = json_decode($database);
        
        $array = array();
        
        for ($i = 0; $i < sizeof($ds); $i++) {
            $t1 = false;
            for ($j = 0; $j < sizeof($ds[$i]->{'lang'}); $j++) {
                if (strtolower($ds[$i]->{'lang'}[$j]) == strtolower($n)) {
                    $t1 = true;
                    break;
                }
            }
            
            if ($t1 == true) {
                array_push($array, $ds[$i]);
            } else {
                $t2 = false;
                for ($j = 0; $j < sizeof($ds[$i]->{'lng'}); $j++) {
                    if (strtolower($ds[$i]->{'lng'}[$j]) == strtolower($n)) {
                        $t2 = true;
                        break;
                    }
                }
                
                if ($t2 == true) {
                    array_push($array, $ds[$i]);
                }
            }
        }
        
        $out = json_encode($array);
	header('Content-Type: application/json; charset=utf-8');
        echo($out);
    } else if (strpos(strtolower($query), "tag:") !== false) {
        $n = str_replace("tag:", "", $query);
        $ds = json_decode($database);
        
        $array = array();
        
        for ($i = 0; $i < sizeof($ds); $i++) {
            $t1 = false;
            for ($j = 0; $j < sizeof($ds[$i]->{'tags'}); $j++) {
                if (strtolower($ds[$i]->{'tags'}[$j]) == strtolower($n)) {
                    $t1 = true;
                    break;
                }
            }
            
            if ($t1 == true) {
                array_push($array, $ds[$i]);
            }
        }
        
        $out = json_encode($array);
	header('Content-Type: application/json; charset=utf-8');
        echo($out);
    } else {
        $ds = json_decode($database);
        $array = array();
        
        for ($i = 0; $i < sizeof($ds); $i++) {
            if (strpos(strtolower($ds[$i]->{'title'}), strtolower($query)) !== false || strpos(strtolower($ds[$i]->{'desc'}), strtolower($query)) !== false) {
                array_push($array, $ds[$i]);
            } else {
                $t1 = false;
                for ($j = 0; $j < sizeof($ds[$i]->{'lang'}); $j++) {
                    if (strpos(strtolower($ds[$i]->{'lang'}[$j]), strtolower($query)) !== false) {
                        $t1 = true;
                        break;
                    }
                }
                
                if ($t1 == true) {
                    array_push($array, $ds[$i]);
                } else {
                    $t2 = false;
                    for ($j = 0; $j < sizeof($ds[$i]->{'tags'}); $j++) {
                        if (strpos(strtolower($ds[$i]->{'tags'}[$j]), strtolower($query)) !== false) {
                            $t2 = true;
                            break;
                        }
                    }
                    
                    if ($t2 == true) {
                        array_push($array, $ds[$i]);
                    }
                }
            }
        }
        
        $out = json_encode($array);
	header('Content-Type: application/json; charset=utf-8');
        echo($out);
    }
} else {
    header('Content-Type: application/json; charset=utf-8');
    echo($database);
}

?>
