<?php
require_once 'conect_db.php';



    $sql = "INSERT INTO curso(nome_curso,status_curso) VALUES ('sjkdfbksdhf', 'fjdshjkfh')";
    if ($conn->query($sql)==TRUE)
    	echo "adicionado com sucesso";


$conn->close();
?>