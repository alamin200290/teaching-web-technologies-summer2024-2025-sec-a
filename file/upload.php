<?php

    if(isset($_POST['submit'])){
        //print_r($_FILES);

        $src = $_FILES['myfile']['tmp_name'];
        $ext = explode('.', $_FILES['myfile']['name']);
        $name = time().".".$ext[1];
        $des = 'upload/'.$name;

        if(move_uploaded_file($src, $des)){
            echo "Success";
        }else{
            echo "Error";
        }
    }




?>