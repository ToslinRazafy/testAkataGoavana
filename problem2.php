<?php
    function pairProgramming(array $experiences, bool $isMostExperienced): array{
        $tmp = $experiences;
        $tab = [];
        if($isMostExperienced){
            sort($experiences, SORT_NUMERIC);
            $tab[] = $experiences[count($experiences)-2];
            $tab[] = $experiences[count($experiences)-1];
            for($i = 0; $i < count($tmp); $i++){
                if($tab[0] === $tmp[$i]){
                    $tab[0] = $i;
                }
                if($tab[1] === $tmp[$i] ){
                    $tab[1] = $i;
                }
            }
       }else{
            sort($experiences, SORT_NUMERIC);
            $tab[] = $experiences[0];
            $tab[] = $experiences[1];
            for($i = 0; $i < count($tmp); $i++){
                if($tab[0] === $tmp[$i]){
                    $tab[0] = $i;
                }
                if($tab[1] === $tmp[$i] ){
                    $tab[1] = $i;
                }
            }
       }
       return $tab;
    }

    $tab = pairProgramming([1, 4, 2, 3, 8, 10, 9], true);
    echo "[";
    for($i = 0; $i < count($tab); $i++){
        echo $tab[$i];
        if($i === 0){
            echo ",";
        }
    }
    echo "]";
