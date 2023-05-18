<?php

    require("conexion.php");
    $SQL = "select noSucursal, snd, nte, inftca, atm, telmex, cfe, llaves, vigilancia, agua, luz, drenaje, plantaEmergencia, ups, cajaChica, cajaGrande FROM sucursal";
    
    $stmt = $conexion->prepare($SQL);
    $result = $stmt->execute();
    $rows = $stmt->fetchAll(\PDO::FETCH_ASSOC);
    foreach($rows as $row){
        print $row["noSucursal"].";".$row["snd"].";".$row["nte"].";".$row["inftca"].";".$row["atm"].";".$row["telmex"].";".$row["cfe"].";".$row["llaves"].";".$row["vigilancia"].";".$row["agua"].";".$row["luz"].";".$row["drenaje"].";".$row["plantaEmergencia"].";".$row["ups"].";".$row["cajaChica"].";".$row["cajaGrande"]."\n";
    }
?>