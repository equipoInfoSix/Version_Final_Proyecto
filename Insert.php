<?php
//validamos datos del servidor
$user = "id20709715_root";
$pass = "5547168870La/";
$host = "localhost";

//conetamos al base datos
$connection = mysqli_connect($host, $user, $pass);

//hacemos llamado al imput de formuario
$noSucursal = $_POST["noSucursal"] ;
$convenio = $_POST["convenio"] ;
$etapa = $_POST["etapa"] ;
$rm = $_POST["rm"] ;
$zm = $_POST["zm"] ;
$estatus = $_POST["estatus"] ;
$iro = $_POST["iro"] ;
$tel = $_POST["tel"] ;
$mesProgramado = $_POST["mesProgramado"] ;
$mesTerminado = $_POST["mesTerminado"] ;
$proveedorConect = $_POST["proveedorConect"] ;
$centroCostos = $_POST["centroCostos"] ;
$cp = $_POST["cp"] ;
$claveSDN = $_POST["claveSDN"] ;
$snd = $_POST["snd"] ;
$nte = $_POST["nte"] ;
$inftca = $_POST["inftca"] ;
$atm = $_POST["atm"] ;
$telmex = $_POST["telmex"] ;
$cfe = $_POST["cfe"] ;
$llaves = $_POST["llaves"] ;
$vigilancia = $_POST["vigilancia"] ;
$agua = $_POST["agua"] ;
$luz = $_POST["luz"] ;
$drenaje = $_POST["drenaje"] ;
$plantaEmergencia = $_POST["plantaEmergencia"] ;
$ups = $_POST["ups"] ;
$cajaChica = $_POST["cajaChica"] ;
$cajaGrande = $_POST["cajaGrande"] ;
$nombreSucursal = $_POST["nombreSucursal"] ;
$entidad = $_POST["entidad"] ;
$municipio = $_POST["municipio"] ;
$localidad = $_POST["localidad"] ;
$calle = $_POST["calle"] ;
$noExterior = $_POST["noExterior"] ;
$colonia = $_POST["colonia"] ;
$entreCalle = $_POST["entreCalle"] ;
$yCalle = $_POST["yCalle"] ;
$referencias = $_POST["referencias"] ;
$latitud = $_POST["latitud"] ;
$longitud = $_POST["longitud"] ;


//verificamos la conexion a base datos
if(!$connection) 
        {
            echo "No se ha podido conectar con el servidor" . mysql_error();
        }
  else
        {
            echo "<b><h3>Hemos conectado al servidor</h3></b>" ;
        }
        //indicamos el nombre de la base datos
        $datab = "id20709715_producto";
        //indicamos selecionar ala base datos
        $db = mysqli_select_db($connection,$datab);

        if (!$db)
        {
        echo "No se ha podido encontrar la Tabla";
        }
        else
        {
        echo "<h3>Tabla seleccionada:</h3>" ;
        }
        //insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
        $instruccion_SQL = "INSERT INTO sucursal (noSucursal, convenio, etapa, rm, zm, estatus, iro, tel,mesProgramado,metaTerminado, proveedorConect,centroCostos,cp,claveSedena, snd,nte,inftca,atm,telmex,cfe,llaves,vigilancia,agua,luz,drenaje,plantaEmergencia,ups,cajaChica,cajaGrande,nombreSucursal,entidad,municipio,localidad,calle,noExterior,colonia,entreCalle,yCalle,referencias,latitud,longitud)
                             VALUES ('$noSucursal','$convenio','$etapa','$rm','$zm','$estatus','$iro','$tel','$mesProgramado','$mesTerminado','$proveedorConect','$centroCostos','$cp','$claveSDN','$snd','$nte','$inftca','$atm','$telmex','$cfe','$llaves','$vigilancia','$agua','$luz','$drenaje','$plantaEmergencia','$ups','$cajaChica','$cajaGrande','$nombreSucursal','$entidad','$municipio','$localidad','$calle','$noExterior','$colonia','$entreCalle','$yCalle','$referencias','$latitud','$longitud')";
                           
                            
        $resultado = mysqli_query($connection,$instruccion_SQL);

        //$consulta = "SELECT * FROM tabla where id ='2'"; si queremos que nos muestre solo un registro en especifivo de ID
        $consulta = "SELECT * FROM sucursal";
        
