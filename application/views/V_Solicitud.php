<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"  content="IE=edge">
    <meta name="viewport"               content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta name="description"            content="Registro de Cotizaciones HPE">
    <meta name="keywords"               content="Registro de Cotizaciones HPE">
    <meta name="robots"                 content="Index,Follow">
    <meta name="date"                   content="June 1, 2018"/>
    <meta name="language"               content="es">
    <meta name="theme-color"            content="#000000">
    <title>Prueba</title>
    <link rel="shortcut icon" href="<?php echo RUTA_IMG?>logo/favicon.ico">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>toaster/toastr.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap-select/css/bootstrap-select.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap/css/bootstrap.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>mdl/material.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>datetimepicker/css/bootstrap-material-datetimepicker.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>font-awesome.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>metric.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_CSS?>m-p.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_CSS?>animate.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_CSS?>index.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_CSS?>style.css?v=<?php echo time();?>">
</head>
<body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer">
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">¿Qu&eacute; deseas hacer&#63;</span>
            <nav class="mdl-navigation">
                <a id="cotizacion" class="mdl-navigation__link active" onclick="goToMenu(this.id)">Descargar como imagen</a>
                <a id="puntaje" class="mdl-navigation__link" onclick="goToMenu(this.id)">Descargar Excel</a>
            </nav>
        </div>
        <main class="mdl-layout__content">
            <section class="js-section p-t-20">
                <div class="js-container">
                    <div class="js-user p-0">
                        <div class="js-user--left">
                            <p>Bienvenido(a)</p> 
                        </div>
                    </div>
                </div>
            </section>
            <section id="section-cotizacion" class="js-section js-section--menu">
                <div class="js-container">
                    <h2 class="js-title">Nuevo ingreso</h2>
                    <div class="col-xs-12 p-0">
                        <div class="col-sm-6 col-xs-12"> 
                            <div class="col-xs-12 js-input">
                                <label for="canal">Nombres</label>
                                <input type="text" id="canal" placeholder="Roberto Carlos" disabled>
                            </div>
                            <div class="col-xs-12 js-input">
                                <label for="Nombre">Apellidos</label>
                                <input type="text" id="Nombre" placeholder="da Silva" disabled>
                            </div>
                            <div class="col-xs-12 js-input">
                                <label for="pais">Pais</label>
                                <input type="text" id="pais" placeholder="Brasil" disabled>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="col-xs-12 js-input">
                                <label for="numFactura">Posisión</label>
                                <input type="text" id="numFactura" placeholder="lateral izquierdo" disabled>
                            </div>
                            <div class="col-xs-12 js-input js-date js-flex">
                                <input type="text" id="fecha" name="fecha" maxlength="10" placeholder="10/04/1973" value="" style="pointer-events: none" disabled>
                                <div class="js-icon">
                                    <button type="button" class="mdl-button mdl-js-button mdl-button--icon" disabled>
                                        <i class="mdi mdi-date_range"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-xs-12 js-input">
                                <label for="monto">Sueldo anual</label>
                                <input type="text" id="monto" placeholder="10 000 000.00" disabled>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <button id="ingresar" type="button" name="boton" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button">Registrar</button>
                        </div>
                    </div>
                </div>
            </section>
            
            <section id="section-puntaje" class="js-section js-section--menu js-opacity-done">
                <div class="js-container">
                    <div class="formulario col-sm-12 col-xs-12 m-t-20">
                        <div class="js-table">
                            <h2>&Uacute;ltimos registros </h2>
                            <div class="table-responsive">
                                <table class="table" id="tableCotizacion">
                                    <thead>
                                        <tr>
                                            <th>Nombres</th>
                                            <th>Apellidos</th>
                                            <th>Posision</th>
                                            <th>Pais</th>
                                            <th>Sueldo</th>
                                        </tr>
                                    </thead>
                                    <tbody id="bodyUltimaCotizacion">
                                        <tr>
                                            <td>Roberto Carlos</td>
                                            <td>da Silva</td>
                                            <td>Lateral izquierdo</td>
                                            <td>Brasil</td>
                                            <td>10 000 000.00</td>
                                        </tr>
                                        <tr>
                                            <td>Edson Arantes</td>
                                            <td>Pelé</td>
                                            <td>Delantero</td>
                                            <td>Brasil</td>
                                            <td>4 000 000.00</td>
                                        </tr>
                                        <tr>
                                            <td>Zinédine</td>
                                            <td>Zidane</td>
                                            <td>Centrocampista ofensivo</td>
                                            <td>Francia</td>
                                            <td>15 000 000.00</td>
                                        </tr>
                                        <tr>
                                            <td>Ronaldo</td>
                                            <td>de Assis Moreira</td>
                                            <td>Ceentrocampista</td>
                                            <td>Brasil</td>
                                            <td>8 000 000.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="mdl-card">
                            <div class="mdl-card__actions">
                                <h5>Reporte General de Registros</h5>
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-excel" id="excel1">Descargar Excel</button>
                            </div>
                        </div>
                        <div id="reporte" class="js-table" style="display:none">
                            <h2>Oportunidades Registradas </h2>
                            <div class="table-responsive">
                                <table class="table" id="tbReporte">
                                    <thead>
                                        <tr>
                                            <th>Nombres</th>
                                            <th>Apellidos</th>
                                            <th>Posision</th>
                                            <th>Pais</th>
                                            <th>Sueldo</th>
                                        </tr>
                                    </thead>
                                    <tbody id="bodyReporte">
                                        <tr>
                                            <td>Roberto Carlos</td>
                                            <td>da Silva</td>
                                            <td>Lateral izquierdo</td>
                                            <td>Brasil</td>
                                            <td>10 000 000.00</td>
                                        </tr>
                                        <tr>
                                            <td>Edson Arantes</td>
                                            <td>Pelé</td>
                                            <td>Delantero</td>
                                            <td>Brasil</td>
                                            <td>4 000 000.00</td>
                                        </tr>
                                        <tr>
                                            <td>Zinédine</td>
                                            <td>Zidane</td>
                                            <td>Centrocampista ofensivo</td>
                                            <td>Francia</td>
                                            <td>15 000 000.00</td>
                                        </tr>
                                        <tr>
                                            <td>Ronaldo</td>
                                            <td>de Assis Moreira</td>
                                            <td>Ceentrocampista</td>
                                            <td>Brasil</td>
                                            <td>8 000 000.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="reporte1"></div>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
	<script src="<?php echo RUTA_JS?>jquery-3.2.1.min.js?v=<?php echo time();?>"></script>
	<script src="<?php echo RUTA_JS?>jquery-1.11.2.min.js?v=<?php echo time();?>"></script>
	<script src="<?php echo RUTA_PLUGINS?>bootstrap/js/bootstrap.min.js?v=<?php echo time();?>"></script>
	<script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/bootstrap-select.min.js?v=<?php echo time();?>"></script>
	<script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/i18n/defaults-es_ES.min.js?v=<?php echo time();?>"></script>
	<script src="<?php echo RUTA_PLUGINS?>mdl/material.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>moment/moment.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>datetimepicker/js/bootstrap-material-datetimepicker.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>jquery-mask/jquery.mask.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>toaster/toastr.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>Utils.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>jsmenu.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>solicitud.js?v=<?php echo time();?>"></script>
    <script type="text/javascript">
    	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
        	$('select').selectpicker('mobile');
        } else {
            $('select').selectpicker();
        }$( window ).load(function(){
            setTimeout(function() {
                $('.mdl-layout__drawer-button i').empty();
                $('.mdl-layout__drawer-button i').removeClass('material-icons');
                $('.mdl-layout__drawer-button i').addClass('mdi mdi-menu');
            }, 250);
        });
        $('#excel1').click(function(){
            $('#tbReporte_wrapper').find('button').trigger("click");
            console.log('entra');
        });
        $(document).ready(function() {
            $('#tbReporte').DataTable( {
                searching : false,
                dom: 'Bfrtip',
                paging: false,
                order:[[5, 'desc'], [3,'desc'], [4, 'asc']],
                language:{
                    "emptyTable":     "No se encontraron registros",
                    "info" : ''
                },
                lengthMenu: [
                    [ 10 ]
                ],
                buttons: [
                    {
                        extend:'excel',
                        text: 'Exportar a Excel',
                    }
                ]
            });
        });
        initButtonCalendarDaysMaxToday('fecha');
        initMaskInputs('fecha');
    </script>
</body>