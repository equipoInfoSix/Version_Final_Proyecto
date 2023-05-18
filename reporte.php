<?php

ob_start();

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento PDF</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.css">
  </head>
  <body>
      <?php
	include ("conexion_BD.php");
		
		$result = mysqli_query($connect, "SELECT * FROM sucursal");
		if ($result)
		{
			
			$registros= mysqli_num_rows($result);
			
			echo "<p> Número de registros: ". $registros ." </p> \n"; 

			echo "<table border = '1'> \n"; 

            while($row=mysqli_fetch_array($result)){
             		echo "<thead>
        <tr>
            <th>noSucursal</th>
            <th>convenio </th>
            <th>etapa </th>
            <th>rm </th>
            <th>zm </th>
            <th>estatus </th>
            <th>iro </th>
            <th>tel </th>
            <th>mesProgramado </th>
            <th>metaTerminado </th>
            <th>proveedorConect  </th>
            <th>centroCostos  </th>
            <th>cp  </th>
            <th>claveSedena  </th>
            <th>snd  </th>
            <th>nte  </th>
            <th>inftca  </th>
            <th>atm  </th>
            <th>telmex </th>
            <th>cfe  </th>
            <th>llaves  </th>
            <th>vigilancia  </th>
            <th>agua  </th>
            <th>luz  </th>
            <th>drenaje  </th>
            <th>plantaEmergencia  </th>
            <th>ups  </th>
            <th>cajaChica </th>
            <th>cajaGrande  </th>
            <th>nombreSucursal  </th>
            <th>entidad  </th>
            <th>municipio  </th>
            <th>localidad  </th>
            <th>calle  </th>
            <th>noExterior  </th>
            <th>colonia  </th>
            <th>entreCalle   </th>
            <th>yCalle   </th>
            <th>referencias   </th>
            <th>latitud   </th>
            <th>longitud   </th>
        </tr>
    </thead>

    <tbody>
    <tr>
                     <td align='right'> $row[noSucursal] </td>
                     <td> $row[convenio] </td>
                     <td> $row[etapa] </td>
                     <td> $row[rm] </td>
                     <td> $row[zm] </td>
                     <td> $row[estatus] </td>
                     <td> $row[iro] </td>
                     <td> $row[tel] </td>
                     <td> $row[mesProgramado] </td>
                     <td> $row[metaTerminado] </td>
                     <td> $row[proveedorConect] </td>
                     <td> $row[centroCostos] </td>
                     <td> $row[cp] </td>
                     <td> $row[claveSedena] </td>
                     <td> $row[snd] </td>
                     <td> $row[nte] </td>
                     <td> $row[inftca] </td>
                     <td> $row[atm] </td>
                     <td> $row[telmex] </td>
                     <td> $row[cfe] </td>
                     <td> $row[llaves] </td>
                     <td> $row[vigilancia] </td>
                     <td> $row[agua] </td>
                     <td> $row[luz] </td>
                     <td> $row[drenaje] </td>
                     <td> $row[plantaEmergencia] </td>
                     <td> $row[ups] </td>
                     <td> $row[cajaChica] </td>
                     <td> $row[cajaGrande] </td>
                     <td> $row[nombreSucursal] </td>
                     <td> $row[entidad] </td>
                     <td> $row[municipio] </td>
                     <td> $row[localidad] </td>
                     <td> $row[calle] </td>
                     <td> $row[noExterior] </td>
                     <td> $row[colonia] </td>
                     <td> $row[entreCalle] </td>
                     <td> $row[yCalle] </td>
                     <td> $row[referencias] </td>
                     <td> $row[latitud] </td>
                     <td> $row[longitud] </td>
                  </tr>


    </tbody>";}

            echo "</table>>";

			mysqli_free_result($result);

		}   

    mysqli_close($connect);
    
?>
</body>
</html>


<?php

$html=ob_get_clean(); 
echo $html;

require_once '../libreria/dompdf/vendor/autoload.php';
use Dompdf\Dompdf;

$dompdf = new Dompdf();


$dompdf->load_html($html);

$dompdf->setPaper('letter');

$dompdf->render();

$dompdf->stream("archivo_.pdf", array("Attachment" => '0'));

?>