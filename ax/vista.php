<?php
    include("../model/MySQL.php");
     $mysql= MySQL::getInstance();
     $sql="select * from usuarios ";
      $mysql->setQuery($sql);
      $usuarios=$mysql->loadObjectList();
      if(count($usuarios)>0){
      	 $status=200;
      }else{
      	 $status=500;
      }
      
      $response=array('status'=>$status,'usuarios' =>$usuarios);
      $response=json_encode($response);
      echo $response;
?>
