<?php

/*
Ecrire une fonction qui recois un nombre puis affiche
    - la table de multiplication de ce nombre 
    - La table de multiplication est affichée sous forme d'une table
    html 12ligne 3 colonnes 

*/


function multiplication(int $nombre) {
    
    $i = 1;
    while ($i <= 12) {
        $total = $nombre*$i;
        echo "<table>
                    <tr>
                        <th>$nombre</th>
                        <th>*    $i </th>
                        <th>$total</th>
                    <tr>
                    
                <table>
                
            <style>
    
                th{
                    border: 1px solid darkcyan;;
                    width: 10vh;
                    padding:7px;           
                }
    
                table th:nth-child(3) {
                    font-size: 1.5rem;
                  
                }
                
                table {
    
                    height: 7vh;
                    width: 400px;   
                    margin: 0 auto;
                }
                body {
                    background: black;
                    color: white;
    
                }
           
        
            </style>
                
        ";
            
        $i++;
}


}

define('MIN',1);
define('MAX',30);
$nombre = rand(MIN,MAX);


multiplication($nombre)

?>