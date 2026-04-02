<?php
   
   $Equipo = array("portero" => "Joan Garcia", "defensa" => "cubarsi" , "medio" => "Pedri","delantero" => "Lewandoski");

     foreach($Equipo as $Posicion => $Jugador){
        echo "El jugador ". $Jugador. " juega de ". $Posicion . "<br>";
     }

?>