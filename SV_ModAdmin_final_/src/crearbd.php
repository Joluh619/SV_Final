<?php
    $conn = new mysqli("db","root","Upslp-16","");

    $query = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = 'virtualesFinal'";
    $result = mysqli_query($conn,$query);

    $rows=mysqli_num_rows($result);

    if($rows != 0){
        //echo "si encontró algo";
        $conn->select_db('virtualesFinal');
    }else{
        
        //Se crea la base de datos si no existe
        $sql = 'CREATE DATABASE IF NOT EXISTS virtualesFinal';
        mysqli_query($conn, $sql);
        //Se selecciona la bd
        $conn->select_db('virtualesFinal');
        //Query de create table
        $sql2 = "CREATE TABLE usuarios (
            id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            usuario VARCHAR(50) NOT NULL UNIQUE,
            pass VARCHAR(255) NOT NULL
        )";
        $conn->query($sql2);
        
        $sql3 = "INSERT INTO usuarios (usuario, pass) VALUES ('jorge.jasso','123qwe!')";
        if($conn->query($sql3) === TRUE){
            //echo "Si metio el registro";
        }else{
            echo "Error: " . $sql . "<br>" . $conn->error;
            //echo "NENENENENEENNEEEEE";
        }
        //echo "Si la creo";
    }
    
    $conn->close();
?>