$result = mysqli_query($connection,$consulta);
if(!$result) 
{
    echo "No se ha podido realizar la consulta";
}
echo "<table>";
echo "<tr>";
echo "<th><h1>noSucursal</th></h1>";
echo "<th><h1>convenio</th></h1>";
echo "<th><h1>etapa</th></h1>";
echo "<th><h1>rm</th></h1>";
echo "<th><h1>zm</th></h1>";
echo "<th><h1>estatus</th></h1>";
echo "<th><h1>iro</th></h1>";
echo "<th><h1>tel</th></h1>";
echo "<th><h1>mesProgramado</th></h1>";
echo "<th><h1>mesTerminado</th></h1>";
echo "<th><h1>proveedorConect</th></h1>";
echo "<th><h1>centroCostos</th></h1>";
echo "<th><h1>cp</th></h1>";
echo "<th><h1>claveSDN</th></h1>";
echo "<th><h1>snd</th></h1>";
echo "<th><h1>nte</th></h1>";
echo "<th><h1>inftca</th></h1>";
echo "<th><h1>atm</th></h1>";
echo "<th><h1>telmex</th></h1>";
echo "<th><h1>cfe</th></h1>";
echo "<th><h1>llaves</th></h1>";
echo "<th><h1>vigilancia</th></h1>";
echo "<th><h1>agua</th></h1>";
echo "<th><h1>luz</th></h1>";
echo "<th><h1>drenaje</th></h1>";
echo "<th><h1>plantaEmergencia</th></h1>";
echo "<th><h1>ups</th></h1>";
echo "<th><h1>cajaChica</th></h1>";
echo "<th><h1>cajaGrande</th></h1>";
echo "<th><h1>nombreSucursal</th></h1>";
echo "<th><h1>entidad</th></h1>";
echo "<th><h1>municipio</th></h1>";
echo "<th><h1>localidad</th></h1>";
echo "<th><h1>calle</th></h1>";
echo "<th><h1>noExterior</th></h1>";
echo "<th><h1>colonia</th></h1>";
echo "<th><h1>entreCalle</th></h1>";
echo "<th><h1>yCalle</th></h1>";
echo "<th><h1>referencias</th></h1>";
echo "<th><h1>latitud</th></h1>";
echo "<th><h1>longitud</th></h1>";
echo "</tr>";

while ($colum = mysqli_fetch_array($result))
 {
    echo "<tr>";
    echo "<td><h2>" . $colum['noSucursal']. "</td></h2>";
    echo "<td><h2>" . $colum['convenio']. "</td></h2>";
    echo "<td><h2>" . $colum['etapa'] . "</td></h2>";
    echo "<td><h2>" . $colum['rm'] . "</td></h2>";
    echo "<td><h2>" . $colum['zm'] . "</td></h2>";
    echo "<td><h2>" . $colum['estatus']. "</td></h2>";
    echo "<td><h2>" . $colum['iro']. "</td></h2>";
    echo "<td><h2>" . $colum['tel'] . "</td></h2>";
    echo "<td><h2>" . $colum['mesProgramado'] . "</td></h2>";
    echo "<td><h2>" . $colum['mesTerminado'] . "</td></h2>";
    echo "<td><h2>" . $colum['proveedorConect']. "</td></h2>";
    echo "<td><h2>" . $colum['centroCostos']. "</td></h2>";
    echo "<td><h2>" . $colum['cp'] . "</td></h2>";
    echo "<td><h2>" . $colum['claveSDN'] . "</td></h2>";
    echo "<td><h2>" . $colum['snd'] . "</td></h2>";
    echo "<td><h2>" . $colum['nte']. "</td></h2>";
    echo "<td><h2>" . $colum['inftca']. "</td></h2>";
    echo "<td><h2>" . $colum['atm'] . "</td></h2>";
    echo "<td><h2>" . $colum['telmex'] . "</td></h2>";
    echo "<td><h2>" . $colum['cfe'] . "</td></h2>";
    echo "<td><h2>" . $colum['llaves']. "</td></h2>";
    echo "<td><h2>" . $colum['vigilancia']. "</td></h2>";
    echo "<td><h2>" . $colum['agua'] . "</td></h2>";
    echo "<td><h2>" . $colum['luz'] . "</td></h2>";
    echo "<td><h2>" . $colum['drenaje'] . "</td></h2>";
    echo "<td><h2>" . $colum['plantaEmergencia']. "</td></h2>";
    echo "<td><h2>" . $colum['ups']. "</td></h2>";
    echo "<td><h2>" . $colum['cajaChica'] . "</td></h2>";
    echo "<td><h2>" . $colum['cajaGrande'] . "</td></h2>";
    echo "<td><h2>" . $colum['nombreSucursal'] . "</td></h2>";
    echo "<td><h2>" . $colum['entidad']. "</td></h2>";
    echo "<td><h2>" . $colum['municipio']. "</td></h2>";
    echo "<td><h2>" . $colum['localidad'] . "</td></h2>";
    echo "<td><h2>" . $colum['calle'] . "</td></h2>";
    echo "<td><h2>" . $colum['noExterior'] . "</td></h2>";
    echo "<td><h2>" . $colum['colonia']. "</td></h2>";
    echo "<td><h2>" . $colum['entreCalle']. "</td></h2>";
    echo "<td><h2>" . $colum['yCalle'] . "</td></h2>";
    echo "<td><h2>" . $colum['referencias'] . "</td></h2>";
    echo "<td><h2>" . $colum['latitud'] . "</td></h2>";
    echo "<td><h2>" . $colum['longitud']. "</td></h2>";
    echo "</tr>";
}
echo "</table>";

mysqli_close( $connection );

   //echo "Fuera " ;
   echo'<a href="menu.html"> Volver Atrás</a>';


?>