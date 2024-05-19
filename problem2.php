<?php
    function pairProgramming(array $experiences, bool $isMostExperienced): array {
        $tab = [];
        $max =$experiences[0];
        $max2 = 2;
        for($i = 0; $i < count($experiences); $i++){
            if($isMostExperienced){
                if($experiences[$i] > $max){
                    $max = $experiences[$i];
                    $tab[] = $i;
                    $max2 = $i;
                    if($tab[0] > $max2){
                        $max2 = $tab[0];
                        $tab[1] = $max2;
                    }
                }
            }
        }
        return $tab;
    }

    $resultat = pairProgramming([1, 4, 2, 3, 8, 3], true);
    echo "[";
    for($i = 0; $i < count($resultat); $i++){
        echo $resultat[$i];
        if($i === 0 ){
            echo ",";
        }
    }
    echo "]";
