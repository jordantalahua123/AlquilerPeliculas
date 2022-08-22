<?php
    include '../../model/conectar.php';
    //numero de peliculas
    $sql = "SELECT count(pel_id) as total_peliculas FROM peliculas";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $total_peliculas = $row['total_peliculas'];
    //numero de socios
    $sql = "SELECT count(soc_id) as total_socios FROM socios";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $total_socios = $row['total_socios']; 
    include '../../model/desconectar.php';
?>