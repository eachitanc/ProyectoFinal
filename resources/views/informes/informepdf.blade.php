<html>
<head>
    <style>
        @page {
            margin: 0cm 0cm;
        }

        body {
            margin: 3cm 2cm 2cm;
        }

        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #9156B0;
            color: white;
            text-align: center;
            line-height: 30px;
        }

        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #9156B0;
            color: white;
            text-align: center;
            line-height: 35px;
        }
    </style>
    <link rel="stylesheet" href="{{ url('/assets/mdbootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/mdbootstrap/css/mdb.min.css') }}">
</head>
<body>
    <header>
        <h1>La Unica</h1>
    </header>
    
    <main>
        <br><br><br><br>
        <h3 align="center">REPORTE DE VENTAS</h3>
            <div class="container">
                <table class="table table-striped" style="width: 100%;">
                    <thead>
                        <tr>
                            <th scope="col">No. Factura</th>
                            <th scope="col">Fecha de venta</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $total = 0 ?>
                        @foreach($ventas as $v)
                            @if($v->total != "")
                                <tr>
                                <th scope="row">{{$v->id_factura}}</th>
                                    <td>{{$v->fecha_factura}}</td>
                                    <td>${{$v->total}}</td>
                                </tr>
                                <?php $total = $total+$v->total?>
                            @endif
                        @endforeach
                    </tbody>
                </table>
                <div class="col-3">
                    TOTAL: ${{$total}}
                </div> 
            </div>
            <div id="chart-container">
            </div>
            <script src="https://code.highcharts.com/highcharts.js"></script>
            <script>
                var datas = <?php echo json_encode($datas) ?>

                Highcharts.chart('chart-container', {
                    title:{
                        text: 'Nuevos usuarios'
                    },
                    subtitle:{
                        text: 'Fuente: Medios TI'
                    },
                    xAxis:{
                        categories:['Ene','Feb', 'Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic']
                    },
                    yAxis:{
                        title:{
                            text:'Numero de nuevos usuarios'
                        }
                    },
                    legend:{
                        layout: 'vertical',
                        align: 'right',
                        verticalAlign:'middle'
                    },
                    plotOptions:{
                        series:{
                            allowPonitSelect: true
                        }
                    },
                    series:[{
                        name: 'Nuevo Usuario',
                        data:datas
                    }],
                    responsive:{
                        rules: [{
                            condition:{
                                maxwidth:500
                            },
                            chartOptions:{
                                legend:{
                                    layout: 'horizontal',
                                    align: 'center',
                                    verticalAlign: 'bottom'
                                }
                            }
                        }]
                    }
                })
            </script>
    </main>

    <footer>
        <div align="center"class="py-2">
            Direccion: Cra 6# 11-22 Ipiales-Nariño
            <br>
            Teléfono: 55555555   Correo: LaUnicastore@gmail.com
        </div>
    </footer>
</body>
</html>




