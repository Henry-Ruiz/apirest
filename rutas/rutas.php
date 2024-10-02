<?php
//capturamos la ruta
$array=explode("/",$_SERVER["REQUEST_URI"]);

/*-------------------------------------- 
cuando no se hace ninguna peticion a la API
---------------------------------------*/ 
if(count(array_filter($array))==1){

    $json=array(
        "detalle"=>"sin solicitudes",
    );
echo json_encode($json, true); 
}else{
 /*-------------------------------------- 
 cuando si se hace una peticion a la API
 ---------------------------------------*/  
 if(count(array_filter($array))==2){
    /*cursos*/
if(array_filter($array)[2]=="cursos"){
    /*ver listas de cursos* */
    if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"]=="GET"){
        $cursos=new ControladorCursos();
        $cursos->index();
    }
}
}
}
?>