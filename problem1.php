<?php
    function isValidHTML(string $html): bool{
        define("isValid", true);
        $valid = false;
        $HTML = explode("<", $html);
        $j = count($HTML);
        for($i = 1; $i < count($HTML); $i++){
            if("/".$HTML[$i] == $HTML[$j - 1]){
                $valid = true;
            }
            $j--;
        }
        if(empty($html)){
            $valid = true;
        }
        return $valid;
    }
