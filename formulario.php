<?php
include("config/config.php");
?>
<!doctype html>
<html lang="es">
    <head>
        <title>Naiades - Ejercicio</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="robots" content="noindex">
        <meta name="googlebot" content="noindex">
        <link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />
        <link rel="stylesheet" href="assets/stylesheets/bootstrap.min.css" />
        <script src="assets/javascripts/modernizr.min.js"></script>
    </head>
    <body>
        <div class="container">
            <section>
                <h1 class="text-center" style="background:#000;padding:20px;">
                    <img src="assets/images/logo.png" alt="Naiades" />
                </h1>
                <form  action="/ax/formulario.php" method="post" name="form" autocomplete="off" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="nombre" class="control-label">Nombre</label>
                            <input id="nombre" type="text" class="form-control" name="nombre" value="" maxlength="100">
                        </div>
                         <div class="form-group col-sm-6">
                            <label for="apellido" class="control-label">Apellido</label>
                            <input id="apellido" type="text" class="form-control" name="apellido" value="" maxlength="100">
                        </div>
                        <div class="form-group col-sm-12">
                            <button id="guardar" type="button" class="btn btn-success btn-lg btn-submit">Guardar</button>
                        </div>
                    </div>
                </form>
            </section>
        </div>
        <script src="assets/javascripts/jquery.min.js"></script>
        <script src="assets/javascripts/bootstrap.min.js"></script>
        <script type="text/javascript">
    $("#guardar").click(function(){
            
              var campoNombre=$("#nombre");
              var campoApellido=$("#apellido");
             
            if(campoNombre.val()==""){
               alert('El nombre es requerido*');
               return false;

            }

            if(campoApellido.val()==""){
               alert('El apellido es requerido*');
               return false;

            }


        
             /*envia el formulario por ajax*/
              var url =$('form').attr('action');
              var fd = new FormData();
              var nombre=$('#nombre').val();
              var apellido=$('#apellido').val();
              fd.append('nombre',nombre);
              fd.append('apellido',apellido);
            

              $.ajax({                        
                 type: "POST",                 
                 url: url,                     
                 data: fd,
                 cache: false,
                 contentType: false,
                 enctype: 'multipart/form-data',
                  processData: false,  
                 success: function(data)             
                 {
                    var result= JSON.parse(data);
                    if(result.status==200){
                     alert('usuario creado');
                     window.location.href='vista.php';
                    }else{
                      alert('error al crear usuario');
                    } 
                               
                 }
             });
    });

        </script>
    </body>
</html>
