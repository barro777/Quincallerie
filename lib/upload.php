<?php



function upload_image($_file,$target_file):bool{
    return move_uploaded_file($_file["Upload"]["tmp_name"], $target_file);
}




// Check if image file is a actual image or fake image

function valid_image(array $arrayError,$key,$target_file,$_file):void{
    
    if($imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION))){
        if (getimagesize($_FILES["Upload"]["tmp_name"])!== true) {
           $arrayError [$key]='fichier non valid';
        }elseif($_FILES["Upload"]["size"] > 500000) {
            $arrayError [$key]='fichier trop lourd';
        }elseif($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"){
            $arrayError [$key]='veiller revoir votre extention';
        }
    }
    
}





?>