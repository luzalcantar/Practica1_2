<?php

    //Obtener valores y decodificarlos
    $data = json_decode(file_get_contents("https://my-json-server.typicode.com/dp-danielortiz/dptest_jsonplaceholder/items"), true);
    
    //Numero total de registros
    $n=count($data);

    for($i=0 ; $i<$n ; $i++){
        //Eliminar registros que no concuerden con los criterios 
        if($data[$i]["color"]!= 'red'){   
            unset($data[$i]);
        }
    }

    //Convertir arreglo a JSON
    $result = json_encode($data);
    echo $result;

?>