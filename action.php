<?php
    $servername = "localhost";
    $username = "id20709715_root";
    $password = "5547168870La/";
    $db = "id20709715_producto";

   $conn = mysqli_connect($servername, $username, $password, $db);

    if(isset($_POST["Import"])){

        $filename=$_FILES["file"]["tmp_name"];

        if($_FILES["file"]["size"] > 0)
        {
            $file = fopen($filename, "r");
            $bug = 0;
            while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
            {
                $bug++ ;
                if($getData[0] !=''){
                    $sql = "INSERT into sucursal (noSucursal, convenio, etapa, rm, zm, estatus, iro, tel,mesProgramado,metaTerminado, proveedorConect,centroCostos,cp,claveSedena, snd,nte,inftca,atm,telmex,cfe,llaves,vigilancia,agua,luz,drenaje,plantaEmergencia,ups,cajaChica,cajaGrande,nombreSucursal,entidad,municipio,localidad,calle,noExterior,colonia,entreCalle,yCalle,referencias,latitud,longitud) 
                            values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$getData[6]."','".$getData[7]."','".$getData[8]."','".$getData[9]."','".$getData[10]."','".$getData[11]."','".$getData[12]."','".$getData[13]."','".$getData[14]."','".$getData[15]."','".$getData[16]."','".$getData[17]."','".$getData[18]."','".$getData[19]."','".$getData[20]."',
                            '".$getData[21]."','".$getData[22]."','".$getData[23]."','".$getData[24]."','".$getData[25]."','".$getData[26]."','".$getData[27]."','".$getData[28]."','".$getData[29]."','".$getData[30]."','".$getData[31]."','".$getData[32]."','".$getData[33]."','".$getData[34]."','".$getData[35]."','".$getData[36]."','".$getData[37]."','".$getData[38]."','".$getData[39]."','".$getData[40]."','".$getData[41]."')";
                    $result = mysqli_query($conn, $sql);
                }
            }
            if($bug > 0){
                echo "<h1>CSV file upload successfully .....!</h1>";
            }

            fclose($file);
        }
    }


?>