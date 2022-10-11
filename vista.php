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
    </head>s
    <body>
        <div class="container">
            <section>
                <h1 class="text-center" style="background:#000;padding:20px;">
                    <img src="assets/images/logo.png" alt="Naiades" />
                </h1>
        		<h2>Vista</h2>
            	<div class="row">
            		<div class="col-sm-12">
                        <a href="formulario.php" class="btn btn-success">Nuevo</a>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Fecha</th>
                                </tr>
                            </thead>
                            <tbody id="usarios"></tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
        <script src="assets/javascripts/jquery.min.js"></script>
        <script src="assets/javascripts/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                 $.ajax({                        
                 type: "POST",                 
                 url: "/ax/vista.php",                     
                 data: "",
                 cache: false,
                 contentType: false,
                 enctype: 'multipart/form-data',
                  processData: false,  
                 success: function(data)             
                 {
                    var result= JSON.parse(data);
                    console.log(result);
                   
                    if(result.status==200){
                      var  content=$("#usarios");
                      for (var x =0; x <result.usuarios.length; x++){
                      var tr = document.createElement('tr');
                      tr.innerHTML = '<td>' + result.usuarios[x].id + '</td>' +
                        '<td>' + result.usuarios[x].nombre + '</td>' +
                        '<td>' + result.usuarios[x].apellido + '</td>' +
                        '<td>' + result.usuarios[x].fecha + '</td>';
                         content.append(tr);
                      }

                    }else{
                      alert('no se encontraron resultados');
                    } 
                               
                 }
             });
            });
        </script>
    </body>
</html>
