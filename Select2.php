<?php
include("conexion_BD.php");

$contenido = 'Leo';

$result = mysqli_query($connect, "SELECT * FROM sucursal");
if ($result){
    $registros= mysqli_num_rows($result);
    
    $contenido = '<p> Número de registros: '.$registros.'</p>';
    $contenido = $contenido.'<table style="border:0.05;">';
    $contenido= $contenido.'<thead>';
    $contenido= $contenido.'<tr>';
    $contenido= $contenido.'<th>noSucursal</th>';
    $contenido=$contenido.'<th>convenio </th>';
    $contenido=$contenido.'<th>etapa </th>';
    $contenido= $contenido.'<th>rm</th>';
    $contenido=$contenido.'<th>zm </th>';
    $contenido=$contenido.'<th>estatus </th>';
    $contenido= $contenido.'<th>iro</th>';
    $contenido=$contenido.'<th>tel </th>';
    $contenido=$contenido.'<th>mesProgramado </th>';
    $contenido= $contenido.'<th>metaTerminado</th>';
    $contenido=$contenido.'<th>proveedorConect </th>';
    $contenido=$contenido.'<th>centroCostos </th>';
    $contenido= $contenido.'<th>cp</th>';
    $contenido=$contenido.'<th>claveSedena </th>';
    $contenido=$contenido.'<th>snd </th>';
    $contenido= $contenido.'<th>nte</th>';
    $contenido=$contenido.'<th>inftca </th>';
    $contenido=$contenido.'<th>atm </th>';
    $contenido= $contenido.'<th>telmex</th>';
    $contenido=$contenido.'<th>cfe </th>';
    $contenido=$contenido.'<th>llaves </th>';
    $contenido= $contenido.'<th>vigilancia</th>';
    $contenido=$contenido.'<th>agua </th>';
    $contenido=$contenido.'<th>luz </th>';
    $contenido= $contenido.'<th>drenaje</th>';
    $contenido=$contenido.'<th>plantaEmergencia </th>';
    $contenido=$contenido.'<th>ups </th>';
    $contenido= $contenido.'<th>cajaChica</th>';
    $contenido=$contenido.'<th>cajaGrande </th>';
    $contenido=$contenido.'<th>nombreSucursal </th>';
    $contenido= $contenido.'<th>entidad</th>';
    $contenido=$contenido.'<th>municipio </th>';
    $contenido= $contenido.'<th>localidad</th>';
    $contenido=$contenido.'<th>calle </th>';
    $contenido=$contenido.'<th>noExterior </th>';
    $contenido= $contenido.'<th>colonia</th>';
    $contenido=$contenido.'<th>entreCalle </th>';
    $contenido=$contenido.'<th>yCalle </th>';
    $contenido= $contenido.'<th>referencias</th>';
    $contenido=$contenido.'<th>latitud </th>';
    $contenido=$contenido.'<th>longitud </th>';
    $contenido=$contenido.'</tr></thead></table>';
    
    /*
    //while($row=mysqli_fetch_array($result)){
    $contenido= $contenido.'<tbody>';

    $contenido= $contenido.'echo "<tr>"';
    $contenido= $contenido.'echo "<td align="right"> '.$row[noSucursal] .'</td>'";
    $contenido=$contenido.'<td> '.$row[convenio] .'</td>';
    $contenido=$contenido.'<td> '.$row[etapa] .'</td>';
    $contenido=$contenido.'<td> '.$row[rm] .'</td>';
    $contenido=$contenido.'<td> '.$row[zm] .'</td>';
    $contenido=$contenido.'<td> '.$row[estatus] .'</td>';
    $contenido=$contenido.'<td> '.$row[iro] .'</td>';
    $contenido=$contenido.'<td> '.$row[tel] .'</td>';
    $contenido=$contenido.'<td> '.$row[mesProgramado] .'</td>';
    $contenido=$contenido.'<td> '.$row[metaTerminado] .'</td>';
    $contenido=$contenido.'<td> '.$row[proveedorConect] .'</td>';
    $contenido=$contenido.'<td> '.$row[centroCostos] .'</td>';
    $contenido=$contenido.'<td> '.$row[cp] .'</td>';
    $contenido=$contenido.'<td> '.$row[claveSedena] .'</td>';
    $contenido=$contenido.'<td> '.$row[snd] .'</td>';
    $contenido=$contenido.'<td> '.$row[nte] .'</td>';
    $contenido=$contenido.'<td> '.$row[inftca] .'</td>';
    $contenido=$contenido.'<td> '.$row[atm] .'</td>';
    $contenido=$contenido.'<td> '.$row[telmex] .'</td>';
    $contenido=$contenido.'<td> '.$row[cfe] .'</td>';
    $contenido=$contenido.'<td> '.$row[llaves] .'</td>';
    $contenido=$contenido.'<td> '.$row[vigilancia] .'</td>';
    $contenido=$contenido.'<td> '.$row[agua] .'</td>';
    $contenido=$contenido.'<td> '.$row[luz] .'</td>';
    $contenido=$contenido.'<td> '.$row[drenaje] .'</td>';
    $contenido=$contenido.'<td> '.$row[plantaEmergencia] .'</td>';
    $contenido=$contenido.'<td> '.$row[ups] .'</td>';
    $contenido=$contenido.'<td> '.$row[cajaChica] .'</td>';
    $contenido=$contenido.'<td> '.$row[cajaGrande] .'</td>';
    $contenido=$contenido.'<td> '.$row[nombreSucursal] .'</td>';
    $contenido=$contenido.'<td> '.$row[entidad] .'</td>';
    $contenido=$contenido.'<td> '.$row[municipio] .'</td>';
    $contenido=$contenido.'<td> '.$row[localidad] .'</td>';
    $contenido=$contenido.'<td> '.$row[calle] .'</td>';
    $contenido=$contenido.'<td> '.$row[noExterior] .'</td>';
    $contenido=$contenido.'<td> '.$row[colonia] .'</td>';
    $contenido=$contenido.'<td> '.$row[entreCalle] .'</td>';
    $contenido=$contenido.'<td> '.$row[yCalle] .'</td>';
    $contenido=$contenido.'<td> '.$row[referencias] .'</td>';
    $contenido=$contenido.'<td> '.$row[latitud] .'</td>';
    $contenido=$contenido.'<td> '.$row[longitud] .'</td>';
    $contenido= $contenido.'</tr>';
    
    $contenido= $contenido.'</tbody>';//}
    
    $contenido = $contenido.'</table>';
    /*
            while($row=mysqli_fetch_array($result)){
             		

    $contenido+='<tbody>';
    $contenido+='<tr>';
                     $contenido+='<td align="right"> $row[noSucursal] </td>';
                    $contenido+= '<td> $row[convenio] </td>';
                     $contenido+='<td> $row[etapa] </td>';
                     $contenido+='<td> $row[rm] </td>';
                     $contenido+='<td> $row[zm] </td>';
                     $contenido+='<td> $row[estatus] </td>';
                     $contenido+='<td> $row[iro] </td>';
                     $contenido+='<td> $row[tel] </td>';
                     $contenido+='<td> $row[mesProgramado] </td>';
                     $contenido+='<td> $row[metaTerminado] </td>';
                     $contenido+='<td> $row[proveedorConect] </td>';
                     $contenido+='<td> $row[centroCostos] </td>';
                     $contenido+='<td> $row[cp] </td>';
                     $contenido+='<td> $row[claveSedena] </td>';
                     $contenido+='<td> $row[snd] </td>';
                     $contenido+='<td> $row[nte] </td>';
                     $contenido+='<td> $row[inftca] </td>';
                     $contenido+='<td> $row[atm] </td>';
                     $contenido+='<td> $row[telmex] </td>';
                     $contenido+='<td> $row[cfe] </td>';
                     $contenido+='<td> $row[llaves] </td>';
                     $contenido+='<td> $row[vigilancia] </td>';
                     $contenido+='<td> $row[agua] </td>';
                     $contenido+='<td> $row[luz] </td>';
                     $contenido+='<td> $row[drenaje] </td>';
                     $contenido+='<td> $row[plantaEmergencia] </td>';
                     $contenido+='<td> $row[ups] </td>';
                     $contenido+='<td> $row[cajaChica] </td>';
                     $contenido+='<td> $row[cajaGrande] </td>';
                     $contenido+='<td> $row[nombreSucursal] </td>';
                     $contenido+='<td> $row[entidad] </td>';
                     $contenido+='<td> $row[municipio] </td>';
                     $contenido+='<td> $row[localidad] </td>';
                     $contenido+='<td> $row[calle] </td>';
                     $contenido+='<td> $row[noExterior] </td>';
                     $contenido+='<td> $row[colonia] </td>';
                     $contenido+='<td> $row[entreCalle] </td>';
                     $contenido+='<td> $row[yCalle] </td>';
                     $contenido+='<td> $row[referencias] </td>';
                     $contenido+='<td> $row[latitud] </td>';
                     $contenido+='<td> $row[longitud] </td>';
                  $contenido+='</tr>';


    $contenido+='</tbody>';}

            $contenido= $cotenido+"</table>";
    */

			mysqli_free_result($result);
	} 
    mysqli_close($connect);

$htmlSelect = $contenido;

?>