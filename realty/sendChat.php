<?php

    $conection = mysqli_connect("localhost", "root", "", "webChat");

    if(!$conection){
        echo"No se pudo establecer la conexion con el servidor";
    }

    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $message = $_POST['message'];

       // $sql2 = "INSERT INTO chat (name, message) VALUES ('$name', '$message')";
        //$execute = mysqli_query($conection, $sql2);

        try{
            $last_id = $conection->insert_id;
            $sql = ("INSERT INTO chat (id, name, message) VALUES ($last_id, '$name', '$message')");
            if( mysqli_query($conection,$sql)){
            echo "goot";
            }else{
                echo "Error: " . $sql . "" . mysqli_error($conection);
            }
        
        }
        catch(Exception $e){
            $error = $e->getMessage();
        }

    }

    header('Location: blog.php');
?>