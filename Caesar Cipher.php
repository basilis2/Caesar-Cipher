<?php 
function caesarCipher($s, $k) {
    $ab = range('a', 'z');
    $ab2 = range('A', 'Z');
    $length=strlen($s);
    $char="a";
    $p=0;
    $array_length=count($ab);
    $next=$k % $array_length;
    for ($i = 0; $i < $length; $i++) {
        $char = $s[$i];
        for($y = 0; $y< $array_length; $y++){
            if($ab[$y]==$char){
                if($y+$next>=$array_length){$p=($y+$next)-$array_length;
                    $s=substr_replace($s, $ab[$p], $i, 1);
                }
              else
                $s=substr_replace($s, $ab[$y+$next], $i, 1);
        }
    }
       for($z = 0; $z< $array_length; $z++){
            if($ab2[$z]==$char){
                if($z+$next>=$array_length){$p=($z+$next)-$array_length;
                $s=substr_replace($s, $ab2[$p], $i, 1);
                }
                else
                 $s=substr_replace($s, $ab2[$z+$next], $i, 1);
        }
    }
    }
    return $s;
    
    }
    
    $fptr = fopen(getenv("OUTPUT_PATH"), "w");
    
    $n = intval(trim(fgets(STDIN)));
    
    $s = rtrim(fgets(STDIN), "\r\n");
    
    $k = intval(trim(fgets(STDIN)));
    
    $result = caesarCipher($s, $k);
    
    fwrite($fptr, $result . "\n");
    
    fclose($fptr);

?>