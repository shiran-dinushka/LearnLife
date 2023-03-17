<?php

if(!empty($_GET['file'])){

    $fileName = basename($_GET['file']);
    $filepath = "../upload/".$fileName;

    if(!empty($fileName) && file_exists($filepath)){
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$fileName");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding: binary");

        readfile($filepath);
        exit;
    }else{

        echo "file not exists";
    }
}

?>