<?php 
function conectar($sql){
    echo $sql;
    $id = "";
    $senha = "";
    
    $hostweb = false; // false para usar localhost, true para usar no 000webhost
    if ($hostweb) {
        $id = "id20607314_"; // id ou prefixo do 000webhost
        $senha = "Caçadortesouro123"; // senha do 000webhost
    }

    $servidor = "localhost";
    $usuario = $id."root";
    $banco = $id."mydb";

    $con = new mysqli($servidor, $usuario, $senha, $banco);

    if ($con->connect_error) {
        die("Erro: ".$con->connect_error);
    } 
    //if(str_contains(sql,"insert")) {
   //$con->query($sql);
   // return $con->insert_id;
    // echo $sql;
   // {
    return $con->query($sql);
    
}
?>