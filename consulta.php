<?php

    require("conexion.php");
    $SQL = "select noSucursal, convenio, etapa, rm, zm, estatus, iro, tel, metaTerminado, proveedorConect, centroCostos  FROM sucursal";
    $stmt = $conexion->prepare($SQL);
    $result = $stmt->execute();
    $rows = $stmt->fetchAll(\PDO::FETCH_ASSOC);
    foreach($rows as $row){
        print $row["noSucursal"].";".$row["convenio"].";".$row["etapa"].";".$row["rm"].";".$row["zm"].";".$row["estatus"].";".$row["iro"].";".$row["tel"].";".$row["metaTerminado"].";".$row["proveedorConect"].";".$row["centroCostos"]."\n";
    }
?>