<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <?php
            function all_table():void {
                for($i=1; $i<=12;$i++) {
                    echo "<tr>";
                    for($j=1; $j<=12; $j++) {
                        $total = $i*$j;
                        echo "<td>$i * $j = $total </br></td";
                    }
                    echo "</tr>";
                }   

            }

            all_table();

        ?>
    </table>
</body>
</html>











<style>
    table {
        border: 1px solid red;
        margin: 0 auto;
        
    }

    td {
        border: 1px solid green;
        display: flex;
        justify-content: center;
        background: black;
        color: white;
        height: 35vh;       
        width: 20vh;

    }   
 
</style>


<?php
/*
Ecrire un algo qui affiche toute les tables de
multiplication de 1 a 12 sous format html
sachant que chaque séquence de multiplication 
se trouve dans une colonne de la table


?>
