<?php
    //cargar genero
    include '../../model/conectar.php';
    
    $sql = "SELECT * 
    FROM generos
    ORDER BY gen_nombre";
    $result = $conn->query($sql);

    include '../../model/desconectar.php';

    if(isset($_POST['pel_nombre']))
    {

    }
?>