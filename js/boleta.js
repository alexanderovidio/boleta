$(document).ready(function(){
    $acum2=0;
    $(".agregar-op").on("click", function () {
        //guardo cuantos items de la clase acum hay en la variable $n_items
        var $n_items= $(".acum").length; 

        //si $n_items es igual a 0 quiere decir que se eliminaron todos los items y deberá iniciar de nuevo el conteo desde el 1
        if($n_items === 0){
            $acum=1;
        }else{
            /*A la variable $acum le asigno el numero de items de la clase acum, la cual lleva el conteo de cuantos hay,
              para así guardar el valor del conteo en donde se quedó, le sumo 1 pues inica en 0
            */
            $acum = $n_items+1;
        }

        var $mas_op = $("#mas_op");
        $mas_op.append('<label class="acum" for="op_registral">'+$acum+'</label><div class="op-agregadas"><div class="col-xs-8"><select name="op_registral'+$acum+'" id="op_registral'+$acum+'" class="form-control"><option value="">Seleccione una opción</option></select></div><div class="col-xs-4" style="padding-right:0;"><label class="control-label col-xs-3" for="val_contrato">Valor Q.</label><div class="col-xs-9"><input type="text" name="val_contrato'+$acum+'" id="val_contrato'+$acum+'" class="form-control"></div></div></div>');
        $acum+=1;
    });

    $(".eliminar-op").on("click", function () {
        
        $(".op-agregadas").last().slideUp( "slow", function() {
            // Animation complete.
            $(this).remove();
            $(".acum").last().remove();
            //console.log($acum);
        });
    });

    $(".agregar-datos").on("click", function () {
        var $n_items= $(".acum3").length;

        if($n_items === 0){
            $acum3=1;
        }else{
            $acum3 = $n_items+1;
        }
        var $mas_datos = $("#datos .nuevos-datos");
        $mas_datos.append('<div class="datos-agregados"><label class="acum3" for="datos-agregados">'+$acum3+'</label><label class="col-xs-12" for="nombres_persona">Nombre (s) de la persona individual o jurídica:</label><div class="col-xs-12"><input type="text" name="nombres_persona'+$acum3+'" id="nombres_persona'+$acum3+'" class="form-control"></div><label class="col-xs-3" for="nit_persona">NIT: </label><div class="col-xs-6"><input type="text" name="nit_persona'+$acum3+'" id="nit_persona'+$acum3+'" class="form-control"></div><div class="col-xs-12"></div><label class="col-xs-3" for="dpi_persona">DPI si es persona individual: </label><div class="col-xs-6"><input type="text" name="dpi_persona'+$acum3+'" id="dpi_persona'+$acum3+'" class="form-control"></div></div>');
        $acum3+=1;
    });

    $(".eliminar-datos").on("click", function () {
        $(".datos-agregados").last().slideUp( "normal", function() {
            // Animation complete.
            $(this).hide().remove();
        });
    });

    $(".agregar-bienes").on("click", function () {
        var $n_items= $(".acum2").length; 
        if($n_items === 0){
            $acum2=1;
        }else{
            $acum2 = $n_items+1;
        }
        var $mas_bienes = $("#bienes .nuevos-bienes");
        $mas_bienes.append('<p class="acum2">'+$acum2+'</p>' +
            '<div class="bienes-agregados">' +
                '<div class="datos-bienes">' +
                '<label class="control-label col-xs-12" for="no_finca">FINCA O BIEN NO.</label>' +
                    '<div class="col-xs-12"><input type="text" name="no_finca'+$acum2+'" id="no_finca'+$acum2+'" class="form-control"></div>' +
                '</div>' +
                '<div class="datos-bienes">' +
                '<label class="control-label col-xs-12" for="folio_finca">FOLIO</label>' +
                    '<div class="col-xs-12"><input type="text" name="folio_finca'+$acum2+'" id="folio_finca'+$acum2+'" class="form-control"></div>' +
                '</div>' +
                '<div class="datos-bienes">' +
                '<label class="col-xs-12" for="libro_finca">LIBRO</label>' +
                    '<div class="col-xs-12"><input type="text" name="libro_finca'+$acum2+'" id="libro_finca'+$acum2+'" class="form-control"></div>' +
                '</div>' +
                '<div class="datos-bienes">' +
                '<label class="control-label col-xs-12" for="depto_finca">DEPARTAMENTO</label>' +
                    '<div class="col-xs-12"><input type="text" name="depto_finca'+$acum2+'" id="depto_finca'+$acum2+'" class="form-control"></div>' +
                '</div>' +
                '<div class="form-group col-md-12">'+
                    '<div class="col-md-12" style="padding: 10px 0;">'+
                        '<div class="d-inmueble">' +
                        '<label class="control-label l-izq col-xs-3" for="direccion_inmueble">DIRECCIÓN DEL INMUEBLE:</label>' +
                            '<div class="col-xs-9">' +
                                '<input type="text" name="direccion_inmueble'+$acum2+'" id="direccion_inmueble'+$acum2+'" class="form-control">' +
                            '</div>' +
                        '</div>'+
                        '<div class="d-inmueble">'+
                        '<label class="control-label l-izq col-xs-3" for="domicilio_fiscal">DOMICILIO FISCAL:</label>'+
                            '<div class="col-xs-9">'+
                                '<input type="text" name="domicilio_fiscal'+$acum2+'" id="domicilio_fiscal'+$acum2+'" class="form-control">'+
                            '</div>'+
                        '</div>'+
                        '<div class="d-inmueble">'+
                        '<label class="control-label l-izq col-xs-3" for="area_superficie">ÁREA O SUPERFÍCIE:</label>'+
                            '<div class="col-xs-9">'+
                                '<input type="text" name="area_superficie'+$acum2+'" id="area_superficie'+$acum2+'" class="form-control">'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
            '</div>');
        $acum2+=1;
       });

    $(".eliminar-bienes").on("click", function () {
        $(".bienes-agregados").last().slideUp( "slow", function() {
            $(this).remove();
            $(".acum2").last().remove();
        });
    });

   /* $("#mas_bienes").attr("checked",true);
    
    if ($('input[name=mas_bienes]:checked')){
        $(".mbbienes").show();
    }else{
        $(".mbbienes").hide();
    }

    $("#mas_bienes").on("click", function () {
        if ($(this).is(":checked")) {
            $(".mbbienes").show();
        }else{
            $(".mbbienes").hide();
            $(".mbienes-agregados").val("").hide();
        }
       
    });

    $(".agregar-mbienes").on("click", function () {
        var $mas_bienes = $("#bienes .nuevos-mbienes");
        
        $mas_bienes.append('<div class="mbienes-agregados col-md-12"><label class="control-label l-izq col-xs-3" for="direccion_inmueble">DIRECCIÓN DEL INMUEBLE:</label><div class="col-xs-9"><input type="text" name="direccion_inmueble" id="direccion_inmueble" class="form-control"></div><label class="control-label l-izq col-xs-3" for="domicilio_fiscal">DOMICILIO FISCAL:</label><div class="col-xs-9"><input type="text" name="domicilio_fiscal" id="domicilio_fiscal" class="form-control"></div><label class="control-label l-izq col-xs-3" for="area_superficie">ÁREA O SUPERFÍCIE:</label><div class="col-xs-9"><input type="text" name="area_superficie" id="area_superficie" class="form-control"></div></div>');
    });

    $(".eliminar-mbienes").on("click", function () {
        $(".mbienes-agregados").last().slideUp( "slow", function() {
            // Animation complete.
            $(this).remove();
        });
    });
    */
   $("#opciones_ip").on("change", function () {
       if ($(this).val() === '5'){
           $("#explicacion_opcionesip").val('');
           $(".explicacion").show();

       }
       else {
           $(".explicacion").hide();
       }

   });
});
