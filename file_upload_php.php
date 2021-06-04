<?php

    $target_dir = "uploads/";

    //$fileToUpload[] = $_FILES["file_names"];

    $count = count($_FILES['file_names']['name']);
    //print_r($_FILES);
    
    echo $count;

    for($i = 0; $i<$count;$i++)
    {
        $tmpFilePath = $_FILES['file_names']['tmp_name'][$i];
        echo $tmpFilePath;

        $newFilePath = "./uploads/" . $_FILES["file_names"]["name"][$i];
        echo $newFilePath;
        if(move_uploaded_file($tmpFilePath, $newFilePath))
        {
            echo "Upload success";
        }
        else{
            echo "Upload Failed <br/>";
        }

    }

    //print_r($fileToUpload);



?>