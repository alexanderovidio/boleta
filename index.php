<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boleta de presentación para Primer Ingreso de Documentos</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/boleta.js"></script>
</head>
<body>
    <div class="container">
        <header class="text-center" style="">
            <h1 class="alert alert-info t-principal">FORMULARIO DE INGRESO</h1>
            <h2 class="alert alert-danger t-secund">Este es un boceto</h2>
        </header>

        <div class="row">
            <div class="col-xs-12">
                <form class="form-horizontal" action="" method="post">
                    <div id="operaciones" class="operaciones">
                        <p class="texto-inicial text-left col-xs-6">La veracidad y exactitud en la infromación agilizará el trámite. Este formulario puede ser impreso, visitado enla página web: www.rgp.org.gt</p>
                        <div class="form-group">
                            <label class="control-label col-xs-2" for="colegiado_no">Colegiado <span> NO.</span></label>
                            <div class="col-xs-4">
                                <input class="form-control" type="text" name="colegiado_no" id="colegiado_no">  
                            </div>
                            <label class="control-label col-xs-5" for="notario_autor">(del Notario AUTORIZANTE)</label>
                        </div>
                        <p class="text-left">A) OPERACION (ES) REGISTRAL (ES) A EFECTUAR EN ESTE DOCUMENTO Y VALOR DEL CONTRATO:</p>
                        <p class="botones-operacion">
                           <a href="#_" class="agregar-op btn btn-info btn-sm">
                               <span class="glyphicon glyphicon-plus"></span> Agregar
                           </a>
                           <a href="#_" class="eliminar-op btn btn-danger btn-sm">
                               <span class="glyphicon glyphicon-minus"></span> Eliminar
                           </a>
                        </p>     
                        <div class="form-group mas_op" id="mas_op">
                            <label class="acum" for="op_registral">1</label>
                            <div class="op-agregadas">
                                <div class="col-xs-8">
                                    <select name="op_registral1" id="op_registral1" class="form-control">
                                        <option value="">Seleccione una opción</option>
                                    </select>
                                </div>
                                <div class="col-xs-4" style="padding-right:0;">
                                    <label class="control-label col-xs-3" for="val_contrato">Valor Q.</label>
                                    <div class="col-xs-9">
                                        <input type="text" name="val_contrato1" id="val_contrato1" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                    <div id="datos" class="datos">
                        <p class="text-left">B) DATOS DE LOS OTORGANTES</p>
                        <p class="botones-operacion">
                           <a href="#_" class="agregar-datos btn btn-info btn-sm">
                               <span class="glyphicon glyphicon-plus"></span> Agregar
                           </a>
                           <a href="#_" class="eliminar-datos btn btn-danger btn-sm">
                               <span class="glyphicon glyphicon-minus"></span> Eliminar
                           </a>
                        </p>     
                        <div class="form-group nuevos-datos">
                            <div class="datos-agregados">
                                <label class="acum3" for="datos-agregados">1</label>
                                <label class="col-xs-12" for="nombres_persona">Nombre (s) de la persona individual o jurídica:</label>
                                <div class="col-xs-12">
                                    <input type="text" name="nombres_persona1" id="nombres_persona1" class="form-control">
                                </div>
                                <label class="col-xs-3" for="nit_persona">NIT: </label>
                                <div class="col-xs-6">
                                    <input type="text" name="nit_persona1" id="nit_persona1" class="form-control">
                                </div>
                                <div class="col-xs-12"></div>
                                <label class="col-xs-3" for="dpi_persona1">DPI si es persona individual: </label>
                                <div class="col-xs-6">
                                    <input type="text" name="dpi_persona1" id="dpi_persona1" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="titulo" class="titulo">
                        <p class="">I. Testimonio de Insturmento Público</p>
                        <div class="form-group">
                            <label class="control-label col-xs-3 l-izq" for="no_escriturap">Escritura Pública No.</label>
                            <div class="col-xs-3">
                                <input type="text" name="no_escriturap" id="no_escriturap" class="form-control">
                            </div>
                            <label class="control-label col-xs-3" for="fecha_escriturap">fecha de escritura pública:</label>
                            <div class="col-xs-3">
                                <input type="date" name="fecha_escriturap" id="fecha_escriturap" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-xs-3 l-izq" for="nombre_notario">Nombre del Notario (u) autorizante</label>     
                            <div class="col-xs-9">
                                <input type="text" name="nombre_notario" id="nombre_notario" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label l-izq col-xs-3" for="tel_autorizante">No. Teléfono</label>
                            <div class="col-xs-3">
                                <input type="text" name="tel_autorizante" id="tel_autorizante" class="form-control">
                            </div>
                            
                            <label class="control-label col-xs-3" for="correo_autorizante">correo electrónico:</label>
                            <div class="col-xs-3">
                                <input type="email" name="correo_autorizante" id="correo_autorizante" class="form-control">
                            </div>
                        </div>
                        <p class="">II. Otro Título</p>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <select name="opciones_ip" id="opciones_ip" class="form-control">
                                    <option value="1">1. Documento Judicial</option>
                                    <option value="2">2. Solicitud</option>
                                    <option value="3">3. Documento Administrativo</option>
                                    <option value="4">4. Título del Estado</option>
                                    <option value="5">5. Otros, especifique</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group explicacion" style="display: none;">
                            <div class="col-xs-12">
                                <input type="text" class="form-control" name="explicacion_opcionesip" id="explicacion_opcionesip">
                            </div>
                        </div>
                    </div>
                    <div id="bienes" class="bienes">
                        <p class="">D) BIEN (ES) RELACIONADOS: </p>
                        <p class="botones-operacion">
                           <a href="#_" class="agregar-bienes btn btn-info btn-sm">
                               <span class="glyphicon glyphicon-plus"></span> Agregar
                           </a>
                           <a href="#_" class="eliminar-bienes btn btn-danger btn-sm">
                               <span class="glyphicon glyphicon-minus"></span> Eliminar
                           </a>
                        </p>
                        <div class="form-group nuevos-bienes">
                            <p class="acum2">1</p>
                            <div class="bienes-agregados">
                                <div class="datos-bienes">
                                    <label class="control-label col-xs-12" for="no_finca">FINCA O BIEN NO.</label>
                                    <div class="col-xs-12">
                                        <input type="text" name="no_finca" id="no_finca" class="form-control">
                                    </div>
                                </div>
                                <div class="datos-bienes">
                                    <label class="control-label col-xs-12" for="folio_finca">FOLIO</label>
                                    <div class="col-xs-12">
                                        <input type="text" name="folio_finca" id="folio_finca" class="form-control">
                                    </div>
                                </div>
                                <div class="datos-bienes">
                                    <label class="col-xs-12" for="libro_finca">LIBRO</label>
                                    <div class="col-xs-12">
                                        <input type="text" name="libro_finca" id="libro_finca" class="form-control">
                                    </div>
                                </div>
                                <div class="datos-bienes" style="bottom: 2px;">
                                    <div class="ddepto">
                                        <label class="control-label col-xs-12" for="depto_finca">DEPARTAMENTO</label>
                                        <div class="col-xs-12">
                                            <input type="text" name="depto_finca" id="depto_finca" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="col-md-12" style="padding: 10px 0;">
                                        <div class="d-inmueble">
                                            <label class="control-label l-izq col-xs-3" for="direccion_inmueble">DIRECCIÓN DEL INMUEBLE:</label>
                                            <div class="col-xs-9">
                                                <input type="text" name="direccion_inmueble" id="direccion_inmueble" class="form-control">
                                            </div>
                                        </div>
                                        <div class="d-inmueble">
                                            <label class="control-label l-izq col-xs-3" for="domicilio_fiscal">DOMICILIO FISCAL:</label>
                                            <div class="col-xs-9">
                                                <input type="text" name="domicilio_fiscal" id="domicilio_fiscal" class="form-control">
                                            </div>
                                        </div>
                                        <div class="d-inmueble">
                                            <label class="control-label l-izq col-xs-3" for="area_superficie">ÁREA O SUPERFÍCIE:</label>
                                            <div class="col-xs-9">
                                                <input type="text" name="area_superficie" id="area_superficie" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="ultimo" class="ultimo">
                        <p class="text-left">¿ESTE DOCUMENTO TIENE RELACIÓN CON OTROS QUE ESTÁ PRESENTANDO?</p>
                        <div class="form-group radio">
                            <label class="control-label col-xs-2" for="no_docs">NO</label>
                            <div class="col-xs-2">
                                <input type="radio" value="" name="acepta_docs" id="no_docs" class="form-control">
                            </div>        
                            <label class="control-label col-xs-2" for="si_docs">SI</label>
                            <div class="col-xs-2">
                                <input type="radio" value="" name="acepta_docs" id="si_docs" class="form-control">
                            </div>        
                            <label class="col-xs-2" for="cuantos_docs">¿CUÁNTOS?</label>
                            <div class="col-xs-2">
                                <input type="text" name="cuantos_docs" id="cuantos_docs" class="form-control">
                            </div>
                        </div>
                        <div class="form-group"></div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <button type="submit" class="center-block btn btn-primary">Enviar Datos</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <footer>
        </footer>
    </div>
    
</body>
</html>