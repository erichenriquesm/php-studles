<?php

const ALLOWED_FILES_TYPES = [
    'image/jpeg',
    'image/jpg',
    'image/png'
];

const UPLOAD_PATH = '../uploads/';

function init()
{
    try{
        if($_SERVER['REQUEST_METHOD'] != "POST") {
            echo 'Method not allowed';
            return;
        }

        $file = $_FILES['file'] ?? null;
        
        if(!$file || $file['error'] !== UPLOAD_ERR_OK) {
            echo 'Error to upload file';
            return;
        }

        $fileType = $file['type'];
        
        if(!in_array($fileType, ALLOWED_FILES_TYPES)){
            echo 'File type is not allowed';
            return;
        }


        if(!is_dir(UPLOAD_PATH)){
            mkdir(UPLOAD_PATH, 0777, true);
        }
        
        $tempFileName = $file['tmp_name'];
        $fileName = basename($file['name']);

        move_uploaded_file($tempFileName, UPLOAD_PATH . $fileName);
        
        echo 'File uploaded successfully';
    }catch(\Exception $e) {
        echo $e->getMessage();
    }

}

init();