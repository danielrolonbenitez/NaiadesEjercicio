<?php 

     include("../model/MySQL.php");
     $mysql= MySQL::getInstance();
     $sql="INSERT INTO usuarios SET
           nombre='".$_POST['nombre']."',
           apellido='".$_POST['apellido']."'";
      $mysql->setQuery($sql);
      if($mysql->execute()){
      	 $status=200;
      	 $mensaje="El usario a sido insertado con exito";
      }else{
      	 $status=500;
      	 $mensaje="Error al insertar el usuario";
      }
      
      $response=array('status'=>$status,'msg' =>$mensaje);
      $response=json_encode($response);
      echo $response;
      
?>


