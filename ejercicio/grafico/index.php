<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">

    <title>GRAFICO CON CHARTJS</title>
  </head>
  <body>
    <div class="col-lg-12" style="padding-top:20px;">
            <div class="card">
                <div class="card-header">
                    GRÁFICO DE ETAPAS DE LOS BANCOS DEL BIENESTAR
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <canvas id="graficobar" width="400" height="400"></canvas>
                        </div>
                        <div class="col-lg-4">
                            <canvas id="graficobarhorizontal" width="400" height="400"></canvas>
                        </div>

                        <div class="col-lg-4">
                            <canvas id="graficopie" width="400" height="400"></canvas>
                        </div>
                                 
                    </div>

                </div>
            </div>

    

        </div>

  </body>
</html>


<!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
-->
   
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    

    <script>    

    CargarDatosGraficoBar();
    CargarDatosGraficoBarHorizontal();
    CargarDatosGraficoPie();
    
    function CargarDatosGraficoBar(){

        $.ajax({
            url:'controlador_grafico.php',
            type:'POST'
        }).done(function(resp){
            if(resp.length>0){
                var titulo = []; 
                var cantidad = [];
                var colores = [];
                var data = JSON.parse(resp);
                for(var i=0; i < data.length; i++ ){
                    titulo.push(data[i][0]);
                    cantidad.push(data[i][1]);
                    colores.push(colorRGB());
    }

        CrearGrafico(titulo,cantidad,colores,'bar', 'GRAFICO DE BARRAS','graficobar');
       
    }          
        })

    }

    function CargarDatosGraficoBarHorizontal(){

        $.ajax({
            url:'controlador_grafico.php',
            type:'POST'
        }).done(function(resp){
            if(resp.length>0){
                var titulo = []; 
                var cantidad = [];
                var colores = [];
                var data = JSON.parse(resp);
                for(var i=0; i < data.length; i++ ){
                    titulo.push(data[i][0]);
                    cantidad.push(data[i][1]);
                    colores.push(colorRGB());
            }

        CrearGrafico(titulo,cantidad,colores,'horizontalBar', 'GRAFICO DE BARRAS HORIZONTAL','graficobarhorizontal');
       

    }         
        })

        }

        function CargarDatosGraficoPie(){

$.ajax({
    url:'controlador_grafico.php',
    type:'POST'
}).done(function(resp){
    if(resp.length>0){
        var titulo = []; 
        var cantidad = [];
        var colores = [];
        var data = JSON.parse(resp);
        for(var i=0; i < data.length; i++ ){
            titulo.push(data[i][0]);
            cantidad.push(data[i][1]);
            colores.push(colorRGB());
    }

CrearGrafico(titulo,cantidad,colores,'pie', 'GRÁFICO DE PASTEL DE ETAPAS','graficopie');


}         
})

}


function CrearGrafico(titulo,cantidad,colores,tipo,encabezado,id){

    var ctx = document.getElementById(id);
            var myChart = new Chart(ctx, {
            type: tipo,
            data: {
                labels: titulo,
                datasets: [{
                    label: encabezado,
                    data: cantidad,
                    backgroundColor: colores,
                    borderColor: colores,
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                    }
                }]
            }
        }
    });

}
    function generarNumero(numero){
	return (Math.random()*numero).toFixed(0);
    }

    function colorRGB(){
        var coolor = "("+generarNumero(255)+"," + generarNumero(255) + "," + generarNumero(255) +")";
        return "rgb" + coolor;
    }
    </script>