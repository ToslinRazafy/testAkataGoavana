<?php
    function pairProgramming(array $experiences, bool $isMostExperienced): array {
        $tab = [];
        $max =$experiences[0];
        for($i = 0; $i < count($experiences); $i++){
            if($experiences[$i] > $max){
                $max = $experiences[$i];
                $index = $i;
            }
        }
        

        return $tab;
    }