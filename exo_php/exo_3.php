<?php
    // *
    // **
    // ***
    // ****
    // *****
    // ******


function etoile() : void {
    for($i=1;$i<=6;$i++) {  

        for($j=1;$j<=$i; $j++) {
            echo "*";
            if($j==$i){
                echo(" <br/> ");
            }

        }
        
    }
    
}

echo etoile();