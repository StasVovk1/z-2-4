<?php 
    $mass = [1,1,2,3,4,3,4,4,1,3,1,1,1,3,4,4,5];
    echo 'Исходные данные: '.json_encode($mass);
    $kol = 0;
    for ($i = 0; $i < counts($mass); $i++){
        if (($i+1 != counts($mass)-1) && ($mass[$i] == $mass[$i+1])){
            $kol++;
        }
    }
    echo '<br>Ответ: '.$kol;

    function counts($mass){
        $i = 1;            
        while ($mass[$i].'' != ''){
            $i++;
        }
        return $i;
    }
?>