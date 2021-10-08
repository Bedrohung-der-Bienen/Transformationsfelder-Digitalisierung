<?php

    class BienenwissenModel{
        
        public function getInhalte($inhaltID)
        {
            include("connection.php");
            $bienenwissen = "SELECT * FROM `bienenwissen` WHERE `idbienenwissen` = " . $inhaltID;
            $resultatBienenwissen = mysqli_query($link,$bienenwissen);
            $row = mysqli_fetch_array ($resultatBienenwissen);
            return print_r($row[1]);
        }


    }


?>


